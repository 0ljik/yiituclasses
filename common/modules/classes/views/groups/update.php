<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\Groups */

$this->title = Yii::t('classes', 'Update Groups: {nameAttribute}', [
    'nameAttribute' => $model->group_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('classes', 'Groups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->group_id, 'url' => ['view', 'id' => $model->group_id]];
$this->params['breadcrumbs'][] = Yii::t('classes', 'Update');
?>
<div class="groups-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
