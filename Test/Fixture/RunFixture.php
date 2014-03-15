<?php
/**
 * RunFixture
 *
 */
class RunFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'round_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'team_pair_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'points_total' => array('type' => 'integer', 'null' => true, 'default' => null),
		'points_bonus' => array('type' => 'integer', 'null' => true, 'default' => null),
		'points_scored' => array('type' => 'integer', 'null' => true, 'default' => null),
		'points_faults' => array('type' => 'integer', 'null' => true, 'default' => null),
		'throws_total' => array('type' => 'integer', 'null' => true, 'default' => null),
		'throws_scored' => array('type' => 'integer', 'null' => true, 'default' => null),
		'throws_bonus' => array('type' => 'integer', 'null' => true, 'default' => null),
		'throws_missed' => array('type' => 'integer', 'null' => true, 'default' => null),
		'throws_dropped' => array('type' => 'integer', 'null' => true, 'default' => null),
		'throws_faults' => array('type' => 'integer', 'null' => true, 'default' => null),
		'time' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '4,2'),
		'is_official' => array('type' => 'boolean', 'null' => true, 'default' => '0', 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'round_id' => array('column' => 'round_id', 'unique' => 0),
			'team_pair_id' => array('column' => 'team_pair_id', 'unique' => 0),
			'is_official' => array('column' => 'is_official', 'unique' => 0)
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
			'round_id' => 1,
			'team_pair_id' => 1,
			'points_total' => 1,
			'points_bonus' => 1,
			'points_scored' => 1,
			'points_faults' => 1,
			'throws_total' => 1,
			'throws_scored' => 1,
			'throws_bonus' => 1,
			'throws_missed' => 1,
			'throws_dropped' => 1,
			'throws_faults' => 1,
			'time' => 1,
			'is_official' => 1,
			'created' => '2014-03-14 21:56:43',
			'modified' => '2014-03-14 21:56:43'
		),
	);

}
