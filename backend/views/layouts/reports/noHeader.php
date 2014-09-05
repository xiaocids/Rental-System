<?php 
use yii\helpers\Html;
use backend\assets\AppAsset;

//AppAsset::register($this);

$this->beginPage();

?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>

<meta charset="<?= Yii::$app->charset ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link href="css/report.css" type="text/css" rel="stylesheet"> -->
<?php $this->registerCssFile('@web/css/bootstrap.css') ?>
<?php $this->registerCssFile('@web/css/bootstrap.min.css') ?>
<title><?= Html::encode($this->title) ?></title>
    <?php $this->head()?>
<style type="text/css">
    body {
        font-family: sans-serif;
        font-size: 11px;
        color: #000;
    }
    a {
        color: #000066;
        text-decoration: none;
    }
    table {
        
        border:1px solid #000;
        border-collapse: collapse;
    }
    thead {
        vertical-align: bottom;
        text-align: center;
        font-weight: bold;
    }
    tfoot {
        text-align: center;
        font-weight: bold;
    }
    th {
    	border:1px solid #000;
        text-align: left;
        padding-left: 0.35em;
        padding-right: 0.35em;
        padding-top: 0.35em;
        padding-bottom: 0.35em;
        vertical-align: top;
    }
    tr {
    	border:1px solid #000;
        padding-left: 0.35em;
        padding-right: 0.35em;
        padding-top: 2px;
        padding-bottom: 2px;
        vertical-align: top;
    }
    td {
    	
        padding-left: 0.35em;
        padding-right: 0.35em;
        padding-top: 2px;
        padding-bottom: 2px;
        vertical-align: top;
    }
    img {
        margin: 0.2em;
        vertical-align: middle;
    }
</style>
</head>

<body>
	<?php $this->beginBody()?>
	<div class="row">
		
		<?= $content?>		
		
	</div>

	<?php $this->endBody()?>
</body>

</html>
<?php $this->endPage() ?>