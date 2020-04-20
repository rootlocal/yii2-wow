Reveal CSS animation as you scroll down a page
==============================================

[![Latest Stable Version](https://img.shields.io/packagist/v/rootlocal/yii2-wow.svg)](https://packagist.org/packages/rootlocal/yii2-wow)

* [Source code](https://github.com/rootlocal/yii2-wow)
* [Documentation WOW JS](https://www.delac.io/wow/docs)
* [Documentation Animate.css](https://github.com/daneden/animate.css)

## Install  

```bash
composer require rootlocal/yii2-wow
```

or add

```json
"rootlocal/yii2-wow": "dev-master",
```

to the require section of your composer.json.

#### Example:

```php

<?php

use yii\web\View;
use rootlocal\widgets\wow\WowWidget;

/**
 * @var $this View
 */
?>

<?= WowWidget::widget() ?>

<div class="wow bounceInUp">Your content</div>

```

