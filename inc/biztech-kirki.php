<?php
// Main Panel
new \Kirki\Panel(
	'biztech_panel_id',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Biztech Options', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);

// Top Header Logo Section
function header_logo_kirki(){
    new \Kirki\Section(
	'header_logo',
	[
		'title'       => esc_html__( 'Header Logo', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'biztech_panel_id',
		'priority'    => 160,
	]
);
new \Kirki\Field\Image(
	[
		'settings'    => 'header_logo',
		'label'       => esc_html__( 'Header Logo', 'kirki' ),
		'description' => esc_html__( 'Upload your logo here', 'kirki' ),
		'section'     => 'header_logo',
		'default'     => get_template_directory_uri().'/assets/images/logo.png',
	]
);

}

header_logo_kirki();

// Top Header Cotact Section
function header_info_kirki(){
    new \Kirki\Section(
	'header_info',
	[
		'title'       => esc_html__( 'Header Info', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'biztech_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'timing',
		'label'    => esc_html__( 'Day and Time', 'kirki' ),
		'section'  => 'header_info',
		'default'  => esc_html__( 'Mon-Fri 8:00 am-6:00 pm', 'kirki' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'phone_number',
		'label'    => esc_html__( 'Phone Number', 'kirki' ),
		'section'  => 'header_info',
		'default'  => esc_html__( '+91-213-666-0027', 'kirki' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'email_address',
		'label'    => esc_html__( 'Email Address', 'kirki' ),
		'section'  => 'header_info',
		'default'  => esc_html__( 'info@example.com', 'kirki' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'address',
		'label'    => esc_html__( 'Address', 'kirki' ),
		'section'  => 'header_info',
		'default'  => esc_html__( 'Chicago 12, Melborne City, USA', 'kirki' ),
		'priority' => 10,
	]
);

}

header_info_kirki();



// Top Header Login Section
function header_login_info_kirki(){
new \Kirki\Section(
	'header_login_info',
	[
		'title'       => esc_html__( 'Header Login Info', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'biztech_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'login_button',
		'label'    => esc_html__( 'Login', 'kirki' ),
		'section'  => 'header_login_info',
		'default'  => esc_html__( 'Login', 'kirki' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'login_button_url',
		'label'    => esc_html__( 'Login', 'kirki' ),
		'section'  => 'header_login_info',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);

}
header_login_info_kirki();


// Top Header Social Icon Section
function header_social_kirki(){
new \Kirki\Section(
	'header_social_info',
	[
		'title'       => esc_html__( 'Header Social Info', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'biztech_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'social_fb',
		'label'    => esc_html__( 'Facebook URL', 'kirki' ),
		'section'  => 'header_social_info',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'social_tw',
		'label'    => esc_html__( 'Twitter URL', 'kirki' ),
		'section'  => 'header_social_info',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'social_in',
		'label'    => esc_html__( 'LinkedIn URL', 'kirki' ),
		'section'  => 'header_social_info',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);

}
header_social_kirki();


// Mobile Header Title
function mobile_header_kirki(){
new \Kirki\Section(
	'mobile_header_info',
	[
		'title'       => esc_html__( 'Mobile Header Info', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'biztech_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'free_consulting',
		'label'    => esc_html__( 'Free Consulting', 'kirki' ),
		'section'  => 'mobile_header_info',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);


}
mobile_header_kirki();


// Footer
function footer_kirki(){
new \Kirki\Section(
	'footer_info',
	[
		'title'       => esc_html__( 'Footer Info', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'biztech_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'footer_copywright',
		'label'    => esc_html__( 'Footer Copywright', 'kirki' ),
		'section'  => 'footer_info',
		'default'  => esc_html__( 'Copyright 2025 by biztech theme All Right Reserved.', 'kirki' ),
		'priority' => 10,
	]
);


}
footer_kirki();
