<?php

/**
 * Gets questions of test and transforms them into steps.
 * Where steps include questions. They can include 1 questions, all questions or per sections.
 * Another strategies also possible: not all questions or all.
 *
 * In the result we need all possible steps filled with numbers, titles and questions.
 * Also we need to know current step.
 *
 * To get questions we need test (not just questions from it).
 * To know current step we need all answered questions (and just them — can get from passing).
 */
abstract class WpTesting_Component_StepStrategy
{

    /**
     * @var WpTesting_Model_Test
     */
    protected $test;

    /**
     * @var WpTesting_Model_Question[]
     */
    protected $answeredQuestions;

    /**
     * @var WpTesting_Model_Step[]
     */
    private $steps = array();

    /**
     * @var WpTesting_Model_Step
     */
    private $currentStep = null;

    /**
     * @var boolean
     */
    private $isShowStepsCounter = false;

    public function __construct(WpTesting_Model_Test $test = null, fRecordSet $answeredQuestions = null)
    {
        $this->test              = $test;
        $this->answeredQuestions = $answeredQuestions;
        $emptyQuestions          = fRecordSet::buildFromArray('WpTesting_Model_Question', array());
    }

    /**
     * @param WpTesting_Component_StepStrategy $another
     * @throws InvalidArgumentException
     * @return self
     */
    public function fillFrom(WpTesting_Component_StepStrategy $another)
    {
        $this->test              = $another->test;
        $this->answeredQuestions = $another->answeredQuestions;

        if (is_null($this->test)) {
            throw new InvalidArgumentException('Empty test provided!');
        }
        if (is_null($this->answeredQuestions)) {
            throw new InvalidArgumentException('Empty answered questions provided!');
        }

        return $this;
    }

    /**
     * @return WpTesting_Model_Step
     */
    public function getCurrentStep()
    {
        if (!is_null($this->currentStep)) {
            return $this->currentStep;
        }
        $this->fillSteps()->setupTotalsAndNumbers();
        if (is_null($this->currentStep)) {
            $this->currentStep = new WpTesting_Model_Step('', $emptyQuestions, 1, true, true);
        }
        return $this->currentStep;
    }

    /**
     * @return string
     */
    public function getStepsCounter()
    {
        if (!$this->isShowStepsCounter) {
            return '';
        }
        $step = $this->getCurrentStep();
        if ($step->isLast()) {
            return '';
        }
        return sprintf(__('%1$d out of %2$d', 'wp-testing'), $step->getNumber(), $step->getTotal());
    }

    public function getQuestionsCount()
    {
        return $this->test->buildQuestions()->count();
    }

    public function getAnsweredQuestionsCount()
    {
        return $this->answeredQuestions->count();
    }

    /**
     * @param WpTesting_Model_Step $step
     * @param string $isCurrent
     * @return self
     */
    protected function addStep(WpTesting_Model_Step $step, $isCurrent = true)
    {
        $this->steps[] = $step;
        if ($isCurrent) {
            $this->currentStep = $step;
        }
        return $this;
    }

    protected function enableStepsCounter()
    {
        $this->isShowStepsCounter = true;
        return $this;
    }

    /**
     * @return self
     */
    abstract protected function fillSteps();

    /**
     * @return self
     */
    private function setupTotalsAndNumbers()
    {
        $total = count($this->steps);
        foreach ($this->steps as $i => $step) {
            $step->setTotalAndNumber($total, $i + 1);
        }
        return $this;
    }

}