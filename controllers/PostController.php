<?php

namespace app\controllers;
use app\models\Message;
use app\models\TestForm;
use Yii;

class PostController extends AppController
{

    public $layout = 'basic';

    public function actionIndex()
    {
        if(Yii::$app->request->isAjax){
            debug(Yii::$app->request->post());
            return 'test';
        }

        $model = new TestForm();

        if($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Данные приняты');
            return $this->refresh();
        }
        if ($model->load(Yii::$app->request->post()) && !$model->save()) {

            Yii::$app->session->setFlash('error', 'Ошибка');
        }
        $this->view->title = 'Все статьи';
        return $this->render('test', compact('model'));
    }
    public function actionShow()
    {
        $this->view->title = 'Одна статья';

//        $cats = Message::find()->all();
//        $cats = Message::find()->orderBy(['id' => SORT_DESC])->all();
//        $cats = Message::find()->asArray()->where('id > 4')->all();
//        $cats = Message::find()->asArray()-> where(['like', 'email', '.ru']) ->all();
    //    $cats = Message::find()->asArray()-> where(['like', 'text', 'bb'])->limit(1) ->one();
        //$cats = Message::find()->asArray()->count();

        $cats = Message::find()->asArray()->all();

        return $this->render('show', compact('cats'));
    }
}