# Devbridge Ajax Autocomplete Asset and Widget for Yii2

Lazy way to include [Devbridge Autocomplete](https://www.devbridge.com/sourcery/components/jquery-autocomplete/) to your Yii2 project.
 
## Installation

Add to your composer.json:

```sh
    "repositories": [
        {
            "url": "https://github.com/maxeko/yii2-jquery-autocomplete.git",
            "type": "vcs"
        },
        {
            "url": "https://github.com/maxeko/jQuery-Autocomplete",
            "type": "vcs"
        }
    ],
    "require": {
        "devbridge/jquery-autocomplete": "*@dev",
        "maxeko/yii2-jquery-autocomplete": "*@dev"
    }
```

And run

```sh
composer update
```

## Usage

Put somewhere in your view:
 
```php
<?php use maxeko\devbridge\Autocomplete; ?>

<?= Autocomplete::widget([
    'input' => '#i-input',
    'options' => [        
        'serviceUrl' => "'/path/to/collection/controller'",
        'paramName' => "'q'",
        'dataType' => "'json'",
        'onSelect' => "function (suggestion) { 
            console.log('Value: ' + suggestion.value);
            console.log('Data: ' + suggestion.data);
        }",
        'transformResult' => "function(response) {
            return {
                suggestions: $.map(response, function(item) {
                    return { value: item.title, data: item.id };
                })
            };
        }"
        // and any other options form https://www.devbridge.com/sourcery/components/jquery-autocomplete/
        // enclose string-value parameters by additional quotes "'paramValue'"
    ] 
]) ?>
```

For dynamic update serviceUrl (js):
  
```javascript
    $('#i-input').autocomplete('setOptions', {
        serviceUrl: '/path/to/collection/controller?contextParameterName=' + contextParameter,
    });
```

TypeScript support:

```
/// <reference path="../../vendor/devbridge/jquery-autocomplete/typings/jquery-autocomplete/jquery.autocomplete.d.ts" />
```

## RTFM

- [Documentation](https://www.devbridge.com/sourcery/components/jquery-autocomplete/)
- [Styling](https://www.devbridge.com/sourcery/components/jquery-autocomplete/#jquery-autocomplete-styling)
- [Source and readme in GitHub](https://github.com/devbridge/jQuery-Autocomplete)
- [Demo](http://devbridge.github.io/jQuery-Autocomplete/) 

## Licence

MIT