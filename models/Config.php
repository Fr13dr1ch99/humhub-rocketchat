<?php

namespace humhub\modules\rocketchat\models;

use Yii;
use yii\base\Model;

/**
 * Config model save the configuration data
 *
 * @package humhub\modules\rocketchat\models
 * @author Fr13dr1ch
 */
class Config extends Model {

  public $serverURL;

  /**
   * On init the config model
   */
  public function init() {
    parent::init();
    $this->serverURL = $this->getModule()->settings->get('serverURL', $this->serverURL);
  }


  /**
   * Get the rocketchat module
   * @return Module
   */
  public static function getModule() {
    return Yii::$app->getModule('rocketchat');
  }


  /**
   * Get the validation rules
   * @return array
   */
  public function rules() {
    return [
      ['serverURL', 'string']
    ];
  }


  /**
   * Get the attribute labals
   * @return array
   */
  public function attributeLabels() {
    return [
      'serverURL' => Yii::t('RocketchatModule.base', 'Hostname')
    ];
  }


  /**
   * Get the attribute hints
   * @return array
   */
  public function attributeHints() {
    return [
      'serverURL' => Yii::t('RocketchatModule.base', 'e.g. http://localhost:3000')
    ];
  }


  /**
   * Load the saved settings from database
   * @return bool
   */
  public function loadSettings() {
    $this->serverURL = Yii::$app->getModule('rocketchat')->settings->get('serverURL');
    return true;
  }


  /**
   * Save the settings in database
   * @return bool
   */
  public function save() {
    Yii::$app->getModule('rocketchat')->settings->set('serverURL', rtrim($this->serverURL, '/'));
    return true;
  }
}
