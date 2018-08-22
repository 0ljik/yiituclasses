<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\ClassAssets */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('classes', 'Class Assets'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-assets-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('classes', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('classes', 'Delete'), ['delete', 'id' => $model->id], [
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
            'id',
            'title',
            'body:ntext',
            'start',
            'end',
            'author_id',
        ],
    ]) ?>

</div>
