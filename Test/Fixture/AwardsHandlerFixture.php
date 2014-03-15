<?php
/**
 * AwardsHandlerFixture
 *
 */
class AwardsHandlerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'award_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'handler_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'is_official' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'key' => 'index'),
		'deleted' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'award_id' => array('column' => 'award_id', 'unique' => 0),
			'handler_id' => array('column' => 'handler_id', 'unique' => 0),
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
			'award_id' => 1,
			'handler_id' => 1,
			'is_official' => 1,
			'deleted' => 1,
			'created' => '2014-03-14 22:20:15',
			'modified' => '2014-03-14 22:20:15'
		),
	);

}
