<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 03.06.2019
 * Time: 13:55
 */

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{

    public function debug ($arr) {
        echo '<pre>' . print_r($arr, true) . '</pre>';
    }

}