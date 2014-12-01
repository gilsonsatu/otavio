<?php
App::uses('AppController', 'Controller');
/**
 * TecnicasPlanos Controller
 *
 * @property TecnicasPlano $TecnicasPlano
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TecnicasPlanosController extends AppController {

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
		$this->TecnicasPlano->recursive = 0;
		$this->set('tecnicasPlanos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TecnicasPlano->exists($id)) {
			throw new NotFoundException(__('Invalid tecnicas plano'));
		}
		$options = array('conditions' => array('TecnicasPlano.' . $this->TecnicasPlano->primaryKey => $id));
		$this->set('tecnicasPlano', $this->TecnicasPlano->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TecnicasPlano->create();
			if ($this->TecnicasPlano->save($this->request->data)) {
				$this->Session->setFlash(__('The tecnicas plano has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tecnicas plano could not be saved. Please, try again.'));
			}
		}
		$tecnicasensinos = $this->TecnicasPlano->Tecnicasensino->find('list');
		$this->set(compact('tecnicasensinos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TecnicasPlano->exists($id)) {
			throw new NotFoundException(__('Invalid tecnicas plano'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TecnicasPlano->save($this->request->data)) {
				$this->Session->setFlash(__('The tecnicas plano has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tecnicas plano could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TecnicasPlano.' . $this->TecnicasPlano->primaryKey => $id));
			$this->request->data = $this->TecnicasPlano->find('first', $options);
		}
		$tecnicasensinos = $this->TecnicasPlano->Tecnicasensino->find('list');
		$this->set(compact('tecnicasensinos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TecnicasPlano->id = $id;
		if (!$this->TecnicasPlano->exists()) {
			throw new NotFoundException(__('Invalid tecnicas plano'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TecnicasPlano->delete()) {
			$this->Session->setFlash(__('The tecnicas plano has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tecnicas plano could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
