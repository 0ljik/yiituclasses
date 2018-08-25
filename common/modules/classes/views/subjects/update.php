<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\Subjects */

$this->title = Yii::t('classes', 'Update Subjects: {nameAttribute}', [
    'nameAttribute' => $model->su_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('classes', 'Subjects'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->su_id, 'url' => ['view', 'id' => $model->su_id]];
$this->params['breadcrumbs'][] = Yii::t('classes', 'Update');
?>
<div class="subjects-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
