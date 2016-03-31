<?php
/**
 * @copyright Copyright &copy; A.F.Schuurman, 2015
 * @package yii2-add-to-homescreen
 * @subpackage yii2-widget-switchinput
 * @version 1.0.0
 */

namespace AddToHomescreen;

use yii\web\AssetBundle;

/**
 * Asset bundle for Add-to-homescreen
 *
 * @author A.F.Schuurman <andre.schuurman+yii2-add-to-homescreen@gmail.com>
 * @since 1.0
 */
class AddToHomescreenAsset extends AssetBundle
{
	public $sourcePath = '@bower/add-to-homescreen';
	public $css = [
		'style/addtohomescreen.css',
	];
	public function init() {
		// In dev mode use non-minified javascripts
		$this->js = YII_DEBUG ? [
			'src/addtohomescreen.js',
		]:[
			'src/addtohomescreen.min.js',
		];

		parent::init();
	}
}