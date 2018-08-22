<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\Assign */

$this->title = Yii::t('classes', 'Update Assign: {nameAttribute}', [
    'nameAttribute' => $model->mtm_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('classes', 'Assigns'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mtm_id, 'url' => ['view', 'mtm_id' => $model->mtm_id, 'user_id' => $model->user_id]];
$this->params['breadcrumbs'][] = Yii::t('classes', 'Update');
?>
<div class="assign-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
