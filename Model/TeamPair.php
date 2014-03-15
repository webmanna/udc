<?php
App::uses('AppModel', 'Model');
/**
 * TeamPair Model
 *
 * @property Handler $Handler
 * @property Dog $Dog
 * @property Run $Run
 * @property Award $Award
 */
class TeamPair extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'handler_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'dog_id' => array(
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
		'Handler' => array(
			'className' => 'Handler',
			'foreignKey' => 'handler_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Dog' => array(
			'className' => 'Dog',
			'foreignKey' => 'dog_id',
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
		'Run' => array(
			'className' => 'Run',
			'foreignKey' => 'team_pair_id',
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
		'Award' => array(
			'className' => 'Award',
			'joinTable' => 'awards_team_pairs',
			'foreignKey' => 'team_pair_id',
			'associationForeignKey' => 'award_id',
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
