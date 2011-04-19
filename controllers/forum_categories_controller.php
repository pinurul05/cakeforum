<?php
# vim: set si ts=4 sts=4 sw=4 noet:


class ForumCategoriesController extends AppController {

	var $name = 'ForumCategories';

	public function beforeFilter() {
		return parent::beforeFilter();
	}

	function index() {
		$this->ForumCategory->recursive = 0;
		$this->set('forumCategories', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid forum category', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('forumCategory', $this->ForumCategory->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ForumCategory->create();
			if ($this->ForumCategory->save($this->data)) {
				$this->Session->setFlash(__('The forum category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The forum category could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid forum category', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ForumCategory->save($this->data)) {
				$this->Session->setFlash(__('The forum category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The forum category could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ForumCategory->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for forum category', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ForumCategory->delete($id)) {
			$this->Session->setFlash(__('Forum category deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Forum category was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function admin_index() {
		$this->ForumCategory->recursive = 0;
		$this->set('forumCategories', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid forum category', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('forumCategory', $this->ForumCategory->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->ForumCategory->create();
			if ($this->ForumCategory->save($this->data)) {
				$this->Session->setFlash(__('The forum category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The forum category could not be saved. Please, try again.', true));
			}
		}
		$parentCategory = $this->ForumCategory->find('list');
		$this->set(compact('parentCategory'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid forum category', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ForumCategory->save($this->data)) {
				$this->Session->setFlash(__('The forum category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The forum category could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ForumCategory->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for forum category', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ForumCategory->delete($id)) {
			$this->Session->setFlash(__('Forum category deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Forum category was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
