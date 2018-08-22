<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\ClassSubjects */

$this->title = Yii::t('classes', 'Create Class Subjects');
$this->params['breadcrumbs'][] = ['label' => Yii::t('classes', 'Class Subjects'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-subjects-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
