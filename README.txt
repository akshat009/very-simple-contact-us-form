=== Very Simple Contact Us Form ===
Contributors: developerakshat
Donate link: #
Tags: contact,contact form, email, database, exportcsv
Requires at least: 5.8
Tested up to: 7.0
Requires PHP: 7.4
Stable tag: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

simple contact us form with mail and database storing functionality,and export to csv option

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `very-simple-contact-us-form.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Screenshots ==

1. screenshot-1.png
2. screenshot-2.png
3. screenshot-3.png

== Changelog ==

= 1.0.1 =
* Security fix: resolved a SQL injection vulnerability in the admin edit screen by using a properly prepared query.
* Security fix: added capability checks to the AJAX edit, delete, and update handlers to prevent unauthorized access by low-privileged users.
* Security fix: replaced hardcoded database table references with the configured WordPress table prefix.
* Fix: corrected the frontend stylesheet and validation script URLs so they load correctly when the [contactus] shortcode is used.
* Fix: frontend form validation now binds correctly since the validation script loads after the form markup exists in the DOM.
