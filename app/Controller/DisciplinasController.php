<?php

App::uses('AppController', 'Controller');

/**
 * Disciplinas Controller
 *
 * @property Disciplina $Disciplina
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DisciplinasController extends AppController {

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
        $this->Disciplina->recursive = 0;
        $this->set('disciplinas', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Disciplina->exists($id)) {
            throw new NotFoundException(__('Invalid disciplina'));
        }
        $options = array('conditions' => array('Disciplina.' . $this->Disciplina->primaryKey => $id));
        $this->set('disciplina', $this->Disciplina->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Disciplina->create();
            if ($this->Disciplina->save($this->request->data)) {
                $this->Session->setFlash(__('The disciplina has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The disciplina could not be saved. Please, try again.'));
            }
        }
        $cursos = $this->Disciplina->Curso->find('list');
        $this->set(compact('cursos'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Disciplina->exists($id)) {
            throw new NotFoundException(__('Invalid disciplina'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Disciplina->save($this->request->data)) {
                $this->Session->setFlash(__('The disciplina has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The disciplina could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Disciplina.' . $this->Disciplina->primaryKey => $id));
            $this->request->data = $this->Disciplina->find('first', $options);
        }
        $cursos = $this->Disciplina->Curso->find('list');
        $this->set(compact('cursos'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Disciplina->id = $id;
        if (!$this->Disciplina->exists()) {
            throw new NotFoundException(__('Invalid disciplina'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Disciplina->delete()) {
            $this->Session->setFlash(__('The disciplina has been deleted.'));
        } else {
            $this->Session->setFlash(__('The disciplina could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    //=================gilson
    public function getDisciplinasByCursoId() {

        $curso_id = $this->request->data['Plano']['curso_id'];

        $disciplinas = $this->Disciplina->find('list', array(
            'conditions' => array('Disciplina.curso_id' => $curso_id),
            'fields' => array('Disciplina.disciplinaDescricao'),
            'recursive' => -1
        ));

        $this->set('disciplinas', $disciplinas);
        $this->layout = 'ajax';
    }
    
    public function getEmentaByDisciplinaId() {
        $disciplina_id = $this->request->data['Plano']['disciplina_id'];

        $ementa = $this->Disciplina->find('list', array(
            'conditions' => array('Disciplina.Id' => $disciplina_id),
            'fields' => array('Disciplina.disciplinaEmenta'),
            'recursive' => -1
        ));

        $this->set('ementa', $ementa);
        $this->layout = 'ajax';
    }
    //fim gilson

}
