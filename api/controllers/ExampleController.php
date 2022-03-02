<?php


namespace api\controllers;


use yii\web\Controller;
use yii\redis;

class ExampleController extends Controller
{

    public function actionRedis()
    {
        $redis = \Yii::$app->redis_local;

        $redis->set('yii_redis', 'Redis');
        halt($redis->get('yii_redis'));

        /*$cache = \Yii::$app->cache;
        $cache->set('yii_cache', 'Cache');
        halt($cache->get('yii_cache'));*/
    }

}