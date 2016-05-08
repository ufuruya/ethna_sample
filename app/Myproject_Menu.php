<?php
/**
 *  Myproject_Menu.php
 *
 *  @author     {$author}
 *  @package    Myproject
 *  @version    $Id$
 */

/**
 *  Myproject_MenuManager
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Myproject
 */
class Myproject_MenuManager extends Ethna_AppManager
{
}

/**
 *  Myproject_Menu
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Myproject
 */
class Myproject_Menu extends Ethna_AppObject
{
    /**
     *  property display name getter.
     *
     *  @access public
     */
    function getName($key)
    {
        return $this->get($key);
    }
}

?>
