
/* CONFIGURE THE COUNTDOWN SCRIPT HERE */

var month = '0'; //  '*' for next month, '0' for this month or 1 through 12 for the month
var day = '+1';   //  Offset for day of month day or + day
var hour = 10;    //  0 through 23 for the hours of the day
var tz = 0;       //  Offset for your timezone in hours from UTC
var lab = 'cdtimer';  //  The id of the page entry where the timezone countdown is to show
var msg = '00:00:00';

// redirection settings
var url = 'http://www.google.com/'; // redirection URL (empty string to disable)
var sec = 0;      // redirect on expiration: timeout (seconds) before redirect (0 to disable)

function start() {
    displayTZCountDown(setTZCountDown(month, day, hour, tz), lab);
    millisecondsEmulator();
}

window.onload = start;  // The start function can be changed if required

/* DO NOT EDIT PAST THIS LINE */

var msEmu = 999;
var msTimer = null;

function setTZCountDown(month, day, hour, tz)
{
    var toDate = new Date();
    if (month == '*') toDate.setMonth(toDate.getMonth() + 1);
    else if (month > 0)
    {
        if (month <= toDate.getMonth())toDate.setYear(toDate.getYear() + 1);
        toDate.setMonth(month-1);
    }
    if (day.substr(0,1) == '+')
    {
        var day1 = parseInt(day.substr(1));
        toDate.setDate(toDate.getDate()+day1);
    }
    else{
        toDate.setDate(day);
    }

    toDate.setHours(hour);
    toDate.setMinutes(0-(tz*60));
    toDate.setSeconds(0);
    var fromDate = new Date();
    fromDate.setMinutes(fromDate.getMinutes() + fromDate.getTimezoneOffset());
    var diffDate = new Date(0);
    diffDate.setMilliseconds(toDate - fromDate);
    return Math.floor(diffDate.valueOf()/1000);
}

function displayTZCountDown(countdown, countdowntimer)
{
    if (countdown < 0)
    {
        document.getElementById(countdowntimer).innerHTML = '<div class="expired">'+msg+'</div>';
        if(url != '' && sec > 0) {
            setTimeout('document.location.href="'+url+'"', sec*1000);
        }
    }
    else
    {
        var secs = countdown % 60;
        if (secs < 10) secs = '0' + secs;
        var countdown1 = (countdown - secs) / 60;
        var mins = countdown1 % 60;
        if (mins < 10) mins = '0' + mins;
        countdown1 = (countdown1 - mins) / 60;
        var hours = countdown1 % 24;
        var days = (countdown1 - hours) / 24;
        if (days < 10) days = '0' + days;
        if (hours < 10) hours = '0' + hours;

        // reset milliseconds emulator
        clearTimeout(msTimer);
        msEmu = 999;
        millisecondsEmulator();

        var t = '';
        t += '<div class="days">'+days+'<span>Дней</span></div>';
        t += '<div class="clock">';
        t += '    <div class="hr">'+hours+'<span>Часов</span></div>';
        t += '    <div class="min">'+mins+'<span>Минут</span></div>';
        t += '    <div class="sec">'+secs+'<span>секунд</span></div>';
        t += '    <div class="ms" id="'+countdowntimer+'-ms">000<span></span></div>';
        t += '</div>';

        document.getElementById(countdowntimer).innerHTML = t;

        setTimeout('displayTZCountDown('+(countdown-1)+',\''+countdowntimer+'\');',999);
    }
}

function millisecondsEmulator()
{
    msEmu -= 29;
    if(msEmu <= 0) msEmu = 999;

    e = document.getElementById(lab+'-ms');
    if(!e) return;

    var ms = msEmu;
    if(msEmu < 100) ms = '0' + ms;
    else if(msEmu < 10) ms = '00' + ms;
    e.innerHTML = ms + '<span></span>';

    msTimer = setTimeout('millisecondsEmulator();', 33);
}


