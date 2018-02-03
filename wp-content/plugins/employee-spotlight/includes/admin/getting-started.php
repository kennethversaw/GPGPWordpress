<?php
/**
 * Getting Started
 *
 * @package EMPLOYEE_SPOTLIGHT
 * @since WPAS 5.3
 */
if (!defined('ABSPATH')) exit;
add_action('employee_spotlight_getting_started', 'employee_spotlight_getting_started');
/**
 * Display getting started information
 * @since WPAS 5.3
 *
 * @return html
 */
function employee_spotlight_getting_started() {
	global $title;
	list($display_version) = explode('-', EMPLOYEE_SPOTLIGHT_VERSION);
?>
<style>
.about-wrap img{
max-height: 200px;
}
div.comp-feature {
    font-weight: 400;
    font-size:20px;
}
.edition-com {
    display: none;
}
.green{
color: #008000;
font-size: 30px;
}
#nav-compare:before{
    content: "\f179";
}
#emd-about .nav-tab-wrapper a:before{
    position: relative;
    box-sizing: content-box;
padding: 0px 3px;
color: #4682b4;
    width: 20px;
    height: 20px;
    overflow: hidden;
    white-space: nowrap;
    font-size: 20px;
    line-height: 1;
    cursor: pointer;
font-family: dashicons;
}
#nav-getting-started:before{
content: "\f102";
}
#nav-whats-new:before{
content: "\f348";
}
#nav-resources:before{
content: "\f118";
}
#nav-features:before{
content: "\f339";
}
#emd-about .embed-container { 
	position: relative; 
	padding-bottom: 56.25%;
	height: 0;
	overflow: hidden;
	max-width: 100%;
	height: auto;
	} 

#emd-about .embed-container iframe,
#emd-about .embed-container object,
#emd-about .embed-container embed { 
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	}
#emd-about ul li:before{
    content: "\f522";
    font-family: dashicons;
    font-size:25px;
 }
#gallery {
	margin: auto;
}
#gallery .gallery-item {
	float: left;
	margin-top: 10px;
	margin-right: 10px;
	text-align: center;
	width: 48%;
        cursor:pointer;
}
#gallery img {
	border: 2px solid #cfcfcf; 
height: 405px;  
}
#gallery .gallery-caption {
	margin-left: 0;
}
#emd-about .top{
text-decoration:none;
}
#emd-about .toc{
    background-color: #fff;
    padding: 25px;
    border: 1px solid #add8e6;
    border-radius: 8px;
}
#emd-about h3,
#emd-about h2{
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0.6em;
    margin-left: 0px;
}
#emd-about p,
#emd-about .emd-section li{
font-size:18px
}
#emd-about a.top:after{
content: "\f342";
    font-family: dashicons;
    font-size:25px;
text-decoration:none;
}
#emd-about .toc a,
#emd-about a.top{
vertical-align: top;
}
#emd-about li{
list-style-type: none;
line-height: normal;
}
#emd-about ol li {
    list-style-type: decimal;
}
#emd-about .quote{
    background: #fff;
    border-left: 4px solid #088cf9;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    margin-top: 25px;
    padding: 1px 12px;
}
#emd-about .tooltip{
    display: inline;
    position: relative;
}
#emd-about .tooltip:hover:after{
    background: #333;
    background: rgba(0,0,0,.8);
    border-radius: 5px;
    bottom: 26px;
    color: #fff;
    content: 'Click to enlarge';
    left: 20%;
    padding: 5px 15px;
    position: absolute;
    z-index: 98;
    width: 220px;
}
</style>

<?php add_thickbox(); ?>
<div id="emd-about" class="wrap about-wrap">
<div id="emd-header" style="padding:10px 0" class="wp-clearfix">
<div style="float:right"><img src="https://emd-plugins.s3.amazonaws.com/spotlight-logo-260x300.png"></div>
<div style="margin: .2em 200px 0 0;padding: 0;color: #32373c;line-height: 1.2em;font-size: 2.8em;font-weight: 400;">
<?php printf(__('Welcome to Employee Spotlight Community %s', 'employee-spotlight') , $display_version); ?>
</div>

<p class="about-text">
<?php printf(__("Let's get started with Employee Spotlight Community", 'employee-spotlight') , $display_version); ?>
</p>

