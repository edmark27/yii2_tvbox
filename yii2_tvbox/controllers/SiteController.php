<?php

namespace app\controllers;

use app\models\Article;
use app\models\Comments;
use app\models\Review;
use app\models\Specification;
use app\models\Tvbox;
use app\models\Sale;
use app\models\Specs;
use Yii;
use yii\web\Controller;
use app\models\ContactForm;
use yii\web\HttpException;

class SiteController extends Controller
{

    public function actionIndex()
    {
        $cards = Tvbox::find()
            ->joinWith('chipset')
            ->all();
        $this->setMeta('myTvbox | Главная');
      return $this->render('index', compact('cards'));
    }

    public function actionBox(){
        $id = Yii::$app->request->get('id');
        $err = Tvbox::findOne($id);
        if(empty($err))
            throw new HttpException(404, 'Такого ТВбокса нет');
        $media = Tvbox::find()
            ->with('specification', 'chipset', 'partners', 'shop', 'slider')
            ->where(['id' => $id])
            ->limit(1)
            ->one();
        $revs= Review::find()
            ->joinWith('user')
            ->where(['id_tvbox' => $id])
            ->all();
        $this->setMeta('myTvbox | ' . $media->name, 'твбокс ' . $media->name, 'tvbox ' . $media->name);
        return $this->render('box', compact(['media', 'revs']));
    }

    protected function setMeta($title = null, $description = null, $keywords = null){
        $this->view->title = $title;
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionSale(){
        $goods = Sale::find()
            ->joinWith('shop')
            ->all();
            $this->setMeta('myTvbox | Скидки');
            return $this->render('discount', compact('goods'));
        }

    public function actionContact()
    {
        $model = new ContactForm();
        $this->setMeta('myTvbox | Партнёрам');
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', compact('model'));
    }
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
        $comments= Comments::find()
            ->joinWith('user')
            ->where(['id_article' => $id])
            ->all();
        $this->setMeta('myTvbox | ' . $seo->name, 'Статья ' . $seo->name, 'твбокс, TVbox, смартТВ, медиабокс');
        return $this->render('seoart', compact(['seo', 'comments']));
    }
    public function actionSearch(){
        $search = Yii::$app->request->get('search');
        $query = Tvbox::find()
            ->where(['like', 'name', $search])
            ->joinWith('chipset')
            ->all();
        $this->setMeta('myTvbox | Поиск');
        return $this->render('search', compact('query', 'search'));
    }

    public function actionAdd(){
       $this->setMeta('myTvbox | Сравнение');
        $id = Yii::$app->request->get('id');
        $box = Tvbox::find()->with('specification', 'chipset')->where(['id' => $id])->one();
        $session=Yii::$app->session;
        $session->open();
        $specs = new Specs();
        $specs->addToSpecs($box);
        $it = Tvbox::find()->all();
        return $this->render('compare', compact('session', 'it'));
    }

    public function actionDel(){
        $id = Yii::$app->request->get('id');
        $session=Yii::$app->session;
        $session->open();
        $specs = new Specs();
        $specs->delFromSpecs($id);
        $it = Tvbox::find()->all();
        return $this->render('compare', compact('session', 'it'));
    }
}
