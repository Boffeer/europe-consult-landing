function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    total: t,
    days: days,
    hours: hours,
    minutes: minutes,
    seconds: seconds,
  };
}

function initializeClock(id, endtime) {
  var clock = document.querySelector(id);
  // var daysSpan = clock.querySelector(".");
  var hoursSpan = clock.querySelector(".timer-counters__numbers--left");
  var minutesSpan = clock.querySelector(".timer-counters__numbers--center");
  var secondsSpan = clock.querySelector(".timer-counters__numbers--right");

  function updateClock() {
    var t = getTimeRemaining(endtime);

    // daysSpan.innerHTML = t.days;

    if (t.total <= 0) {
      // clearInterval(timeinterval);
      // location.assign("http://boffeer.ru/theend.html");
      return;
    }
    hoursSpan.innerHTML = ("0" + t.hours).slice(-2);
    minutesSpan.innerHTML = ("0" + t.minutes).slice(-2);
    secondsSpan.innerHTML = ("0" + t.seconds).slice(-2);
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

if (localStorage.getItem("localTimer") == null) {
  localStorage.setItem(
    "localTimer",
    new Date(Date.parse(new Date()) + 5 * 1000)
  );
}

var deadline = localStorage.getItem("localTimer");
// var deadline = new Date(Date.parse(new Date()) + 10 * 1000); // for endless timer
initializeClock(".timer", deadline);
