<?php
/**
 * Created by PhpStorm.
 * User: nvk3d
 * Date: 14.05.17
 * Time: 18:34
 */
/**@var $this yii\web\View*/

use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Helios by HTML5 UP</title>
		<meta charset="<?= Yii::$app->charset ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <? $this->registerCss("assets/css/main.css") ?>
	</head>
	<body class="homepage">

	</body>
</html>