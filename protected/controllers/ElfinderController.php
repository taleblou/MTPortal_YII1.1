<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Taleblou
 * Date: 10/27/14
 * Time: 4:41 PM
 * To change this template use File | Settings | File Templates.
 */
// controller to host connector action
class ElfinderController extends CController
{
    public function actions()
    {
         $url=$_GET['url'];
        $root=$_GET['root'];
        return array(
            'connector' => array(
                'class' => 'ext.elFinder.ElFinderConnectorAction',
                'settings' => array(
                    'root' => Yii::getPathOfAlias('webroot') . '/uploads/'.$root,
                    'URL' => Yii::app()->baseUrl . '/uploads/'.$url,
                    'rootAlias' => 'Home',
                    'mimeDetect' => 'none'
                )
            ),
        );
    }
}