<?php
	$tabs['getting-started'] = __('Getting Started', 'employee-spotlight');
	$tabs['whats-new'] = __('What\'s New', 'employee-spotlight');
	$tabs['features'] = __('Features', 'employee-spotlight');
	$tabs['resources'] = __('Resources', 'employee-spotlight');
	$active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'getting-started';
	echo '<h2 class="nav-tab-wrapper wp-clearfix">';
	foreach ($tabs as $ktab => $mytab) {
		$tab_url[$ktab] = esc_url(add_query_arg(array(
			'tab' => $ktab
		)));
		$active = "";
		if ($active_tab == $ktab) {
			$active = "nav-tab-active";
		}
		echo '<a href="' . esc_url($tab_url[$ktab]) . '" class="nav-tab ' . $active . '" id="nav-' . $ktab . '">' . $mytab . '</a>';
	}
	echo '</h2>';
	echo '<div class="tab-content" id="tab-getting-started"';
	if ("getting-started" != $active_tab) {
		echo 'style="display:none;"';
	}
	echo '>';
?>
<div style="height:25px" id="rtop"></div><div class="toc"><h3 style="color:#0073AA;text-align:left;">Quickstart</h3><ul><li><a href="#gs-sec-166">Employee Spotlight Community Introduction</a></li>
<li><a href="#gs-sec-174">Best Employee Profile Management Plugin - Employee Spotlight Pro</a></li>
<li><a href="#gs-sec-168">EMD CSV Import Export Addon helps you get your data in and out of WordPress quickly, saving you ton of time</a></li>
<li><a href="#gs-sec-167">Smart Search Addon for finding what's important faster</a></li>
<li><a href="#gs-sec-172">EMD Active Directory/LDAP Extension helps bulk import and update Employee Directory data from LDAP</a></li>
</ul></div><div class="quote">
<p class="about-description">The secret of getting ahead is getting started - Mark Twain</p>
</div>
<div class="getting-started emd-section changelog getting-started getting-started-166" style="margin:0;background-color:white;padding:10px"><div style="height:40px" id="gs-sec-166"></div><h2>Employee Spotlight Community Introduction</h2><div class="emd-yt" data-youtube-id="ug4UNSKVjjU" data-ratio="16:9">loading...</div><div class="sec-desc"><p>Watch Employee Spotlight Community introduction video to learn about the plugin features and configuration.</p></div></div><div style="margin-top:15px"><a href="#rtop" class="top">Go to top</a></div><hr style="margin-top:40px"><div class="getting-started emd-section changelog getting-started getting-started-174" style="margin:0;background-color:white;padding:10px"><div style="height:40px" id="gs-sec-174"></div><h2>Best Employee Profile Management Plugin - Employee Spotlight Pro</h2><div id="gallery" class="wp-clearfix"><div class="sec-img gallery-item"><a class="thickbox tooltip" rel="gallery-174" href="https://emdsnapshots.s3.amazonaws.com/employee_spotlight_pro.png"><img src="https://emdsnapshots.s3.amazonaws.com/employee_spotlight_pro.png"></a></div></div><div class="sec-desc"><p>Protect and enhance your brand's reputation with the best WordPress plugin.</p>
<p>Used by many prominent companies around the world, Employee Spotlight Pro offers enterprise features not available anywhere else. Easy to use, powerful and beautiful ways to showcase your talent.</p><p><a href="https://emdplugins.com/plugins/employee-spotlight-wordpress-plugin//?pk_campaign=espotlight-pro-buybtn&pk_kwd=employee-spotlight-resources"><img src="https://emd-plugins.s3.amazonaws.com/button_buy-now.png"></a></p></div></div><div style="margin-top:15px"><a href="#rtop" class="top">Go to top</a></div><hr style="margin-top:40px"><div class="getting-started emd-section changelog getting-started getting-started-168" style="margin:0;background-color:white;padding:10px"><div style="height:40px" id="gs-sec-168"></div><h2>EMD CSV Import Export Addon helps you get your data in and out of WordPress quickly, saving you ton of time</h2><div class="emd-yt" data-youtube-id="7dMCBHVSPro" data-ratio="16:9">loading...</div><div class="sec-desc"><p>EMD CSV Import Export Addon helps bulk import, export, update entries from/to CSV files. You can also reset(delete) all data and start over again without modifying database. The export feature is also great for backups and archiving old or obsolete data.</p><p><a href="https://emdplugins.com/plugins/emd-csv-import-export-extension/?pk_campaign=emdimpexp-buybtn&pk_kwd=employee-spotlight-resources"><img src="https://emd-plugins.s3.amazonaws.com/button_buy-now.png"></a></p></div></div><div style="margin-top:15px"><a href="#rtop" class="top">Go to top</a></div><hr style="margin-top:40px"><div class="getting-started emd-section changelog getting-started getting-started-167" style="margin:0;background-color:white;padding:10px"><div style="height:40px" id="gs-sec-167"></div><h2>Smart Search Addon for finding what's important faster</h2><div class="emd-yt" data-youtube-id="RoVKQWdo7tE" data-ratio="16:9">loading...</div><div class="sec-desc"><p>Smart Search Addon for Employee Spotlight Community edition helps you:</p><ul><li>Filter entries quickly to find what you're looking for</li><li>Save your frequently used filters so you do not need to create them again</li><li>Sort entry columns to see what's important faster</li><li>Change the display order of columns </li><li>Enable or disable columns for better and cleaner look </li><li>Export search results to PDF or CSV for custom reporting</li></ul><div style="margin:25px"><a href="https://emdplugins.com/plugins/emd-advanced-filters-and-columns-extension/?pk_campaign=emd-afc-buybtn&pk_kwd=employee-spotlight-resources"><img src="https://emd-plugins.s3.amazonaws.com/button_buy-now.png"></a></div></div></div><div style="margin-top:15px"><a href="#rtop" class="top">Go to top</a></div><hr style="margin-top:40px"><div class="getting-started emd-section changelog getting-started getting-started-172" style="margin:0;background-color:white;padding:10px"><div style="height:40px" id="gs-sec-172"></div><h2>EMD Active Directory/LDAP Extension helps bulk import and update Employee Directory data from LDAP</h2><div class="emd-yt" data-youtube-id="onWfeZHLGzo" data-ratio="16:9">loading...</div><div class="sec-desc"><p>EMD Active Directory/LDAP Extension helps bulk importing and updating Employee Directory data by visually mapping LDAP fields. The imports/updates can scheduled on desired intervals using WP Cron.</p>
<p><a href="https://emdplugins.com/plugin-features/employee-directory-microsoft-active-directoryldap-addon/?pk_campaign=emdldap-buybtn&pk_kwd=employee-spotlight-resources"><img src="https://emd-plugins.s3.amazonaws.com/button_buy-now.png"></a></p></div></div><div style="margin-top:15px"><a href="#rtop" class="top">Go to top</a></div><hr style="margin-top:40px">

