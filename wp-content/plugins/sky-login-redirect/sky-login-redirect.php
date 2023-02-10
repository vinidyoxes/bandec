<?php

/**
 * Plugin Name: Sky Login Redirect
 * Plugin URI: https://utopique.net/products/sky-login-redirect-premium/
 * Description: Redirects users to the page they were prior to logging in or out.
 * Features an awesome login customizer.
 * Version: 3.6.7
 * Author: Utopique
 * Author URI: https://utopique.net/
 * Developer: Utopique
 * Developer URI: https://utopique.net/
 * Copyright: (c) 2009-2022 Utopique
 * Text Domain: sky-login-redirect
 * Domain Path: /languages
 * License: GPLv2 or later
 * Requires at least: 4.7
 * Tested up to: 6.1.1
 * Requires PHP: 7
 * WC requires at least: 3.3
 * WC tested up to: 7.2
 * PHP version 7
 *
 * @category        Login_Redirect
 * @package         Sky_Login_Redirect
 * @author          Utopique <support@utopique.net>
 * @license         GPL https://utopique.net
 * @link            https://utopique.net
 */
namespace SkyLoginRedirect\Plugin;


if ( !defined( 'ABSPATH' ) ) {
    exit;
    // Exit if accessed directly
}

// current version
define( 'SLR_VERSION', '3.6.7' );
/**
 * FS
 */

