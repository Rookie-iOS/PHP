<?php
/**
 * Created by PhpStorm.
 * User: Yanice
 * Date: 2018/1/4
 * Time: 21:41
 */

$hostName = 'localhost';
$userName = 'root';
$passWd = '';
$conn = mysqli_connect($hostName,$userName,$passWd);
if (!$conn){
    die("连接数据库失败".mysqli_connect_error());
}
//echo "<h1>数据库连接成功</h1>";
// 设置数据库字符编码
mysqli_query($conn,"set names 'utf8'");
// 创建新的数据库并设置数据库的字符编码
$sql = 'CREATE DATABASE student DEFAULT CHARSET utf8 COLLATE utf8_general_ci';
$result = mysqli_query($conn,$sql);
if ($result){
    echo "<h1>数据库创建成功</h1>";
}else{
    echo "创建数据库失败".mysqli_error($conn)."<br>";
}
// 切换数据库 也可以在连接数据库时指定要使用的数据库名
if (mysqli_select_db($conn,"student")){
    echo "<h1>数据库切换成功</h1>";
};
// 创建表
$mysql = "CREATE TABLE student(id int NOT NULL AUTO_INCREMENT ,PRIMARY KEY(id),name text,age int)";
$r = mysqli_query($conn,$mysql);
if ($r){
    echo "<h1>表创建成功</h1>";
}
// 插入数据
//for ($i = 0; $i<5; $i++){
//    $name = '王二小'.$i;
//    $myAddSql = "INSERT INTO student (name,age) VALUES ('{$name}',18)";
//    $ar = mysqli_query($conn,$myAddSql);
//    if ($ar){
//        echo "<h1>数据插入成功</h1>";
//    }
//}

//删除数据
//$mydesql = 'DELETE FROM student WHERE id = 5';
//$dr = mysqli_query($conn,$mydesql);
//if ($dr) {
//    echo "<h1>数据删除成功</h1>";
//}
// 改
//$myUp = "UPDATE student SET name = '李白' WHERE id = 3";
//$ur = mysqli_query($conn,$myUp);
//if ($ur){
//    echo "<p>数据更新成功</p>";
//}

// 查
$mySeSql = 'SELECT * FROM student';
$result = mysqli_query($conn,$mySeSql);
echo "<h1 align='center'>数据查询结果</h1>";
echo "<table border='1' cellpadding='5' cellspacing='0' width='80%' align='center'>";
echo "<tr align='center' bgcolor='aqua'><td>id</td><td>name</td><td>age</td></tr>";
while ($rows = mysqli_fetch_assoc($result)){
//    echo "<pre>";
//    print_r($rows);
    echo "<tr align='center'>";
    echo "<td>".$rows['id']."</td><td>".$rows['name']."</td><td>".$rows['age']."</td>";
    echo "</tr>";
}
echo "</table>";
echo "<h2 align='center'>一共有".mysqli_num_rows($result)."条数据</h2>";


