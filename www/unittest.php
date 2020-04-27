<?php
error_reporting(E_ALL);
require_once dirname(__FILE__) . '/../app/Wol_Controller.php';

Wol_Controller::main('Wol_Controller', array(
    '__ethna_unittest__',
    )
);
?>
