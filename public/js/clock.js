function updateClock() {
    var currentTime = new Date();
    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();
    // Determine AM/PM
    var meridiem = hours < 12 ? "AM" : "PM";
    // Convert to 12-hour format
    hours = hours % 12 || 12;
    // Add leading zeros if necessary
    hours = (hours < 10 ? "0" : "") + hours;
    minutes = (minutes < 10 ? "0" : "") + minutes;
    seconds = (seconds < 10 ? "0" : "") + seconds;
    // Format the time
    var timeString = hours + ":" + minutes + ":" + seconds + " " + meridiem;
    // Update the clock
    document.getElementById("clock").innerHTML = timeString;
}
// Call updateClock every second
setInterval(updateClock, 1000);