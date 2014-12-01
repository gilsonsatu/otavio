<?php
App::uses('AppController', 'Controller');
/**
 * RecursosPlanos Controller
 *
 * @property RecursosPlano $RecursosPlano
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class RecursosPlanosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RecursosPlano->recursive = 0;
		$this->set('recursosPlanos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RecursosPlano->exists($id)) {
			throw new NotFoundException(__('Invalid recursos plano'));
		}
		$options = array('conditions' => array('RecursosPlano.' . $this->RecursosPlano->primaryKey => $id));
		$this->set('recursosPlano', $this->RecursosPlano->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RecursosPlano->create();
			if ($this->RecursosPlano->save($this->request->data)) {
				$this->Session->setFlash(__('The recursos plano has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recursos plano could not be saved. Please, try again.'));
			}
		}
		$recursosdidaticos = $this->RecursosPlano->Recursosdidatico->find('list');
		$this->set(compact('recursosdidaticos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->RecursosPlano->exists($id)) {
			throw new NotFoundException(__('Invalid recursos plano'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->RecursosPlano->save($this->request->data)) {
				$this->Session->setFlash(__('The recursos plano has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recursos plano could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RecursosPlano.' . $this->RecursosPlano->primaryKey => $id));
			$this->request->data = $this->RecursosPlano->find('first', $options);
		}
		$recursosdidaticos = $this->RecursosPlano->Recursosdidatico->find('list');
		$this->set(compact('recursosdidaticos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->RecursosPlano->id = $id;
		if (!$this->RecursosPlano->exists()) {
			throw new NotFoundException(__('Invalid recursos plano'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->RecursosPlano->delete()) {
			$this->Session->setFlash(__('The recursos plano has been deleted.'));
		} else {
			$this->Session->setFlash(__('The recursos plano could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
