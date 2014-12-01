<?php
App::uses('AppModel', 'Model');
/**
 * RecursosPlano Model
 *
 * @property Recursosdidatico $Recursosdidatico
 * @property ConteudoPlano $ConteudoPlano
 */
class RecursosPlano extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'recursosdidatico_id' => array(
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
		'Recursosdidatico' => array(
			'className' => 'Recursosdidatico',
			'foreignKey' => 'recursosdidatico_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ConteudoPlano' => array(
			'className' => 'ConteudoPlano',
			'foreignKey' => 'recursos_plano_id',
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

}
