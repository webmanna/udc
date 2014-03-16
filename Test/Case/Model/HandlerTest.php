<?php
App::uses('Handler', 'Model');

/**
 * Handler Test Case
 *
 */
class HandlerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.handler',
		'app.team_pair',
		'app.dog',
		'app.team',
		'app.award',
		'app.game',
		'app.action',
		'app.actions_game',
		'app.run',
		'app.round',
		'app.event',
		'app.tour',
		'app.events_game',
		'app.division',
		'app.actions_run',
		'app.level',
		'app.award_condition',
		'app.awards_dog',
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
		$this->Handler = ClassRegistry::init('Handler');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Handler);

		parent::tearDown();
	}

}
