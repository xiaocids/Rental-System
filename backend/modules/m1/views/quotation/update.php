<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\modules\m1\models\Quotation $model
 */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
  'modelClass' => 'Quotation',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Quotations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="quotation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
