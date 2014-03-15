<?php
/**
 * AwardsTeamPairFixture
 *
 */
class AwardsTeamPairFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'award_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'team_pair_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'is_official' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'deleted' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'award_id' => array('column' => 'award_id', 'unique' => 0),
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
			'award_id' => 1,
			'team_pair_id' => 1,
			'is_official' => 1,
			'deleted' => 1,
			'created' => '2014-03-14 22:24:57',
			'modified' => '2014-03-14 22:24:57'
		),
	);

}
