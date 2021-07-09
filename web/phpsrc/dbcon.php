

    <?php
    header('Content-Type: text/html; charset=utf-8');

    //DB 연결
    $dbcon = mysqli_connect("localhost", "kenna", "peacehwa91!", "kenna") or die("DB 접속 실패");
    mysqli_set_charset($dbcon, "utf8");
    ?>