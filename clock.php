 <?php

$date = new DateTime(date('H:i:s'), new DateTimeZone('Asia/Dubai'));
$current_timestamp = $date->getTimestamp();

?>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
    var now = new Date(<?=$current_timestamp*1000?>);
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

    $(document).ready(function()
    {
        setInterval('updateTime()', 1000);
    });

</script>

<span class="timer"></span><br /><br /><br />
