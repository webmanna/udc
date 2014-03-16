<?php
App::uses('Award', 'Model');

/**
 * Award Test Case
 *
 */
class AwardTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.awards_dog',
		'app.handler',
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
		$this->Award = ClassRegistry::init('Award');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Award);

		parent::tearDown();
	}

}
