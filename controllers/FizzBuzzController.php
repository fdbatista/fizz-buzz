<?php

namespace app\controllers;

use app\models\FizzBuzz;
use yii\web\Controller;

class FizzBuzzController extends Controller {

    public function actionIndex() {
        $model = new FizzBuzz();
        $results = null;
        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            $results = $model->processInterval();
        }
        return $this->render('index', ['model' => $model, 'results' => $results]);
    }

}
