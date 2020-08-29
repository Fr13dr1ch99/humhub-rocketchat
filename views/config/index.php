<?php

namespace humhub\modules\rocketchat\views\config;

use humhub\libs\Html;
use humhub\widgets\Button;
use yii\bootstrap\ActiveForm;

/**
 * RocketChat configuration view
 * @package humhub\modules\rocketchat|views|config
 * @author Fr13dr1ch
 * @var $model \humhub\modules\rocketchat\models\Config
 */
?>

<article class="panel panel-default">
  <header class="panel-heading">
    <?= Yii::t('RocketchatModule.base', '<strong>RocketChat</strong> module configuration'); ?>
  </header>
  <section class="panel-body">
    <?php $form = ActiveForm::begin(['id' => 'configure-form']); ?>
      <?= $form->field($model, 'serverURL'); ?>
      <?= Button::save()->submit() ?>
    <?php ActiveForm::end(); ?>
  </section>
</article>
