<?php


// Add Menu to Dashboard
function add_theme_menu_item()
{
	add_menu_page("Theme Panel", "Theme Panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}
add_action("admin_menu", "add_theme_menu_item");


// Add a section to the Theme Panel
function theme_settings_page(){
    ?>
	    <div class="wrap">
	    <h1>Theme Panel</h1>
	    <form method="post" action="options.php">
	        <?php
	            settings_fields("section");
	            do_settings_sections("theme-options");      
	            submit_button(); 
	        ?>          
	    </form>
		</div>
	<?php
}


// Social URL input fields
function display_facebook_element()
{
	?>
    	<input type="text" size="60" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
    <?php
}
function display_instagram_element()
{
	?>
    	<input type="text" size="60" name="instagram_url" id="instagram_url" value="<?php echo get_option('instagram_url'); ?>" />
    <?php
}
function display_pinterest_element()
{
	?>
    	<input type="text" size="60" name="pinterest_url" id="pinterest_url" value="<?php echo get_option('pinterest_url'); ?>" />
    <?php
}



function display_theme_panel_fields()
{
	add_settings_section("section", "All Settings", null, "theme-options");
    
    add_settings_field("facebook_url", "Facebook URL", "display_facebook_element", "theme-options", "section");
    add_settings_field("instagram_url", "Instagram URL", "display_instagram_element", "theme-options", "section");
	add_settings_field("pinterest_url", "Pinterest URL", "display_pinterest_element", "theme-options", "section");

    register_setting("section", "facebook_url");
    register_setting("section", "instagram_url");
	register_setting("section", "pinterest_url");
    
}

add_action("admin_init", "display_theme_panel_fields");

?>