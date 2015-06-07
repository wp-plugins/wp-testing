=== Psychological tests & quizes ===

Contributors: ustimenko, rezaamaleki, cristipere, osfans, chrispeiffer, jacha, ilariarizzo, borrypsy, coach2talk, ikurtuldu  
Donate link: https://goo.gl/igulor  
Tags: psychological, testing, test, quiz  
Requires at least: 3.2  
Tested up to: 4.2.2  
Stable tag: 0.13  
License: GPLv3  
License URI: http://www.gnu.org/licenses/gpl-3.0.html  

Create psychological tests/quizes with scales connected with results through simple formulas like "extraversion > 50%"

== Description ==

With the help of this plugin now you can create typical and advanced psychological tests (quizes, assessments).

Typical psychological test consists of **questions** and **answers**. A respondent answers all of the questions and gets **results**. This is how the box outside looks like.

Inside the box we also have **scales** each connected with the particular answer with **scores** and **results**, that are calculated with the help of **simple formulas** like: "extraversion > 50%". Where "extraversion" is a sum of respondent's scores from extraversion scale. We didn't invent anything new — all this has been already invented in 19th century.

> If you like the plugin, feel free to rate it (on the right side of this page) or [donate via PayPal](https://goo.gl/igulor). Thanks a lot! :)

Test answers, scales, results and categories are edited through **wordpress standard editors**, similar to categories editor. You can associate them in sidebar. Whether test questions, answers and formulas are edited with standard wordpress metaboxes, behind content. You can even reorder them if you like by drag-n-drop. At the top of content editor you have **button for quick access** to those metaboxes: Add New Questions, Edit Questions and Scores, Edit Formulas. If you want more control then you are allowed to add to them not allowed out-of-the box HTML tags like: headers, lists, images, hr and "read more" tag taken from post editor.

**Answers**  can be global to test — when all questions have the same answers. For example: "Yes", "No", "I'm not sure". Or you can use **individual answers** to add individual answer to each question. And the third option is to use global answers, but individualize their titles: not just "Yes", but "Yes, I do so and so", when you use it for the particular question. Some tests have this pattern.

As to **formulas** you can be sure — we have simple formula editor, that has buttons for each scale (with sum of it's scores) and allowed comparisions.

Tests are treated for WordPress like posts — they appear on home page and inside their categories pages if selected. But if you don't want your test to appear on home page you can uncheck **"Publish on the home page"** in "Publish" metabox and this particular test will not appear on homepage.

To minimize author's time we have **Quick Fill** for questions and scores. You can **quick fill questions from text** and they will fill appropriate fields. Same way you can **Quick Fill Scores** in many questions some answer+scale combination.

Respondent will get **results** on it's own individual passing page, which will allow share it. Logged in respondent can see own results in admin area above the "Profile" page. There will be table with columns like: passing number, link, test, scales, results and date. It's possible to search/sort by test and date columns.

**Passings** are saved in DB with respondent's ip and device unique identifier. They are shown at "Respondents' results" table under "Tests" menu. It allow to see if someone will have many passings from same computer/smartphone/another device, which scales/results respondent have for concrete passing and ability to open it from there. If respondent was a logged in user — then you will see it in "Username" column with a link to profile. "Respondents' results" can be searched/sorted by most of it's columns. You can setup which columns you want to see there and how many passings per page you want to see.

**Test** page can be customized: reset answers on "Back" button, use your own caption for "Get Test Result" button, allow multiple answers per question, show percentage of answered questions and show one question per page.
**Results** page also can be customized: when you need to show/hide scales or test description on it; when you want to show scales chart or sort scales by scores sum.

Wp-testing localized into thirteen languages: English, German, French, Dutch, Swedish, Bulgarian, Italian, Turkish, Chinese, Brazilian, Spanish, Persian and Russian. English, French, Dutch, Bulgarian, Italian, Turkish, Chinese, Brazilian, Spanish, Persian and Russian have good quality (native speakers) — others need review. You can easily add your language through excellent [Transifiex](https://www.transifex.com/projects/p/wp-testing/) service. **Translators** and *reviewers* are kindly welcome! See http://wp-translations.org/join/ for instructions.

**Quality** and **compatibility** are taken really seriously. Plugin tested on [44 combinations](https://travis-ci.org/garex/wp-testing) of WordPress (from 3.2 to 4.2) and PHP (from 5.2 to 5.5) plus two custom combinations for old MySQL storage engine (MyISAM) and with few popular plugins. So you can be sure, that it will just work, even if you don't have  the latest WordPress or your hosting doesn't have the latest versions of PHP/MySQL. [Build status image](https://travis-ci.org/garex/wp-testing.svg?branch=develop) is available.

[![Build Status](https://travis-ci.org/garex/wp-testing.svg?branch=develop)](https://travis-ci.org/garex/wp-testing)

PS: **If something broken or doesn't work**, pls create new topic in ["Support" tab](https://wordpress.org/support/plugin/wp-testing)! Good support topic describes problem and have WP version and other plugins that you have in it. If you want some feature — also create topic. Donations as money or links to our site are welcome.

= Thank You Board =

* For Bulgarian translation thanks to Borry Semerdzhieva <borry.semerdzhieva@gmail.com>
* For German translation thanks to Sascha <info@newwaystec.com>
* For Italian translation thanks to Ilaria Rizzo <dott.rizzo.ilaria@gmail.com>
* For Turkish translation thanks to Islam Kurtuldu
* For Dutch translation thanks to Jacha Heukels <info@orthomanueeldierenarts.nl>
* For French translation thanks to Christophe Peiffer <chris.peiffer@gmail.com>
* For Chinese translation thanks to Kyle Wang — https://github.com/osfans
* For Brazilian translation thanks to Cristiano Pereira da Conceição <cristiano@cristiano-coach.com.br>
* For Spanish translation thanks to Jon Ca — https://facebook.com/joncast
* For Persian (Iran) translation thanks to Reza Maleki <rezaa.maleki@gmail.com>


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
02. There are fast access buttons like "Add New Questions" at the top of the page. Test page and results page can be customized from sidebar
03. Here we can see "Edit Questions and Scores" box where every scale has a sum of scores. Also we can add to each question individual answers. The choise of answers and scales is available in the sidebar. They can be reordered by drag-n-drop.
04. The "Quick Fill Scores" box is opened that allows us quickly enter scores from the questions separated by commas. "Add Individual Answers" box also opened but it tells us to use "Test Answers" in case when answers are same
05. Fast adding questions from text
06. Editing formulas
07. The example of the test without scores. Some answers are individual and some are individualized
08. Respondents’ test results in admin area. Test link will open test in edit mode and view link allow to see test result
09. User see own tests results in admin area
10. Ready test on the home page
11. The page with the description of the test, questions and answers
12. Unanswered questions are highlighted to respondent
13. Get test results after all questions are answered
14. The result page on it`s own URL contains both the result of the test and the scales that create a result
15. Scale description with "more..." text closed
16. Scale description with "more..." text opened (after clicking on "more" link)
17. A test without scores is shown like a "Test is under construction". Answers titles are those that was entered
18. Test results with scales chart. Hovered scale shows it`s value and title in dynamic tag
19. In case when scales has different length (possible max total) they are shown as percents
20. Multiple answers per question are also possible
21. One question per page also allowed. On first page we see test description, "Next" button and pages counter
22. On second page description not shown
23. On last page counter not shown and button changes back to "Get Test Results"

== Changelog ==


= 0.13 =

Respondent passings for user and admin with improved usability   

* Respondent can view own passings in wordpress admin area
* Significantly improved respondents passings: search/sort/toggle by columns and setup items per page
* Add Persian (Iran) locale
* Fix test page in Internet Explorers before 9.0 

Internal improvements:

* Speed-up build, which will allow to test new features faster
* Rename passing columns in WP style, which is just perfectionism, but who knows

= 0.12.1 =

Improve questions fill usability by highlighting non-answered

* Remove disabled button state and highlight to respondent non-answered questions
* Make required attributes compatible with screen-readers
* Make sure new validation is compatible with old browsers

Internal improvements:

* Upgrade jQuery for old WordPress at form fill
* Fix tests under old WP by using only extraversion scale (1st always)
* Add more extension points for fields addon


= 0.12 =

Speed-up tests saving, improve respondents results' and add new locale

* Radically speed-up saving of tests with many scores (many questions, answers and scales)
* Improve respondents results' table look by making it non-fixed
* Add Spanish locale
* Update tests to the latest WP version
* Add extension points for fields addon


= 0.11.4 =
Fix content comparing in duplicate protection

You should upgrade to this version only if:

* There are no questions on test page
* Test's content text is small (less than 255 chars)
* You have plugin that also adds something to content


= 0.11.3 =
Fix strict settings catchable error in steps

Upgrade notice:

* You should upgrade to this version only if nothing works on test page and your PHP error settings are strict 


= 0.11.2 =
Fix many answers on many steps

* Was stuck on 2nd step


= 0.11.1 =
Improve steps generating (for sections addon)

Upgrade notice:

* You should upgrade to this version only if you have sections addon


= 0.11 =
Add one-per-page questions and fix annoing database collation issue

* Add option when respondent could read only one question at a time on page, to avoid to see through pattern
* Fix annoing database latin1 collation problem for non-latin languages when question marks shown instead of text


= 0.10.1 =

Fix incompatibility with themes/plugins that changes post form attributes

* Use more robust way to pack metadata in edit form fields
* All these dances are to minify fields numbers

Upgrade notice:

* You shouldn't upgrade to this version if all is working
* Only if it was working, then you install something (another plugin/theme) and all was broken 


= 0.10 =

Save respondent in results and add addons base

* Save respondent from logged in user
* Add external addons base
* Test minimum score error


= 0.9.5 =

Update locales, minor fixes and cleanup download file

* Add Chinese and Brazilian locales
* Fix activation under windows
* Fix taxonomy sortable containers look
* Fix plugin uninstallation
* Remove excessive and old files from download zip


= 0.9.4 =

Add more math operators, native FR lang and improve scales' chart #2  

* Avoid rotating text labels when we have too many scales
* Show mini-annotations like abbrevirations always near data values
* Make annotations as popups instead of tags
* Improve one-scale case
* Translate update reviewed locale for FR lang
* Add more math operators: "+*/"
* Enable advanced options for default test


= 0.9.3 =

Improve scales' chart

* Use ratio (percents) when scales lengths differs
* Rotate text labels to 45 degrees when we have too many scales


= 0.9.2 =

Fix scale`s max calc when in question we have few answers with scores


= 0.9.1 =

Allow respondent to select multiple answers per question on test page


= 0.9 =

Scales chart, progress percentage, sorting and respondents' results

* Visualize scales values with chart (at the same time scales can be hidden)
* Show percentage of answered questions in browser title
* Allow to sort test's answers/scales/results manually and scales by scores sum (implies from more to less)
* Add simple "Respondents' tests results" table in admin area
* Improve scales/results descriptions: allow more HTML tags (headers, lists, images and hr) and add support for "read more"
* Translate new strings and update reviewed locales for IT, NL and BG langs

Fixes:

* Fix results getting in non-published yet test (for example in preview mode)
* Fix questions/scores editor width when test has too many scales

Internal improvements:

* Research and fix stable continious integration fails
* Move answers input inside labels (will improve rendering on some theme)
* Add semantic CSS classes to scales/results, for example: "result result-id-11 result-slug-result-phlegmatic result-index-0 title"
* Add placeholders to questions form
* Pass data to javascript in more stable way


= 0.8.1 =

Fix external library and update translations

* Fix external library to allow uppercased table names
* Update translations (Dutch now native)


= 0.8 =
Add test page settings

* Allow to reset answers and customize button caption
* Save user agent in passing
* Update translations

Internal improvements:

* Fix attachment URLs
* Add CSS class to body on passing pages
* Exit after passing redirect


= 0.7.1 =
Fix bad external library version


= 0.7 =
Give each passing own URL to allow sharing and add two result page options

* Save passings in DB and redirect to them by URLs (with client's ip and device uuid)
* Add result page options for scales and test description
* Add Turkish translation
* Speed-up plugin by not updating rewrite rules everytime
* Fix conflict with scroll-triggered-box plugin
* Update translations

= 0.6.4 =
Italian translation added


= 0.6.3 =
Fix featured image incompatibilities with Jetpack shortcode module


= 0.6.2 =
Inherit post's CSS classes onto test


= 0.6.1 =
Fix apostrophe problem (slashes) and update tests to be compatible to WP 4.1


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

= 0.7.1 =
Fix bad external library version

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

