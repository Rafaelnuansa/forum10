
const uang = 500;
let makan;
if (uang >= 10000) {
  makan = "Beli Beras, Makan Nasi";
} else if (uang >= 5000) {
  makan = "Beli dan Masak Mie";
} else {
  makan = "Makan Promag";
}
document.getElementById("kitamakan").innerHTML = makan;