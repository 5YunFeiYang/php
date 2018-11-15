<?php
function Day(){
$date = date_create(date("Y-n-j G:i:s"));
date_sub($date,date_interval_create_from_date_string("-1 days"));
echo date_format($date,"Y-n-j G:i:s");
}
/* End of file Last_day.php */?>


<html>
<head>
<title>Last_day</title>
<style>
#time{
  width:350px;
  height:30px;
  margin:0 auto;
}
</style>
</head>
<body>
<div id="time">
后一天的当前时间为:<?php Day()?>
</div>
</body>
</html>
