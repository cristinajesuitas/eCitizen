<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Municipal */

$this->title = 'Create Municipal';
$this->params['breadcrumbs'][] = ['label' => 'Municipals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="municipal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
