<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Parameter;

/**
 * @var yii\web\View $this
 * @var app\modules\m1\models\Quotation $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="quotation-form">

   <?php $form = ActiveForm::begin ( [ 
		'options' => [ 
				'class' => 'form-horizontal' 
		],
		'fieldConfig' => [ 
				'template' => "{label}\n<div class=\"col-lg-8\">{input}{error}</div>",
				'labelOptions' => [ 
						'class' => 'col-lg-4 control-label' 
				] 
		] 
	] ); ?>

	<legend>Information Customer</legend>
	<div class="row">
		<div class="col-lg-6">
		    <?= $form->field($model, 'qutation_no')->textInput(['maxlength' => 35]) ?>
		
		    <?= $form->field($model, 'type')->dropDownList(Parameter::getCustomerType(), ['prompt'=>'-Select']);?>
		
		    <?= $form->field($model, 'quotation_date')->textInput() ?>
		
		    <?= $form->field($model, 'valid_date')->textInput() ?>
		
		    <?= $form->field($model, 'destination_company')->textInput(['maxlength' => 60]) ?>
		
		    <?= $form->field($model, 'status')->textInput(['maxlength' => 30]) ?>
		
		    <?= $form->field($model, 'created_date')->textInput() ?>
		
		    <?= $form->field($model, 'created_by')->textInput() ?>
		
		    <?= $form->field($model, 'attn')->textInput(['maxlength' => 60]) ?>
		
		    <?= $form->field($model, 're')->textInput(['maxlength' => 100]) ?>
		
		    <?= $form->field($model, 'approved_date')->textInput() ?>
		
		    <?= $form->field($model, 'company_address')->textarea(['rows' => 6]) ?>
		
		    <?= $form->field($model, 'letter')->textarea(['rows' => 6]) ?>
		
		    <?= $form->field($model, 'approved_by')->textInput() ?>
		
		    <?= $form->field($model, 'prospect_card_id')->textInput() ?>
		
		    <div class="form-group">
		        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		    </div>
		</div>
	</div>
    <?php ActiveForm::end(); ?>

</div>
