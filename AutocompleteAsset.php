<?php

namespace maxeko\devbridge;

use yii\web\AssetBundle;

/**
 * Devbridge jQuery Autocomplete Asset
 *
 * @package maxeko\devbridge
 */
class AutocompleteAsset extends AssetBundle
{
    public $sourcePath = '@vendor/devbridge/jquery-autocomplete/dist';
    public $depends = [
        'yii\web\JqueryAsset'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->js[] = YII_ENV_DEV ? 'jquery.autocomplete.js' : 'jquery.autocomplete.min.js';
    }
}