<?php
App::uses('SkillsTest', 'Model');

/**
 * SkillsTest Test Case
 *
 */
class SkillsTestTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.skills_test',
		'app.skill',
		'app.test',
		'app.provider'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SkillsTest = ClassRegistry::init('SkillsTest');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SkillsTest);

		parent::tearDown();
	}

}
