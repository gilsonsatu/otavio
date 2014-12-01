<?php
App::uses('AppController', 'Controller');
/**
 * ComentarioPlanos Controller
 *
 * @property ComentarioPlano $ComentarioPlano
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ComentarioPlanosController extends AppController {

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
		$this->ComentarioPlano->recursive = 0;
		$this->set('comentarioPlanos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ComentarioPlano->exists($id)) {
			throw new NotFoundException(__('Invalid comentario plano'));
		}
		$options = array('conditions' => array('ComentarioPlano.' . $this->ComentarioPlano->primaryKey => $id));
		$this->set('comentarioPlano', $this->ComentarioPlano->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ComentarioPlano->create();
			if ($this->ComentarioPlano->save($this->request->data)) {
				$this->Session->setFlash(__('The comentario plano has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comentario plano could not be saved. Please, try again.'));
			}
		}
		$usuarios = $this->ComentarioPlano->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ComentarioPlano->exists($id)) {
			throw new NotFoundException(__('Invalid comentario plano'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ComentarioPlano->save($this->request->data)) {
				$this->Session->setFlash(__('The comentario plano has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comentario plano could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ComentarioPlano.' . $this->ComentarioPlano->primaryKey => $id));
			$this->request->data = $this->ComentarioPlano->find('first', $options);
		}
		$usuarios = $this->ComentarioPlano->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ComentarioPlano->id = $id;
		if (!$this->ComentarioPlano->exists()) {
			throw new NotFoundException(__('Invalid comentario plano'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ComentarioPlano->delete()) {
			$this->Session->setFlash(__('The comentario plano has been deleted.'));
		} else {
			$this->Session->setFlash(__('The comentario plano could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
