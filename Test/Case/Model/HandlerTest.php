<?php
App::uses('Handler', 'Model');

/**
 * Handler Test Case
 *
 */
class HandlerTest extends CakeTestCase {

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
