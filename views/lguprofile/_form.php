<?php

use yii\helpers\Html;
use yii\helpers\Arrayhelper;
use yii\widgets\ActiveForm;
use backend\models\Lgutype;

/* @var $this yii\web\View */
/* @var $model backend\models\Lguprofile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lguprofile-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<?= $form->field($model, 'cap_lgutype_id')->dropDownList(ArrayHelper::map(Lgutype::find()->all(),'id','name'),['style'=>'width:200px','prompt'=>"Select LGU Type"])->label('LGU Type*') ?>

    <?= $form->field($model, 'cap_barangay_id')->dropDownList(ArrayHelper::map(Barangay::find()->all(),'id','name'),['style'=>'width:200px','prompt'=>"Select LGU Type"])->label('LGU Type*') ?>

    <?= $form->field($model, 'cap_region_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cap_province_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cap_municipal_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cap_lguclass_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cap_designation_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'landarea')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'landunit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'district')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lname')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
