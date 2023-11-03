let time = 1800;
let intr;

function start_timer() {
    intr = setInterval(tick, 1000);
}

function tick() {
    time = time - 1;
    let hours = Math.floor(time / (60 * 60));
    let mins = Math.floor(time / 60 - hours * 60);
    let secs = time - hours * 60 * 60 - mins * 60;
    if (hours == 0 && mins == 0 && secs == 0) {
        clearInterval(intr);
    }
    hours = hours >= 10 ? hours : "0" + hours;
    mins = mins >= 10 ? mins : "0" + mins;
    secs = secs >= 10 ? secs : "0" + secs;
    document.getElementById("hr").innerHTML = hours;
    document.getElementById("min").innerHTML = mins;
    document.getElementById("sec").innerHTML = secs;
}

start_timer();