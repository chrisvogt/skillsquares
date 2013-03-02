<?php
App::uses('AppController', 'Controller');
/**
 * Providers Controller
 *
 * @property Provider $Provider
 */
class ProvidersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Provider->recursive = 0;
		$this->set('providers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Provider->exists($id)) {
			throw new NotFoundException(__('Invalid provider'));
		}
		$options = array('conditions' => array('Provider.' . $this->Provider->primaryKey => $id));
		$this->set('provider', $this->Provider->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Provider->create();
			if ($this->Provider->save($this->request->data)) {
				$this->Session->setFlash(__('The provider has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The provider could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Provider->exists($id)) {
			throw new NotFoundException(__('Invalid provider'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Provider->save($this->request->data)) {
				$this->Session->setFlash(__('The provider has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The provider could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Provider.' . $this->Provider->primaryKey => $id));
			$this->request->data = $this->Provider->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Provider->id = $id;
		if (!$this->Provider->exists()) {
			throw new NotFoundException(__('Invalid provider'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Provider->delete()) {
			$this->Session->setFlash(__('Provider deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Provider was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
