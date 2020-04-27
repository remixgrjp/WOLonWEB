<?php
/** ＵＴＦ８
* Index.php
*
* @author  remix
* @package Wol
* @version $Id$
*/

/**
* Index Form implementation.
*
* @author  remix
* @access  public
* @package Wol
*/
class Wol_Form_Index extends Wol_ActionForm
{
	/**
	*  @access private
	*  @var    array   form definition.
	*/
	var $form = array(
		'mac'    => array(),
		'bcast'  => array(),
		'port'   => array(),
		'key'    => array(),
	);

	/**
	* Form input value convert filter : sample
	*
	* @access protected
	* @param  mixed $value Form Input Value
	* @return mixed        Converted result.
	*/
/*
	function _filter_sample($value){
		//  convert to upper case.
		return strtoupper($value);
	}
*/
}

/**
* Index action implementation.
*
* @author  remix
* @access  public
* @package Wol
*/
class Wol_Action_Index extends Wol_ActionClass
{
	/**
	* preprocess of Index Action.
	*
	* @access public
	* @return string forward name(null: success.
	*                            false: in case you want to exit.)
	*/
	function prepare(){
		return null;
	}

	/**
	* Index action implementation.
	*
	* @access public
	* @return string  forward name.
	*/
	function perform(){
		return 'Index';
	}
}
