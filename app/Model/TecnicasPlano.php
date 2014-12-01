<?php
App::uses('AppModel', 'Model');
/**
 * TecnicasPlano Model
 *
 * @property Tecnicasensino $Tecnicasensino
 * @property ConteudoPlano $ConteudoPlano
 */
class TecnicasPlano extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'tecnicasensino_id' => array(
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
		'Tecnicasensino' => array(
			'className' => 'Tecnicasensino',
			'foreignKey' => 'tecnicasensino_id',
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
			'foreignKey' => 'tecnicas_plano_id',
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
