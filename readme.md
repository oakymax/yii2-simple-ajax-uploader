# IPology Simple Ajax Uploader widget for Yii2

Easy way to use [IPology Simple Ajax Uploader](https://www.lpology.com/code/ajaxuploader/docs.php) 
in your Yii2 app.

## Installation

```sh
composer require maxeko/yii2-simple-ajax-uploader
```

## Usage

Put this in your view where you want to use IPology Simple Ajax Uploader: 

```php
<?php use maxeko\lpology\SimpleAjaxUploader; ?>

<?= SimpleAjaxUploader::widget([
    'options' => [
        'button' => '<file upload button>',
        'url' => '<location of the server-side file upload handler>',
        'name' => '<upload parameter name>',
        // and any other options form https://www.lpology.com/code/ajaxuploader/docs.php
    ]
]) ?>
```

## License

MIT