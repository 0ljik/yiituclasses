<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\Mtm */

$this->title = $model->mtm_group_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('classes', 'Mtms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mtm-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('classes', 'Update'), ['update', 'mtm_group_id' => $model->mtm_group_id, 'mtm_subject_id' => $model->mtm_subject_id, 'mtm_class_subject_id' => $model->mtm_class_subject_id, 'mtm_class_assets_id' => $model->mtm_class_assets_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('classes', 'Delete'), ['delete', 'mtm_group_id' => $model->mtm_group_id, 'mtm_subject_id' => $model->mtm_subject_id, 'mtm_class_subject_id' => $model->mtm_class_subject_id, 'mtm_class_assets_id' => $model->mtm_class_assets_id], [
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
            'mtm_id',
            'mtm_group_id',
            'mtm_subject_id',
            'mtm_class_subject_id',
            'mtm_class_assets_id',
        ],
    ]) ?>

</div>
