=== Psychological tests & quizes ===

Contributors: ustimenko  
Donate link: http://apsiholog.ru/psychological-tests/  
Tags: psychological, testing, test, quiz  
Requires at least: 3.2  
Tested up to: 4.0  
Stable tag: 0.6  
License: GPLv3  
License URI: http://www.gnu.org/licenses/gpl-3.0.html  

Create psychological tests/quizes with scales connected with results through simple formulas like "extraversion > 50%"

== Description ==

With the help of this plugin now you can create typical and advanced psychological tests (quizes, assessments).

Typical psychological test consists of **questions** and **answers**. A respondent answers all of the questions and gets **results**. This is how the box outside looks like.

Inside the box we also have **scales** each connected with the particular answer with **scores** and **results**, that are calculated with the help of **simple formulas** like: "extraversion > 50%". Where "extraversion" is a sum of respondent's scores from extraversion scale. We didn't invent anything new — all this has been already invented in 19th century.

Test answers, scales, results and categories are edited through **wordpress standard editors**, similar to categories editor. You can associate them in sidebar. Whether test questions, answers and formulas are edited with standard wordpress metaboxes, behind content. You can even reorder them if you like. At the top of content editor you have **button for quick access** to those metaboxes: Add New Questions, Edit Questions and Scores, Edit Formulas.

**Answers**  can be global to test — when all questions have the same answers. For example: "Yes", "No", "I'm not sure". Or you can use **individual answers** to add individual answer to each question. And the third option is to use global answers, but individualize their titles: not just "Yes", but "Yes, I do so and so", when you use it for the particular question. Some tests have this pattern.

