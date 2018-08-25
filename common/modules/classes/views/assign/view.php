<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\MtmAssignment */

$this->title = $model->mta_mtmc_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('classes', 'Mtm Assignments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mtm-assignment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('classes', 'Update'), ['update', 'mta_mtmc_id' => $model->mta_mtmc_id, 'mta_user_id' => $model->mta_user_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('classes', 'Delete'), ['delete', 'mta_mtmc_id' => $model->mta_mtmc_id, 'mta_user_id' => $model->mta_user_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('classes', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'mta_mtmc_id',
            'mta_user_id',
        ],
    ]) ?>

</div>
