=== Cornify for WordPress ===
Contributors: BandonRandon
Donate link: http://bandonrandon.wordpress.com
Tags: cornify, unicorns, rainbows, april fools
Requires at least: 2.9
Tested up to: 3.1
Stable tag: 1.0

This plugin cornifys your website when the user is idol.

== Description ==

This plugin will cornify (cornify.com) your website. If the user doesn't interact with the site for 5 seconds (default) the site will show unicorns
until they interact with the site again. This was developed primarily as an april fools joke.

== Installation ==

Just activate the plugin and if you don't interact with your site you should see unicorns. There is no control panel, at least for the moment.
See FAQ for manual options. When you're done with it and had enough, just deactivate it.

== Frequently Asked Questions ==

= The plugin doesn't seem to work. Do I need anything special in my theme? =

Yes, your theme must have a call to `php wp_footer(); ?>` at the very bottom right before the `` tag.

= Can I change the interval of the unicorns? =

Yes, you can change `var idol_time = 5000;` in utils.js to the number of (milli)seconds you would like before unicorns start showing up.

= Can I make this plugin active only for one day? =

Yes, see cornify-wordpress.php and comment out the lines it suggest.

== Screenshots ==

1. A cornified site

== Changelog ==

= 1.0 =
* Just launched.

== Upgrade Notice ==

= 1.0 =
First release