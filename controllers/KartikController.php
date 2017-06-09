<?php
namespace frontend\controllers;
 
use Yii;
use yii\web\Controller;
use app\models\Kartik;
 
class KartikController extends Controller
{
    public function actionIndex()
    {
        $model = Kartik::find()->one();
        return $this->render('index', ['model' => $model]);
    }
}