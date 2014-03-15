<?php
App::uses('AppModel', 'Model');
/**
 * AwardsTeamPair Model
 *
 * @property Award $Award
 * @property TeamPair $TeamPair
 */
class AwardsTeamPair extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'award_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'team_pair_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'is_official' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'deleted' => array(
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
		'Award' => array(
			'className' => 'Award',
			'foreignKey' => 'award_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TeamPair' => array(
			'className' => 'TeamPair',
			'foreignKey' => 'team_pair_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