<?php echo '</div>';
	echo '<div class="tab-content" id="tab-whats-new"';
	if ("whats-new" != $active_tab) {
		echo 'style="display:none;"';
	}
	echo '>';
?>
<p class="about-description">Employee Spotlight Community V4.5.0 offers many new features, bug fixes and improvements.</p>


<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">4.5.0 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-579" style="margin:0">
<h3 style="font-size:18px;" class="tweak"><div  style="font-size:110%;color:#33b5e5"><span class="dashicons dashicons-admin-settings"></span> TWEAK</div>
library updates</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">4.4.0 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-542" style="margin:0">
<h3 style="font-size:18px;" class="new"><div style="font-size:110%;color:#00C851"><span class="dashicons dashicons-megaphone"></span> NEW</div>
Added ability to limit the size, type and number of allowed file uploads for photos</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">4.3.2 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-438" style="margin:0">
<h3 style="font-size:18px;" class="tweak"><div  style="font-size:110%;color:#33b5e5"><span class="dashicons dashicons-admin-settings"></span> TWEAK</div>
library updates and misc. minor fixes</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-432" style="margin:0">
<h3 style="font-size:18px;" class="tweak"><div  style="font-size:110%;color:#33b5e5"><span class="dashicons dashicons-admin-settings"></span> TWEAK</div>
library updates</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-431" style="margin:0">
<h3 style="font-size:18px;" class="new"><div style="font-size:110%;color:#00C851"><span class="dashicons dashicons-megaphone"></span> NEW</div>
Added getting started section in the backend</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">4.3.1 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-280" style="margin:0">
<h3 style="font-size:18px;" class="tweak"><div  style="font-size:110%;color:#33b5e5"><span class="dashicons dashicons-admin-settings"></span> TWEAK</div>
Updated codemirror libraries for custom CSS and JS options in plugin settings page</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-279" style="margin:0">
<h3 style="font-size:18px;" class="fix"><div  style="font-size:110%;color:#c71585"><span class="dashicons dashicons-admin-tools"></span> FIX</div>
PHP 7 compatibility</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-278" style="margin:0">
<h3 style="font-size:18px;" class="new"><div style="font-size:110%;color:#00C851"><span class="dashicons dashicons-megaphone"></span> NEW</div>
Added custom JavaScript option in plugin settings under Tools tab</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">4.3.0 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-230" style="margin:0">
<h3 style="font-size:18px;" class="fix"><div  style="font-size:110%;color:#c71585"><span class="dashicons dashicons-admin-tools"></span> FIX</div>
Fixed misc issues</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-229" style="margin:0">
<h3 style="font-size:18px;" class="new"><div style="font-size:110%;color:#00C851"><span class="dashicons dashicons-megaphone"></span> NEW</div>
Added support for EMD Active Directory/LDAP extension</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">4.2.1 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-228" style="margin:0">
<h3 style="font-size:18px;" class="new"><div style="font-size:110%;color:#00C851"><span class="dashicons dashicons-megaphone"></span> NEW</div>
Added support for EMD Active Directory/LDAP extension</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<?php echo '</div>';
	echo '<div class="tab-content" id="tab-features"';
	if ("features" != $active_tab) {
		echo 'style="display:none;"';
	}
	echo '>';
