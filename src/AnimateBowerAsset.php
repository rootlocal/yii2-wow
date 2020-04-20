<?php

namespace rootlocal\widgets\wow;

use yii\web\AssetBundle;

/**
 * Class AnimateBowerAsset A cross-browser library of CSS animations. As easy to use as an easy thing.
 * Just-add-water CSS animation animate.css is a bunch of cool, fun, and cross-browser animations
 * for you to use in your projects. Great for emphasis, home pages, sliders, and general just-add-water-awesomeness.
 *
 * @link http://daneden.github.io/animate.css
 * @link https://github.com/daneden/animate.css
 * @author Alexander Zakharov <sys@eml.ru>
 * @package rootlocal\widgets\wow
 */
class AnimateBowerAsset extends AssetBundle
{
    /** @var string */
    public $sourcePath = '@bower/animate.css';

    /** @var array */
    public $css = ['animate' . (YII_DEBUG ? '' : '.min') . '.css'];
}