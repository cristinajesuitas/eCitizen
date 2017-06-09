<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LguprofileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'LGU Profile';
$this->params['breadcrumbs'][]=['label'=>'Utility'];
$this->params['breadcrumbs'][]=['label'=>'Library'];
$this->params['breadcrumbs'][] =$this->title
?>
<div class="lguprofile-index">

    <h1><?= Html::encode($this->title) ?></h1>
 
	<?php echo $this->render('_form', ['model' => $model]); ?>
    
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class'=>'item'],
        'itemView' => function($model,$key,$index,$widget){
			return Html::a(Html::encode($model->cap_barangay_id),['view','id'=>$model->cap_barangay_id]);
		},
	]) ?>
</div>