?>
<h3>Showcase your team's expertise and earn customer trust.</h3>
<table class="widefat features striped form-table" style="width:auto;font-size:16px">
<tr><td><span class="dashicons dashicons-star-filled"></span></td><td><a href="https://emdplugins.com/employee-spotlight-categorize-and-group-employees/?pk_campaign=employee-spotlight-com&pk_kwd=getting-started">Organize employee information for faster searches.</a></td><td></td></tr>
<tr><td><span class="dashicons dashicons-star-filled"></span></td><td><a href="https://emdplugins.com/employee-spotlight-responsive-mobile-friendly/?pk_campaign=employee-spotlight-com&pk_kwd=getting-started">Let everyone see your team's talend from any device.</a></td><td></td></tr>
<tr><td><span class="dashicons dashicons-star-filled"></span></td><td><a href="https://emdplugins.com/employee-spotlight-beautiful-profile-pages/?pk_campaign=employee-spotlight-com&pk_kwd=getting-started">Beautiful employee profile pages.</a></td><td></td></tr>
<tr><td><span class="dashicons dashicons-star-filled"></span></td><td><a href="https://emdplugins.com/employee-spotlight-custom-fields/?pk_campaign=employee-spotlight-com&pk_kwd=getting-started">Create custom fields and display them easily.</a></td><td></td></tr>
<tr><td><span class="dashicons dashicons-star-filled"></span></td><td><a href="https://emdplugins.com/employee-spotlight-one-place-for-all-your-profiles/?pk_campaign=employee-spotlight-com&pk_kwd=getting-started">One central location from all employee information.</a></td><td></td></tr>
<tr><td><span class="dashicons dashicons-star-filled"></span></td><td><a href="https://emdplugins.com/employee-spotlight-easy-customization/?pk_campaign=employee-spotlight-com&pk_kwd=getting-started">Powerful and easy to use customization tools.</a></td><td></td></tr>
<tr><td><span class="dashicons dashicons-star-filled"></span></td><td><a href="https://emdplugins.com/employee-spotlight-alphabetical-search/?pk_campaign=employee-spotlight-com&pk_kwd=getting-started">Alphabetical search on name, department or job title of an employee.</a></td><td> - Premium feature (included in Pro)</td></tr>
<tr><td><span class="dashicons dashicons-star-filled"></span></td><td><a href="https://emdplugins.com/employee-spotlight-field-based-access/?pk_campaign=employee-spotlight-com&pk_kwd=getting-started">Control who can see, create and update existing employee field values from plugin settings.</a></td><td> - Premium feature (Included in Ent only)</td></tr>
<tr><td><span class="dashicons dashicons-star-filled"></span></td><td><a href="https://emdplugins.com/employee-spotlight-frontend-profile-editing/?pk_campaign=employee-spotlight-com&pk_kwd=getting-started">Frontend editing of all available employee profile fields including employee photos - perfect for non-technical user adoption of your system.</a></td><td> - Premium feature (Included in Ent only)</td></tr>
<tr><td><span class="dashicons dashicons-star-filled"></span></td><td><a href="https://emdplugins.com/employee-spotlight-empower-users/?pk_campaign=employee-spotlight-com&pk_kwd=getting-started">Assign more responsibilities to your staff by powerful permissions engine.</a></td><td> - Premium feature (included in Pro)</td></tr>
<tr><td><span class="dashicons dashicons-star-filled"></span></td><td><a href="https://emdplugins.com/employee-spotlight-tag-cloud-search/?pk_campaign=employee-spotlight-com&pk_kwd=getting-started">Let team members find each other by powerful tag cloud search.</a></td><td> - Premium feature (included in Pro)</td></tr>
<tr><td><span class="dashicons dashicons-star-filled"></span></td><td><a href="https://emdplugins.com/employee-spotlight-employee-milestone-widgets/?pk_campaign=employee-spotlight-com&pk_kwd=getting-started">Celebrate employee with milestone widgets.</a></td><td> - Premium feature (included in Pro)</td></tr>
<tr><td><span class="dashicons dashicons-star-filled"></span></td><td><a href="https://emdplugins.com/employee-spotlight-self-service-give-power-to-your-employees/?pk_campaign=employee-spotlight-com&pk_kwd=getting-started">Let team members update their own info.</a></td><td> - Premium feature (included in Pro)</td></tr>
<tr><td><span class="dashicons dashicons-star-filled"></span></td><td><a href="https://emdplugins.com/employee-spotlight-drag-drop-ordering/?pk_campaign=employee-spotlight-com&pk_kwd=getting-started">Display team members exactly how you want by drag and drop.</a></td><td> - Premium feature (included in Pro)</td></tr>
<tr><td><span class="dashicons dashicons-star-filled"></span></td><td><a href="https://emdplugins.com/employee-spotlight-awesome-layout-options/?pk_campaign=employee-spotlight-com&pk_kwd=getting-started">Offer a seamless look for your brand across your website</a></td><td> - Premium feature (included in Pro)</td></tr>
<tr><td><span class="dashicons dashicons-star-filled"></span></td><td><a href="https://emdplugins.com/employee-spotlight-instant-notifications/?pk_campaign=employee-spotlight-com&pk_kwd=getting-started">Keep everyone posted on new hires.</a></td><td> - Premium feature (included in Pro)</td></tr>
<tr><td><span class="dashicons dashicons-star-filled"></span></td><td><a href="https://emdplugins.com/employee-spotlight-assign-roles-to-your-team/?pk_campaign=employee-spotlight-com&pk_kwd=getting-started">Decide who has access to what with custom user roles.</a></td><td> - Premium feature (included in Pro)</td></tr>
<tr><td><span class="dashicons dashicons-star-filled"></span></td><td><a href="https://emdplugins.com/employee-spotlight-create-custom-groups/?pk_campaign=employee-spotlight-com&pk_kwd=getting-started">Create advanced shortcodes with a few clicks.</a></td><td> - Premium feature (included in Pro)</td></tr>
<tr><td><span class="dashicons dashicons-star-filled"></span></td><td><a href="https://emdplugins.com/employee-spotlight-99-ways-to-power-up-your-team-members/?pk_campaign=employee-spotlight-com&pk_kwd=getting-started">99 different ways to display team members.</a></td><td> - Premium feature (included in Pro)</td></tr>
<tr><td><span class="dashicons dashicons-star-filled"></span></td><td><a href="https://emdplugins.com/employee-spotlight-microsoft-active-directoryldap-addon/?pk_campaign=employee-spotlight-com&pk_kwd=getting-started">Sync employee records with Microsoft Active Directory/LDAP.</a></td><td> - Add-on</td></tr>
<tr><td><span class="dashicons dashicons-star-filled"></span></td><td><a href="https://emdplugins.com/employee-spotlight-smart-search-and-columns-addon/?pk_campaign=employee-spotlight-com&pk_kwd=getting-started">Search and organize employee information.</a></td><td> - Add-on</td></tr>
<tr><td><span class="dashicons dashicons-star-filled"></span></td><td><a href="https://emdplugins.com/employee-spotlight-vcard-addon/?pk_campaign=employee-spotlight-com&pk_kwd=getting-started">Save employee information as vcard.</a></td><td> - Add-on</td></tr>
<tr><td><span class="dashicons dashicons-star-filled"></span></td><td><a href="https://emdplugins.com/employee-spotlight-importexport-addon/?pk_campaign=employee-spotlight-com&pk_kwd=getting-started">Import/export employee records from/to CSV easily.</a></td><td> - Add-on (included in Pro)</td></tr>
</table>
<?php echo '</div>';
	echo '<div class="tab-content" id="tab-resources"';
	if ("resources" != $active_tab) {
		echo 'style="display:none;"';
	}
	echo '>';
