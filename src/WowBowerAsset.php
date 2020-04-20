<?php


namespace rootlocal\widgets\wow;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Class WowBowerAsset Reveal CSS animation as you scroll down a page
 * Reveal CSS animation as you scroll down a page. By default, you can use it to trigger animate.css animations.
 * But you can easily change the settings to your favorite animation library.
 * @link http://akuma.su/blog/animatsiya-elementov-po-mere-prokrutki-stranitsy.html
 * @link https://www.delac.io/WOW/
 * @link https://github.com/matthieua/WOW
 * @author Alexander Zakharov <sys@eml.ru>
 * @package rootlocal\widgets\wow
 */
class WowBowerAsset extends AssetBundle
{
    /** @var string */
    public $sourcePath = '@bower/wow/dist';

    /** @var array */
    public $js = ['wow' . (YII_DEBUG ? '' : '.min') . '.js'];

    /** @var array */
    public $depends = [
        JqueryAsset::class,
        AnimateBowerAsset::class,
    ];
}