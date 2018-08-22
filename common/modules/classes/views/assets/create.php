<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\ClassAssets */

$this->title = Yii::t('classes', 'Create Class Assets');
$this->params['breadcrumbs'][] = ['label' => Yii::t('classes', 'Class Assets'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-assets-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
