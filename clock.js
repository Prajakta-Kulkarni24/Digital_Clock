 /*
    Create Your Own jQuery Digital Clock
    http://www.sitepoint.com/create-jquery-digital-clock-jquery4u/
*/

function updateClock() {
    var currentTime = new Date();
    var currentHours = currentTime.getHours();
    var currentMinutes = currentTime.getMinutes();
    var currentSeconds = currentTime.getSeconds();

    currentHours = (currentHours < 10 ? "0" : "") + currentHours;
    currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
    currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;

    var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds;

    $(".timer").html(currentTimeString);
}

$(document).ready(function() {
    setInterval(updateClock, 1000);
});
