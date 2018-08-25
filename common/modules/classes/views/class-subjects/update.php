<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\ClassSubjects */

$this->title = Yii::t('classes', 'Update Class Subjects: {nameAttribute}', [
    'nameAttribute' => $model->casu_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('classes', 'Class Subjects'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->casu_id, 'url' => ['view', 'id' => $model->casu_id]];
$this->params['breadcrumbs'][] = Yii::t('classes', 'Update');
?>
<div class="class-subjects-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
