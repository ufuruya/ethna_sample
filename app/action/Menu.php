<?php
/**
 *  Menu.php
 *
 *  @author     {$author}
 *  @package    Myproject
 *  @version    $Id$
 */

/**
 *  menu Form implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Myproject
 */
/* パラメーター */
class Myproject_Form_Menu extends Myproject_ActionForm
{
    /**
     *  @access private
     *  @var    array   form definition.
     */
    var $form = array(
        'name' => array(
            'type' => VAR_TYPE_STRING,
            'form_type' => FORM_TYPE_TEXT,
            'name' => 'メニュー',
            'max' => 40,
            'required' => true,
        ),
        'comment' => array(
            'type' => VAR_TYPE_STRING,
            'form_type' => FORM_TYPE_TEXTAREA,
            'name' => 'コメント',
            'max' => 140,
            'required' => true,
        ),
       /*
        *  TODO: Write form definition which this action uses.
        *  @see http://ethna.jp/ethna-document-dev_guide-form.html
        *
        *  Example(You can omit all elements except for "type" one) :
        *
        *  'sample' => array(
        *      // Form definition
        *      'type'        => VAR_TYPE_INT,    // Input type
        *      'form_type'   => FORM_TYPE_TEXT,  // Form type
        *      'name'        => 'Sample',        // Display name
        *  
        *      //  Validator (executes Validator by written order.)
        *      'required'    => true,            // Required Option(true/false)
        *      'min'         => null,            // Minimum value
        *      'max'         => null,            // Maximum value
        *      'regexp'      => null,            // String by Regexp
        *      'mbregexp'    => null,            // Multibype string by Regexp
        *      'mbregexp_encoding' => 'UTF-8',   // Matching encoding when using mbregexp 
        *
        *      //  Filter
        *      'filter'      => 'sample',        // Optional Input filter to convert input
        *      'custom'      => null,            // Optional method name which
        *                                        // is defined in this(parent) class.
        *  ),
        */
    );

    /**
     *  Form input value convert filter : sample
     *
     *  @access protected
     *  @param  mixed   $value  Form Input Value
     *  @return mixed           Converted result.
     */
    /*
    function _filter_sample($value)
    {
        //  convert to upper case.
        return strtoupper($value);
    }
    */
}

/**
 *  menu action implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Myproject
 */
class Myproject_Action_Menu extends Myproject_ActionClass
{
    /**
     *  preprocess of menu Action.
     *
     *  @access public
     *  @return string    forward name(null: success.
     *                                false: in case you want to exit.)
     */
/* validate */
    function prepare()
    {
        if ($this->af->validate() > 0) {
            return 'index';
        }
        return null;
    }

    /**
     *  menu action implementation.
     *
     *  @access public
     *  @return string  forward name.
     */
/* アプリケーションの処理 */
    function perform()
    {
        $menu = $this->backend->getObject('menu');
        $menu->importForm(OBJECT_IMPORT_IGNORE_NULL);
        $menu->add();

        return 'menu';
    }
}

?>
