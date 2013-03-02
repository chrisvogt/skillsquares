<?php
App::uses('AppController', 'Controller');
/**
 * SkillsTests Controller
 *
 * @property SkillsTest $SkillsTest
 */
class SkillsTestsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SkillsTest->recursive = 0;
		$this->set('skillsTests', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SkillsTest->exists($id)) {
			throw new NotFoundException(__('Invalid skills test'));
		}
		$options = array('conditions' => array('SkillsTest.' . $this->SkillsTest->primaryKey => $id));
		$this->set('skillsTest', $this->SkillsTest->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SkillsTest->create();
			if ($this->SkillsTest->save($this->request->data)) {
				$this->Session->setFlash(__('The skills test has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The skills test could not be saved. Please, try again.'));
			}
		}
		$skills = $this->SkillsTest->Skill->find('list');
		$tests = $this->SkillsTest->Test->find('list');
		$this->set(compact('skills', 'tests'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SkillsTest->exists($id)) {
			throw new NotFoundException(__('Invalid skills test'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SkillsTest->save($this->request->data)) {
				$this->Session->setFlash(__('The skills test has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The skills test could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SkillsTest.' . $this->SkillsTest->primaryKey => $id));
			$this->request->data = $this->SkillsTest->find('first', $options);
		}
		$skills = $this->SkillsTest->Skill->find('list');
		$tests = $this->SkillsTest->Test->find('list');
		$this->set(compact('skills', 'tests'));
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
		$this->SkillsTest->id = $id;
		if (!$this->SkillsTest->exists()) {
			throw new NotFoundException(__('Invalid skills test'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SkillsTest->delete()) {
			$this->Session->setFlash(__('Skills test deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Skills test was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
