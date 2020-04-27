<?php
/** ＵＴＦ８
* Send.php
*
* @author  remix
* @package Wol
* @version $Id$
*/

/**
* Send Form implementation.
*
* @author  remix
* @access  public
* @package Wol
*/
class Wol_Form_Send extends Wol_ActionForm
{
	/**
	*  @access private
	*  @var    array   form definition.
	*/
	var $form = array(
		'mac'    => array(
			'required'	=> true,
		),
		'bcast'  => array(
			'required'	=> true,
		),
		'port'   => array(
			'required'	=> true,
		),
		'key'    => array(
			'required'	=> true,
		),
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
* Send action implementation.
*
* @author  remix
* @access  public
* @package Wol
*/
class Wol_Action_Send extends Wol_ActionClass
{
	/**
	* preprocess of Send Action.
	*
	* @access public
	* @return string forward name(null: success.
	*                            false: in case you want to exit.)
	*/
	function prepare(){
		if( 0 < $this->af->validate() ){
			return 'Index';
		}
		return null;
	}

	/**
	* Send action implementation.
	*
	* @access public
	* @return string  forward name.
	*/
	function perform(){
		$cfg = $this->config->get();
		$PATH_CMD = $cfg['DEFINE']['PATH_CMD'];
		$cmd = $PATH_CMD.$this->af->get( 'mac' )
		.' '.$this->af->get( 'bcast' )
		.' '.$this->af->get( 'port' )
		.' '.$this->af->get( 'key' )
		.' >/dev/null'// >/dev/null 2>&1 &
		;
		$this->af->setApp( 'cmd', "[{$cmd}]" );
		system( $cmd, $result );
		$this->backend->log( LOG_DEBUG, 'system([%s],[%s])', $cmd, $result );
		if( $result ){
			$this->backend->log( LOG_WARNING, '例外 system(%s, %s)', $cmd, $result );
			$this->af->setApp( 'warn', $result );
			return 'Index';
		}

		$this->af->setApp( 'info', '送信しました' );
		return 'Index';
	}
}
