<?php
/**
 *  {$action_name}.php
 *
 *  @author     {$author}
 *  @package    Myproject
 *  @version    $Id$
 */
chdir(dirname(__FILE__));
require_once '{$dir_app}/Myproject_Controller.php';

ini_set('max_execution_time', 0);

Myproject_Controller::main_CLI('Myproject_Controller', '{$action_name}');
?>
