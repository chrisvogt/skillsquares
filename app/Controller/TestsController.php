<?php
App::uses('AppController', 'Controller');
/**
 * Tests Controller
 *
 * @property Test $Test
 */
class TestsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Test->recursive = 0;
		$this->set('tests', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Test->exists($id)) {
			throw new NotFoundException(__('Invalid test'));
		}
		$options = array('conditions' => array('Test.' . $this->Test->primaryKey => $id));
		$this->set('test', $this->Test->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Test->create();
			if ($this->Test->save($this->request->data)) {
				$this->Session->setFlash(__('The test has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The test could not be saved. Please, try again.'));
			}
		}
		$providers = $this->Test->Provider->find('list');
		$skills = $this->Test->Skill->find('list');
		$this->set(compact('providers', 'skills'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Test->exists($id)) {
			throw new NotFoundException(__('Invalid test'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Test->save($this->request->data)) {
				$this->Session->setFlash(__('The test has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The test could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Test.' . $this->Test->primaryKey => $id));
			$this->request->data = $this->Test->find('first', $options);
		}
		$providers = $this->Test->Provider->find('list');
		$skills = $this->Test->Skill->find('list');
		$this->set(compact('providers', 'skills'));
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
		$this->Test->id = $id;
		if (!$this->Test->exists()) {
			throw new NotFoundException(__('Invalid test'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Test->delete()) {
			$this->Session->setFlash(__('Test deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Test was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
