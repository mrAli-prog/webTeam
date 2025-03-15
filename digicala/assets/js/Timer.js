// Update the count down every 1 second
var countDownDate = new Date("Jan 5, 2030 15:37:25").getTime();

  var x = setInterval(function() {

    var now = new Date().getTime();

    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);


    var d = document.getElementById("days").innerHTML = days;
    var h = document.getElementById("hour").innerHTML = hours;
    var m = document.getElementById("minute").innerHTML = minutes;
    var s = document.getElementById("second").innerHTML = seconds;

    if (distance < 0) {
    clearInterval(x);
    document.getElementById("data-end").innerHTML = "EXPIRED";
  }
}, 1000);