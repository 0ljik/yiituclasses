<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\Subjects */

$this->title = Yii::t('classes', 'Create Subjects');
$this->params['breadcrumbs'][] = ['label' => Yii::t('classes', 'Subjects'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subjects-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
