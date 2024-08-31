=== Newsletters - Contact Form 7 Subscribers ===

Capture email subscribers from the <a href="https://wordpress.org/plugins/contact-form-7/">WordPress Contact Form 7 plugin</a> forms into your <a href="https://tribulant.com/extensions/view/28/contact-form-7-subscribers">WordPress Newsletter plugin</a> with ease.

See the <a href="https://tribulant.com/docs/wordpress-mailing-list-plugin/7574/">online documentation</a> for more information.


== Changelog ==

= 1.7 =
* FIX: Resolved an issue that caused this addon to not work.

= 1.6 =
* FIX: PHP 8.0 activation error.

= 1.5 =
* IMPROVE: Add Yes or No values in system email, instead of 1 and 0.
* IMPROVE: Notice: wpcf7_add_shortcode is deprecated.
* IMPROVE: Deprecated constructor / PHP7 compatibility.
* FIX: Contact Form 7 email notification not sending with Newsletters plugin notification turned on.

= 1.4 =
* ADD: Plugin settings link on Plugins page and Newsletters > Extensions settings.
* ADD: Compatibility with the new Contact Form 7 version 4.2.

= 1.3 =
* ADD: Let users choose their mailing lists to subscribe to.
* ADD: Support for radio, checkbox and select drop down custom fields.
* IMPROVE: Log errors to Newsletter plugin log file.
* FIX: Contact Form 7 from address is overridden by Newsletter plugin from address.
* FIX: Contact Form 7 honeypot plugin conflict.
* FIX: Incorrect email slug from form breaks form.

= 1.2 =
* IMPROVE: Dynamic plugin name, path and base.
* IMPROVE: Change get_bloginfo() functions to their respective functions.
* IMPROVE: Integrate Contact Form 7’s new private properties.
* IMPROVE: Check if wpMailPlugin exists before initializing.
* FIX: Ampersand (&) in newer PHP versions leaves the contact form “Newsletters” pane blank.

= 1.1 =
* ADD: Automatic updates/upgrades in WordPress.
* FIX: JavaScript issue in the tag preventing subscribes.
* FIX: Validation on all custom fields preventing subscribes.
