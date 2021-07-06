<?php

//세션 inc
include "session.php";

//입력 값 끌어오기

$title = $_POST['title'];
$category = $_POST['category'];
$date = $_POST['date'];
$pwd = $_POST['pwd'];
$desc = $_POST['desc'];
$author = $_POST['author'];


//DB연결

include "dbcon.php";


 $sql = "insert into tnotice (tnt_category, tnt_title, tnt_writedate, tnt_author, tnt_desc, tnt_pw) values ('$category', '$title', '$date', '$author', '$desc', '$pwd');";

$result = mysqli_query($dbcon, $sql);


if($result) { // query가 정상실행 되었다면,

    $msg = "정상적으로 글이 등록되었습니다.";
        
    $idx = mysqli_insert_id($dbcon);
    $replaceURL = "../notice_view.php?idx="."$idx" ;
    } else {
    
     $msg = "글을 등록하지 못했습니다.";
     ?>
    <script type="text/javascript" charset="utf-8">
    alert("<?php echo $msg?>");
    history.back();
    </script>

    <?php } ?>



    <script type="text/javascript" charset="utf-8">
    alert("<?php echo $msg?>");
    location.replace("<?php echo $replaceURL?>");
    </script> 



