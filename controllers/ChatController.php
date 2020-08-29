<?php

namespace humhub\modules\rocketchat\controllers;

use Yii;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\HttpException;
use humhub\components\Controller;

/**
 * ChatController provides messaging actions.
 *
 * @package humhub\modules\rocketchat|controllers
 * @author Fr13dr1ch
 */
class ChatController extends Controller {
  /**
   * Chat Window
   * @return string
   */
  public function actionIndex() {
    $url = Yii::$app->controller->module->getServerURL();
    return $this->render('index', ['url' => $url]);
  }
}
