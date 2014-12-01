<?php
App::uses('AppModel', 'Model');
/**
 * Recursosdidatico Model
 *
 * @property RecursosPlano $RecursosPlano
 */
class Recursosdidatico extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'recursoDescricao' => array(
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
		'RecursosPlano' => array(
			'className' => 'RecursosPlano',
			'foreignKey' => 'recursosdidatico_id',
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
