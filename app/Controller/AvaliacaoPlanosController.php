<?php
App::uses('AppController', 'Controller');
/**
 * AvaliacaoPlanos Controller
 *
 * @property AvaliacaoPlano $AvaliacaoPlano
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AvaliacaoPlanosController extends AppController {

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
		$this->AvaliacaoPlano->recursive = 0;
		$this->set('avaliacaoPlanos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AvaliacaoPlano->exists($id)) {
			throw new NotFoundException(__('Invalid avaliacao plano'));
		}
		$options = array('conditions' => array('AvaliacaoPlano.' . $this->AvaliacaoPlano->primaryKey => $id));
		$this->set('avaliacaoPlano', $this->AvaliacaoPlano->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AvaliacaoPlano->create();
			if ($this->AvaliacaoPlano->save($this->request->data)) {
				$this->Session->setFlash(__('The avaliacao plano has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The avaliacao plano could not be saved. Please, try again.'));
			}
		}
		$instrumentos = $this->AvaliacaoPlano->Instrumento->find('list', array('fields' => array('instrumentoDescricao')));
		$this->set(compact('instrumentos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AvaliacaoPlano->exists($id)) {
			throw new NotFoundException(__('Invalid avaliacao plano'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AvaliacaoPlano->save($this->request->data)) {
				$this->Session->setFlash(__('The avaliacao plano has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The avaliacao plano could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AvaliacaoPlano.' . $this->AvaliacaoPlano->primaryKey => $id));
			$this->request->data = $this->AvaliacaoPlano->find('first', $options);
		}
		$instrumentos = $this->AvaliacaoPlano->Instrumento->find('list');
		$this->set(compact('instrumentos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AvaliacaoPlano->id = $id;
		if (!$this->AvaliacaoPlano->exists()) {
			throw new NotFoundException(__('Invalid avaliacao plano'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AvaliacaoPlano->delete()) {
			$this->Session->setFlash(__('The avaliacao plano has been deleted.'));
		} else {
			$this->Session->setFlash(__('The avaliacao plano could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
