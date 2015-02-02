<?php
/**
 * Created by PhpStorm.
 * User: 怡炜
 * Date: 2015/1/22 0022
 * Time: 下午 17:25 
 */
$link = mysql_connect("localhost","root","417046512")or die("failed to connect mysql".mysql_error());
if($link){echo "connecting success<br>";}
mysql_select_db("opinion_mining",$link);
$id = $_POST['urlId'];
$sql = mysql_query("select * from urls where id = '$id'");
$row = mysql_fetch_object($sql);
echo $row->id;
echo "<br>";
echo $row->url;
//echo $id+"<br>";