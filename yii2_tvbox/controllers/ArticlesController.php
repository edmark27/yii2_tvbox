<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 30.09.2017
 * Time: 10:31
 */

namespace app\controllers;


use app\models\Article;
use Yii;


class ArticlesController extends AppController
{
    public function actionSeoarticles(){
        $this->setMeta('myTvbox | Статьи');
        $articles = Article::find()
            ->all();
        return $this->render('seo', compact('articles'));
    }

    public function actionQuestion(){
        $id = Yii::$app->request->get('id');
        $seo = Article::find()
            ->where(['id' => $id])
            ->limit(1)
            ->one();

        $this->setMeta('myTvbox | ' . $seo->name, 'Статья ' . $seo->name, 'твбокс, TVbox, смартТВ, медиабокс');
        return $this->render('seoart', compact('seo'));
    }

}