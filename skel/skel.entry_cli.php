<?php
/**
* {$action_name}.php
*
* @author  {$author}
* @package Wol
* @version $Id$
*/
chdir(dirname(__FILE__));
require_once '{$dir_app}/Wol_Controller.php';

ini_set( 'max_execution_time', 0 );

Wol_Controller::main_CLI( 'Wol_Controller', '{$action_name}' );
