=== Psychological tests & quizes ===

Contributors: ustimenko  
Donate link: http://apsiholog.ru/psychological-tests/  
Tags: psychological, testing, test, quiz  
Requires at least: 3.2  
Tested up to: 3.9  
Stable tag: 0.2.1  
License: GPLv3  
License URI: http://www.gnu.org/licenses/gpl-3.0.html  

Create psychological tests/quizes with scales connected to results through simple formulas like "extraversion > 50%"

== Description ==

With help of this plugin you now can create typical and advanced psychological tests (quizes, assessments).

Typical psychological test consists of questions and answers. Respondent chooses all answers and gets results. This is outside the box.

Inside we have also scales connected to each answer with scores and results, that are calculated with help of simple formulas like: "extraversion > 50%". Where "extraversion" is a sum of respondent's scores from extraversion scale. We didn't invented the wheel — all this already have been invented in 19th century. 

Test answers, scales, results and categories are edited through wordpress standard editors, similar to categories editor. You can associate them in sidebar. Whether test questions, answers and formulas are edited with standard wordpress metaboxes, behind content. You even can reorder them if you like. At the top of content editor you have button for quick access of those metaboxes: Add New Questions, Edit Questions, Edit Formulas.

Regarding formulas you can be calm — we have simple formula editor, that have buttons for each scale (with sum of it's scores) and allowed comparisions.

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

== Changelog ==

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

= 0.2.1 =
Results and formulas added (parse error fixed)

= 0.1.4 =
Test passing fatal error found and fixed

= 0.1.3 =
Plugin activation fatal error found and fixed

