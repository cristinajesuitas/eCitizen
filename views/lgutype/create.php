<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Lgutype */

$this->title = 'Create Lgutype';
$this->params['breadcrumbs'][] = ['label' => 'Lgutypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lgutype-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
