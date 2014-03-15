<?php
App::uses('AppModel', 'Model');
/**
 * AwardCondition Model
 *
 * @property Award $Award
 */
class AwardCondition extends AppModel {


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
		)
	);
}
