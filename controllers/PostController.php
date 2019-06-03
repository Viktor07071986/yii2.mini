<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 03.06.2019
 * Time: 13:56
 */

namespace app\controllers;
use app\models\Post;

class PostController extends AppController
{

    //public function actionIndex($name = 'Гость'){
    public function actionIndex(){
        //return 'Hello, world!';
        $hello = 'Привет, мир!';
        $hi = 'Hi!';
        //return $this->render('index', ['var' => $hello, 'hi' => $hi]);
        //return $this->render('index', compact('hello', 'hi', 'name'));
        //$posts = Post::find()->select('id, title, excerpt')->orderBy('id DESC')->all();
        $query = Post::find()->select('id, title, excerpt')->orderBy('id DESC');
        $pages = new \yii\data\Pagination(['totalCount' => $query->count(), 'pageSize' => 2, 'pageSizeParam' => false, 'forcePageParam' => false]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
        //$this->debug($posts);
        //debug($posts);
        return $this->render('index', compact('posts', 'pages', 'name'));
    }

    public function actionView(){
        $id = \Yii::$app->request->get('id');
        $post = Post::findOne($id);
        if (empty($post)) throw new \yii\web\HttpException(404, 'Такой страницы нет ...');
        return $this->render('view', compact('post'));
    }

    public function actionTest(){
        //return 'Test';
        return $this->render('test');
    }

    public function actionHello(){
        return $this->render('hello');
    }

}