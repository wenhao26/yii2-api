<?php


namespace api\controllers;


use yii\web\Controller;

class ExampleController extends Controller
{

    public function actionRedis()
    {
        halt('redis');
    }

}