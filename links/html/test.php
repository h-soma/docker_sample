<html>
<body>
<div style="width: 100%; font-size: 40px; font-weight: bold; text-align:center;">
<?php
// 接続
try {
     $dbh = new PDO('mysql:host=mysql;dbname=somadb','h-soma','password');
} catch (PDOException $e){
     var_dump($e->getMessage());
     exit;
}
echo "success!";

// 処理


// 切断
$dbh = null;
?>
</div>
</body>
</html>
