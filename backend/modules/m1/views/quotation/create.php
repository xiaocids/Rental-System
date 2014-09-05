<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\modules\m1\models\Quotation $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Quotation',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Quotations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quotation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
