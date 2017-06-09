<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Lguprofile */

$this->title = $model->cap_barangay_id;
$this->params['breadcrumbs'][] = ['label' => 'Lguprofiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lguprofile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->cap_barangay_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->cap_barangay_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cap_barangay_id',
            'cap_region_id',
            'cap_province_id',
            'cap_municipal_id',
            'cap_lgutype_id',
            'cap_lguclass_id',
            'cap_designation_id',
            'landarea',
            'landunit',
            'district',
            'fname',
            'mname',
            'lname',
        ],
    ]) ?>

</div>
