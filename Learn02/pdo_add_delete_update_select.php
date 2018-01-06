<?php
/**
 * Created by PhpStorm.
 * User: Yanice
 * Date: 2018/1/4
 * Time: 22:50
 */

$dbServer = 'localhost';
$dbUserName = 'root';
$dbPassWd = '';

/**
 * $dbh = new PDO("mysql:host=...;dbname=mysql", ...);
 * $dbh->query("create database newdatabase");
 * $dbh->query("use newdatabase");
 */
try{
    // 连接数据库 字符编码也可以另外指定
//        $pdo->query("set nanmes utf8");
    $pdo = new PDO('mysql:host='.$dbServer.';charset=utf8',$dbUserName,$dbPassWd);
    echo '<h1>连接成功</h1>';
}catch (PDOException $e){
    echo $e->getMessage();
}
// query 语句：返回是PDOStatement对象，失败返回bool false
// 创建数据库 并指定字符编码为utf8
$c = $pdo->query('create database pdo charset=utf8');
if($c){
    echo "<h1>数据库创建成功</h1>";
}else{
    echo "<h1>数据库创建失败</h1>";
}
// 切换数据库
$r = $pdo->query('USE pdo');
if ($r) {
    echo "切换成功";
}else{
    die("<h1>切换失败</h1>");
}

// 添加表
$t = $pdo->query('create table tpdo(id INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR(50) ,age INT)');
if ($t){
    echo '<h1>创建表成功</h1>';
}
// 增
//$sql = "INSERT INTO tpdo (name,age) VALUES ('李白',30)";
//if ($pdo ->exec($sql)) {
//    echo "<h1>添加数据成功</h1>";
//}

// 改
//$sql = "UPDATE tpdo SET name='杜甫' WHERE id = 1";
//if ($pdo->exec($sql)){
//    echo '<h1>更新数据成功</h1>';
//}
// 删除
//$sql = "DELETE FROM tpdo WHERE id =1";
//if ($pdo->exec($sql)){
//    echo "<h1>数据删除成功</h1>";
//}

// 查询
$sql = "SELECT *FROM tpdo";
$sr = $pdo->query($sql);
//$rows = $sr->fetchAll(PDO::FETCH_ASSOC);
//echo "<pre>";
//print_r($rows);
while ($row = $sr->fetch(PDO::FETCH_ASSOC)){
    echo "<pre>";
    print_r($row);
}