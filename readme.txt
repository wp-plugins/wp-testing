=== Wp-testing ===

Contributors: ustimenko
Donate link: http://ustimen.co/
Tags: psychological, testing, test, quiz
Requires at least: 3.2
Tested up to: 3.9
Stable tag: 0.1.2
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Helps to create psychological tests.

== Installation ==

1. Download plugin archive.
1. Unzip it.
1. Upload it to your plugins directory. It will create a 'wp-content/plugins/wp-testing/' directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.

== Requirements ==

* WordPress version **3.2** or higher.
* PHP version **5.2.4** or higher.
* MySQL version **5.0** or higher.

== Changelog ==


= 0.0 =
* Init repo and files


= 0.1 =
Initial release

* Add shortcode for tests lists: wptlist
* Edit tests, answers (global), scales, results and categories through admin
* Edit tests questions and scores (question -> answer -> scale -> score value)
* Show test page, allowing to redefine it's template if needed
* Allow to send test form only when all questions selected
* Show test results by scales totals
* Add eysenck personality inventory example


= 0.1.1 =
Plugin activation hotfix

* In initial release migrations dir taken from wordpress dir rather than be hardcoded.
Locally all was ok as always, but not on your wordpresses :(
* Upgrade notice added

= 0.1.2 =
Bump stable tag to apply previous hotfix on wordpress plugins


== Upgrade Notice ==

= 0.1.1 =
Plugin activation fatal error found and fixed. Please upgrade, deactivate and active plugin.