if ( function_exists( __NAMESPACE__ . '\\Sky_Login_Redirect_fs' ) ) {
    Sky_Login_Redirect_fs()->set_basename( false, __FILE__ );
} else {
    
    if ( !function_exists( __NAMESPACE__ . '\\Sky_Login_Redirect_fs' ) ) {
        /**
         * Create a helper function for easy SDK access.
         *
         * @return $Sky_Login_Redirect_fs
         */
        function Sky_Login_Redirect_fs()
        {
            global  $Sky_Login_Redirect_fs ;
            
            if ( !isset( $Sky_Login_Redirect_fs ) ) {
                /**
                 * Include Freemius SDK.
                 */
                include_once dirname( __FILE__ ) . '/freemius/start.php';
                $Sky_Login_Redirect_fs = fs_dynamic_init( array(
                    'id'             => '3088',
                    'slug'           => 'sky-login-redirect',
                    'type'           => 'plugin',
                    'public_key'     => 'pk_f0e9c9d4e383120cf38d5b44b586b',
                    'is_premium'     => false,
                    'premium_suffix' => 'Pro',
                    'has_addons'     => false,
                    'has_paid_plans' => true,
                    'menu'           => array(
                    'slug' => 'sky-login-redirect',
                ),
                    'is_live'        => true,
                ) );
            }
            
            return $Sky_Login_Redirect_fs;
        }
        
        // Init Freemius.
        Sky_Login_Redirect_fs();
        // Signal that SDK was initiated.
        do_action( 'Sky_Login_Redirect_fs_loaded' );
    }
    
    /**
     * Load plugin translations
     *
     * @return translation
     */
    function Slr_Load_Plugin_textdomain()
    {
        load_plugin_textdomain( 'sky-login-redirect', false, basename( dirname( __FILE__ ) ) . '/languages/' );
    }
    
    add_action( 'plugins_loaded', __NAMESPACE__ . '\\Slr_Load_Plugin_textdomain' );
    /**
     * Charge notre dépendance Carbon Fields via Composer
     *
     * @return void
     */
    function Sky_Load_carbonfields()
    {
        include_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';
        \Carbon_Fields\Carbon_Fields::boot();
    }
    
    add_action( 'after_setup_theme', __NAMESPACE__ . '\\Sky_Load_carbonfields' );
    /**
     * Charge notre fichier de plugin
     *
     * @return void
     */
    function Sky_Load_plugin()
    {
        include_once plugin_dir_path( __FILE__ ) . 'includes/options.php';
    }
    
    add_action( 'plugins_loaded', __NAMESPACE__ . '\\Sky_Load_plugin' );
    /**
     * Add settings link to plugins page
     *
     * @param $links the existing links underneath the plugin name
     *
     * @return $links
     */
    function Slr_Settings_link( $links )
    {
        $settings_link = sprintf( '<a href="%s">%s</a>', esc_url( admin_url( 'admin.php?page=sky-login-redirect' ) ), __( 'Settings', 'sky-login-redirect' ) );
        array_unshift( $links, $settings_link );
        // or array_push
        return $links;
    }
    
    $plugin = plugin_basename( __FILE__ );
    add_filter(
        "plugin_action_links_{$plugin}",
        __NAMESPACE__ . '\\Slr_Settings_link',
        10,
        1
    );
    /**
     * Add additional useful links to plugins page
     *
     * @param $links the links array
     * @param $file  the plugin file
     *
     * @return array
     */
    function Slr_Row_meta( $links, $file )
    {
        
        if ( $file === plugin_basename( __FILE__ ) ) {
            $support = 'https://wordpress.org/support/plugin/sky-login-redirect/';
            $row_meta = array(
                'docs'    => '<a href="' . esc_url( apply_filters( 'slr_docs_url', 'https://utopique.net/docs/' ) ) . '" title="' . esc_attr( __( 'View Documentation', 'sky-login-redirect' ) ) . '">' . __( 'Docs', 'sky-login-redirect' ) . '</a>',
                'support' => '<a href="' . esc_url( apply_filters( 'slr_support_url', $support ) ) . '" title="' . esc_attr( __( 'Contact support', 'sky-login-redirect' ) ) . '">' . __( 'Support', 'sky-login-redirect' ) . '</a>',
                'rate'    => '<a href="' . esc_url( apply_filters( 'slr_rate', $support . 'reviews/?rate=5#new-post' ) ) . '" target="_blank" title="' . esc_attr( __( 'Rate Sky Login Redirect', 'sky-login-redirect' ) ) . '">' . __( 'Rate us', 'sky-login-redirect' ) . '</a>',
            );
            return array_merge( $links, $row_meta );
        }
        
        return (array) $links;
    }
    
    add_filter(
        'plugin_row_meta',
        __NAMESPACE__ . '\\Slr_Row_meta',
        10,
        2
    );
    /**
     * Show credits line
     *
     * @param $footer_text the footer text
     *
     * @return mixed
     */
    function Slr_Admin_credits( $footer_text )
    {
        $current_screen = get_current_screen();
        $hook = $current_screen->id;
        $array = [ 'toplevel_page_sky-login-redirect', 'login-redirect_page_sky-login-redirect-account', 'login-redirect_page_sky-login-redirect-contact' ];
        if ( !in_array( $hook, $array ) ) {
            return $footer_text;
        }
        $footer_text = sprintf( __( 'Thank you for using <a href="%s" target="_blank">%s</a>', 'sky-login-redirect' ), 'https://utopique.net/products/sky-login-redirect-premium/', __( 'Sky Login Redirect', 'sky-login-redirect' ) );
        $footer_text .= ' &bull; ' . sprintf( __( 'Check out the <a href="%s" target="_blank">%s</a>', 'sky-login-redirect' ), 'https://utopique.net/docs-category/login-redirect-pro/', __( 'documentation', 'sky-login-redirect' ) );
        $Sky_Login_Redirect_fs = Sky_Login_Redirect_fs();
        if ( $Sky_Login_Redirect_fs->is_not_paying() || $Sky_Login_Redirect_fs->is_free_plan() ) {
            $footer_text .= ' &bull; ' . sprintf( __( '<strong><a href="%s">%s</strong></a>', 'sky-login-redirect' ), $Sky_Login_Redirect_fs->get_upgrade_url(), __( 'Go Pro', 'sky-login-redirect' ) );
        }
        return $footer_text;
    }
    
    add_filter( 'admin_footer_text', __NAMESPACE__ . '\\Slr_Admin_credits' );
    /**
     * Sky_Maybe_Is_ssl
     *
     * @return true if ssl is enabled
     */
    function Sky_Maybe_Is_ssl()
    {
        // cloudflare
        
        if ( !empty($_SERVER['HTTP_CF_VISITOR']) ) {
            $cfo = json_decode( $_SERVER['HTTP_CF_VISITOR'] );
            if ( isset( $cfo->scheme ) && 'https' === $cfo->scheme ) {
                return true;
            }
        }
        
        // other proxy
        if ( !empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && 'https' === $_SERVER['HTTP_X_FORWARDED_PROTO'] ) {
            return true;
        }
        return ( function_exists( 'is_ssl' ) ? is_ssl() : false );
    }
    
    /**
     * Sky_Get_referer
     *
     * Get referer via cookie if it is not set via wp_get_referer()
     *
     * @return url
     */
    function Sky_Get_referer()
    {
        // check for a referer
        $referer = wp_get_referer();
        // cookie options array
        $cookie_options = [
            'expires'  => time() + HOUR_IN_SECONDS,
            'path'     => COOKIEPATH,
            'domain'   => COOKIE_DOMAIN,
            'secure'   => Sky_Maybe_Is_ssl(),
            'httponly' => Sky_Maybe_Is_ssl(),
            'samesite' => 'Strict',
        ];
        // if there is one, save it to a cookie
        
        if ( !empty($referer) ) {
            //setcookie( "referer_url", $referer, time()+3600 );
            setcookie( "referer_url", $referer, $cookie_options );
        } else {
            // if no referer, check for a previously-saved cookie
            
            if ( isset( $_COOKIE['referer_url'] ) ) {
                // sweet, get it from the cookie
                $referer = $_COOKIE['referer_url'];
            } else {
                // get redir if it exists
                $redirection = ( isset( $_REQUEST['redirect_to'] ) ? esc_url_raw( $_REQUEST['redirect_to'] ) : '' );
                //$redirection = esc_url_raw( $_REQUEST['redirect_to'] );
                
                if ( !empty($redirection) ) {
                    $referer = $redirection;
                    //setcookie( "referer_url", $referer, time()+3600 );
                    setcookie( "referer_url", $referer, $cookie_options );
                }
            
            }
        
        }
        
        return $referer;
    }
    
    /**
     * Redirection for login and logout
     *
     * @param mixed $redirect_to           the redirect
     * @param mixed $requested_redirect_to the requested redirect
     * @param array $user                  the current user
     *
     * @return $redirect
     */
    function Slr_redirection( $redirect_to, $requested_redirect_to, $user )
    {
        $slr_xselect_redirect = carbon_get_theme_option( 'slr_xlogin_logout' );
        // if a redirect_to parameter exists in the URL, honor it
        if ( isset( $_GET['redirect_to'] ) && !empty($_GET['redirect_to']) ) {
            return esc_url_raw( $_GET['redirect_to'] );
        }
        // do not activate this line, it breaks all rules
        //if( $requested_redirect_to) { return $requested_redirect_to; }
        // bypass wp-admin for login
        // disabled in 3.6.0 as it was taking precedence over rules
        /*
        if (preg_match(
            "/wp-admin/",
            $requested_redirect_to
        ) && current_filter() === 'login_redirect') {
            $redirect_to = esc_url_raw($requested_redirect_to);
            return $redirect_to;
        }
        */
        // in case no rule were created, redirect all users to homepage
        if ( empty($slr_xselect_redirect) ) {
            return esc_url_raw( home_url( '/' ) );
        }
        foreach ( $slr_xselect_redirect as $rule ) {
            // user
            
            if ( $rule['slr_xselect_redirect'] == 'user' ) {
                //$current_user = wp_get_current_user();
                $current_user = $user;
                if ( $current_user && is_object( $current_user ) && is_a( $current_user, 'WP_User' ) ) {
                    foreach ( $rule['slr_xuser'] as $usr ) {
                        $usrID = $usr;
                        $str = $usrID;
                        $start = strpos( $str, '(' );
                        $end = strpos( $str, ')', $start + 1 );
                        $length = $end - $start;
                        $result = substr( $str, $start + 1, $length - 1 );
                        $result = str_replace( 'ID=', '', $result );
                        $arr[$result] = array(
                            'name'   => $usrID,
                            'login'  => $rule['slr_xlogin_url'],
                            'logout' => $rule['slr_xlogout_url'],
                        );
                        foreach ( $arr as $key => $value ) {
                            
                            if ( $key == $current_user->ID ) {
                                $diff = str_replace( [ '_redirect', 'wp_ajax_nopriv_ajax' ], '', current_filter() );
                                // prior
                                
                                if ( $rule["slr_xselect_{$diff}"] == 'prior' ) {
                                    $link = Slr_Get_Prior_url( $redirect_to, $requested_redirect_to, $user );
                                    return $link;
                                    break;
                                } elseif ( $rule["slr_xselect_{$diff}"] == 'page' ) {
                                    // page
                                    $link = get_permalink( $rule["slr_x{$diff}_page"] );
                                    return $link;
                                    break;
                                } elseif ( $rule["slr_xselect_{$diff}"] == 'custom' ) {
                                    // custom
                                    $link = $rule["slr_x{$diff}_url"];
                                    return $link;
                                    break;
                                } else {
                                    // WP defaults
                                    return admin_url( '/' );
                                    break;
                                }
                            
                            }
                        
                        }
                    }
                }
            }
            
            /* role */
            if ( $rule['slr_xselect_redirect'] == 'role' ) {
                foreach ( $rule['slr_xrole'] as $role ) {
                    //retrieve current user info
                    global  $wp_roles ;
                    //$current_user = wp_get_current_user();
                    $current_user = $user;
                    $roles = $wp_roles->roles;
                    //is there a user to check?
                    if ( isset( $current_user->roles ) && is_array( $current_user->roles ) ) {
                        
                        if ( in_array( $current_user->roles[0], $rule['slr_xrole'] ) ) {
                            $diff = str_replace( [ '_redirect', 'wp_ajax_nopriv_ajax' ], '', current_filter() );
                            
                            if ( $rule["slr_xselect_{$diff}"] == 'prior' ) {
                                // prior
                                $link = Slr_Get_Prior_url( $redirect_to, $requested_redirect_to, $user );
                                return $link;
                                break;
                            } elseif ( $rule["slr_xselect_{$diff}"] == 'page' ) {
                                // page
                                $link = get_permalink( $rule["slr_x{$diff}_page"] );
                                return $link;
                                break;
                            } elseif ( $rule["slr_xselect_{$diff}"] == 'custom' ) {
                                // custom
                                $link = $rule["slr_x{$diff}_url"];
                                return $link;
                                break;
                            } else {
                                // WP defaults
                                return admin_url( '/' );
                                break;
                            }
                        
                        }
                    
                    }
                }
            }
            // all
            
            if ( $rule['slr_xselect_redirect'] == 'all' ) {
                //$diff = str_replace( ['_redirect'], '', current_filter());
                $diff = str_replace( [ '_redirect', 'wp_ajax_nopriv_ajax' ], '', current_filter() );
                
                if ( $rule["slr_xselect_{$diff}"] == 'prior' ) {
                    // prior
                    $link = Slr_Get_Prior_url( $redirect_to, $requested_redirect_to, $user );
                    return $link;
                    break;
                } elseif ( $rule["slr_xselect_{$diff}"] == 'page' ) {
                    // page
                    $link = get_permalink( $rule["slr_x{$diff}_page"] );
                    return $link;
                    break;
                } elseif ( $rule["slr_xselect_{$diff}"] == 'custom' ) {
                    // custom
                    $link = $rule["slr_x{$diff}_url"];
                    return $link;
                    break;
                } else {
                    // WP defaults
                    return admin_url( '/' );
                    break;
                }
            
            }
        
        }
    }
    
    add_filter(
        'login_redirect',
        __NAMESPACE__ . '\\Slr_redirection',
        100,
        3
    );
    add_filter(
        'logout_redirect',
        __NAMESPACE__ . '\\Slr_redirection',
        100,
        3
    );
    /**
     * Get prior URL
     *
     * @param mixed $redirect_to           the redirect
     * @param mixed $requested_redirect_to the requested redirect
     * @param array $user                  the current user
     *
     * @return $redirect_to
     */
    function Slr_Get_Prior_url( $redirect_to, $requested_redirect_to, $user )
    {
        $referer = Sky_Get_referer();
        /**
         * If the login page calls itself in $redirect_to,
         * avoid the loop and redirect to the homepage.
         * This would happen w/ password recovery and registration links.
         * It only concerns login, not logout
         * (otherwise it breaks the logout referer)
         */
        
        if ( preg_match( "/wp-login.php/", $redirect_to ) && current_filter() === 'login_redirect' ) {
            $redirect_to = esc_url_raw( home_url( '/' ) );
            return $redirect_to;
            //return '';
            //this will blank out if user has clicked on register link
            //or password recovery links before landing on the login page
        }
        
        // bypass wp-admin for login
        
        if ( preg_match( "/wp-admin/", $requested_redirect_to ) && current_filter() === 'login_redirect' ) {
            $redirect_to = esc_url_raw( $requested_redirect_to );
            return $redirect_to;
        }
        
        // logout: if we log out from wp-admin, redirect to homepage
        
        if ( preg_match( "/wp-admin/", filter_var( Sky_Get_referer(), FILTER_VALIDATE_URL ) ) && current_filter() === 'logout_redirect' ) {
            $redirect_to = esc_url_raw( home_url( '/' ) );
            return $redirect_to;
        }
        
        // If the referer is empty, go back to homepage.
        /* if( !$referer ) { $redirect_to = home_url('/'); return $redirect_to; } */
        // this bit is for when WP is installed in a subdirectory
        // if $referer equals the login page, get value from $redirect_to
        
        if ( preg_match( "/wp-login.php/", $referer ) && current_filter() === 'login_redirect' ) {
            $redirect_to = esc_url_raw( $redirect_to );
            return $redirect_to;
        }
        
        // Otherwise, go back to referring page.
        return $referer;
    }
    
    /**
     * Shortcode : [login-logout]
     *
     * @return mixed
     */
    function Slr_Login_Logout_shortcode()
    {
        
        if ( is_user_logged_in() ) {
            // user is logged in, therefore display the logout link
            // If you want to redirect the user to the same page after logout,
            // then use this line below instead
            return '<a class="logout-btn slr-lilo-shortcode" href="' . esc_url( wp_logout_url() ) . '">' . esc_html__( 'Logout', 'sky-login-redirect' ) . '</a>';
        } else {
            // user is logged out, therefore display the login link
            return '<a class="login-btn slr-lilo-shortcode" href="' . esc_url( wp_login_url() ) . '">' . esc_html__( 'Login', 'sky-login-redirect' ) . '</a>';
        }
    
    }
    
    add_shortcode( 'login-logout', __NAMESPACE__ . '\\Slr_Login_Logout_shortcode' );
    // Execute shortcodes in widget_text
    add_filter( 'widget_text', 'do_shortcode' );
    /**
     * Register Login Customizer
     *
     * @return void
     */
    function Slr_Register_Login_customizer()
    {
        include_once plugin_dir_path( __FILE__ ) . 'includes/login-customizer.php';
    }
    
    add_action( 'carbon_fields_register_fields', __NAMESPACE__ . '\\Slr_Register_Login_customizer' );
    /**
     * Get cached options from transient
     *
     * @param mixed $opt the options
     *
     * @return void
     */
    function Slr_Get_Cached_options( $opt )
    {
        global  $wpdb ;
        static  $opt = array() ;
        // get all the needed options with one query
        $options = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}options WHERE option_name LIKE '_slr_%'", ARRAY_A );
        // also maybe store the options in a transient?
        foreach ( $options as $option ) {
            unset( $option['option_id'] );
            unset( $option['autoload'] );
            $key = $option['option_name'];
            $opt[$key] = $option['option_value'];
        }
        // transient
        set_transient( 'sky_login_redirect', $opt, 0 );
        // 0 so that's never erased
        // option as backup
        update_option( 'sky_login_redirect', $opt );
        return $opt;
    }
    
    add_action( 'carbon_fields_theme_options_container_saved', __NAMESPACE__ . '\\Slr_Get_Cached_options' );
    /**
     * Getter : retrieve cached options from transient
     *
     * @param mixed $key  the key to retrieve
     * @param bool  $echo false by default
     *
     * @return mixed the value for a given key
     */
    function carbonade( $key, $echo = 'false' )
    {
        $transient = get_transient( 'sky_login_redirect' );
        if ( false === $transient ) {
            // this causes issues, don't use it
            //return carbon_get_theme_option( $key ) ?? '';
            $transient = get_option( 'sky_login_redirect' );
        }
        $key = '_' . $key;
        
        if ( $echo === true ) {
            echo  esc_html( $transient[$key] ) ?? '' ;
        } else {
            return $transient[$key] ?? '';
        }
    
    }
    
    /**
     * Enqueue scripts
     *
     * @param mixed $hook the current admin hook
     *
     * @return mixed styles and scripts
     */
    function Slr_Add_scripts( $hook )
    {
        $svg = plugins_url( 'lib/img/sky-login-redirect.svg', __FILE__ );
        wp_add_inline_style( 'mediaelement', "\n/* By default, we'll use the REDUCED MOTION version of the animation. */\n@keyframes in {\n    opacity: 1;\n}\n\n@keyframes out {\n    opacity: 1;\n}\n\n/*\n * Then, if the user has NO PREFERENCE for motion, we can OVERRIDE\n * the animation definition to include both the motion and non-motion properties.\n */\n\n @media ( prefers-reduced-motion: no-preference ) {\n    @keyframes in {\n        from { transform: rotate(0deg); }\n        to { transform: rotate(180deg);}\n    }\n\n    @keyframes out {\n        0%   { transform: rotate(180deg); }\n        100% { transform: rotate(0deg); }\n    }\n}\n\n#toplevel_page_sky-login-redirect .wp-menu-image {\n    background-color: rgb(162, 255, 55);\n    mask-image: url({$svg});\n    mask-repeat: no-repeat;\n    mask-position: center;\n    mask-size: 16px;\n    -webkit-mask-image: url({$svg});\n    -webkit-mask-repeat: no-repeat;\n    -webkit-mask-position: center;\n    -webkit-mask-size:16px;\n}\n\n#toplevel_page_sky-login-redirect .wp-menu-image:hover,\na.toplevel_page_sky-login-redirect:hover div.wp-menu-image {\n    backface-visibility: hidden;\n    perspective: 1000px;\n    animation: out 1s;\n}" );
        $array = [
            'toplevel_page_sky-login-redirect',
            'login-redirect_page_sky-login-redirect-account',
            'login-redirect_page_sky-login-redirect-contact',
            'login-redirect_page_sky-login-redirect-pricing'
        ];
        
        if ( in_array( $hook, $array ) ) {
            wp_enqueue_style(
                'utopique-elements',
                plugins_url( 'lib/css/elements.css', __FILE__ ),
                false,
                SLR_VERSION,
                'all'
            );
            wp_enqueue_style(
                'slr',
                plugins_url( 'lib/css/slr.css', __FILE__ ),
                false,
                SLR_VERSION,
                'all'
            );
            wp_enqueue_script(
                'slr-js',
                plugins_url( 'lib/js/slr.js', __FILE__ ),
                [ 'jquery' ],
                SLR_VERSION,
                true
            );
            wp_localize_script( 'slr-js', 'SLR', array(
                'upgrade_url'      => Sky_Login_Redirect_fs()->get_upgrade_url(),
                'pro_feature'      => __( 'unlock with Pro version', 'sky-login-redirect' ),
                'business_feature' => __( 'unlock with Business version', 'sky-login-redirect' ),
            ) );
            // Codemirror editor
            
            if ( $hook === $array[0] ) {
                $cm_css['codeEditor'] = wp_enqueue_code_editor( [
                    'type' => 'text/css',
                ] );
                wp_localize_script( 'jquery', 'cm_css', $cm_css );
                $cm_js['codeEditor'] = wp_enqueue_code_editor( [
                    'type' => 'text/html',
                ] );
                wp_localize_script( 'jquery', 'cm_js', $cm_js );
                wp_enqueue_script( 'wp-theme-plugin-editor' );
                wp_enqueue_style( 'wp-codemirror' );
            }
            
            // remove WP emoji on our pages
            remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
            remove_action( 'admin_print_styles', 'print_emoji_styles' );
            return;
        }
    
    }
    
    add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\\Slr_Add_scripts' );
}

// FS endif