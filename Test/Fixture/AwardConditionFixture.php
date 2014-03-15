<?php
/**
 * AwardConditionFixture
 *
 */
class AwardConditionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'award_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'name' => array('type' => 'integer', 'null' => true, 'default' => null),
		'test_model' => array('type' => 'integer', 'null' => true, 'default' => null),
		'test_conditions' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'achievement_id' => array('column' => 'award_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'award_id' => 1,
			'name' => 1,
			'test_model' => 1,
			'test_conditions' => 1
		),
	);

}
