<?php


namespace humhub\modules\rocketchat;

use Yii;
use yii\helpers\Url;

/**
 * RocketChat Module
 * @package humhub\modules\rocketchat
 * @author Fr13dr1ch
 */
class Module extends \humhub\components\Module {

  public $resourcesPath = 'resources';

  /**
   * Get the actually server url
   */
  public function getServerURL() {
    return $this->settings->get('serverURL');
  }

  /**
   * Config Module
   */
  public function getConfigUrl() {
    return Url::to(['/rocketchat/config']);
  }


  /**
   * Disable the modules
   */
  public function disable() {
    // Disable parent
    parent::disable();
  }
}
?>
