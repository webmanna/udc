<?php
App::uses('Round', 'Model');

/**
 * Round Test Case
 *
 */
class RoundTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.run'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Round = ClassRegistry::init('Round');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Round);

		parent::tearDown();
	}

}
