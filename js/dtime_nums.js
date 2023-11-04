function dtime_nums(d, like_eu) {
    var now = new Date;
    now.setDate(now.getDate() + d);
    var dayNum = "";
    if (now.getDate() < 10) {
        dayNum = "0"
    }
    dayNum += now.getDate();
    var monthNum = "";
    if (now.getMonth() + 1 < 10) {
        monthNum = "0"
    }
    monthNum += now.getMonth() + 1;
    if (like_eu === true) {
        document.write(dayNum + "." + monthNum + "." + now.getFullYear())
    } else {
        document.write(monthNum + "." + dayNum + "." + now.getFullYear())
    }
}

const month = ['Ianuarie', 'Februarie', 'Martie', 'Aprilie', 'Mai', 'Iunie', 'Iulie', 'August', 'Septembrie', 'Octombrie', 'Noiembrie', 'Decembrie'];
function dtime_nums_aside(d, like_eu) {
    var now = new Date;
    now.setDate(now.getDate() + d);
    var dayNum = "";
    if (now.getDate() < 10) {
        dayNum = "0"
    }
    dayNum += now.getDate();
    if (like_eu === true) {
        document.write(month[now.getMonth()] + " " + dayNum + ", " + now.getFullYear())
    } else {
        document.write(month[now.getMonth()] + " " + dayNum + ", " + now.getFullYear())
    }
}