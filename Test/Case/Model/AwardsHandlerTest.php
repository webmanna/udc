<?php
App::uses('AwardsHandler', 'Model');

/**
 * AwardsHandler Test Case
 *
 */
class AwardsHandlerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.awards_handler',
		'app.award',
		'app.game',
		'app.activity',
		'app.activities_game',
		'app.run',
		'app.round',
		'app.division',
		'app.team_pair',
		'app.activities_run',
		'app.level',
		'app.event',
		'app.tour',
		'app.events_game',
		'app.award_condition',
		'app.dog',
		'app.awards_dog',
		'app.handler',
		'app.wp_user',
		'app.team',
		'app.awards_team_pair'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AwardsHandler = ClassRegistry::init('AwardsHandler');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AwardsHandler);

		parent::tearDown();
	}

}
