<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;
use dosamigos\ckeditor\CKEditor;
/**
 * @var yii\web\View $this
 * @var frontend\models\Page $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="page-form">

    <?php $form = ActiveForm::begin([
    	'options' => [ 
			'class' => 'form-vertical',
			'enctype' => 'multipart/form-data'
		],
// 		'fieldConfig' => [
// 			'template' => "{label}\n<div class=\"col-lg-8\">{input}{error}</div>",
// 			'labelOptions' => [ 
// 				'class' => 'col-lg-4 control-label' 
// 			]
// 		]
    ]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 80]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => 10])?>
	<?php
	echo yii\bootstrap\Tabs::widget ( [ 
			'items' => [ 
					[ 
							'label' => 'Indonesian',
							'content' => $form->field ( $model, 'content_id' )->widget ( letyii\tinymce\Tinymce::className (), [ 
									'options' => [ 
											'id' => 'testid' 
									],
									'configs' => [  // Read more: http://www.tinymce.com/wiki.php/Configuration
											
// 											'toolbar' => [ 
// 													"undo redo | styleselect | bold italic underline| link image alignleft aligncenter alignright" 
// 											] 
									]
									 
							] ),
							'headerOptions' => [ ],
							'options' => [ 
									'id' => 'indonesian_lang' 
							]
					],
					[ 
							'label' => 'English',
							'content' => $form->field($model, 'content_en')->widget ( letyii\tinymce\Tinymce::className (), [ 
									'options' => [ 
											'id' => 'testid' 
									],
									'configs' => [  // Read more: http://www.tinymce.com/wiki.php/Configuration
											
// 											'toolbar' => [ 
// 													"undo redo | styleselect | bold italic underline| link image alignleft aligncenter alignright" 
// 											] 
									]
									 
							] ),
							'headerOptions' => [ ],
							'options' => [ 
									'id' => 'english_lang' 
							] 
					],
					[ 
							'label' => 'Japanese',
							'content' => $form->field ( $model, 'content_jp' )->widget ( letyii\tinymce\Tinymce::className (), [ 
									'options' => [ 
											'id' => 'testid' 
									],
									'configs' => [  // Read more: http://www.tinymce.com/wiki.php/Configuration
											
// 											'toolbar' => [ 
// 													"undo redo | styleselect | bold italic underline| link image alignleft aligncenter alignright" 
// 											] 
									]
									 
							] ),
							'headerOptions' => [ ],
							'options' => [ 
									'id' => 'japanese_lang' 
							] 
					] 
			] 
	] );
	?>
    
    <?=$form->field ( $model, 'thumbnail' )->widget ( FileInput::classname (), [ 'options' => [ 'accept' => 'image/*' ] ] )?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
