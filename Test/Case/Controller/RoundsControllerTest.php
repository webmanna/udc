<?php
App::uses('RoundsController', 'Controller');

/**
 * RoundsController Test Case
 *
 */
class RoundsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.round',
		'app.division',
		'app.game',
		'app.action',
		'app.actions_game',
		'app.award',
		'app.level',
		'app.event',
		'app.tour',
		'app.events_game',
		'app.run'
	);

}
