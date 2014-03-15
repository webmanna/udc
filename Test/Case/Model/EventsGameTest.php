<?php
App::uses('EventsGame', 'Model');

/**
 * EventsGame Test Case
 *
 */
class EventsGameTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.events_game',
		'app.event',
		'app.tour',
		'app.game',
		'app.activity',
		'app.activities_game',
		'app.award',
		'app.division',
		'app.round',
		'app.level'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EventsGame = ClassRegistry::init('EventsGame');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EventsGame);

		parent::tearDown();
	}

}
