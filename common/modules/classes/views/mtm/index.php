<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\modules\classes\models\MtmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('classes', 'Mtms');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mtm-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('classes', 'Create Mtm'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'mtm_id',
            'mtm_group_id',
            'mtm_subject_id',
            'mtm_class_subject_id',
            'mtm_class_assets_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
