<?php

namespace rootlocal\widgets\wow;

use yii\base\Widget;
use yii\web\View;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;

/**
 * Class WowWidget Reveal CSS animation as you scroll down a page
 * Reveal CSS animation as you scroll down a page. By default, you can use it to trigger animate.css animations.
 * But you can easily change the settings to your favorite animation library.
 *
 * @see https://www.delac.io/wow/docs
 * @see https://github.com/matthieua/WOW
 * @property array $options options widget
 *
 * @property string $jsConfig Read-Only jsObject config Widget
 *
 * @author Alexander Zakharov <sys@eml.ru>
 * @package rootlocal\widgets\wow
 */
class WowWidget extends Widget
{
    /** @var string */
    public const PLUGIN_NAME = 'WOW';
    /** @var array */
    public $options = [];

    /** @var string */
    private $_jsConfig;
    /** @var string */
    private $_hash;


    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        $view = $this->getView();
        $this->registerAssets($view);
        $this->buildJsOptions($view);
        $this->registerJs($view);
    }

    /**
     * @return string
     */
    public function getJsConfig()
    {
        $defaultOptions = [
            'boxClass' => 'wow',
            'animateClass' => 'animated',
            'offset' => 0,
            'mobile' => true,
            'live' => true,
        ];

        if ($this->_jsConfig === null) {
            $this->_jsConfig = Json::htmlEncode(ArrayHelper::merge($defaultOptions, $this->options));
        }

        return $this->_jsConfig;
    }

    /**
     * @param View $view
     */
    public function registerAssets(View $view)
    {
        WowBowerAsset::register($view);
    }

    /**
     * @param View $view
     */
    public function buildJsOptions(View $view)
    {
        $js = $this->getJsConfig();
        $this->_hash = self::PLUGIN_NAME . '_' . hash('crc32', get_called_class() . $js);
        $view->registerJs("var {$this->_hash} = {$js};", $view::POS_HEAD, $this->_hash);
    }

    /**
     * @param View $view
     */
    public function registerJs(View $view)
    {
        $js = 'new ' . self::PLUGIN_NAME . '(' . $this->_hash . ').init();';
        $view->registerJs($js);
    }
}