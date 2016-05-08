<?php
error_reporting(E_ALL);
require_once dirname(__FILE__) . '/../app/Myproject_Controller.php';

Myproject_Controller::main('Myproject_Controller', array(
    '__ethna_unittest__',
    )
);
?>
