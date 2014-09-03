<?php
/**
 * Tasks routes file
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.Tasks.Config
 */

Router::connect('/tasks/:action', array(
	'plugin' => 'tasks', 'controller' => 'tasks'
));
