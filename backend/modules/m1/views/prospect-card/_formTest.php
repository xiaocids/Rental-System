<?php 
//use yii\widgets\ActiveForm;
use yii\helpers\Html;
use app\modules\m1\models\CurrentAsset;
use kartik\widgets\ActiveForm;
use kartik\builder\TabularForm;


$query = CurrentAsset::find ();
// add your conditions
//$query->andWhere ( $condition1 );
$dataProvider = new \yii\data\ActiveDataProvider ( [ 
		'query' => $query,
		'pagination' => [ 
				'pagesize' => 10 
		] 
] );
?>


<?php 
$form = ActiveForm::begin ();
echo TabularForm::widget ( [ 
		'dataProvider' => $dataProvider,
		'form' => $form,
		'attributes' => [
			'brand_type' => ['type' => TabularForm::INPUT_TEXT],
			'unit' => ['type' => TabularForm::INPUT_TEXT],
			'manufacture_year' => ['type' => TabularForm::INPUT_TEXT],
		] 
] );
// Add other fields if needed or render your submit button
echo '<div class="text-right">' . Html::submitButton ( 'Submit', [ 
		'class' => 'btn btn-primary' 
] ) . '<div>';
ActiveForm::end ();
?>