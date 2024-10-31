=== scrollup ===
Contributors: midori
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=M85LQ4UKGGNQU
Tags: scroll up, top, scroll, arrow, navigation
Requires at least: 3.4
Tested up to: 3.8.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Shortcode plugin [retour] for a unified link to top style.

== Description ==

This is just a very simple plugin to have a unified "back to top" button / link throughout your whole blog. Juste put [retour] whenever you want the link to the top to appear.

== Installation ==

1. Unzip scrollup.zip
2. Upload the `scrollup` folder to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Place [retour] as many time as you want in your posts and pages.

== Frequently Asked Questions ==

= Can I change the image? =

Sure. Just replace the arrow.png file in the plugin's folder by your own arrow.png.

= It does not work in xyz browser =

I suggest changing slightly the code of your header. After the `<body>` tag, look for the following code: `<a href="<?php echo home_url(); ?>">`, and change it for `<a href="<?php echo home_url(); ?>" name="top">`.

= You added shortcodes arguments? Which ones? =
You can now indeed use these args to modify the comportment of the plugin:
* ancrage: anchoring point, default is top. You can substitute an anchor point name, for example if you only want it to go up to the search box, and the search box name or id is sbox, just use `ancrage="sbox"` in the shortcode
* laimg: image as link, default is 1 (true). You can turn it to 0 (false) if you only want text and no image in the link
* lalt: alt text of the image / link, default is `&#9660; Sommet`. Aka a triangle pointing up and the word "top" in French. You could use a big ^, an arrow (by its ascii code), ...
* lavant: what comes before the link, default is `<p class="thescrollup">`. Change it to fit your post / CSS / ...
* lapres: what comes after the link, default is `</p>`. Change it to go with lavant.

= Give me an example, please? =

All right: `[retour ancrage="sbox" lavant="" lapres="<br />" laimg="FALSE" lalt="&uarr;"]` will create a "text" arrow pointing to the search box named sbox, with just a line break after it.

== Changelog ==

= 1.1 =
* Verification of compatibility
* Adding the shortocde arguments to make it easier.

= 1.0 =
* First version


== Upgrade Notice ==

= 1.1 =
Added arguments to the shortcode so as to customise the result.