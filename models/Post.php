<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 03.06.2019
 * Time: 15:09
 */

namespace app\models;
use yii\db\ActiveRecord;


class Post extends ActiveRecord
{

    public static function tableName()
    {
        return 'post';
    }

}