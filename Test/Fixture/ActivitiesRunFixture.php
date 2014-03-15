<?php
/**
 * ActivitiesRunFixture
 *
 */
class ActivitiesRunFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'run_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'activity_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'parent_activity_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'deleted' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'activity_id' => array('column' => 'activity_id', 'unique' => 0),
			'run_id' => array('column' => 'run_id', 'unique' => 0),
			'parent_activity_id' => array('column' => 'parent_activity_id', 'unique' => 0)
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
			'run_id' => 1,
			'activity_id' => 1,
			'parent_activity_id' => 1,
			'deleted' => 1,
			'created' => '2014-03-14 22:04:39',
			'modified' => '2014-03-14 22:04:39'
		),
	);

}
