<?php

use Yii;
use yii\helpers\Url;
use humhub\libs\Html;

use humhub\modules\rocketchat\models\Config;

/**
 * RocketChat chat view
 * @package humhub\modules\rocketchat|views|chat
 * @author Fr13dr1ch
 * @var $url server url
 */
?>

<main class="container">
  <article class="row">
    <section class="col-md-12 panel panel-default rocketchat">
      <header class="panel-heading">
        <strong>RocketChat</strong>
      </header>
      <iframe src="<?php echo $url; ?>" width="100%" height="100%" style="height: 70vh; border: none;"></iframe>
    </section>
  </article>
</main>
