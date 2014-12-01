<?php
App::uses('AppModel', 'Model');
/**
 * ConteudoPlano Model
 *
 * @property TecnicasPlano $TecnicasPlano
 * @property RecursosPlano $RecursosPlano
 * @property InstrumentosPlano $InstrumentosPlano
 */
class ConteudoPlano extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'conteudo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'objetivos_especificos' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'n_aulas' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tecnicas_plano_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'recursos_plano_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		' instrumentos_plano_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TecnicasPlano' => array(
			'className' => 'TecnicasPlano',
			'foreignKey' => 'tecnicas_plano_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'RecursosPlano' => array(
			'className' => 'RecursosPlano',
			'foreignKey' => 'recursos_plano_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'InstrumentosPlano' => array(
			'className' => 'InstrumentosPlano',
			'foreignKey' => ' instrumentos_plano_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
