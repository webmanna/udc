<?php
App::uses('Dog', 'Model');

/**
 * Dog Test Case
 *
 */
class DogTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Dog = ClassRegistry::init('Dog');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dog);

		parent::tearDown();
	}

}
