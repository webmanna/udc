<?php
App::uses('AwardsDog', 'Model');

/**
 * AwardsDog Test Case
 *
 */
class AwardsDogTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.awards_dog',
		'app.award',
		'app.game',
		'app.action',
		'app.actions_game',
		'app.run',
		'app.round',
		'app.division',
		'app.team_pair',
		'app.actions_run',
		'app.level',
		'app.event',
		'app.tour',
		'app.events_game',
		'app.award_condition',
		'app.dog',
		'app.team',
		'app.handler',
		'app.wp_user',
		'app.awards_handler',
		'app.awards_team_pair'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AwardsDog = ClassRegistry::init('AwardsDog');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AwardsDog);

		parent::tearDown();
	}

}
