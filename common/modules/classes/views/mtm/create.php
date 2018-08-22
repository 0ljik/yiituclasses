<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\Mtm */

$this->title = Yii::t('classes', 'Create Mtm');
$this->params['breadcrumbs'][] = ['label' => Yii::t('classes', 'Mtms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mtm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
