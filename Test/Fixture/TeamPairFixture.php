<?php
/**
 * TeamPairFixture
 *
 */
class TeamPairFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'handler_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'dog_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'rating' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'handler_id' => array('column' => 'handler_id', 'unique' => 0),
			'dog_id' => array('column' => 'dog_id', 'unique' => 0)
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
			'handler_id' => 1,
			'dog_id' => 1,
			'rating' => 1
		),
	);

}
