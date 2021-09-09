<?php
$replay = $_GET['time']; //replay time hours (example: 1 = 1 hour, 24 = 1 day)
$id = $_GET['id']; //channel id (example "h02")
$time = $replay * 3600; //change hour to seconds
$timestamp = (new DateTime())->getTimestamp();
$timestart = $timestamp - $time; //replay start from (86400 second = 24 hours)
$timeend = $timestart + 3600; //replay until 3600 second (1 hour)
//the denstv catchup video duration is 1 hours, you can add the duration by add more second on $timeend
header("Location: http://catchup-2.dens.tv/tvod/mnf.php?code=$id&stream=S4&starttime=$timestart&endtime=$timeend");
?>
