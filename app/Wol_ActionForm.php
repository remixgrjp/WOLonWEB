<?php
// vim: foldmethod=marker
/** ＵＴＦ８
* Wol_ActionForm.php
*
* @author   remix
* @package Wol
* @version $Id$
*/

// {{{ Wol_ActionForm
/**
* ActionForm class.
*
* @author  remix
* @package Wol
* @access  public
*/
class Wol_ActionForm extends Ethna_ActionForm
{
	/**#@+
	*  @access private
	*/

	/** @var	array   form definition (default) */
	var $form_template = array(
		'mac'    => array(
			'name'   => 'MacAddress',
			'filter' => 'ltrim,rtrim',
			'regexp' => '/^[0-9a-f]{2}(-[0-9a-f]{2}){5}$/i',
		),
		'bcast'  => array(
			'name'   => 'BroadcastAddress',
			'filter' => 'ltrim,rtrim',
			'regexp' => '/^([1-2]?[0-9]{0,2}\.){3,3}[1-2]?[0-9]{0,2}$/',
		),
		'port'   => array(
			'name'   => 'Port',
			'type'   => VAR_TYPE_INT,
			'filter' => 'ltrim,rtrim',
		),
		'key'    => array(
			'name'   => 'LicenceKey',
			'filter' => 'ltrim,rtrim',
		),
	);

	/**#@-*/

	/**
	* Error handling of form input validation.
	*
	* @access public
	* @param  string	  $name   form item name.
	* @param  int		 $code   error code.
	*/
	function handleError( $name, $code ){
		return parent::handleError($name, $code);
	}

	/**
	*  setter method for form template.
	*
	*  @access protected
	*  @param  array   $form_template  form template
	*  @return array   form template after setting.
	*/
	function _setFormTemplate( $form_template ){
		return parent::_setFormTemplate($form_template);
	}

	/**
	*  setter method for form definition.
	*
	*  @access protected
	*/
	function _setFormDef(){
		return parent::_setFormDef();
	}
}
// }}}
