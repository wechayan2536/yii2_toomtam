<?php
$url1=yii::$app->urlManager->createAbsoluteUrl("test/index");

?>

<a href="<?=$url1?>">ไปหน้าindex</a>
<br>

<?php
$url2=yii :: $app->urlManager->createAbsoluteUrl(["test/test3",'sname'=>"wechgayan",'fname'=>"wichai"]);
        ?>
 <a href="<?=$url2?>">ไปหน้าtest3</a>