<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\ClassAssets */

$this->title = Yii::t('classes', 'Update Class Assets: {nameAttribute}', [
    'nameAttribute' => $model->cas_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('classes', 'Class Assets'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cas_id, 'url' => ['view', 'id' => $model->cas_id]];
$this->params['breadcrumbs'][] = Yii::t('classes', 'Update');
?>
<div class="class-assets-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
