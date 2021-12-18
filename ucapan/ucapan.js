
const time = new Date().getHours();
let greeting;
if (time < 10) {
  greeting = "Selamat Pagi";
} else if (time < 20) {
  greeting = "Selamat Siang";
} else {
  greeting = "Selamat Malam";
}
document.getElementById("ucapan").innerHTML = greeting;