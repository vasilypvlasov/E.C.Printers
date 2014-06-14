<?php
namespace app\controllers;

use app\models\Comments;
use app\models\Page;
use \yii\web\Controller;
use \yii\base\HttpException;
use \yii;

/**
 * SiteController
 * This class provides a demonstration of a simple blog application
 */
class SiteController extends Controller
{
    /**
     * This method returns a list of all models in the database
     */
    public function actionIndex()
    {
        $records = Page::find()->all();
        return $this->render('index', array('records' => $records));
    }

    public function actionView($id)
    {
        $model = Page::find($id)->one();
        return $this->render('view', array('model' => $model));
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

    public function actionAbout()
    {
        return $this->render('about');
    }
}