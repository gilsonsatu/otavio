<?php
App::uses('AppController', 'Controller');
/**
 * InstrumentosPlanos Controller
 *
 * @property InstrumentosPlano $InstrumentosPlano
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class InstrumentosPlanosController extends AppController {

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
		$this->InstrumentosPlano->recursive = 0;
		$this->set('instrumentosPlanos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->InstrumentosPlano->exists($id)) {
			throw new NotFoundException(__('Invalid instrumentos plano'));
		}
		$options = array('conditions' => array('InstrumentosPlano.' . $this->InstrumentosPlano->primaryKey => $id));
		$this->set('instrumentosPlano', $this->InstrumentosPlano->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->InstrumentosPlano->create();
			if ($this->InstrumentosPlano->save($this->request->data)) {
				$this->Session->setFlash(__('The instrumentos plano has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instrumentos plano could not be saved. Please, try again.'));
			}
		}
		$instrumentos = $this->InstrumentosPlano->Instrumento->find('list');
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
		if (!$this->InstrumentosPlano->exists($id)) {
			throw new NotFoundException(__('Invalid instrumentos plano'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->InstrumentosPlano->save($this->request->data)) {
				$this->Session->setFlash(__('The instrumentos plano has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instrumentos plano could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('InstrumentosPlano.' . $this->InstrumentosPlano->primaryKey => $id));
			$this->request->data = $this->InstrumentosPlano->find('first', $options);
		}
		$instrumentos = $this->InstrumentosPlano->Instrumento->find('list');
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
		$this->InstrumentosPlano->id = $id;
		if (!$this->InstrumentosPlano->exists()) {
			throw new NotFoundException(__('Invalid instrumentos plano'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->InstrumentosPlano->delete()) {
			$this->Session->setFlash(__('The instrumentos plano has been deleted.'));
		} else {
			$this->Session->setFlash(__('The instrumentos plano could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
