=======================================
MaxButtons Pro Plugin for WordPress
Copyright (c) 2012 Max Foundry, LLC
http://maxfoundry.com
=======================================

========== LICENSING ==========
All files and code for this plugin are licensed with the GNU General Public License
version 2 (GPLv2), which can be found at http://www.gnu.org/licenses/gpl-2.0.html.

========== REQUIREMENTS ==========
This plugin has been tested with the self-hosted version of WordPress 3.0 and later, which
can be downloaded from http://wordpress.org. This plugin cannot be used on WordPress.com.
For more details, see http://en.support.wordpress.com/plugins/.

========== INSTALLATION ==========
These instructions assume you already have WordPress installed or are at least familiar with
doing so. If not, see the "Installing WordPress" codex article on the official wordpress.org
site for detailed installation instructions (http://codex.wordpress.org/Installing_WordPress).

For automatic installation:

- Login to your website and go to the Plugins section of your admin panel.
- Click the Add New button.
- Under Install Plugins, click the Upload link.
- Select the plugin zip file from your computer then click the Install Now button.
- You should see a message stating that the plugin was installed successfully.
- Click the Activate Plugin link.

For manual installation:

- You should have access to the server where WordPress is installed. If you don't, see your system administrator.
- Copy the plugin zip file up to your server and unzip it somewhere on the file system.
- Copy the "maxbuttons-pro" folder into the /wp-content/plugins directory of your WordPress installation.
- Login to your website and go to the Plugins section of your admin panel.
- Look for "MaxButtons Pro" and click Activate.

========== UPGRADING ==========
If you are upgrading from a previous version of the plugin, you must have access to the server
where WordPress is installed. If you do, follow these steps:

- It's always a good idea to backup your website files and database, so do that first.
- Login to your website and go to the Plugins section of your admin panel.
- Look for "MaxButtons Pro" and click Deactivate.
- Copy the plugin zip file up to your server and unzip it somewhere on the file system.
- Copy the "maxbuttons-pro" folder into the /wp-content/plugins directory of your WordPress installation. You want it to overwrite the plugin folder that is already there.
- Go back to the Plugins section of your admin panel.
- Click the Activate link for the "MaxButtons Pro" plugin.

========== SUPPORT ==========
Please direct all support issues and questions to support@maxfoundry.com.

========== VERSION HISTORY ==========
v1.3.0 : Mar 19, 2012
- Added plugin update notification mechanism.
- The container is now enabled by default.
- Fixed bug where container options weren't being set properly when a button was copied from a button pack.
- Removed the IE-specific gradient filter and -ms-filter styles from shortcode output due to issue when used with rounded corners.

v1.2.0 : Feb 20, 2012
- Added container options.

v1.1.0 : Feb 13, 2012
- Added option for the icon alt text.
- Added additional styles for icon image to help avoid theme image styles from creeping into the button.
- Added checks to only render icon elements and styles if the button actually has an icon.

v1.0.5 : Feb 3, 2012
- Added :visited style to the shortcode output.

v1.0.4 : Feb 2, 2012
- Fixed another issue with the colorpickers for gradient start/hover and gradient end/hover.

v1.0.3 : Feb 1, 2012
- Fixed issue in button editor where the colorpickers for text shadow, gradient start, gradient end, border, and box shadow changed the value of their respective hover colorpicker.

v1.0.2 : Jan 31, 2012
- Fixed issue where the button text color was being overriden by theme styles.
- Fixed issue in button editor where the text colorpicker changed the value of the text hover colorpicker.

v1.0.1 : Jan 22, 2012
- Fixed style and script loading so that they are only loaded on this plugin's admin pages, not *all* admin pages. Will help avoid theme and plugin conflicts.
- Added copy and button that links to button packs on the Packs page.
- Added filter for widget_text to recognize and execute the button shortcode.

v1.0.0 : Jan 4, 2012
- Initial version.
