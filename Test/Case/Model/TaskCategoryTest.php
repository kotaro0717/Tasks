<?php
/**
 * TaskCategory Test Case
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.Tasks.Test.Model.Case
 */

App::uses('Task', 'Tasks.Model');

/**
 * TaskCategory Test Case
 *
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @package app.Plugin.Tasks.Model
 */
class TaskCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @var array
 */
	public $fixtures = array(
		'plugin.tasks.task',
		'plugin.tasks.language',
		'plugin.tasks.block',
		'plugin.tasks.blocks_language',
		'plugin.tasks.tasks_block',
		'plugin.tasks.part',
		'plugin.tasks.languages_part',
		'plugin.tasks.task_part_setting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Task = ClassRegistry::init('Tasks.TaskCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Task);

		parent::tearDown();
	}

/**
 * testFindById
 *
 * @return void
 */
	public function testFindById() {
		$id = 1;
		$rtn = $this->Task->findById($id);
		$this->assertTrue(is_array($rtn));
	}

}
