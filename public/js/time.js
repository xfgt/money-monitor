function timeCount() {
    let today = new Date();

    let day = today.getDate();
    let month = today.getMonth() + 1;
    let year = today.getFullYear();

    let hour = today.getHours();
    if (hour < 10) { hour = "0" + hour; }

    let minute = today.getMinutes();
    if (minute < 10) { minute = "0" + minute; }

    let second = today.getSeconds();
    if (second < 10) { second = "0" + second; }

    document.getElementById("date").innerHTML += `${day}.${month}.${year} | ${hour}:${minute}:${second}`;
   
}