As to **formulas** you can be sure — we have simple formula editor, that has buttons for each scale (with sum of it's scores) and allowed comparisions.

Tests are treated for WordPress like posts — they appear on home page and inside their categories pages if selected. But if you don't want your test to appear on home page you can uncheck **"Publish on the home page"** in "Publish" metabox and this particular test will not appear on homepage.

To minimize author's time we have **Quick Fill** for questions and scores. You can **quick fill questions from text** and they will fill appropriate fields. Same way you can **Quick Fill Scores** in many questions some answer+scale combination. 

Wp-testing localized in seven languages: English, Russian (native speaker), German, French, Dutch, Swedish and Bulgarian (native speaker). English, Russian and Bulgarian have good quality — others need review. You can easily add your language through excellent [Transifiex](https://www.transifex.com/projects/p/wp-testing/) service. **Translators** and *reviewers* are kindly welcome!

**Quality** and **compatibility** are taken really seriously. Plugin tested on [37 combinations](https://travis-ci.org/garex/wp-testing) of WordPress (from 3.2 to 4.0) and PHP (from 5.2 to 5.5) plus one custom combination for old MySQL storage engine (MyISAM). So you can be sure, that it will just work, even if you don't have  the latest WordPress or your hosting doesn't have the latest versions of PHP/MySQL. [Build status image](https://travis-ci.org/garex/wp-testing.svg?branch=develop) is available.

[![Build Status](https://travis-ci.org/garex/wp-testing.svg?branch=develop)](https://travis-ci.org/garex/wp-testing)

PS: **If something broken or doesn't work**, pls create new topic in ["Support" tab](https://wordpress.org/support/plugin/wp-testing)!

= Thank You Board =

* For Bulgarian translation thanks to Borry Semerdzhieva (borry.semerdzhieva@gmail.com)
* For German translation thanks to Sascha (info@newwaystec.com)


== Installation ==

1. Download plugin archive.
1. Unzip it.
1. Upload it to your plugins directory. It will create a 'wp-content/plugins/wp-testing/' directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Start with reviewing example Eysenck's Personality Inventory (EPI) test.
1. Or directly create your own test through Tests menu in admin area.

== Requirements ==

* WordPress version **3.2** or higher.
* PHP version **5.2.4** or higher.
* MySQL version **5.0** or higher.

== Screenshots ==

01. Test editing section with menu in admin
02. Test editing section. There are fast acces buttons like "add new questions" at the top of the page. The choise of answers and scales is available in the sidebar
03. Here we can see "Edit Questions and Scores" box where every scale has a sum of scores. Also we can add to each question individual answers
04. The "Quick Fill Scores" box is opened that allows us quickly enter scores from the questions separated by commas. "Add Individual Answers" box also opened but it tells us to use "Test Answers" in case when answers are same
05. Fast adding questions from text
06. Editing formulas
07. Ready test on the home page
08. The page with the description of the test, questions and answers
09. The button is desabled untill all questions are not answered
10. Get test results after all questions are answered
11. The results page
12. The result page contains both the result of the test and the scales that create a result
13. The example of the test without  scores. Some answers are individual and some are individualized
14. A test without scores is shown like a "Test is under construction". Answers titles are those that was entered

== Changelog ==


= 0.6 =
Individual answers

* Add individual answers feature
* Update locales for main languages
* Migrate existing tests on new questions-answers model
* Allow to individualize answers: custom global answer title for question
* Use "Test Categories" in admin menu to differ with post categories 


= 0.5.4 =
Update German translation


= 0.5.3 =
Add standard category to tests

* Update README about Bulgarian translation


= 0.5.2 =
Fix fatal error incompatibility with wordpress-seo plugin

* Adding Bulgarian translation


= 0.5.1 =
Add tags, improve formulas editor and docs

* Prefix screenhots by zeros
* Remove session stuff to avoid openbasedir bug
* Update compatible up to WP 4.0
* Swap formulas and results columns in editor
* Add tags to test


= 0.5 =
Localization and quick fill

* Localize to six languages with help of [Transifiex](https://www.transifex.com/projects/p/wp-testing/)
* Add understandable labels for no-questions/no-answers and other no-something cases in test editor
* Quick fill questions from text
* Quick fill scores from questions separated by commas
* Update docs and add screenshots


= 0.4.2 =
Fix pages disapperance and form formatting

* Fix pages disapperance
* Fix fill form (public) formatting conflict with wpautop (for example under Monaco theme)


= 0.4.1 =
Fix tests preview mode

* Not changing main WP query when in preview


= 0.4 =
Display tests in blog everywhere same as posts

* Display tests on homepage, in categories and other places just like posts
* Allow to hide individual tests from homepage by "Publish on the home page" setting at publish box
* Fix quickedit for posts
* Fix quickedit for tests by saving test part only in full edit mode
* Minimize possibility of "Max post vars" warning by minizing the number of hidden inputs 

= 0.3 =
Test plugin functionality in 37 combinations of WP and PHP and fix found problems

* Test under WordPress from 3.2 to latest 4.0 and PHP from 5.2 to 5.5
* Fix plugin under non-latest WP versions
* Add test's buttons only in plugin's test editor, not in post's editor
* Use more styled headers at results page
* Use dashicons in admin only on WP that knows about it (>=3.8)
* Allow empty source in formula (with migration)
* Fix questions adding when scales, results and answers checked

Non-latest WP versions fixes (programmer's language):

* Avoid deprecated function in formula
* Add build status image into readme
* Remove another not-existing column from wp_posts under WP 3.6
* Check if we are at test screen for WP 3.2
* Move styles and scripts in editor and passer into head to fix under WP 3.2
* Fix test delete under WP 3.2 by clearing records cache
* Remove 3rd unused param from save_post subscription
* Avoid WP_Post in Test Editor
* Avoid direct usage of WP_Post class
* Avoid direct usage of WP_Screen class
* Fix minor notice under old WP version
* Add type=text to all inputs to fix ugly inputs under old WPs


= 0.2.5 =
Fix test creation (empty scale sum broken)


= 0.2.4 =
Correctly uninstall plugin


= 0.2.3 =
Fix activation on PHP below 5.4


= 0.2.2 =
Update description to correct English version


= 0.2.1 =
Fix PHP 5.2 parse error (not affects latest PHP versions)


= 0.2 =
Connecting scales scores with results through formulas.

* Formulas parser undertands variables and comparision operators like "less", "more", "same", "not same", "and", "or"
* Formulas editor added with buttons of scales and comparision operators
* Show scale scores totals at the top of questions editor and on the formulas editor buttons
* Add shortcut buttons to the top of content editor: Add New Questions, Edit Questions, Edit Formulas
* Show test results calculated through formulas above above scales bars on the results page


= 0.1.4 =
Test passing error fixed

* Manual relashionships naming
* Misspell in one of tables names


= 0.1.3 =
Another plugin activation problems fixed

* Permissions on migrations directory
* Working under MySQL engine named MyISAM and in mixed InnoDB/MyISAM cases


= 0.1.2 =
Bump stable tag to apply previous hotfix on wordpress plugins


= 0.1.1 =
Plugin activation hotfix

* In initial release migrations dir taken from wordpress dir rather than be hardcoded.
Locally all was ok as always, but not on your wordpresses :(
* Upgrade notice added


= 0.1 =
Initial release

* Add shortcode for tests lists: wptlist
* Edit tests, answers (global), scales, results and categories through admin
* Edit tests questions and scores (question -> answer -> scale -> score value)
* Show test page, allowing to redefine it's template if needed
* Allow to send test form only when all questions selected
* Show test results by scales totals
* Add eysenck personality inventory example


= 0.0 =
* Init repo and files


== Upgrade Notice ==

= 0.5.2 =
Fix fatal error incompatibility with wordpress-seo plugin

= 0.4.2 =
Fix page disppearance and fill form broken formatting

= 0.4.1 =
Fix tests preview mode

= 0.3 =
Plugin now more stable under WP 3.2 to latest and PHP from 5.2 to 5.5

= 0.2.5 =
Test creation from scratch now should work

= 0.2.3 =
Plugin activation on PHP below 5.4 fixed

= 0.2.1 =
Results and formulas added (parse error fixed)

= 0.1.4 =
Test passing fatal error found and fixed

= 0.1.3 =
Plugin activation fatal error found and fixed

