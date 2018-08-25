<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\modules\classes\models\ClassAssetsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('classes', 'Class Assets');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-assets-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('classes', 'Create Class Assets'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cas_id',
            'cas_title',
            'cas_body:ntext',
            'cas_start_time',
            'cas_end_time',
            //'author_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
