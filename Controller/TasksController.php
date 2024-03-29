<?php
/**
 * Tasks Controller
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.Tasks.Controller
 */

App::uses('TasksAppController', 'Tasks.Controller');

/**
 * Tasks Controller
 *
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @package app.Plugin.Tasks.Controller
 */
class TasksController extends TasksAppController {

/**
 * use model
 *
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @var array
 */
	//public $uses = array();

/**
 * beforeFilter
 *
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @return void
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow();
	}

/**
 * index
 *
 * @param int $frameId frames.id
 * @param string $lang language
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @return CakeResponse
 */
	public function index($frameId = 0, $lang = '') {
		//フレーム初期化処理
		if (! $this->_initializeFrame($frameId, $lang)) {
			return $this->render(false);
		}

		return $this->render('Tasks/index');
	}

/**
 * view
 *
 * @param int $frameId frames.id
 * @param string $lang language
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @return CakeResponse
 */
	public function view($frameId = 0, $lang = '') {
		return $this->render('Tasks/view');
	}

}
