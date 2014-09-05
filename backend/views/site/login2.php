<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 *
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var \common\models\LoginForm $model
 */
$this->title = 'Login Rental System';
$this->params ['breadcrumbs'] [] = $this->title;
?>
<div class="login-panel panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title center"><?= Html::encode($this->title) ?></h3>
	</div>
	<div class="panel-body">
		<?php $form = ActiveForm::begin ( [ 
				'id'=> 'login-form',
				'options' => [ 
						//'class' => 'form-horizontal' 
				],
				'fieldConfig' => [ 
						'template' => "{input}{error}",
						
				] 
			] );
		?>
			<fieldset>
				<?= $form->field($model, 'username')->textInput(['placeholder'=>'Username'])?>
                <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password'])?>
                <?= $form->field($model, 'rememberMe')->checkbox()?>
                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-lg btn-success btn-block', 'name' => 'login-button'])?>
                </div>
		</fieldset>
		<?php ActiveForm::end(); ?>
	</div>
</div>