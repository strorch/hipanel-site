<?php

/*
 * Selling site for HiPanel
 *
 * @link      http://hipanel.com/
 * @package   hipanel-site
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\site\menus;

use Yii;
use yii\widgets\Menu;

class MainMenu extends \hiqdev\yii2\menus\Menu
{
    public $widgetConfig = [
        'class' => Menu::class
    ];

    public function items()
    {
        return [
            ['label' => Yii::t('hipanel:site', 'VDS'),        'url' => ['/site/vds']],
            ['label' => Yii::t('hipanel:site', 'Domains'),    'url' => ['/pages/render/index', 'page' => 'domains']],
            ['label' => Yii::t('hipanel:site', 'Transfer'),   'url' => ['/domain/transfer/index']],
            ['label' => Yii::t('hipanel:site', 'DNS'),        'url' => ['/pages/render/index', 'page' => 'dns']],
            ['label' => Yii::t('hipanel:site', 'Contact'),    'url' => ['/site/contact']],
            ['label' => Yii::t('hipanel:site', 'FAQ'),        'url' => ['/pages/render/index', 'page' => 'faq']],
        ];
    }
}
