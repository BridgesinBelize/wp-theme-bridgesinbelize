# Bridges in Belize WordPress Theme
The BRIDGEs in Belize [WordPress](http://wordpress.org) theme is a [child theme](http://codex.wordpress.org/Child_Themes) of [Definition](http://www.woothemes.com/products/definition/) by [WooThemes](http://www.woothemes.com/).  To build the site correctly, you must install the definition theme, and the bridgesinbelize theme, both included in this repository.

## Current Site Setup

Below you will find the current setup of the bridgesinbelize.org site.  Each of the below items is required for the site to be set up in its current form.

To restore this site, first start by [installing WordPress](http://codex.wordpress.org/Installing_WordPress), then the Definition theme, then install the Bridges in Belize theme and active it. After it's active, install and activate eache of the below plugins.  Lastly restore any data from backups.

### Primary Packets

* [WordPress](http://wordpress.org) - v3.5 - The main [Content Management System](http://en.wikipedia.org/wiki/Content_management_system) the site is running on.
* [Definition](http://www.woothemes.com/products/definition/) - v1.1.0 - The parent theme for the site, controls meny of the fuctions within the site, this theme is part of this repository.
* [Bridges in Belize](https://github.com/mattrude/wp-theme-bridgesinbelize) - v0.1 - The look and feel of the site actual site.

### Secondary Packets (plugins)

* [Jetpack](http://jetpack.me/) - Provides meny small but needed functions within the site, including sharing, contact form, spell checking, and distribution.
* [Features by WooThemes](http://wordpress.org/extend/plugins/features-by-woothemes/) - Provides the Features section, just below the content section, on the main page.
* [Members](http://wordpress.org/extend/plugins/members/) - Provides access control managment within the site.
* [WP Help](http://wordpress.org/extend/plugins/wp-help/) - Provides help documents for logged in users to the site.
* [MDR Table of Contents](https://gist.github.com/4109124) - Automatically creates Table of Contents on pages & posts with the uses of a shortcode.
* [Simple Footnotes](http://wordpress.org/extend/plugins/simple-footnotes/) - Automatically creates footnotes on pages or posts.

## Installing

This repository stores both the bridgesinbelize theme and the Definition theme. It also stores the current plugins and a backup of the site itself.  To install, follow the below instructions.

    cd /var/www/bridgesinbelize.org/wp-content/themes/
    git clone -b definition git@github.com:mattrude/wp-theme-bridgesinbelize.git definition
    git clone -b bridgesinbelize git@github.com:mattrude/wp-theme-bridgesinbelize.git bridgesinbelize
    cd /var/www/bridgesinbelize.org/wp-content/
    rm -rf plugins
    git clone -b plugins git@github.com:mattrude/wp-theme-bridgesinbelize.git plugins

After installing the needed bits, restore the data from the `data` branch in this repostiory.

### Other build information

This theme uses [less](http://lesscss.org/) to compile it's style sheets (style.css).  Each time the `style.less` file is modified, it must be compiled into `style.css` for the changes to be seen on the site. To compile the style.css file, run:

    lessc style.less > style.css && \
    sed "s/images/..\/..\/plugins\/jetpack\/modules\/sharedaddy\/images/g" \
    ../../plugins/jetpack/modules/sharedaddy/sharing.css >> style.css && \
    cat ../../plugins/jetpack/modules/widgets/widgets.css >> style.css

## License

The BRIDGEs in Belize WordPress theme is free software; you may redistribute it and/or modify it under the terms of the GNU General Public License version 2 as published by the Free Software Foundation (http://www.fsf.org/).

                  GNU GENERAL PUBLIC LICENSE
                     Version 2, June 1991
    
    Copyright (C) 1989, 1991 Free Software Foundation, Inc.,
    51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA
    Everyone is permitted to copy and distribute verbatim copies
    of this license document, but changing it is not allowed.
