=== reGenerate Thumbnails Advanced ===
Contributors: turcuciprian
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=MU4RJNNF74QKY
Tags: thumbnail, thumbnails, regenerate , easy, day, week, month, advanced, easy, intuitive, media, oneclick, singleclick, image, images, pdf
Requires at least: 4.0
Tested up to: 4.9
Stable tag: 1.5.2.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Description: A plugin that makes regenerating thumbnails even easier than before and more flexible, removing unused thumbnails of existing files.



== Description ==

Check out [Easy Countdown Timer](https://wordpress.org/plugins/easy-countdown-timer/) - Other plugins from us

[FREE FEATURE REQUESTS](https://docs.google.com/forms/d/e/1FAIpQLScWv1uF1uoSE-TIhZLWHb5idHpyN8CAhlmvL9RZp7jnSV-ndg/viewform?usp=sf_link)
[Report a BUG](https://docs.google.com/forms/d/e/1FAIpQLSeqaCjwj2vdn6kK-XmBJk_rW1OAHsBh2Zjq7hKVDUYv-RkRFA/viewform?usp=sf_link)


Quick Tutorial:

https://www.youtube.com/watch?v=a5F5OsWZC28

A plugin that makes regenerating thumbnails even easier than before and more flexible.
If you install a new theme, it might have different image sizes it wants to use. those image sizes are cropped and resized into thumbnails only when you upload new images. So what happens with your old images?
the ones you already uploaded? They need to be regenerated, this is what this plugin does. It takes each image and generates the thumbnails for each and every one of them.You have the ability to regenerate thumbnails for a aspecific image
by cicking a added button on the media page. You will not be redirected to another page, everything happens on that page with REST api and ajax.


Features:

*   Removes ( cleans up ) the thumbnails of the existing images that are no longer of any use (since version 1.5.2 )
*   You can select a period in time for the images to be regenerated from
*   The period is last day, last week, last month or all
*   Clean simple interface where you have a progress bar showing you the percentage of images regenerated
*   You get to see the total number of images affected by your period, as well as the images affected so far when processing
* You can regenerate individual image withouth navigating away from the page, everything happening on the media page with 1 click of the image you want to modify
* plugin is available for translation in any language with the rta text domain.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload regenerate-thumbnails-advanced directory to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Can I regenerate just a few images =

You have the option to select from: all, past day, past week, past month

= What happens if I close the page and the script is loading? =

The script stops, it does not run in the background

== Screenshots ==

1. The plugin page where it all happens
2. View of the dropdown options
3. Where you find everything
4. From - To (between dates) Option

== Changelog ==

= 0.7 =
* The first upload of the plugin

= 0.8 =
*Shows errors
*GD library error missing library present
*added jquery ui images for
*added jquery ui min css file
*removed the incrementation of processed images if there are none (it was showing one was being processed when it wasn't)

= 0.8.1 =
*images did not get added in the previous version. Neither did the css file for jquery ui

= 0.8.2 =
*log section showing what's been processed (image name)

= 0.8.2.1 =
*Images processed gets updated on regenerate request (it was frozen before if no images where available to be processed)
*Added a extra image

= 0.8.2.2 =
*Added a "no js or js error" message to the page if it's the case

= 0.8.2.3 =
*Progress and errors aligned with containers
*javascript changed so that it shows processing for errors when processing starts

= 0.8.2.4 =
*Added time (in seconds) to each processed image - You can see how long each image took
*Error log status changes at the end from Processing to "No errors" if there are no errors.

= 0.8.2.5 =
*Added Settings link in plugins info page
*Renamed submenu page to Regenerate Thumbnails under Settings

= 0.8.2.6 =
*Added the possibility to choose a start and end date from where to regenerate the thumbnails from
* Added new style
* Added datepickers

= 0.8.2.7 =
* Fixed a wp_debug notice bug
* Fixed a js issue

= 1.0 =
This version changes the style and adds a bit of functionality to the general settings (a date start-end option to choose from)

= 1.0.1 =
nothing that affect the previous data is changed. Update is save

= 1.0.2 =
nothing that affect the previous data is changed. Update is save

= 1.0.3 =
nothing that affect the previous data is changed. Update is save

= 1.1 =
Database field is saved someplace else now. It needs to be configured again. Basically just go into settings, click to activate and click save.

=1.1.2=
Important bugfixes

=1.1.3=
Important bugfixes

= 1.3.2 =
Reverted back to manual regeneration version. No more on the fly stuff

= 1.3.2.2 =
Removed donate button

= 1.3.3 =
Requests are being done trough REST API's now

= 1.4 =
Added regenerate Thumbnails button to regenerate individual thumbnail

= 1.4.1 =
Added tutorial on generate page.

= 1.4.2 =
Updated some tags, no functionality changed

= 1.4.2.1 =
Added freemius funtionality

= 1.4.3.2 =
Removed stats, added donate button

= 1.4.6 =
Removed donate button

= 1.5.0 =
Added a notification message with a link when a theme is switched

= 1.5.1 =
Fixed a fatal error bug conflicting with Contact Form Maker

= 1.5.1.1 =
Added donate button

= 1.5.2 =
Removes (cleans up ) thumbnails that are not in use of existing images before it regenerates them.

= 1.5.2.1 =
Fixed a space bug.

= 1.5.2.2 =
Fixed a javascript bug, made it work again, as it wasn't before. Removed the "plugin for sale ad, removed the donate button"

= 1.5.2.3 =
Fixed a php version incompatibility bug

== Upgrade Notice ==

= 1.4.2.1 =
Changed tags again, testing.

= 1.4.3 =
Made the plugin translate ready

= 0.7 =
No issues have been detected since this is the first version that's out there. Please report any issues

= 0.8 =
No issuse with this version that require attention

= 0.8.1 =
This is a very minor change . Practically fixing the previous change incomplete commit

= 0.8.2 =
No issuse with this version that require attention

= 0.8.2.1 =
No issuse with this version that require attention. Small update change

= 0.8.2.2 =
No issuse with this version that require attention. Small update change. It's basically a feature, so unless you want it, the older version works great.

= 0.8.2.3 =
No issuse with this version that require attention. Small update change. It's basically a feature, so unless you want it, the older version works great.

= 0.8.2.4 =
No issuse with this version that require attention. Small update change. It's basically a feature, so unless you want it, the older version works great.

= 0.8.2.5 =
No issuse with this version that require attention. Small update change. It's basically a feature, so unless you want it, the older version works great.

= 0.8.2.6 =
This version changes the style and adds a bit of functionality to the general settings (a date start-end option to choose from)

= 0.8.2.7 =
No issuse with this version that require attention. Small update change. It's basically a feature, so unless you want it, the older version works great.
fixes some js issues and ajax issues. it's recommended to update

= 1.0 =
This version changes the style and adds a bit of functionality to the general settings (a date start-end option to choose from)

= 1.0.1 =
nothing that affect the previous data is changed. Update is save

= 1.0.2 =
nothing that affect the previous data is changed. Update is save

= 1.0.3 =
nothing that affect the previous data is changed. Update is save

= 1.1 =
Database field is saved someplace else now. It needs to be configured again. Basically just go into settings, click to activate and click save.

=1.1.2=
Important bugfixes

=1.1.3=
Important bugfixes

=1.1.4=
Extra bugfixes

=1.1.5=
nothing effected in db

=1.1.6=
nothing effected in db

=1.1.7=
nothing effected in db

=1.1.8=
nothing effected in db

=1.1.9=
nothing effected in db

= 1.2.3 =
Added functionality

= 1.3 =
Added functionality

= 1.3.2 =
 Database value from the previous version, irrelevant.

 = 1.3.2.2 =
 Does not impact functionality

 = 1.3.3 =
 Requests are being done trough REST API's now

 = 1.4.3 =
Does not impact functionality

= 1.4.6 =
Does not impact functionality

= 1.5.0 =
Does not impact functionality

= 1.5.1 =
Does not impact functionality

= 1.5.1.1 =
nothing effected in db

= 1.5.2 =
nothing effected in db

= 1.5.2.1 =
nothing effected in db

= 1.5.2.2 =
nothing effected in db

= 1.5.2.3 =
nothing effected in db
