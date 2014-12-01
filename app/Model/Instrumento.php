<?php
App::uses('AppModel', 'Model');
/**
 * Instrumento Model
 *
 * @property AvaliacaoPlano $AvaliacaoPlano
 * @property Plano $Plano
 */
class Instrumento extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'instrumentoDescricao' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'AvaliacaoPlano' => array(
			'className' => 'AvaliacaoPlano',
			'foreignKey' => 'instrumento_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Plano' => array(
			'className' => 'Plano',
			'joinTable' => 'instrumentos_planos',
			'foreignKey' => 'instrumento_id',
			'associationForeignKey' => 'plano_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
