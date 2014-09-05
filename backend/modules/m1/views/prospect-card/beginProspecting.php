<?php
use yii\helpers\Html;
use yii\base\View;
use yii\helpers\Url;
use yii\bootstrap\Modal;

$this->title = 'Prospecting Customer';
$url = Yii::$app->urlManager->createUrl ( 'm1/prospect-card/check-company' );
$script = <<< JS
$('.btn-check').on('click', function(e) {
	var company = $('#company_name').val();
    $.ajax({
       url: '$url',
       data: {'company_name': company},
       success: function(data) {
           $('#result').html(data);
       }
    });
});
JS;
$this->registerJs ( $script );
?>

<h1><?= Html::encode($this->title)?></h1>
<br>
<br>
<?php
use yii\web\JsExpression;
use app\modules\m1\models\ProspectCard;

// $data = ProspectCard::find ()->select ( [
// 'company_name as value',
// 'company_name as label',
// 'id as id'
// ] )->asArray ()->all ();

// echo \yii\jui\AutoComplete::widget ( [
// 'name' => 'company_name',
// //'id' => 'ddd',
// 'clientOptions' => [
// 'source' => $data,
// 'autoFill' => true,
// 'minLength' => '4',
// 'select' => new JsExpression ( "function( event, ui ) {
// $('#user-company').val(ui.item.id);
// }" )
// ]
// ] );
?>

<?php //Html::activeHiddenInput($model, 'company_name'); ?>
<div class="row-fluid">
	<div class="form-inline">
		<div class="form-group">
			<label class="control-label" for="company_address">Company Name</label>
			<input type="text" class="form-control" id="company_name"
				placeholder="Company Name">
		</div>
		<button type="button" class="btn btn-success btn-check">Check</button>
	</div>
</div>
<br>
<div class="row-fluid" id="result">
	<!-- 	<div class="col-md-6 well"></div> -->
</div>