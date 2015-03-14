<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Registration */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="registration-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'rollno')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'department')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'year')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'phone_num')->textInput() ?>

    <?= $form->field($model, 'email_id')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'registered_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
