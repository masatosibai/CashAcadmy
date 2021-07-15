let thisWeekBtn = document.getElementById('this-week');
let nextWeekBtn = document.getElementById('next-week');
let thisWeekCalendarList= document.getElementsByClassName("thisWeekCalendar");
let thisWeekCalendarListArray = Array.prototype.slice.call(thisWeekCalendarList);
let nextWeekCalendarList= document.getElementsByClassName("nextWeekCalendar");
let nextWeekCalendarListArray = Array.prototype.slice.call(nextWeekCalendarList);

thisWeekBtn.addEventListener('click', function() {
  
  nextWeekCalendarListArray[0].style.display = "none"
  nextWeekCalendarListArray[1].style.display = "none"
  thisWeekCalendarListArray[0].style.display = "flex"
  thisWeekCalendarListArray[1].style.display = "flex"
  
  
}, false);

nextWeekBtn.addEventListener('click', function() {
  
  nextWeekCalendarListArray[0].style.display = "flex"
  nextWeekCalendarListArray[1].style.display = "flex"
  thisWeekCalendarListArray[0].style.display = "none"
  thisWeekCalendarListArray[1].style.display = "none"

  
}, false);