=== Cart REST API for WooCommerce - CoCart Lite === 
Contributors: sebd86, cocartforwc, ajayghaghretiya, skunkbad, sefid-par, mattdabell, joshuaiz, dmchale
Tags: woocommerce, cart, rest, rest-api, JSON, session
Donate link: https://www.buymeacoffee.com/sebastien
Requires at least: 5.4
Requires PHP: 7.0
Tested up to: 5.7
Stable tag: 2.8.4
WC requires at least: 4.3
WC tested up to: 5.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

A REST API designed to handle the frontend of WooCommerce via your headless store.

== Description ==

### CoCart: The #1 REST API that handles the frontend of WooCommerce.

[CoCart](https://cocart.xyz/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart) handles the shopping cart in any modern framework of your choosing. No local storing required. Powerful and developer friendly ready to build your headless store, **without the need to build an API**.

CoCart gives you a true REST API experience for building a headless store powered by WooCommerce. It's lightweight and adds functionality without the bloat. This is the plugin you've been waiting for, and it will make you rethink about using any other API out there.

Don't take my word for it. Checkout the testimonials left by others.

## Testimonials - Developers love it

CoCart, in my opinion, is the best frontend REST API for WooCommerce. Don’t just take my word for it though:

Amazing Plugin. I’m using it to create a react-native app with WooCommerce as back-end. This plugin is a life-saver! [Daniel Loureiro](https://wordpress.org/support/topic/amazing-plugin-1562/)

This plugin saved me tones of work and it is working amazingly! The plugin author provides fast and high quality support. Well done! [@codenroll](https://wordpress.org/support/topic/great-plugin-with-a-great-support-7/)

Thanks for doing such a great work with this! Works exactly as expected and CoCart seems to have a nice community around it. The founder seems really devoted and that’s one of the key things for a plugin like this to live on and get the right updates in the future. We just got ourselves the lifetime subscription. [Mighty Group Agency](https://wordpress.org/support/topic/awesome-plugin-4681/)

This plugin works great out of the box for adding products to the Woo cart via API. The code is solid and functionality is as expected, thanks Sebastien! [Scott Bolinger, Creator of Holler Box](https://wordpress.org/support/topic/works-great-out-of-the-box-16/)

## The API

CoCart Lite provides the basic API needs to get you started.

* Get store information.
* Add simple, variable and grouped products to the cart.
* Get customers cart.
* Get customers cart contents.
* Update items in the cart.
* Remove items from the cart.
* Restore items to the cart.
* Re-calculate the totals.
* Retrieve the cart totals.
* Retrieve the number of items in cart or items removed from it.
* Empty the cart.
* Logout the customer.

As an added bonus for administrators or shop managers, CoCart Lite also provides the capabilities to:

* Get Carts in Session.
* Get details of a cart in session.
* View items added in a cart in session.
* Delete a Cart in Session.

## Features

CoCart also provides built in features to:

* Load a cart in session.
* Support guest customers.
* Support basic authentication without the need to cookie authenticate.
* Support [authentication via WooCommerce's method](https://cocart.xyz/authenticating-with-woocommerce-heres-how-you-can-do-it/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart).

Included with these features are **[filters](https://docs.cocart.xyz/#filters)** and **[action hooks](https://docs.cocart.xyz/#hooks)** for developers to customise API responses or change how CoCart operates.

## Tools and Libraries

* **[CoCart Product Support Boilerplate](https://github.com/co-cart/cocart-product-support-boilerplate)** provides a basic boilerplate for supporting a different product type to add to the cart with validation including adding your own parameters.
* **[CoCart Tweaks](https://github.com/co-cart/co-cart-tweaks)** provides a starting point for developers to tweak CoCart to their needs.
* **[CoCart Beta Tester](https://github.com/co-cart/cocart-beta-tester)** allows you to test with bleeding edge versions of CoCart from the GitHub repo.
* **[Carts in Session](https://wordpress.org/plugins/cocart-carts-in-session/)** is an add-on that allows you to view all the carts in session via the WordPress admin.
* **[Node.js Library](https://www.npmjs.com/package/@cocart/cocart-rest-api)** provides a JavaScript wrapper supporting CommonJS (CJS) and ECMAScript Modules (ESM).

### CoCart Pro

CoCart Lite is just the tip of the iceberg. [CoCart Pro](https://cocart.xyz/pro/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart) completes it with the following [features](https://cocart.xyz/features/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart):

* **Plugin Updates** for 1 year.
* **Priority Support** for [CoCart Pro](https://cocart.xyz/pro/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart) users via Slack.
* Add and Remove Coupons to Cart
* Retrieve Applied Coupons
* Retrieve Coupon Discount Total
* Retrieve Cart Total Weight
* Retrieve Cross Sells
* Retrieve and Set Payment Method
* Retrieve and Set Shipping Methods
* Retrieve and Set Fees
* Calculate Shipping Fees
* Calculate Totals and Fees

Features that will be available in the future:

* **Coming Soon** Remove All Coupons from Cart
* **Coming Soon** Register Customers
* **Coming Soon** Retrieve Checkout Fields
* **Coming Soon** Set Cart Customer (In Development)
* **Coming Soon** Create Order (In Development)

For logged in customers:

* **Coming Soon** Return Orders
* **Coming Soon** Return Subscriptions
* **Coming Soon** Return Downloads (Auditing)
* **Coming Soon** Return Payment Methods (Auditing)
* **Coming Soon** Get and Update Profile (In Development)

[Buy CoCart Pro Now](https://cocart.xyz/pro/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart)

### Extensions supported

[View list of the WooCommerce extensions](https://cocart.xyz/woocommerce-extensions/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart) that support CoCart or are supported in [CoCart Pro](https://cocart.xyz/pro/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart).

### Priority support

I aim to provide regular support for the CoCart plugin on the WordPress.org forums. But please understand that I do prioritize support. Communication is handled privately via direct messaging in [Slack](https://app.slack.com/client/TD85PLSMA/) and is available to people who bought [CoCart Pro](https://cocart.xyz/pro/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart) or paid for the [14 day priority support](https://cocart.xyz/product/14-day-priority-support/).

#### Add-ons to further enhance your cart.

We also have **[add-ons](https://cocart.xyz/add-ons/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart)** that extend CoCart to enhance your development and your customers shopping experience.

* **[Carts in Session](https://github.com/co-cart/cocart-carts-in-session)** allows you to view all the carts in session via the WordPress admin. - **FREE**
* **[Get Cart Enhanced](https://wordpress.org/plugins/cocart-get-cart-enhanced/)** enhances the cart response returned with the cart totals, coupons applied, additional product details and more. - **FREE**
* **[Products](https://cocart.xyz/add-ons/products/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart)** provides a public and better version of WooCommerce REST API for accessing products, categories, tags, attributes and even reviews without the need to authenticate.
* **[Advanced Custom Fields](https://cocart.xyz/add-ons/advanced-custom-fields/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart)** extends CoCart Products add-on by returning all your advanced custom fields for products. - **REQUIRES COCART PRODUCTS**
* **[Yoast SEO](https://cocart.xyz/add-ons/yoast-seo/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart)** extends CoCart Products add-on by returning Yoast SEO data for products, product categories and product tags. - **REQUIRES COCART PRODUCTS**
* and more add-ons in development.

They work with the FREE version of CoCart already, and these add-ons of course come with support too.

### Join our growing community

A Slack community for developers, WordPress agencies and shop owners building the fastest and best headless WooCommerce stores with CoCart.

[Join our community](https://cocart.xyz/community/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart)

### Built with developers in mind

Extensible, adaptable, and open source — CoCart is created with developers in mind. If you’re interested to jump in the project, there are opportunities for developers at all levels to get involved. [Contribute to CoCart on the GitHub repository](https://github.com/co-cart/co-cart/blob/master/.github/CONTRIBUTING.md) and join the party. 🎉

Check out [open issues](https://github.com/co-cart/co-cart/issues?q=is%3Aissue+is%3Aopen) and join the [#core channel](https://cocart.slack.com/messages/C014C4581NE) on Slack. If you don’t have a Slack account yet, you can sign up at [https://cocart.xyz/community/](https://cocart.xyz/community/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart).

### Bug reports

Bug reports for CoCart are welcomed in the [CoCart repository on GitHub](https://github.com/co-cart/co-cart). Please note that GitHub is not a support forum, and that issues that aren’t properly qualified as bugs will be closed.

### More information

* The [CoCart plugin](https://cocart.xyz/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart) official website.
* The CoCart [Documentation](https://docs.cocart.xyz/)
* [Subscribe to updates](http://eepurl.com/dKIYXE)
* Like, Follow and Star on [Facebook](https://www.facebook.com/cocartforwc/), [Twitter](https://twitter.com/cart_co), [Instagram](https://www.instagram.com/co_cart/) and [GitHub](https://github.com/co-cart/co-cart)

#### Credits

This plugin is created by [Sébastien Dumont](https://sebastiendumont.com/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart).

== Installation ==

= Minimum Requirements =

* WordPress v5.3
* WooCommerce v4.3
* PHP v7.0

= Automatic installation =

Automatic installation is the easiest option as WordPress handles the file transfers itself and you don’t need to leave your web browser. To do an automatic install of CoCart, log in to your WordPress dashboard, navigate to the Plugins menu and click Add New.

In the search field type "CoCart" and click Search Plugins. Once you’ve found the plugin you can view details about it such as the point release, rating and description. Most importantly of course, you can install it by simply clicking "Install Now".

= Manual installation =

The manual installation method involves downloading the plugin and uploading it to your webserver via your favourite FTP application. The WordPress codex contains [instructions on how to do this here](https://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation).

= Updating =

Automatic updates should work like a charm; as always though, ensure you backup your site just in case.

== Frequently Asked Questions ==

= Is CoCart free? =

Yes! CoCart’s core features are absolutely free. [CoCart Pro completes the full cart experience!](https://cocart.xyz/pro/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart)

= How do I start using CoCart? =

You will first need WooCommerce v4.3 or higher installed with the REST API enabled. Then install CoCart and follow the documentation. That’s it!

= Why should I use CoCart? =

The question is why not! WooCommerce's REST API is only created for controlling the backend of your store. Not the API you need for your customers who only see the frontend.

CoCart handles the your customers cart for you ready to use in any modern framework of your choosing. No local storing required. It's **Powerful** and **Developer** friendly ready to build your headless store the way you want, **without the need to build an API**.

If you are wanting to build a headless store powered by WooCommerce, then CoCart is your solution. But don't take my word for it. Checkout the testimonials left by others.

With [the documentation](https://docs.cocart.xyz/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart) provided, you’ll see how to add products to a cart and allow your customers to manage it in no time at all.

= Who should use CoCart? =

CoCart is perfect for store owners and developers. If you want to create an e-commerce app for mobile or a custom frontend shopping experience completely using the REST API, then you need to use CoCart.

= Do I need to have coding skills to use CoCart? =

As this plugin is built for developers, you will need to have some coding knowledge to use it. [Checkout the documentation](https://docs.cocart.xyz/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart) to get some understanding.

= Where can I find documentation for CoCart? =

You can find the documentation for CoCart on the [CoCart REST API Docs](https://docs.cocart.xyz/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart).

= Can I change the layout format/add/change details to the responses? =

You certainly can. Filters are available to do just that. [Checkout the tweaks plugin](https://github.com/co-cart/co-cart-tweaks) to view or maybe use the examples provided. [View the documentation](https://docs.cocart.xyz/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart) for more.

=  Is "WooCommerce Shipping and Tax" plugin supported? =

Not at this time. "WooCommerce Shipping and Tax" ignore any REST API from allowing the ability to calculate the taxes from TaxJar. Code has been contributed to the plugin that will allow third-party plugins enable this ability and awaiting feedback.

However, TaxJar for WooCommerce plugin is supported.

= Is "TaxJar for WooCommerce" plugin supported? =

If you have "TaxJar for WooCommerce" v3.2.5 or above and CoCart v3.0 or above installed... then yes, it is supported.

= Why CoCart and not WooCommerce Store API? =

WooCommerce Store API is not yet complete and stable in order to publish the first release of their API for public use. It is also limited for developers to use on many levels such as the body type the API can be requested in and support for guest customers which CoCart does have.

Their API is designed mainly to focus on their [Gutenberg blocks](https://wordpress.org/plugins/woo-gutenberg-products-block/) they have developed while CoCart is designed to focus on supporting many frameworks and languages outside of WordPress to allow your store to be headless.

CoCart is also backed by a community to make the REST API better for all developers.

= Do you have a JavaScript Library? =

Yes we do. You can [find it here](https://www.npmjs.com/package/@cocart/cocart-rest-api). It's very similar to WooCommerce's JavaScript Library. The only difference is that it's much up to date and doesn't require authentication so guest customers can be supported. It supports CommonJS (CJS) and ECMAScript Modules (ESM). Requests are made with [Axios library](https://github.com/axios/axios) with [support to promises](https://github.com/axios/axios#promises).

= Can I install/update CoCart via Composer? =

Yes. The best method would be to install/update CoCart from the GitHub repository but you can also do so via [https://wpackagist.org/](https://wpackagist.org/search?q=cart-rest-api-for-woocommerce&type=plugin)

= Does CoCart work for multi-site network? =

Yes. Just install CoCart and activate it via the network and all sites will have CoCart enabled.

= Can I enable white labelling for CoCart? =

Yes you can. You will have to edit your `wp-config.php` file to add a new constant. [Details can be found in the documentation](https://docs.cocart.xyz/?php#wp-config-php-white-labelling).

= Does CoCart work with the Dokan plugin? =

Yes. The only feature you wont be able to use are coupons if you have [CoCart Pro](https://cocart.xyz/pro/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart). This is because Dokan disables the use of coupons in WooCommerce. All other features are compatible.

= Where can I report bugs? =

Report bugs on the [CoCart GitHub repository](https://github.com/co-cart/co-cart/issues). You can also notify us via the support forum – be sure to search the forums to confirm that the error has not already been reported.

= CoCart is awesome! Can I contribute? =

Yes, you can! Join in on our [GitHub repository](https://github.com/co-cart/co-cart/blob/master/.github/CONTRIBUTING.md) and follow the [development blog](https://cocart.xyz/news/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart) to stay up-to-date with everything happening in the project.

= Is CoCart translatable? =

Yes! CoCart is deployed with full translation and localization support via the ‘cart-rest-api-for-woocommerce’ text-domain.

= Where can I get help or talk other users about CoCart core? =

If you get stuck, you can ask for help in the [CoCart support forum](https://wordpress.org/support/plugin/cart-rest-api-for-woocommerce/) or [join the CoCart Community on Slack](https://cocart.xyz/community/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart) where you will find like minded developers who help each other out. If you are in need of priority support, it will be provided by either purchasing [CoCart Pro](https://cocart.xyz/pro/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart) or the [14 day priority support](https://cocart.xyz/product/14-day-priority-support/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart).

= Where can I find out about the pricing of CoCart Pro? =

Find out all relevant [pricing information over on the official site.](https://cocart.xyz/pro/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart)

= My question is not listed here. Where can I find more answers? =

Check out [Frequently Asked Questions](https://cocart.xyz/faq/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=cocart) for more.

== Screenshots ==

1. Empty Cart
2. Cart with Item

== Contributors & Developers ==

"CoCart Lite" has **not** yet been translated in other languages. You can [translate "CoCart Lite" into your language](https://translate.wordpress.org/projects/wp-plugins/cart-rest-api-for-woocommerce).

**INTERESTED IN DEVELOPMENT?**

[Browse the code](https://plugins.trac.wordpress.org/browser/cart-rest-api-for-woocommerce/), check out the [SVN repository](https://plugins.svn.wordpress.org/cart-rest-api-for-woocommerce/), or subscribe to the [development log](https://plugins.trac.wordpress.org/log/cart-rest-api-for-woocommerce/) by [RSS](https://plugins.trac.wordpress.org/log/cart-rest-api-for-woocommerce/?limit=100&mode=stop_on_copy&format=rss).

== Changelog ==

If you like CoCart, please take a moment to [provide a testimonial](https://wordpress.org/support/plugin/cart-rest-api-for-woocommerce/reviews/#new-post). It helps to keep the plugin going strong, and is greatly appreciated.

= v3.0.0 - ?? ??, 2020 =

* NEW API

[View the full changelog here](https://github.com/co-cart/co-cart/blob/master/CHANGELOG.md).

== Upgrade Notice ==

= 3.0.0 =

NEW API! Backwards compatible with CoCart v1 API. Upgrade with ease. 😄
