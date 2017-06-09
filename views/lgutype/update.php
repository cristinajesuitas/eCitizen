<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Lgutype */

$this->title = 'Update Lgutype: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Lgutypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lgutype-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
