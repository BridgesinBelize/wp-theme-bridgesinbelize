Definition Documentation
------------------------

[](#)[](#)

### Introduction

So you’ve downloaded a WooTheme and you are dying to get it up and
running on your website?

First off we are presuming you have installed and configured your
WordPress installation, if not we have a tutorial guiding you through
the installation of WordPress on your domain. Further [detailed
information](http://codex.wordpress.org/New_To_WordPress_-_Where_to_Start "Getting started with WordPress")
can be found on the WordPress.org site.

<iframe src="http://player.vimeo.com/video/17147778" frameborder="0" width="700" height="393"></iframe>

Now that’s out the way, let’s get started.

[](#)

### Installing a WooTheme

To install a WooTheme, is not much different to installing any other
(free) WordPress theme. **Remember though, you’ll need to set up your
theme options afterwards to have it functioning like our
[demos](http://www.woothemes.com/demo "WooThemes Demo Server").**

There are two ways to install a WooTheme on your website. Both methods
are explained below in video tutorial, we however recommend doing it via
the WordPress backend.

Below is a quick overview of the WordPress “Add New Themes” installation
method:

1.  Download your template file (wootheme\_name.zip) from your WooThemes
    account.
2.  Log into your WordPress admin panel and click on the “Appearance”
    tab. Now click on the “Add New Themes” tab.
3.  Click on the “Upload” button, “Browse” for your zip folder you
    downloaded from our site to your computer and select “Open”.
4.  Click the “Install Now” button.
5.  Activate the theme from this page, OR “Return to Themes Page” and
    activate from there if you experience a problem. See
    [screenshot](http://woothemes.wpengine.netdna-cdn.com/wp-content/uploads/2009/08/Antisocial_theme_install.jpg)
    of an activated theme.
6.  REMEMBER to set up your theme option’s panel for it to display
    correctly. [See example of theme option’s
    panel](http://woothemes.wpengine.netdna-cdn.com/wp-content/uploads/2009/08/Antisocial_theme_options.jpg).
7.  MAKE SURE your theme “cache” folder is CHMOD 777. [View this
    tutorial for
    help](http://www.woothemes.com/2008/10/how-to-chmod-the-cache-folder/ "How to CHMOD the cache folder").

The below video tutorial shows you how to install a WooTheme using two
different methods – via the WordPress backend theme installer OR via FTP
(which gives you better control over the theme files and customizing
them).

<iframe src="http://player.vimeo.com/video/17147778" frameborder="0" width="700" height="393"></iframe>

[](#)

How To
------

[](#)

### Setting Up Definition

Welcome to our theme we call “Definition”. “Definition” is a clean and
clear theme for everyone who loves producing content. It’s a perfect
business theme, WooCommerce theme, and is suitable for blogging as well,
all rolled into one package! Not to mention it supports a few of our
popular plugins, WooDojo & WooSlider, while also helping to introduce
two new ones to you. We’ll cover those later, for now let’s walk through
the homepage setup.

Definition’s homepage can be setup in two ways. Either the standard
module based setup, or you can have it be widgetized. Going widgetized
lets you re-order any of the modules below the slider on the homepage
using our included “Woo – Component” widget. Or you can use any widget
available to you on the homepage.

Setting up widgets is as easy as dragging and dropping widgets into the
“Homepage” widget area on the “Appearance \> Widgets” screen, but let’s
go over using the modules and how to enable those.

[](#)

### Setting Up The Search Bar

At the top you’ll find our usual header areas for a logo, a top
navigation, and a main navigation. We have documentation on creating
menus below. One other thing to talk about in the header is the search
bar. There is the option to turn off/on the search bar in the header if
you desire. This search bar can also be setup to search through the
website content, or your product catalog, if WooCommerce is activated.
By default, it searches through your website’s content.

[![image](https://github.com/mattrude/wp-theme-bridgesinbelize/wiki/images/definition/Definition-Search-Options-620x176.png "Definition Search Options")](https://github.com/mattrude/wp-theme-bridgesinbelize/wiki/images/definition/Definition-Search-Options.png)

Definition Search Options

If you’d like to have an all inclusive search bar, we recommend checking
out either
[Relevanssi](http://wordpress.org/extend/plugins/relevanssi/ "Relevanssi")
or [Search
Everything](http://wordpress.org/extend/plugins/search-everything/ "Search Everything Plugin")
to add this functionality.

[](#)

### Setting Up The Slider

We have our standard “slide” post type built into this theme that helps
power the homepage slider. It’s as simple as creating a few slides and
choosing your settings to get up and running with your slider. Let’s
first run over the slider’s options

[![image](https://github.com/mattrude/wp-theme-bridgesinbelize/wiki/images/definition/Definition-Slider-Settings-1-620x377.png "Definition Slider Settings 1")](https://github.com/mattrude/wp-theme-bridgesinbelize/wiki/images/definition/Definition-Slider-Settings-1.png)

Definition Slider Settings

In the first set of options under the slider content you’ll see some
important options. Of most importance is the “enable” option. If you
want to use the slider you will need to check this checkbox. The second
most important option to understand is the number of slides. Here you
will want to select a number that matches at least the number of slide
posts you have created. For example, if you select to feature 3 slides
you need to have, at the minimum, 3 slides created.

A new part of this “slide” post type is the slide group. It’s an easy
way to organize your slides, and is important if you wanted to create
slides that belong to different sliders. This comes into an important
role with the theme’s integration of WooSlider. To provide an example,
if you had our WooSlider plugin activated with “Definition”, you would
be able to create and select a slide group to use in the slider on the
homepage. No extra coding required! This let’s you create a second slide
group and use a WooSlider shortcode to create a second, separate slider
in a post or page.

[![image](https://github.com/mattrude/wp-theme-bridgesinbelize/wiki/images/definition/Definition-Slider-Settings-2-620x538.png "Definition Slider Settings 2")](https://github.com/mattrude/wp-theme-bridgesinbelize/wiki/images/definition/Definition-Slider-Settings-2.png)

Definition Slider Settings

The second screen of slider options under slider settings control more
of the sliders timing. Those options are fairly self explanatory.

[![image](https://github.com/mattrude/wp-theme-bridgesinbelize/wiki/images/definition/Definition-Slider-In-Action-620x251.png "Definition Slider In Action")](https://github.com/mattrude/wp-theme-bridgesinbelize/wiki/images/definition/Definition-Slider-In-Action.png)

Definition Slider In Action

To add a slide follow these steps:

1.  Go to Slides \> Add New.
2.  Type a title for the slide and complete all of the post’s body
    content. You can embed buttons and images here as well.
3.  If you want to use a video simply past the embed code in the proper
    box under the Custom Settings
4.  Choose a Slide Group if appropriate.
5.  Publish the slide.

[](#)

### Setting Up The Content Area

The content area is featured in some of our other themes, and is a way
to add a page’s content or blog posts to the homepage. To first set this
up you’ll want to visit the Homepage \> Setup screen and enable the
Content Area.

[![image](https://github.com/mattrude/wp-theme-bridgesinbelize/wiki/images/definition/Enable-The-Content-Area-620x280.png "Enable The Content Area")](https://github.com/mattrude/wp-theme-bridgesinbelize/wiki/images/definition/Enable-The-Content-Area.png)

Enable The Content Area

Then on the Homepage \> Content you can setup the page content you want
to show on the homepage, or the blog options you have here to show your
posts.

[![image](https://github.com/mattrude/wp-theme-bridgesinbelize/wiki/images/definition/Content-Settings-620x322.png "Content Settings")](https://github.com/mattrude/wp-theme-bridgesinbelize/wiki/images/definition/Content-Settings.png)

Content Settings

[](#)

### Setting Up The Featured Products Area

Definition comes with WooCommerce integration included. The only thing
you need to do to make this work is make sure our WooCommerce plugin is
activated and checkout some of the theme’s options to set it up as you’d
like.

You can turn on and off the cart link in the header, as well as set a
custom placeholder for products without images. You can set your shop
page to be full width as well as set how many product columns, and even
the amount of products per page.

Finally you have the option to show or disable both the product tabs and
related products.

[![image](https://github.com/mattrude/wp-theme-bridgesinbelize/wiki/images/definition/Definition-WooCommerce-Settings-1-620x219.png "Definition WooCommerce Settings 1")](https://github.com/mattrude/wp-theme-bridgesinbelize/wiki/images/definition/Definition-WooCommerce-Settings-1.png)

Definition WooCommerce Settings

[![image](https://github.com/mattrude/wp-theme-bridgesinbelize/wiki/images/definition/Definition-WooCommerce-Settings-2-620x236.png "Definition WooCommerce Settings 2")](https://github.com/mattrude/wp-theme-bridgesinbelize/wiki/images/definition/Definition-WooCommerce-Settings-2.png)

Definition WooCommerce Settings

[](#)

### Setting Up The Features

Definition is the first of our themes to have integration with our new
“Features by WooThemes” plugin. If activated, the plugin will show up
automatically on the default homepage.\
 [](#)

### Introducing “Features by WooThemes”

[![image](https://github.com/mattrude/wp-theme-bridgesinbelize/wiki/images/definition/Features.png "Features")](https://github.com/mattrude/wp-theme-bridgesinbelize/wiki/images/definition/Features.png)Welcome
to “Features by WooThemes”, a free plugin for displaying your product’s
features in WordPress. You can find this FREE plugin on the
[WordPress.org
repository](http://wordpress.org/extend/plugins/features-by-woothemes/),
or you can [fork it on
GitHub](http://github.com/woothemes/features/ "Fork this plugin on GitHub").
It’s a plugin to easily create features and selling points of your
business/service/company and promote those on your site. Activating the
plugin will register a post type called “Features”. You’ll see this icon
and options in your WordPress dashboard after activation.

It works much like a writing a normal post would. We’ve envisioned using
Features to show off what it is that makes your company/service/work
awesome!

Now that you’ve got the plugin activated, let’s create a new Feature by
clicking on the “Add New” link under the “Features” menu. In the edit
screen you’ll be able to title your feature, write a short blurb about
the feature, and you can set a featured image to set an icon for the
feature.

All that is left to do is click “Publish”. This makes your feature live
for all potential customers to see!

[](#)

### Setting Up The Testimonials

Definition is, as well, the first of our themes to have integration with
our new “Testimonials by WooThemes” plugin too. If activated, the plugin
will show up automatically on the default homepage.\
 [](#)

### Introducing “Testimonials by WooThemes”

[![image](https://github.com/mattrude/wp-theme-bridgesinbelize/wiki/images/definition/Testimonials.png "Testimonials")](https://github.com/mattrude/wp-theme-bridgesinbelize/wiki/images/definition/Testimonials.png)Welcome
to “Testimonials by WooThemes”, a free plugin for displaying customer
testimonials on your website. You can find this FREE plugin on the
[WordPress.org
repository](http://wordpress.org/extend/plugins/testimonials-by-woothemes/),
or [fork it on GitHub](http://github.com/woothemes/testimonials/).
Activating the plugin will register a post type called “Testimonials”.
You’ll see this icon and options in your WordPress dashboard after
activation.

It works much like a writing a normal post would. We’ve envisioned using
Testimonials to show off feedback you’ve received from individuals or
groups, saying that your company/service/work is awesome!

Now that you’ve got the plugin activated, let’s create a new testimonial
by clicking on the “Add New” link under the “Testimonials” menu. In the
edit screen, you’ll be able to title your testimonial, input what others
have said about you, add in their Gravatar email address, byline (such
as WooThemes CEO), and a url if you’d like to link to their site.

If your customer doesn’t specify a Gravatar e-mail address, you can add
a featured image as well, to display an image alongside the testimonial.

All that is left to do is click “Publish”. This makes your testimonial
live for all potential customers to see!

[](#)

### Customised Login Screen

Definition comes bundled with a custom login screen to compliment the
theme’s design.

[![image](https://github.com/mattrude/wp-theme-bridgesinbelize/wiki/images/definition/definition-login-screen.png "definition-login-screen")](https://github.com/mattrude/wp-theme-bridgesinbelize/wiki/images/definition/definition-login-screen.png)

"Definition" login screen

It’s possible to customise the logo via the “Branding” section of the
“Framework Settings” admin screen, or using
[WooDojo](http://woothemes.com/woodojo/ "Download WooDojo today")‘s
Login Branding feature.

All styling for the login screen can be found in the “css/login.css”
file.

[](#)

Featured Images
---------------

[](#)

### Video Overview

Many of our themes come with the functionality to set a featured image
in your posts. The image you upload will be dynamically resized by our
theme. There are a few options you have when using this functionality,
they are explained here in this video and below walking you through the
steps.

First navigate to your theme options, and then to the dynamic images
settings. Here you’ll see**two different options for resizing** your
images, **WordPress Post Thumbnails** and
**[TimThumb](http://code.google.com/p/timthumb/)**. These should both
already be enabled when you activate your theme. We recommend using the
native WordPress Post Thumbnails option for resizing, as this doesn’t
rely on a third party script like TimThumb.

[![image](http://woothemes.wpengine.netdna-cdn.com/wp-content/uploads/2011/11/Dynamic-Image-Default-Settings-600x451.png "Dynamic Image Default Settings")](http://woothemes.wpengine.netdna-cdn.com/wp-content/uploads/2011/11/Dynamic-Image-Default-Settings.png)

Dynamic Image Default Settings

[](#)

### WordPress Post Thumbnails

Now here’s a post that I’ve created that doesn’t have a featured image
set. First we’ll show you how to add a featured image with the WordPress
Post Thumbnail method.

1.  Go to the Featured Image panel and click on **Set featured image**?.
2.  Pick an image that you’ve already uploaded or upload a new one.
3.  Click **Use as featured image**. Don’t click the “Insert Into Post”
    button as this will add it directly inside your post content.

[![image](http://woothemes.wpengine.netdna-cdn.com/wp-content/uploads/2011/11/Featured-Image-Box.png "Featured Image Box")](http://woothemes.wpengine.netdna-cdn.com/wp-content/uploads/2011/11/Featured-Image-Box.png)

Featured Image Option

[![image](http://woothemes.wpengine.netdna-cdn.com/wp-content/uploads/2011/11/Setting-a-Featured-Image1-600x547.png "Setting-a-Featured-Image")](http://woothemes.wpengine.netdna-cdn.com/wp-content/uploads/2011/11/Setting-a-Featured-Image1.png)

Setting A Featured Image

[](#)

### TimThumb

Now let’s demonstrate the second option we have for inserting a featured
image, which is using a 3rd party script called
[TimThumb](http://code.google.com/p/timthumb/).

1.  Go to the theme’s **custom settings panel** located below the post
    content edit window.
2.  Click “**upload**” and upload a new image or use an existing one.
3.  Once you’ve found the image you want, click **Use as image**?.

[![image](http://woothemes.wpengine.netdna-cdn.com/wp-content/uploads/2011/11/TimThumb-Custom-Settings-Box-600x76.png "TimThumb Custom Settings Box")](http://woothemes.wpengine.netdna-cdn.com/wp-content/uploads/2011/11/TimThumb-Custom-Settings-Box.png)

Custom Settings Box

[![image](http://woothemes.wpengine.netdna-cdn.com/wp-content/uploads/2011/11/Using-TimThumb1-600x553.png "Using-TimThumb")](http://woothemes.wpengine.netdna-cdn.com/wp-content/uploads/2011/11/Using-TimThumb1.png)

Insert Into Post

[](#)

### Automatic Thumbnails

If you already have a blog with images inside your posts, we have an
option called Automatic Image Thumbnail?. This will **automatically grab
the first image from inside your post**, and set it as your featured
image.

[![image](http://woothemes.wpengine.netdna-cdn.com/wp-content/uploads/2011/11/Automatic-Thumbnail-Settings-600x102.png "Automatic Thumbnail Settings")](http://woothemes.wpengine.netdna-cdn.com/wp-content/uploads/2011/11/Automatic-Thumbnail-Settings.png)

Enable Automatic Thumbnails

[![image](http://woothemes.wpengine.netdna-cdn.com/wp-content/uploads/2011/11/Image-In-A-Post.png "Image In A Post")](http://woothemes.wpengine.netdna-cdn.com/wp-content/uploads/2011/11/Image-In-A-Post.png)

Image In A Post

[![image](http://woothemes.wpengine.netdna-cdn.com/wp-content/uploads/2011/11/Automatic-Thumbnail--600x223.png "Automatic Thumbnail")](http://woothemes.wpengine.netdna-cdn.com/wp-content/uploads/2011/11/Automatic-Thumbnail-.png)

Automatic Thumbnail On Your Homepage

[](#)

### Adjusting Size & Alignment

Lets look at how we can change the size and alignment of featured
images:

1.  Go to “**Dynamic Images**” in your theme’s options panel.
2.  Here you can **change the alignment** of the image; left, right or
    center.
3.  You can also change the width and height of the featured image also
    by adding the pixels.

You’ll now see that the featured image has changed it’s size and
alignment.

[![image](http://woothemes.wpengine.netdna-cdn.com/wp-content/uploads/2011/11/Thumbnail-Size-Alignment-600x244.png "Thumbnail Size & Alignment")](http://woothemes.wpengine.netdna-cdn.com/wp-content/uploads/2011/11/Thumbnail-Size-Alignment.png)

Thumbnail Size & Alignment

[![image](http://woothemes.wpengine.netdna-cdn.com/wp-content/uploads/2011/11/Thumbnail-Size-Adjusted-600x497.png "Thumbnail Size Adjusted")](http://woothemes.wpengine.netdna-cdn.com/wp-content/uploads/2011/11/Thumbnail-Size-Adjusted.png)

Thumbnail Size Changed

[](#)

Sidebar Manager
---------------

[](#)

### WooSidebars

The Sidebar Manager has been replaced by our new
[WooSidebars](http://woothemes.com/woosidebars/ "Download WooSidebars")
plugin for WordPress.

[](#)

Menus
-----

[](#)

### WordPress Menus and how to use them

All our WooThemes work seamlessly with the WordPress 3.0 addition of
“menus”. Thanks to WordPress menus, which was [originally built by
WooThemes and named WooNav before being committed to
core](http://www.woothemes.com/2010/02/woonav-integrated-in-wp-30/), you
can add any page, category, or link item to your navigation menu
(overwriting what usually might have been a category only or page only
navigation).

![image](http://woothemes.wpengine.netdna-cdn.com/wp-content/uploads/2011/01/wordpress-menus.jpg "wordpress-menus")

Where to build your navigational menus

To build your own menu simply navigate to Appearance \> Menus in your
WordPress backend, create your menu and choose which custom menu to
associate it with, or you can use widgets to put custom menus in a
widgetized area of the theme.

The WordPress menus functionality is well documented on the WordPress
codex –
[http://codex.wordpress.org/Appearance\_Menus\_SubPanel](http://codex.wordpress.org/Appearance_Menus_SubPanel)

[](#)

### Adding drop down menus with WordPress Menus

Once an item is added to a menu, those menu items can be rearranged.
Placing the mouse cursor over the menu item title, when the mouse cursor
changes to 4-arrows, hold the left-mouse button down, drag the module to
where you want to place it, then release the mouse button (this is
called drag-and-drop).

**You can drag a menu item slightly to the right of the menu item above
it to create a hierarchy (parent/child) relationship in the menu.**

[](#)

Shortcodes
----------

[](#)[](#)

### Introduction

Included in the WooFramework are some custom shortcodes that you can use
in all our themes. Shortcodes make it simple to insert elements like
buttons, boxes, columns etc. without any knowledge how to code HTML.
Shortcodes work in posts, pages and even widgets. For extensive overview
on all available shortcodes and usage you can check the [WooCodex
Shortcodes page](http://www.woothemes.com/woocodex/shortcodes/).

[](#)

### How to use Shortcodes

The Shortcode Generator functionality adds a button to the WYSIWYG
post/page editor in your WordPress back-end, which allows you to access
all of the WooFramework’s shortcodes in a one-click fashion. You can
then tweak the attributes and settings for the various shortcodes and
drop them into your post. Quick and easy. Instead of having to type out
the shortcodes in your post .like you had to do in the past . you can
now tweak them live and even see a preview in real-time, before adding
them to your content. Magic.

[![image](http://woothemes.wpengine.netdna-cdn.com/wp-content/uploads/2011/02/shortcode-woo-option.jpg "shortcode-woo-option")](http://woothemes.wpengine.netdna-cdn.com/wp-content/uploads/2011/02/shortcode-woo-option.jpg)

The Woo Shortcodes Icon in the WYSIWYG page/post editor

The shortcodes allow for further diversity and aesthetics to your actual
blog post and page layouts.

[](#)

SEO
---

[](#)

### Video overview

Overwhelmed by SEO? It can be a complicated topic, but it is all
important. Make sure your WooThemes powered website is optimized for
search engines following this comprehensive video tutorial.

[](#)

### Getting started

WooSEO (*SEO standing for Search Engine Optimization*) will give you an
immediate edge over your competition. This out of the box functionality
will have your site optimized for Google, and other search engine
results with a few clicks, helping you climb the rankings for keywords
you want to be registered under.

SEO is by no means an easy skill to master, but getting the basics right
is a great start to getting healthy traffic to your website.

[](#)

### Using 3rd party data

When using the WooThemes SEO functionality most users will prefer to
disable any other 3rd party SEO plugins that they might have been using
beforehand. In an effort to salvage any data previously added to posts
with these plugins, this setting will enable WooSEO to use that data and
make switching over easy and effortless.

Please note that the only supported plugins at this stage are the
“**All-in-One SEO**” and “**Headspace 2**” plugins. All data is
extracted from post custom fields and **does not**take preference over
data added to WooSEO custom fields.

[](#)

### Page Titles

#### What are page titles?

This section controls the Page titles () of your theme.

* **Separator** – This is what will appear between selected parts of your
title segments.

* **Blog title & Blog Description** – Also found in the Theme settings
pages, you can quickly update your blogs main title and it’s description
for use all over you site.

* **Use woo\_title()** – *Recommended*. Give yourself more control with
the woo\_title function. Enable this option to uncover a range of new
options to modify your page titles.

* **Disable Custom Titles** – If you leave this option deselected, the
custom title field on a post will generate the title, i.e. your blog’s
main title will not appear unless you enter it in the custom field along
with your post title. Select this option and the title is based on the
parameters you select below, i.e. Page Title | Blog Title.

* **Paged Variable** – When browsing your site, this variable will appear
when you page throughout your archives. Classically this comes into play
when viewing older posts on a page and you get “Page 2″ of the browsing
results. This variable lets you customize the word that gets used in the
Pagination process.

* **Paged Variable Position** – Choose to have the paging variable to
appear before, or after the generated page title.

* **Homepage, Single, Page & Archive Title Layout** – Select from the
options available how you want to have your page title’s formatted when
displaying on various templates and archives.

[](#)

### Meta

#### What is meta?

Meta information on your site helps search engines crawl and index your
site. It also helps with adding value to your pages, resulting in better
rankings in search engines. Typical meta tags for example, gets added to
the head of your site serving many kinds of purposes.

#### Indexing Meta

Archive Indexing – Any WordPress site can have several archives to
find/categorize posts. Be it by category, date, tags, search, etc. and
all get indexed by search engines. This can create issues as search
engines are forced to index pages containing the same data, thus
diluting the overall value of keywords.

By default we have set the Archive indexing to the “category archives”
so to focus in on more valuable sections of your site, in the words
telling search engines only to index the selected archives.

#### Making Robots Follow

By default single.php and page.php pages do not let search engines
follow any outbound links from the these, “Singular” types of pages,
thus letting them focus in on your content, and not somebody else’s. If
you did want search engines to follow links from singular pages, this
option will let you do that.

[](#)

### Description Meta

#### Homepage Description

* **Off** – Have no meta description for your homepage.

* **From WordPress Site Description** – Add your site’s description (also
used in page titles) to the homepage description

* **From Custom Homepage Description** – Add a description (text area
found below) to your site’s homepage meta description.

#### Single Post/Page Description

* **Off** – Have no meta description for your post/page.

* **From Custom Field and/or Plugins** – Add custom descriptions to posts
and pages from the fields given in the edit backend. This option will
also extract data from posts added via plugins.

When a post has been created previously with data from 3rd party
plugins, this option will extract the data and use it when available.

* **Automatically from Post/Page Content** – Choose to generate
descriptions from the content already available on in the post or page.
It will use content from the first segment of your content.

[](#)

### Keyword Meta

#### Homepage Keywords

* **Off** – Have no meta keywords on your homepage.

* **From custom Homepage Keywords** – This will add keywords (from the
texture below) into you homepage keywords meta.

#### Single Post/Page Keywords

* **Off** – Have no keywords on Posts or Pages.

* **From Custom Field and/or Plugins** – Add custom descriptions to posts
and pages from the SEO settings panel on your post/page admin. This
option will also extract data from post added via plugins. When a post
has been created previously with data from 3rd party plugins, this
option will extract the data and use it when available.

* **Automatically from Post Tags & Categories** – Generate keywords
automatically from the current posts Tags and Categories. (Posts Only)

[](#)

Changelog
---------

WooFramework version: 5.5.0
([Changelog](http://www.woothemes.com/updates/functions-changelog.txt))What's
this?

2013.03.11 - version 1.3.6
 * /css/woocommerce.css - Fixed product review rating styling.
 * /includes/theme-options.php - Add layout option for homepage blog posts / page content section.
 * /includes/blog-posts.php - Add layout option for homepage blog posts / page content section.
 * /includes/specific-page-content.php - Add layout option for homepage blog posts / page content section.

2013.02.25 - version 1.3.5
 * includes/theme-woocommerce.php - WooCommerce 2.0 pagination preparation

2013.02.19 - version 1.3.4
 * /css/layout.css - Full width slider desktop layout tweak

2013.02.11 - version 1.3.3
 * style.css - Fixed nav toggle icon not displaying on Android devices.  (Use @font-face icon instead of ASCII char)
   		 - Adjusted slider arrow on mobile resolutions.
 * header.php - Removed ASCII char.
 * includes/theme-woocommerce.php - added WooCommerce support flag

2013.02.01 - version 1.3.2
 * style.css - Adjusted full-width slide for mobile devices, fixed layout of checkboxes on checkout page & added styling for WooCommerce demo store banner
 * /css/layout.css - Adjusted full-width slide for mobile devices, fixed layout of checkboxes on checkout page & added styling for WooCommerce demo store banner
 * includes/featured-products.php - Product excerpt now uses woocommerce_template_single_excerpt();
 * includes/theme-actions.php - Fixed new registration text layout on checkout page

2013.01.14 - version 1.3.1
 * /inclues/featured-products.php - Fixes featured product price bug
 * /includes/js/jquery.flexslider-min.js - Upgrade FlexSlider to the latest version.
 * /css/woocommerce.less,
   /css/woocommerce.css - Amend ".creat-account" to ".create-account". Fixes visual bug when creating an account on checkout. Add support for WooCommerce 2.0 CSS classes.
 * style.less,
   style.css - Adds ".clear" to the styling for ".fix". Fixes visual bug on WooCommerce address editing screens.

2012.12.20 - version 1.3.0
 * /includes/theme-options.php - Add theme options to control how many features and testimonials display on the homepage.
 * index.php - Add logic to determine how many features and testimonials display on the homepage.

2012.12.18 - version 1.2.1
 * style.css - fixed max width on images with caption

2012.12.06 - version 1.2.0
 * woocommerce.css - Styling preparation for WooCommerce 2.0
 * includes/theme-woocommerce.php - removed dupliacte woo_content_before hook
 * includes/js/enable-lightbox.js - changed rel="lightbox" to rel="prettyPhoto[gallery]"
 * css/woocommerce.css - fixed info box overlap issue with checkout page

2012.11.29 - version 1.1.2
 * style.css - removed layout.css include
 * includes/theme-actions.php - added layout.css to woo_load_frontend_css(). Removed woo_deregister_styles
 * css/layout.css - new file to be loaded in HEAD

2012.11.27 - version 1.1.1
 * /includes/theme-functions.php - Make sure to suppress filters when retrieving slides from the database. Adds basic WPML support to the featured slider. Adjust woo_featured_slider_loader() to load the slider if is_front_page() as well as if is_home().
 * /includes/theme-js.php - Make woo_load_featured_slider_js() pluggable and load it on is_front_page() as well as is_home() to cater for a static front page.
 * css/woocommerce.css - cart now works better on mobile devices
 * style.css - blog images height fix
             - slider pagination fix when using custom typography

2012.11.15 - version 1.1.0
 * /css/login.less,
   /css/login.css - Make sure the login branding in the WooFramework and WooDojo can override the default login logo.
 * /includes/specific-page-content.php - Display the sidebar when displaying specific page content on the homepage.
 * /includes/theme-options.php - Add options to enable/disable the features and testimonials display on the homepage. Add options to customise the titles of "Features" and "Testimonials" on the homepage. Add custom field to slides to use the featured image as the slide background image instead.
 * /includes/theme-actions.php - Add filter to ensure that the pagination of the homepage blog posts is more accurate, if the homepage is set to display blog posts.
 * /includes/featured-slider.php - Added logic for the slide background image option.
 * style.css - Added styling for the slide background image option.
 * index.php - Add logic to enable/disable the "Features" and "Testimonials" sections on the homepage, as well as logic to customise the titles of each of the two sections.

2012.11.12 - version 1.0.2
 * style.less - Blockquote styling; Turned auto hyphens off for Firefox; WP Image alignment for slider content. '.entry' styling for homepage components.
 * /css/layout.less - Testimonials sidebar styling
 * /css/woocommerce.less - Show remove, thumbnail and prce columns in cart table.

2012.10.25 - version 1.0.1
 * /includes/theme-actions.php - Fix typo in the CHILD_THEME_URL constant's value.

2012.10.24 - version 1.0
 * First release!
