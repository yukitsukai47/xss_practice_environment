<?php

//データベース接続
$server = "localhost";  
$userName = ""; 
$password = ""; 
$dbName = "";

$mysqli = new mysqli($server, $userName, $password,$dbName);

if ($mysqli->connect_error){
    echo $mysqli->connect_error;
    exit();
}else{
    $mysqli->set_charset("utf-8");
}

if(empty($_POST)) {
    echo "<a href='./name_form.php'>戻る</a>←こちらのページからどうぞ";
}else{
    //名前入力判定
    if (!isset($_POST['yourname'])  || $_POST['yourname'] === "" ){
        echo "名前が入力されていません。";
    }else{
        //プリペアドステートメント
        $stmt = $mysqli->prepare("INSERT INTO name (name) VALUES (?)");

        if($stmt){
            //プレースホルダへ実際の値を設定する
            $stmt->bind_param('s', $yourname);
            $yourname = $_POST['yourname'];

            if($stmt->execute()){
                echo $yourname,"さんで登録いたしました。<br>";
                //echo htmlspecialchars($yourname, ENT_QUOTES, 'UTF-8')."さんで登録いたしました。";
                echo "<a href='./name_form.php'>戻る</a> ";
            }else{
                echo $stmt->errno . $stmt->error;
            }

            //ステートメント切断
            $stmt->close();
        }else{
            echo $mysqli->errno . $mysqli->error;
        }
    }
}

// データベース切断
$mysqli->close();

?>

