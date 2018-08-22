<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\Assign */

$this->title = $model->mtm_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('classes', 'Assigns'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assign-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('classes', 'Update'), ['update', 'mtm_id' => $model->mtm_id, 'user_id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('classes', 'Delete'), ['delete', 'mtm_id' => $model->mtm_id, 'user_id' => $model->user_id], [
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
            'user_id',
        ],
    ]) ?>

</div>
