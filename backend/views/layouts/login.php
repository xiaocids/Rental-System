<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
/**
 *
 * @var \yii\web\View $this
 * @var string $content
 */
AppAsset::register ( $this );
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>

<meta charset="<?= Yii::$app->charset ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= Html::encode($this->title) ?></title>
    <?php $this->head()?>

</head>

<body>
	<?php $this->beginBody()?>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <?= $content?>
            </div>
        </div>
    </div>

<?php $this->endBody()?>

</body>

</html>
<?php $this->endPage() ?>