?>
<div style="height:25px" id="ptop"></div><div class="toc"><h3 style="color:#0073AA;text-align:left;">Upgrade your game for better results</h3><ul><li><a href="#gs-sec-165">Extensive documentation is available</a></li>
<li><a href="#gs-sec-169">How to resolve theme related issues</a></li>
</ul></div><div class="emd-section changelog resources resources-165" style="margin:0"><div style="height:40px" id="gs-sec-165"></div><h2>Extensive documentation is available</h2><div id="gallery" class="wp-clearfix"></div><div class="sec-desc"><a href="https://docs.emdplugins.com/docs/employee-spotlight-community-documentation">Employee Spotlight Community Documentation</a></div></div><div style="margin-top:15px"><a href="#ptop" class="top">Go to top</a></div><hr style="margin-top:40px"><div class="emd-section changelog resources resources-169" style="margin:0"><div style="height:40px" id="gs-sec-169"></div><h2>How to resolve theme related issues</h2><div id="gallery" class="wp-clearfix"><div class="sec-img gallery-item"><a class="thickbox tooltip" rel="gallery-169" href="https://emdsnapshots.s3.amazonaws.com/emd_templating_system.png"><img src="https://emdsnapshots.s3.amazonaws.com/emd_templating_system.png"></a></div></div><div class="sec-desc"><p>If your theme is not coded based on WordPress theme coding standards, does have an unorthodox markup or its style.css is messing up how Employee Spotlight Community pages look and feel, you will see some unusual changes on your site such as sidebars not getting displayed where they are supposed to or random text getting displayed on headers etc. after plugin activation.</p>
<p>The good news is Employee Spotlight Community plugin is designed to minimize theme related issues by providing two distinct templating systems:</p>
<ul>
<li>The EMD templating system is the default templating system where the plugin uses its own templates for plugin pages.</li>
<li>The theme templating system where Employee Spotlight Community uses theme templates for plugin pages.</li>
</ul>
<p>The EMD templating system is the recommended option. If the EMD templating system does not work for you, you need to check "Disable EMD Templating System" option at Settings > Tools tab and switch to theme based templating system.</p>
<p>Please keep in mind that when you disable EMD templating system, you loose the flexibility of modifying plugin pages without changing theme template files.</p>
<p>If none of the provided options works for you, you may still fix theme related conflicts following the steps in <a href="https://docs.emdplugins.com/docs/employee-spotlight-community-documentation">Employee Spotlight Community Documentation - Resolving theme related conflicts section.</a></p>

<div class="quote">
<p>If you’re unfamiliar with code/templates and resolving potential conflicts, <a href="https://emdplugins.com/open-a-support-ticket/?pk_campaign=raq-hireme&ticket_topic=pre-sales-questions"> do yourself a favor and hire us</a>. Sometimes the cost of hiring someone else to fix things is far less than doing it yourself. We will get your site up and running in no time.</p>
</div></div></div><div style="margin-top:15px"><a href="#ptop" class="top">Go to top</a></div><hr style="margin-top:40px">

<?php echo '</div>'; ?>
<?php echo '</div>';
}
