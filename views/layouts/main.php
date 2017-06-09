<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\DashboardAsset;
use yii\helpers\Html;
use yii\web\YiiAsset;
//use yii\helpers\Url;
//use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

//DashboardAsset::register($this);

$asset=backend\assets\DashboardAsset::register($this);
$baseUrl=$asset->baseUrl;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini >
<?php $this->beginBody() ?>
<div class="wrapper">

		<?= $this->render('header.php',['baseUrl'=>$baseUrl]) ?> 
		<?= $this->render('leftmenu.php',['baseUrl'=>$baseUrl]) ?>
		<?= $this->render('content.php',['content'=>$content]) ?>
		<?= $this->render('footer.php',['baseUrl'=>$baseUrl]) ?>
		<?= $this->render('rigthside.php',['baseUrl'=>$baseUrl]) ?>

   <div class="control-sidebar-bg"></div>
       
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
