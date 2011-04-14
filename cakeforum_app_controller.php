<?php
// vim: set sw=4 ts=4 sts=4 si noet:
/**
 * CakeForum
 *
 * Developed by Inservio (http://www.inservio.ba)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @link          http://www.inservio.ba/cakeforum
 * @package       cakeforum
 * @version       0.1
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */

class CakeforumAppController extends AppController {
	
	public $components = array('Auth', /*'DebugKit.Toolbar'*/);
	
	public $helpers = array('Html', 'Form', 'Cakeforum.ForumUtil');
	
	public $ext = '.php'; 
	
	public $userID = null;

	
	public function beforeFilter() {
		$this->auth();
		$this->_setupConfig();
	}
	
	
	private function auth() {
		
		if ($this->viewPath == 'pages')
			$this->Auth->allow('*'); 
		else {
			$this->Auth->userScope = array('User.active' => '1');
			$this->Auth->loginAction = '/login';
			$this->Auth->logoutRedirect = '/';
			$this->Auth->autoRedirect = true;
		}
		
		$this->userID = $this->Auth->user('id');
		$name = Configure::read('username');
		$this->userName = $this->Auth->user($name);
	}

	private function _setupConfig() {
		$this->fieldUser = Configure::read('fieldUser');
		$this->uname = Configure::read('username');
		$arr = explode(',', $this->fieldUser);
		$this->fUsername = $arr[1];
	}
}

?>
