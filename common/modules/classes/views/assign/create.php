<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\Assign */

$this->title = Yii::t('classes', 'Create Assign');
$this->params['breadcrumbs'][] = ['label' => Yii::t('classes', 'Assigns'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assign-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
