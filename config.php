<?php
use humhub\widgets\TopMenu;
/**
 * Configuration
 * @package humhub\modules\rocketchat
 * @author Fr13dr1ch
 */

return [
  'id' => 'rocketchat',
  'class' => 'humhub\modules\rocketchat\Module',
  'namespace' => 'humhub\modules\rocketchat',
  'events' => [
    [
      'class' => TopMenu::class, 'event' => TopMenu::EVENT_INIT,
      'callback' => ['humhub\modules\rocketchat\Events', 'onTopMenuInit']
    ]
  ]
];
?>
