<?php
/**
 * TaskPartSettingTest Test Case
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.Tasks.Test.Model.Case
 */

App::uses('TaskPartSetting', 'Tasks.Model');

/**
 * TaskPartSetting Test Case
 *
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @package app.Plugin.Tasks.Model
 */
class TaskPartSettingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @var array
 */
	public $fixtures = array(
		'plugin.tasks.task_part_setting',
		'plugin.tasks.block',
		'plugin.tasks.language',
		'plugin.tasks.blocks_language',
		'plugin.tasks.part',
		'plugin.tasks.languages_part'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TaskPartSetting = ClassRegistry::init('Tasks.TaskPartSetting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TaskPartSetting);

		parent::tearDown();
	}

/**
 * testFindById
 *
 * @return void
 */
	public function testFindById() {
		$id = 1;
		$rtn = $this->TaskPartSetting->findById($id);
		$this->assertTrue(is_array($rtn));
	}

}
