<?php

namespace maxeko\devbridge;

use yii\base\Widget;

/**
 * Devbridge jQuery Autocomplete Widget
 * https://www.devbridge.com/sourcery/components/jquery-autocomplete/
 *
 * @author Maxim Korshunov <korshunov.m.e@gmail.com>
 */
class Autocomplete extends Widget
{
    public $input = 'input';
    public $options = [];

    /**
     * @inheritdoc
     */
    public function run()
    {
        $view = $this->getView();

        AutocompleteAsset::register($this->view);

        $jsOptions = [];
        foreach ($this->options as $key => $value) {
            $jsOptions[] = "{$key}:{$value}";
        }

        $jsOptions = join(',', $jsOptions);
        $view->registerJs("$('{$this->input}').autocomplete({{$jsOptions}});");
    }
}