<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\Subjects */

$this->title = $model->su_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('classes', 'Subjects'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subjects-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('classes', 'Update'), ['update', 'id' => $model->su_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('classes', 'Delete'), ['delete', 'id' => $model->su_id], [
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
            'su_id',
            'su_name',
        ],
    ]) ?>

</div>
