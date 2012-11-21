# BRIDGE's in Belize Plugins

Here you will find the plugins currently used within on BRIDGE's in Belize website.

This branch should be restored to the ``wp-content/plugins`` directory.

There are 3 diffrent types of plugins within this repository, shell plugins, git submodules, & full plugins.

### Shell Plguins

These plugins are each maintatined by WordPress and interface directly with their servers. 

* akismet
* jetpack

### Git Submodules

These plugins are each stored on github and must be updated via git using ``git submodule init && git submodule update``, see 'Resoring Plugins Directory' below for more details.

* features-by-woothemes - Show off what features your company, product or service offers, using our shortcode, widget or template tag.
* testimonials-by-woothemes - Show off what your customers or website users are saying about your business and how great they say you are, using our shortcode, widget or template tag.
* members - A user, role, and content management plugin that makes WordPress a more powerful CMS.

### Full Plugins

The below plugins are fully included within this branch and may be used as is.

* feed-footer - Adds a link back to the origninal page on all RSS & ATOM feeds.  This does not affect your normal posts & pages.
* limit-login-attempts - Limit rate of login attempts, including by way of cookies, for each IP.
* mdr-table-of-contents - This plugin will create a Table of Contents on a page or post with the use of the shortcode of \[table_of_contents\].  There is no styling in the output from within the plugin.
* nginx-compatibility - Makes WordPress more friendly to nginx.
* nginx-microcache - The helper plugin for the Nginx Microcache.
* simple-footnotes - Create simple, elegant footnotes on your site. Use the \[ref\] shortcode (\[ref\]My note.\[/ref\]) and the plugin takes care of the rest. Theres also a setting that enables you to move the footnotes below your page links, for those who paginate posts.
* simple-local-avatars - Adds an avatar upload field to user profiles if the current user has media permissions. Generates requested sizes on demand just like Gravatar! Simple and lightweight.
* wp_mail_smtp - Reconfigures the wp_mail() function to use SMTP instead of mail() and creates an options page to manage the settings.

## Restoring Plugins Directory

Use the below commands to restore the plugins directory.  After you have restored the directory, you must update again threw WordPress to get the latest version of the plugins.

    cd wp-content/
    rm -rf plugins
    git clone -b plugins git@github.com:mattrude/wp-theme-bridgesinbelize.git plugins
    cd plugins
    git submodule init
    git submodule update
