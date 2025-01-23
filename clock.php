 <?php
$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
$current_timestamp = $date->getTimestamp();
?>

<script src="https://code.jquery.com/jquery-latest.js"></script>
<script>
var now = new Date(<?=$current_timestamp * 1000?>);
function updateTime(){
    var nowMS = now.getTime();
    nowMS += 1000;
    now.setTime(nowMS);

    var currentHours = now.getHours();
    var currentMinutes = now.getMinutes();
    var currentSeconds = now.getSeconds();

    currentHours = (currentHours < 10 ? "0" : "" ) + currentHours;
    currentMinutes = (currentMinutes < 10 ? "0" : "" ) + currentMinutes;
    currentSeconds = (currentSeconds < 10 ? "0" : "" ) + currentSeconds;

    var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds;
    $(".timer").html(currentTimeString);
}

$(document).ready(function(){
    setInterval(updateTime, 1000);
});
</script>

<style>
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}
.timer {
    font-size: 48px;
    font-family: Arial, sans-serif;
}
</style>

<span class="timer"></span>
