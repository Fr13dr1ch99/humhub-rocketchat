<?php

namespace humhub\modules\rocketchat\controllers;

use Yii;
use humhub\modules\rocketchat\models\Config;
use humhub\models\Setting;
use humhub\modules\admin\components\Controller;

/**
 * ConfigController handles the configuration requests.
 *
 * @package humhub\modules\rocketchat|controllers
 * @author Fr13dr1ch
 */
class ConfigController extends Controller
{

  /**
   * Configuration action for super admins.
   */
  public function actionIndex()
  {
    $form = new Config();
    if($form->load(Yii::$app->request->post()) && $form->save()) {
      $this->view->saved();
    }

    return $this->render('index', ['model' => $form]);
  }
}

?>
