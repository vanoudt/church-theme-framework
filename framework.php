<?php/** * Church Theme Framework * by churchthemes.com * * The framework provides code and assets common to multiple themes for more organized and efficient development/updates. * It is intended for use in themes that use the Church Content Manager plugin. *//******************************************** * CONSTANTS ********************************************/ /** * Universal Constants * * These are used by both the theme and the framework itself. */$theme_data = wp_get_theme();// Framework Dataif ( ! defined( 'CTC_FW_VERSION' ) )	define( 'CTC_FW_VERSION', 	'0.7.1' ); 							// March 22, 2013// Theme Dataif ( ! defined( 'CTC_VERSION' ) )		define( 'CTC_VERSION', 		$theme_data->Version );				// specified in style.css (child theme version if used)if ( ! defined( 'CTC_TEMPLATE' ) )		define( 'CTC_TEMPLATE', 	$theme_data->template );			// parent theme's folder (theme slug)// Parent/Child Theme Constantsif ( ! defined( 'CTC_THEME_PATH' ) )	define( 'CTC_THEME_PATH', 	get_template_directory() );			// parent theme pathif ( ! defined( 'CTC_THEME_URL' ) )		define( 'CTC_THEME_URL', 	get_template_directory_uri() );		// parent theme URIif ( ! defined( 'CTC_CHILD_PATH' ) )	define( 'CTC_CHILD_PATH', 	get_stylesheet_directory() );		// child theme pathif ( ! defined( 'CTC_CHILD_URL' ) )		define( 'CTC_CHILD_URL', 	get_stylesheet_directory_uri() );	// child theme URI// Theme Directories// (theme and framework structure mirror each other)if ( ! defined( 'CTC_INC_DIR' ) )		define( 'CTC_INC_DIR',		'includes' );						// includes directoryif ( ! defined( 'CTC_ADMIN_DIR' ) )		define( 'CTC_ADMIN_DIR',	CTC_INC_DIR . '/admin' );			// admin directoryif ( ! defined( 'CTC_CLASS_DIR' ) )		define( 'CTC_CLASS_DIR', 	CTC_INC_DIR . '/classes' );			// classes directoryif ( ! defined( 'CTC_LIB_DIR' ) )		define( 'CTC_LIB_DIR', 		CTC_INC_DIR . '/libraries' );		// libraries directoryif ( ! defined( 'CTC_PAGE_TPL_DIR' ) )	define( 'CTC_PAGE_TPL_DIR',	'page-templates' );					// page templates directoryif ( ! defined( 'CTC_WIDGET_DIR' ) )	define( 'CTC_WIDGET_DIR', 	'widget-templates' );				// widget templates directoryif ( ! defined( 'CTC_CSS_DIR' ) )		define( 'CTC_CSS_DIR', 		'css' );							// stylesheets directoryif ( ! defined( 'CTC_JS_DIR' ) )		define( 'CTC_JS_DIR', 		'js' );								// JavaScript directoryif ( ! defined( 'CTC_IMG_DIR' ) )		define( 'CTC_IMG_DIR', 		'images' );							// images directoryif ( ! defined( 'CTC_COLOR_DIR' ) )		define( 'CTC_COLOR_DIR',	'colors' );					// color schemes directoryif ( ! defined( 'CTC_LANG_DIR' ) )		define( 'CTC_LANG_DIR', 	'languages' );						// languages directory// Framework Directories// (theme and framework structure mirror each other)if ( ! defined( 'CTC_FW_DIR' ) )		define( 'CTC_FW_DIR',		basename( dirname( __FILE__) ) );	// framework directory (where this file is)if ( ! defined( 'CTC_FW_INC_DIR' ) )	define( 'CTC_FW_INC_DIR',	CTC_FW_DIR . '/' . CTC_INC_DIR );	// framework includes directoryif ( ! defined( 'CTC_FW_ADMIN_DIR' ) )	define( 'CTC_FW_ADMIN_DIR',	CTC_FW_DIR . '/' . CTC_ADMIN_DIR );	// framework admin directoryif ( ! defined( 'CTC_FW_CLASS_DIR' ) )	define( 'CTC_FW_CLASS_DIR',	CTC_FW_DIR . '/' . CTC_CLASS_DIR );	// framework classes directoryif ( ! defined( 'CTC_FW_LIB_DIR' ) )	define( 'CTC_FW_LIB_DIR',	CTC_FW_DIR . '/' . CTC_LIB_DIR );	// framework libraries directoryif ( ! defined( 'CTC_FW_CSS_DIR' ) )	define( 'CTC_FW_CSS_DIR', 	CTC_FW_DIR . '/' . CTC_CSS_DIR );	// framework stylesheets directoryif ( ! defined( 'CTC_FW_JS_DIR' ) )		define( 'CTC_FW_JS_DIR', 	CTC_FW_DIR . '/' . CTC_JS_DIR );	// framework JavaScript directoryif ( ! defined( 'CTC_FW_IMG_DIR' ) )	define( 'CTC_FW_IMG_DIR', 	CTC_FW_DIR . '/' . CTC_IMG_DIR );	// framework images directory/******************************************** * INCLUDES ********************************************//** * Include Files */// Functions$ctc_fw_includes = array(	// Frontend or Admin	'always' => array(			// Functions		CTC_FW_INC_DIR . '/localization.php',		CTC_FW_INC_DIR . '/dependencies.php',		CTC_FW_INC_DIR . '/support.php',		CTC_FW_INC_DIR . '/compatibility.php',		CTC_FW_INC_DIR . '/options.php',		CTC_FW_INC_DIR . '/customize.php',		CTC_FW_INC_DIR . '/colors.php',		CTC_FW_INC_DIR . '/fonts.php',		CTC_FW_INC_DIR . '/media.php',		CTC_FW_INC_DIR . '/head.php',		CTC_FW_INC_DIR . '/menus.php',			CTC_FW_INC_DIR . '/pagination.php',		CTC_FW_INC_DIR . '/templates.php',		CTC_FW_INC_DIR . '/template-tags.php',		CTC_FW_INC_DIR . '/comments.php',		CTC_FW_INC_DIR . '/sidebars.php',		CTC_FW_INC_DIR . '/widgets.php',		CTC_FW_INC_DIR . '/pages.php',		CTC_FW_INC_DIR . '/archives.php',		CTC_FW_INC_DIR . '/sermons.php',		CTC_FW_INC_DIR . '/events.php',		CTC_FW_INC_DIR . '/gallery.php',		CTC_FW_INC_DIR . '/helpers.php',		CTC_FW_INC_DIR . '/maps.php',		CTC_FW_INC_DIR . '/shortcodes.php',		CTC_FW_INC_DIR . '/deprecated.php',				// Classes		CTC_FW_CLASS_DIR . '/customize-controls.php',		CTC_FW_CLASS_DIR . '/widget.php',				// Libraries		CTC_FW_LIB_DIR . '/ct-options/ct-options.php',			),	// Admin Only	'admin' => array(			// Functions		CTC_FW_ADMIN_DIR . '/activation.php',		CTC_FW_ADMIN_DIR . '/update.php',		CTC_FW_ADMIN_DIR . '/admin-css.php',		CTC_FW_ADMIN_DIR . '/admin-js.php',		CTC_FW_ADMIN_DIR . '/admin-menu.php',		CTC_FW_ADMIN_DIR . '/admin-widgets.php',		CTC_FW_ADMIN_DIR . '/meta-boxes.php',				// Libraries		CTC_FW_LIB_DIR . '/ct-meta-box/ct-meta-box.php',	),		// Frontend Only	'frontend' => array (			// Functions		CTC_FW_INC_DIR . '/content.php',		CTC_FW_INC_DIR . '/download.php',		// Classes		CTC_FW_CLASS_DIR . '/walker-nav-menu-description.php',		CTC_FW_CLASS_DIR . '/breadcrumbs.php',	),);// Include Files$ctc_fw_includes = apply_filters( 'ctc_fw_includes', $ctc_fw_includes ); // make filterablectc_load_includes( $ctc_fw_includes );/** * Include Loader Function * * Used by framework above and function.php for theme-specific includes. * If include exists in child theme, it will be used. Otherwise, parent theme file is used. */function ctc_load_includes( $includes ) {			// Loop conditions	foreach ( $includes as $condition => $files ) {			// Check condition		$do_includes = false;		switch( $condition ) {						// Admin Only			case 'admin':							if ( is_admin() ) {					$do_includes = true;				}								break;							// Frontend Only			case 'frontend':							if ( ! is_admin() ) {					$do_includes = true;				}								break;							// Admin or Frontend (always)			default:							$do_includes = true;								break;								}			// Loop files if condition met		if ( $do_includes ) {					foreach( $files as $file ) {					locate_template( $file, true ); // include from child theme first, then parent theme			}					}			}}