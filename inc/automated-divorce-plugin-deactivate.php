<?php
/*
 * @package           Automated Divorce
 */

 class automatedDivorcePluginDeactivate
 {
 	public static function deacticate(){
 		flush_rewrite_rules();
 	}

 }