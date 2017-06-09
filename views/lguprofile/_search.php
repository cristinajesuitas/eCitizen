<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\LguprofileSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lguprofile-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cap_barangay_id') ?>

    <?= $form->field($model, 'cap_region_id') ?>

    <?= $form->field($model, 'cap_province_id') ?>

    <?= $form->field($model, 'cap_municipal_id') ?>

    <?= $form->field($model, 'cap_lgutype_id') ?>

    <?php // echo $form->field($model, 'cap_lguclass_id') ?>

    <?php // echo $form->field($model, 'cap_designation_id') ?>

    <?php // echo $form->field($model, 'landarea') ?>

    <?php // echo $form->field($model, 'landunit') ?>

    <?php // echo $form->field($model, 'district') ?>

    <?php // echo $form->field($model, 'fname') ?>

    <?php // echo $form->field($model, 'mname') ?>

    <?php // echo $form->field($model, 'lname') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
