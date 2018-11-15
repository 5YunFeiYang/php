<?php
function aaa(){
 $string = $_POST[text];
$string = str_replace("九江学院","JJU",$string);
echo "$string";
}
/* End of file five.php */?>

<html>
<head>
<title>九江学院</title>
<style>
#box{
margin:0 auto;
  width:200px;
height:100px;
}
</style>
</head>
<body>
<div id="box">
<form action="" method="POST">
  请输入一段话&nbsp <input type="text" name="text"><br>
<input type="submit" name="" value="提交"><br>
<?php aaa()?>
</div>
</body>
</html>
