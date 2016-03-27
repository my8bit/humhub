<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2015 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\directory\widgets;

use Yii;
use yii\helpers\Url;
use humhub\modules\user\models\Group;
use humhub\modules\directory\models\User;

/**
 * Directory Menu
 *
 * @since 0.21
 * @author Luke
 */
class Menu extends \humhub\widgets\BaseMenu
{

    public $template = "@humhub/widgets/views/leftNavigation";

    public function init()
    {
        $this->addItemGroup(array(
            'id' => 'directory',
            'label' => Yii::t('DirectoryModule.views_directory_layout', '<strong>Directory</strong> menu'),
            'sortOrder' => 100,
        ));

        $this->addItem(array(
            'label' => Yii::t('DirectoryModule.views_directory_layout', 'Members'),
            'group' => 'directory',
            'url' => Url::to(['/directory/directory/members']),
            'sortOrder' => 200,
            'isActive' => (Yii::$app->controller->action->id == "members"),
        ));

        $this->addItem(array(
            'label' => Yii::t('DirectoryModule.views_directory_layout', 'Spaces'),
            'group' => 'directory',
            'url' => Url::to(['/directory/directory/spaces']),
            'sortOrder' => 300,
            'isActive' => (Yii::$app->controller->action->id == "spaces"),
        ));

        parent::init();
    }

}

?>
