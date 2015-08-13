<?php
/**
 * @copyright Copyright &copy; A.F.Schuurman, 2015
 * @package yii2-add-to-homescreen
 * @subpackage yii2-widget-switchinput
 * @version 1.0.0
 */

namespace AddToHomescreen;

use yii;
use yii\base\Widget;
use yii\web\View;

/**
 * Widget for add-to-homescreen
 *
 * @author A.F.Schuurman <andre.schuurman+yii2-add-to-homescreen@gmail.com>
 * @since 1.0
 */
class AddToHomescreenWidget extends Widget {

	public $settings = [];

	public function run() {
		parent::run();

		AddToHomescreenAsset::register($this->getView());

		$options = json_encode($this->settings);
		$this->getView()->registerJs("addToHomescreen($options);",  View::POS_READY);
	}
}