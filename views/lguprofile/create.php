<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Lguprofile */

$this->title = 'Create Lguprofile';
$this->params['breadcrumbs'][] = ['label' => 'Lguprofiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lguprofile-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
