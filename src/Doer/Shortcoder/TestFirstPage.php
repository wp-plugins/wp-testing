<?php

class WpTesting_Doer_Shortcoder_TestFirstPage extends WpTesting_Doer_Shortcoder
{

    protected function getData(WpTesting_Model_Shortcode $shortcode)
    {
        $data = parent::getData($shortcode);

        $passer = new WpTesting_Doer_TestPasser($this->wp);
        $data['content'] = $passer->renderOutside($data['test']);

        return $data;
    }

    protected function createShortcode(array $attributes)
    {
        return new WpTesting_Model_Shortcode_TestFirstPage($this->wp, $attributes);
    }

    protected function chooseTemplate(WpTesting_Model_Shortcode $shortcode)
    {
        return 'Shortcode/test_first_page';
    }
}
