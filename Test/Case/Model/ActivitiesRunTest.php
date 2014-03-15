<?php
App::uses('ActivitiesRun', 'Model');

/**
 * ActivitiesRun Test Case
 *
 */
class ActivitiesRunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.activities_run',
		'app.run',
		'app.round',
		'app.division',
		'app.game',
		'app.activity',
		'app.activities_game',
		'app.award',
		'app.level',
		'app.event',
		'app.tour',
		'app.events_game',
		'app.team_pair',
		'app.parent_activity'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ActivitiesRun = ClassRegistry::init('ActivitiesRun');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ActivitiesRun);

		parent::tearDown();
	}

}
