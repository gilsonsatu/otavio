<?php
App::uses('AppController', 'Controller');
/**
 * Planos Controller
 *
 * @property Plano $Plano
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PlanosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
        
        //===================gilson
        //public $helpers = array('Js'=>array('Jquery'));
        //fim gilson
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Plano->recursive = 0;
		$this->set('planos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Plano->exists($id)) {
			throw new NotFoundException(__('Invalid plano'));
		}
		$options = array('conditions' => array('Plano.' . $this->Plano->primaryKey => $id));
		$this->set('plano', $this->Plano->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Plano->create();
			if ($this->Plano->save($this->request->data)) {
				$this->Session->setFlash(__('Plano de Ensino salvo com sucesso!'), 'sucesso');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Falha ao salvar o plano de ensino, tente novamente!'), 'erro');
			}
		}
		$instrumentos = $this->Plano->Instrumento->find('list', array('fields' => array('instrumentoDescricao')));
		$cursos = $this->Plano->Curso->find('list', array('fields' => array('cursoDescricao')));
		$disciplinas = $this->Plano->Disciplina->find('list', array('conditions' => array('Disciplina.Id' => $disciplina_id),'fields' => array('disciplinaDescricao')));
		$this->set(compact('instrumentos', 'disciplinas', 'cursos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Plano->exists($id)) {
			throw new NotFoundException(__('Invalid plano'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Plano->save($this->request->data)) {
				$this->Session->setFlash(__('The plano has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plano could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Plano.' . $this->Plano->primaryKey => $id));
			$this->request->data = $this->Plano->find('first', $options);
		}
		$cursos = $this->Plano->Curso->find('list', array('fields' => array('cursoDescricao')));
		$disciplinas = $this->Plano->Disciplina->find('list', array('fields' => array('disciplinaDescricao')));
		$this->set(compact('disciplinas', 'cursos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Plano->id = $id;
		if (!$this->Plano->exists()) {
			throw new NotFoundException(__('Invalid plano'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Plano->delete()) {
			$this->Session->setFlash(__('The plano has been deleted.'));
		} else {
			$this->Session->setFlash(__('The plano could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
