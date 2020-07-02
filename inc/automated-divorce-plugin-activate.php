<?php
/*
 * @package           Automated Divorce
 */

 class automatedDivorcePluginActivate{
 	public static function activate(){

		register_post_type('ad_post', ['public'=>true, 'label' => 'Automated Divorce']);
 		flush_rewrite_rules();
 	}



 }