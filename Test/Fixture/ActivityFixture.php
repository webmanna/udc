<?php
/**
 * ActivityFixture
 *
 */
class ActivityFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'game_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'name' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'point_value' => array('type' => 'integer', 'null' => true, 'default' => null),
		'point_factor' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '5,2'),
		'is_bonus' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'is_fault' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'game_id' => array('column' => 'game_id', 'unique' => 0)
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
			'game_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'point_value' => 1,
			'point_factor' => 1,
			'is_bonus' => 1,
			'is_fault' => 1
		),
	);

}
