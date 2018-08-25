<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\Mtm */

$this->title = Yii::t('classes', 'Update Mtm: {nameAttribute}', [
    'nameAttribute' => $model->mtm_group_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('classes', 'Mtms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mtm_group_id, 'url' => ['view', 'mtm_group_id' => $model->mtm_group_id, 'mtm_subject_id' => $model->mtm_subject_id, 'mtm_class_subject_id' => $model->mtm_class_subject_id, 'mtm_class_assets_id' => $model->mtm_class_assets_id]];
$this->params['breadcrumbs'][] = Yii::t('classes', 'Update');
?>
<div class="mtm-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
