<?php
App::uses('AppController', 'Controller');
/**
 * ConteudoPlanos Controller
 *
 * @property ConteudoPlano $ConteudoPlano
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ConteudoPlanosController extends AppController {

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
		$this->ConteudoPlano->recursive = 0;
		$this->set('conteudoPlanos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ConteudoPlano->exists($id)) {
			throw new NotFoundException(__('Invalid conteudo plano'));
		}
		$options = array('conditions' => array('ConteudoPlano.' . $this->ConteudoPlano->primaryKey => $id));
		$this->set('conteudoPlano', $this->ConteudoPlano->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ConteudoPlano->create();
			if ($this->ConteudoPlano->save($this->request->data)) {
				$this->Session->setFlash(__('The conteudo plano has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conteudo plano could not be saved. Please, try again.'));
			}
		}
		$tecnicasPlanos = $this->ConteudoPlano->TecnicasPlano->find('list');
		$recursosPlanos = $this->ConteudoPlano->RecursosPlano->find('list');
		$instrumentosPlanos = $this->ConteudoPlano->InstrumentosPlano->find('list');
		$this->set(compact('tecnicasPlanos', 'recursosPlanos', 'instrumentosPlanos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ConteudoPlano->exists($id)) {
			throw new NotFoundException(__('Invalid conteudo plano'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ConteudoPlano->save($this->request->data)) {
				$this->Session->setFlash(__('The conteudo plano has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conteudo plano could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ConteudoPlano.' . $this->ConteudoPlano->primaryKey => $id));
			$this->request->data = $this->ConteudoPlano->find('first', $options);
		}
		$tecnicasPlanos = $this->ConteudoPlano->TecnicasPlano->find('list');
		$recursosPlanos = $this->ConteudoPlano->RecursosPlano->find('list');
		$instrumentosPlanos = $this->ConteudoPlano->InstrumentosPlano->find('list');
		$this->set(compact('tecnicasPlanos', 'recursosPlanos', 'instrumentosPlanos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ConteudoPlano->id = $id;
		if (!$this->ConteudoPlano->exists()) {
			throw new NotFoundException(__('Invalid conteudo plano'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ConteudoPlano->delete()) {
			$this->Session->setFlash(__('The conteudo plano has been deleted.'));
		} else {
			$this->Session->setFlash(__('The conteudo plano could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
