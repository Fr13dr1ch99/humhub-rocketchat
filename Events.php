<?php

namespace humhub\modules\rocketchat;

use Yii;
use yii\helpers\Url;
use humhub\modules\rocketchat\models\Config;

/**
 * Init Top Menu
 *
 * @package humhub\modules\rocketchat
 * @author Fr13dr1ch
 */
class Events
{

  /**
   * On build of the TopMenu, check if module is enabled
   * When enabled add a menu item
   *
   * @param type $event
   */
  public static function onTopMenuInit($event) {
    if(Yii::$app->user->isGuest) {
      return;
    }

    $event->sender->addItem([
      'label' => Yii::t('RocketchatModule.base', 'Messages'),
      'url' => Url::to(['/rocketchat/chat/index']),
      'icon' => '<i class="fa fa-rocket"></i>',
      'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'rocketchat'),
      'sortOrder' => 300,
    ]);
  }
}

?>
