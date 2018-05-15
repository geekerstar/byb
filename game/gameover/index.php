<?php
//score分数
$score=$_GET['score'];
echo '{"code":1000,"message":"本局分数:'.$score.',分数更新成功","result":{"update":true}}';
//echo '{"code":1000,"message":"分数更新成功'.$score.'","result":{"update":true}}';
?>