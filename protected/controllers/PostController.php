<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Taleblou
 * Date: 9/17/13
 * Time: 5:37 PM
 * To change this template use File | Settings | File Templates.
 */


class PostController extends Controller
{
    public function actions()
    {
        return array(
            'fileUpload'=>array(
                'class'=>'ext.redactor.actions.FileUpload',
                'uploadPath'=>'uploads',
                'uploadUrl'=>'uploads',
                'uploadCreate'=>true,
                'permissions'=>0755,
            ),
            'imageUpload'=>array(
                'class'=>'ext.redactor.actions.ImageUpload',
                'uploadPath'=>'uploads',
                'uploadUrl'=>'uploads',
                'uploadCreate'=>true,
                'permissions'=>0755,
            ),
            'imageList'=>array(
                'class'=>'ext.redactor.actions.ImageList',
                'uploadPath'=>'uploads',
                'uploadUrl'=>'uploads',
            ),
        );
    }

}
?>