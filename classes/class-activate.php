<?php
/**
 * This class is called upon activation of the plugin
 * Channels and countries are set
 */
class WooSEA_Activation {
	public $channel_statics;

	public static function activate_checks() {
$channel_statics = array (
			"All countries" => array (
			"Trataki" => array (
       		                	"channel_hash" => md5("Custom Feed"),
                        		"name" => "Trataki",
								"fields" => "customfeed",
								"taxonomy" => "none",
                        		"utm_source" => "Custom Feed",
                        		"type" => "Custom Feed" ) ),
			"Afghanistan" => array (),
			"Albania" => array (),
			"Algeria" => array (),
			"Andorra" => array (),
			"Angola" => array (),
			"Antigua & Deps" => array (),
			"Argentina" => array (),
			"Armenia" => array (),
			"Australia" => array (), 
        	"Austria" => array (),	
        	"Azerbaijan" => array (),	
        	"Bahamas" => array (),	
        	"Bahrain" => array (),	
        	"Bangladesh" => array (),	
        	"Barbados" => array (),	
        	"Belarus" => array (),	
			"Belgium" => array (),
			"Belize" => array (),
			"Benin" => array (),
			"Bhutan" => array (),
			"Bolivia" => array (),
			"Bosnia Herzegovina" => array (),
			"Botswana" => array (),
	        "Brazil" => array (),
			"Brunei" => array (),
	        "Bulgaria" => array (),
			"Burkina" => array (),
			"Burundi" => array (),
			"Cambodia" => array (),
			"Cameroon" => array (),
	        "Canada" => array (),
			"Cape Verder" => array (),
			"Central African Rep" => array (),
			"Chad" => array (),
		    "Chile" => array (),
			"China" => array (),
			"Colombia" => array (),
			"Comoros" => array (),
			"Congo" => array (),
			"Costa Rica" => array (),
			"Croatia" => array (),
			"Cuba" => array (),
			"Cyprus" => array (),
 		    "Czech Republic" => array (),
  		    "Denmark" => array (),
			"Djibouti" => array (),
			"Dominica" => array (),
			"Dominican Republic" => array (),
			"East Timor" => array (),
			"Ecuador" => array (),
			"Egypt" => array (),
			"El Salvador" => array (),
			"Equatorial Guinea" => array (),
			"Eritrea" => array (),
			"Estonia" => array (),
			"Ethiopia" => array (),
			"Fiji" => array (),
  		    "Finland" => array (),
  		    "France" => array (),
			"Gabon" => array (),
			"Gambia" => array (),
			"Georgia" => array (),
  		    "Germany" => array (),
			"Ghana" => array (),
  		    "Greece" => array (),
			"Grenada" => array (),
			"Guatemala" => array (),
			"Guinea" => array (),
			"Guinea-Bissau" => array (),
			"Guyana" => array (),
			"Haiti" => array (),
			"Honduras" => array (),
			"Hong Kong" => array (),
  		    "Hungary" => array (),
			"Iceland" => array (),
  		    "India" => array (),
			"Indonesia" => array (),
			"Iran" => array (),
			"Iraq" => array (),
  		    "Ireland" => array (),
			"Israel" => array (),
  		    "Italy" => array (),
			"Ivory Coast" => array (),
			"Jamaica" => array (),
  		    "Japan" => array (),
			"Jordan" => array (),
			"Kazakhstan" => array (),
			"Kenya" => array (),
			"Kiribati" => array (),
			"Korea North" => array (),
			"Korea South" => array (),
			"Kosovo" => array (),
			"Kuwait" => array (),
			"Kyrgyzstan" => array (),
			"Laos" => array (),
			"Latvia" => array (),
			"Lebanon" => array (),
			"Lesotho" => array (),
			"Liberia" => array (),
			"Libya" => array (),
			"Lichtenstein" => array (),
			"Lithuania" => array (),
			"Luxembourg" => array (),
			"Macedonia" => array (),
			"Madagascar" => array (),
			"Malawi" => array (),
			"Malaysia" => array (),
			"Maldives" => array (),
			"Mali" => array (),
			"Malta" => array (),
			"Marshall Islands" => array (),
			"Mauritania" => array (),
			"Mauritius" => array (),
  		    "Mexico" => array (),
			"Micronesia" => array (),
			"Moldova" => array (),
			"Monaco" => array (),
			"Mongolia" => array (),
			"Montenegro" => array (),
			"Morocco" => array (),
			"Mozambiqua" => array (),
			"Myanmar" => array (),
			"Namibia" => array (),
			"Nauru" => array (),
			"Nepal" => array (),
        	"Netherlands" => array (),
			"New Zealand" => array (),
			"Nicaragua" => array (),
			"Niger" => array (),
			"Nigeria" => array (),
  		    "Norway" => array (),
			"Oman" => array (),
			"Pakistan" => array (),
			"Palau" => array (),
			"Panama" => array (),
			"Papua New Guinea" => array (),
			"Paraguay" => array (),
			"Peru" => array (),
			"Philippines" => array (),
  		    "Poland" => array (),
  		    "Portugal" => array (),
			"Qatar" => array (),
  		    "Romania" => array (),
  		    "Russian Federation" => array (),
			"Rwanda" => array (),
			"St Kitts & Nevis" => array (),
			"St Lucia" => array (),
			"St Vincent & the Grenadines" => array (), 
			"Samoa" => array (),
			"San Marino" => array (),
			"Sao Tome & Principe" => array (),
			"Saudi Arabia" => array (),
			"Senegal" => array (),
  		    "Serbia" => array (),
			"Seychelles" => array (),
			"Sierra Leone" => array (),
			"Singapore" => array (),
  		    "Slovakia" => array (),
			"Slovenia" => array (),
			"Solomon Islands" => array (),
  		    "South Africa" => array (),
			"South Sudan" => array (), 
  		    "Spain" => array (), 
  		    "Sri Lanka" => array (),
			"Sudan" => array (),
			"Suriname" => array (),
			"Swaziland" => array (),
			"Sweden" => array (), 
  		    "Switzerland" => array (), 
			"Syria" => array (),
			"Taiwan" => array (),
			"Tajikistan" => array (),
			"Tanzania" => array (),
			"Thailand" => array (),
			"Togo" => array (),
			"Tonga" => array (),
			"Trinidad & Tobago" => array (),
			"Tunesia" => array (),
  		    "Turkey" => array (),
			"Turkmenistan" => array (),
			"Tuvalu" => array (),
			"Uganda" => array (),
  		    "Ukraine" => array (),
			"United Arab Emirates" => array (),
  		    "United Kingdom" => array (),
  		    "United States" => array (),
			"Uraguay" => array (),
			"Uzbekistan" => array (),
			"Vanuatu" => array (),
			"Vatican City" => array (),
			"Venezuela" => array (),
			"Vietnam" => array (),
			"Yemen" => array (),
			"Zambia" => array (),
			"Zimbabwe" => array (),
		);
		
		update_option( 'channel_statics', $channel_statics, 'no');
	        
		/**
        	 * Function for setting a cron job for regular creation of the feed
        	 * Will create a new event when an old one exists, which will be deleted first
        	 */
   		if (!wp_next_scheduled( 'woosea_cron_hook' ) ) {
                	wp_schedule_event ( time(), 'hourly', 'woosea_cron_hook');
            	} else {
                        wp_schedule_event ( time(), 'hourly', 'woosea_cron_hook');
              	}

		/**
		 * We check only once if this is a paid version of the plugin
		 * De-register the jQuery code after 30 secvonds
		 */
   		if (!wp_next_scheduled( 'woosea_deregister_hook' ) ) {
                	wp_schedule_single_event( time() + 30, 'woosea_deregister_hook');
		}

        	/**
        	 * Create notification object and get message and message type as WooCommerce is inactive
        	 * also set variable allowed on 0 to disable submit button on step 1 of configuration
        	 */
		if (!in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
		        $notifications_obj = new WooSEA_Get_Admin_Notifications;
		        $notifications_box = $notifications_obj->get_admin_notifications ( "1", "false" );
		}

		/**
	  	 * Enable some extra fields by default otherwise nothing shows on the product edit pages
	 	 */
		$extra_attributes = array (
    			"custom_attributes__woosea_mpn" 	=> "woosea mpn",
    			"custom_attributes__woosea_gtin" 	=> "woosea gtin",
    			"custom_attributes__woosea_ean" 	=> "woosea ean",
    			"custom_attributes__woosea_brand" 	=> "woosea brand"
		);
		if(!get_option( 'woosea_extra_attributes' )){
			update_option( 'woosea_extra_attributes', $extra_attributes );
		}

		/**
		 * Disable structured data JSON=LD changes by default
		 * User needs to enable this setting in the plugin section
		 */
		update_option( 'structured_data_fix', 'no' );

		/**
    		 * Register date of first activation of plugin
		 * We need this date in order to only show the
 		 * Review notification request once
		 */
		if(!get_option( 'woosea_first_activation')){
			update_option ( 'woosea_first_activation', time() );
		}

		if(!get_option( 'woosea_count_activation')){
			update_option ( 'woosea_count_activation', 1 );
		} else {
			$count_activation = get_option ( 'woosea_count_activation' );
			$new_activation = $count_activation+1;
			update_option ( 'woosea_count_activation', $new_activation );
		}
	}
}