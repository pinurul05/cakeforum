<?php
// vim: set ts=4 sts=4 sw=4 si noet:

/**
 * CakeForum
 *
 * Developed by Inservio (http://www.inservio.ba)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @link          http://cakeforum.inservio.ba
 * @package       cakeforum
 * @version       0.1
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */

class ForumUtilHelper extends Helper {
	
	public $helpers = array('Session');
	
	/**
	 * Get user data
	 * @param field (id, username, group_id)
	 */
	
	public function read($arg) {
		
		$ses = $this->Session->read('Auth');
		
		if (isset($ses['User'][$arg])) {
			return $ses['User'][$arg];
		} else {
			return false;
		}
	}
	
	/**
	 * Get username
	 */
	
	public function username() {
		return $this->read(Configure::read('username'));
	}
	
	/**
	 * Get user group id
	 */
	
	public function group() {
		return $this->read('group_id');
	}
	
	/**
	 * Is user logged in
	 */
	
	public function isLogged() {	
		return $this->read('id');
	}
	
	/**
	 * Get user ID
	 */
	
	public function id() {
		return $this->read('id');
	}

}
?>
