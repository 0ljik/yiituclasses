<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\MtmAssignment */

$this->title = Yii::t('classes', 'Create Mtm Assignment');
$this->params['breadcrumbs'][] = ['label' => Yii::t('classes', 'Mtm Assignments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mtm-assignment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
