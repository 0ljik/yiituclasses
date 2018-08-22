<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\Mtm */

$this->title = Yii::t('classes', 'Update Mtm: {nameAttribute}', [
    'nameAttribute' => $model->group_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('classes', 'Mtms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->group_id, 'url' => ['view', 'group_id' => $model->group_id, 'subject_id' => $model->subject_id, 'class_subject_id' => $model->class_subject_id, 'class_assets_id' => $model->class_assets_id]];
$this->params['breadcrumbs'][] = Yii::t('classes', 'Update');
?>
<div class="mtm-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
