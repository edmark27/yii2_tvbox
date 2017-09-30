<?php

namespace app\controllers;

use app\models\Review;
use app\models\ReviewForm;
use app\models\Specs;
use app\models\Tvbox;
use Yii;
use yii\web\HttpException;
use yii\web\UploadedFile;

class SiteController extends AppController
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
            ->where(['id_tvbox' => $id])
            ->all();
        $this->setMeta('myTvbox | ' . $media->name, 'твбокс ' . $media->name, 'tvbox ' . $media->name);

        $model = new ReviewForm();
        if ($model->load(Yii::$app->request->post()) ) {
            $model->id_tvbox = Yii::$app->request->get('id');
           $model->image = UploadedFile::getInstance($model, 'image');
           if($model->image) $model->upload('img/', $model->image);
           else $model->image = 'Anonymus.jpg';
            if( $model->save() ) {
                Yii::$app->session->setFlash('reviewFormSubmitted');
            return $this->refresh();
        }else{
                Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }
        return $this->render('box', compact('media', 'revs', 'model'));
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
