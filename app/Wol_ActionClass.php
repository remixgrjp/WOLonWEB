<?php
// vim: foldmethod=marker
/** ＵＴＦ８
* Wol_ActionClass.php
*
* @author  remix
* @package Wol
* @version $Id$
*/

// {{{ Wol_ActionClass
/**
*  action execution class
*
*  @author  remix
*  @package Wol
*  @access  public
*/
class Wol_ActionClass extends Ethna_ActionClass
{
	/**
	*  authenticate before executing action.
	*
	*  @access public
	*  @return string  Forward name.
	*                  (null if no errors. false if we have something wrong.)
	*/
	function authenticate(){
		return parent::authenticate();
	}

	/**
	 * Preparation for executing action. (Form input check, etc.)
	 *
	 * @access public
	 * @return string  Forward name.
	 *                 (null if no errors. false if we have something wrong.)
	 */
	function prepare(){
		return parent::prepare();
	}

	/**
	* execute action.
	*
	* @access public
	* @return string  Forward name.
	*                 (we does not forward if returns null.)
	*/
	function perform(){
		return parent::perform();
	}
}
// }}}
