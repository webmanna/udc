<?php
App::uses('GamesController', 'Controller');

/**
 * GamesController Test Case
 *
 */
class GamesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.game',
		'app.activity',
		'app.activities_game',
		'app.award',
		'app.division',
		'app.level',
		'app.event',
		'app.tour',
		'app.events_game'
	);

}
