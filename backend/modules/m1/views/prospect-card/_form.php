<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\modules\m1\models\ProspectCard $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="prospect-card-form">

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
				] );
				?>
	
	<legend>Information Customer Prospect</legend>
	<div class="row">	
		<div class="col-lg-6">
			
		    <?= $form->field($model, 'prospect_card_number')->textInput(['maxlength' => 25])?>
		    
		    <?= $form->field($model, 'customer_type')->textInput(['maxlength' => 10])?>	    
		    
		    <?= $form->field($model, 'marketing_officer_name')->textInput(['maxlength' => 100])?>
		
		    <?= $form->field($model, 'company_name')->textInput(['maxlength' => 150])?>
		    <?= $form->field($model, 'company_title')->textInput(['maxlength' => 10]) ?>
		
		    <?= $form->field($model, 'company_address')->textarea(['rows' => 6])?>
		
		    <?= $form->field($model, 'business_type')->textInput(['maxlength' => 60])?>
		
		</div>

		<div class="col-lg-6">
			<?= $form->field($model, 'phone_code_area')->textInput(['maxlength' => 6]) ?>
			<?= $form->field($model, 'telephone')->textInput(['maxlength' => 25]) ?>
			
			<?= $form->field($model, 'fax')->textInput(['maxlength' => 25]) ?>
			
			<?= $form->field($model, 'email')->textInput(['maxlength' => 200]) ?>
			
		    <?= $form->field($model, 'other_information')->textarea(['rows' => 6]) ?>
		</div>
	</div>
	
	<legend>Contact Persons</legend>
	<div class="row">
		<div class="col-lg-6">
			<?= $form->field($model, 'cp_name1')->textInput(['maxlength' => 60]) ?>
		
		    <?= $form->field($model, 'cp_name2')->textInput(['maxlength' => 60]) ?>
		
		    <?= $form->field($model, 'cp_name3')->textInput(['maxlength' => 60]) ?>
		</div>
		<div class="col-lg-6">
			<?= $form->field($model, 'cp_title1')->textInput(['maxlength' => 45]) ?>
		
		    <?= $form->field($model, 'cp_title2')->textInput(['maxlength' => 45]) ?>
		
		    <?= $form->field($model, 'cp_title3')->textInput(['maxlength' => 45]) ?>
		</div>
	</div>

	<div class="form-group">
		   	<?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>

    <?php ActiveForm::end(); ?>

</div>
