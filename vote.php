<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //ボタンが押されたらcookieをブラウザにセットする
    if (!empty($_GET)) {
        setcookie('is_pushed', $_GET['is_pushed'], time()+60*60*24);
    }
    ?>
    <form action="" method="GET">
        <!--cookieに値があった場合(投票されていた場合)、disabled属性を追加して投票できなくする-->
        <button type="submit" name="is_pushed" value="pushed" <?php if (isset($_COOKIE['is_pushed'])) {
        echo 'disabled';
    } ?>><?php if (empty($_COOKIE['is_pushed'])) {
        echo '投票する！';
    } else {
        //cookieに値があった場合(投票されていた場合)
        echo '投票済み！';
    }?></button>
    </form>
</body>

</html>