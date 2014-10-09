<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use yii\jui\DatePicker;

/**
 * @var yii\web\View $this
 * @var frontend\modules\admin\models\JobVacation $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="job-vacation-form">

    <?php $form = ActiveForm::begin([
    	'options' => [ 
			'class' => 'form-vertical'
		],
// 		'fieldConfig' => [
// 			'template' => "{label}\n<div class=\"col-lg-8\">{input}{error}</div>",
// 			'labelOptions' => [ 
// 				'class' => 'col-lg-4 control-label' 
// 			]
// 		]
    ]); ?>
    <?php 
//     if(isset($model)){
//     	echo $form->errorSummary($model);
//     }
     ?>
	<div class="row-fluid">
		<legend>Job Descriptions</legend>
		<div class="col-md-12">
		
			<?= $form->field($model, 'job_name')->textInput(['maxlength' => 80])?>
	
		    <?=$form->field ( $model, 'job_description' )->widget ( letyii\tinymce\Tinymce::className (), [ 'options' => [ 'id' => 'testid' ],'configs' => ['toolbar' => [ "undo redo | styleselect | bold italic underline| link image alignleft aligncenter alignright" ] ] ] )?>
		
		    <?=$form->field ( $model, 'job_responsibility' )->widget ( letyii\tinymce\Tinymce::className (), [ 'options' => [ 'id' => 'testid' ],'configs' => ['toolbar' => [ "undo redo | styleselect | bold italic underline| link image alignleft aligncenter alignright" ] ] ] )?>
		</div>
	</div>
	<div class="row-fluid">
		<legend>Qualifications</legend>
		<div class="col-md-6">
			<?= $form->field($model, 'req_gender')->radioList(['M'=>'Male','F'=>'Female','MF'=>'Male/Female'], ['inline'=>true]) ?>
	
		    <?= $form->field($model, 'req_age')->textInput() ?>
		
		    <?= $form->field($model, 'req_marital_status')->dropDownList(['S'=>'Single','M'=>'Maried'], ['prompt'=>'-Select', 'empty'=>'-Select']) ?>
		
		    <?= $form->field($model, 'req_last_education')->dropDownList(['SMA'=>'SMA','SMK'=>'SMK','D1'=>'Diploma 1','D2'=>'Diploma 2','D3'=>'Diploma 3','S1'=>'Strata 1', 'S2'=>'Strata 2', 'S3'=>'Strata 3'], ['prompt'=>'-Select', 'empty'=>'-Select']) ?>
			
			<?= $form->field($model, 'req_majoring')->textInput(['maxlength' => 255])?>
		</div>
		<div class="col-md-6">
		    <?= $form->field($model, 'req_min_experiance')->dropDownList(['1'=>'1 Year','2'=>'2 Year','3'=>'3 Year','4'=>'4 Year','4>'=>'More than 4 Year'], ['prompt'=>'-Select', 'empty'=>'-Select'])?>
		
		    <?= $form->field($model, 'contact')->textInput(['maxlength' => 100])?>
		
		    <?= $form->field($model, 'send_to')->textInput(['maxlength' => 100])?>
		    
		    <?= $form->field($model, 'valid_until')->widget(DatePicker::className(),['language' => 'en', 'dateFormat' => 'yyyy-MM-dd','options'=>['class' => 'form-control']])?>
			
		    <?php //$form->field ( $model, 'valid_until' ) ->widget(kartik\widgets\DatePicker::classname (), [ 'options' => [ 'placeholder' => 'Expired Until ...' ],'pluginOptions' => [ 'autoclose' => true ] ] ) ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="col-md-12">
			<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'])?>
	        <?= Html::submitButton('Draft', ['class' => $model->isNewRecord ? 'btn btn-info' : 'btn btn-info','value'=>'draft'])?>
	    	</div>
		</div>
	</div>

    <?php ActiveForm::end(); ?>

</div>
