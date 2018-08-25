<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\ClassAssets */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="class-assets-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cas_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cas_body')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cas_start_time')->textInput() ?>

    <?= $form->field($model, 'cas_end_time')->textInput() ?>

    <?= $form->field($model, 'author_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('classes', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
