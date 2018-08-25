<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\MtmAssignment */

$this->title = Yii::t('classes', 'Update Mtm Assignment: {nameAttribute}', [
    'nameAttribute' => $model->mta_mtmc_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('classes', 'Mtm Assignments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mta_mtmc_id, 'url' => ['view', 'mta_mtmc_id' => $model->mta_mtmc_id, 'mta_user_id' => $model->mta_user_id]];
$this->params['breadcrumbs'][] = Yii::t('classes', 'Update');
?>
<div class="mtm-assignment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
