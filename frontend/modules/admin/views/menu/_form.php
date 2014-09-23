<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var frontend\modules\administrator\models\Menu $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin([
    	'options' => [ 
			'class' => 'form-horizontal'
		],
		'fieldConfig' => [
			'template' => "{label}\n<div class=\"col-lg-8\">{input}{error}</div>",
			'labelOptions' => [ 
				'class' => 'col-lg-4 control-label' 
			]
		]
    ]); ?>

    <?= $form->field($model, 'parent_id')->textInput() ?>

    <?= $form->field($model, 'menu_name')->textInput(['maxlength' => 60]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'active')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
