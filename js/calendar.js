const date = new Date();
const months = [
    'January', 'February', 'March', 'April',
    'May', 'June', 'July', 'August',
    'September', 'October', 'November', 'December'
];
const today = date.getUTCFullYear().toString() + date.getUTCMonth().toString() + date.getDate().toString();
var calendarContainer;
var transparentOverlay;
var currentMonth = date.getMonth();
var currentYear = date.getUTCFullYear();

var toggleCalendar = function() {
    var calendar = $('#calendar');
    var overlay = $('#transparent-overlay');
    if (calendar.is(":visible")) {
        overlay.hide();
        calendar.hide();
    } else {
        resetDate();
        overlay.show();
        calendar.show();
    }
};

var resetDate = function() {
    currentMonth = date.getMonth();
    currentYear = date.getUTCFullYear();
    drawCalendar(currentYear, currentMonth);
};

var decreaseMonth = function() {
    if (currentMonth === 0) {
        currentYear -= 1;
        currentMonth = 11;
    } else {
        currentMonth -= 1;
    }
    drawCalendar(currentYear, currentMonth);
};

var increaseMonth = function() {
    if (currentMonth === 11) {
        currentYear += 1;
        currentMonth = 0;
    } else {
        currentMonth += 1;
    }
    drawCalendar(currentYear, currentMonth);
};

var setMonth = function(month, year) {
    $('#selected-month').text(months[month] + ' ' + year);
};

var drawCalendar = function(year,month) {
    calendarContainer.empty();
    setMonth(month, year);
    const calendar = new CalendarBase.Calendar({
        siblingMonths: true,
        weekStart: true
    });
    calendar
        .getCalendar(year, month)
        .forEach(function(date){
            var linkStr = 'index.php?date=' + year + '-' + (date.month + 1) + '-' + date.day;
            var fullDate = date.year.toString() + date.month.toString() + date.day.toString();
            var anchor = $('<a></a>')
                .attr('href', linkStr)
                .addClass('day')
                .html('<span>' + date.day + '</span>');
            if (date.weekDay === 0 || date.weekDay === 6) {
                anchor.addClass('weekend');
            }

            if (fullDate === today) {
                anchor.addClass('today');
            }
            if (date.month !== month) {
                anchor.addClass('other-month');
            }
            calendarContainer.append(anchor);
        });
};

$(document).ready(function(){
    calendarContainer = $('#calendar-content');
    transparentOverlay = $('#transparent-overlay');
    transparentOverlay.click(function(){
        $('#calendar').hide();
        transparentOverlay.hide();
    });
    drawCalendar(currentYear, currentMonth);
    setMonth(currentMonth, currentYear);
    $('#month-backwards').on('keypress click', decreaseMonth);
    $('#month-forward').on('keypress click', increaseMonth);
});

/*
{day: 27, weekDay: 5, month: 2, year: 2020}
day: 27
weekDay: 5
month: 2
year: 2020
__proto__: Object

 */