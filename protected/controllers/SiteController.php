<?php
namespace app\controllers;

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
		echo $this->render('index');
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