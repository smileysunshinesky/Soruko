
function updateTimer() {
    future = Date.parse("Dec 19, 2024 11:30:00");
    now = new Date();
    diff = future - now;

    days = Math.floor(diff / (1000 * 60 * 60 * 24));
    hours = Math.floor(diff / (1000 * 60 * 60));
    mins = Math.floor(diff / (1000 * 60));
    secs = Math.floor(diff / 1000);

    d = days;
    h = hours - days * 24;
    m = mins - hours * 60;
    s = secs - mins * 60;

    document.getElementById("timer")
        .innerHTML =
        '<div><div class=""><p class="mb-1 fs-12">DAYS</p><h4 class="mb-0 avatar d-block avatar-rounded bg-primary-transparent avatar-xxl mt-2">' + d + '</h4></div></div>' +
        '<div><div class=""><p class="mb-1 fs-12">HOURS</p><h4 class="avatar d-block avatar-rounded bg-primary-transparent avatar-xxl mb-0 mt-2">' + h + '</h4></div></div>' +
        '<div><div class=""><p class="mb-1 fs-12">MINUTES</p><h4 class="mb-0 avatar d-block avatar-rounded bg-primary-transparent avatar-xxl mt-2">' + m + '</h4></div></div>' +
        '<div><div class=""><p class="mb-1 fs-12">SECONDS</p><h4 class="mb-0 avatar d-block avatar-rounded bg-primary-transparent avatar-xxl mt-2">' + s + '</h4></div></div>'
}
setInterval('updateTimer()', 1000);