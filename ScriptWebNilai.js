const nilai = document.getElementById("nilai");
function convert() {
  const score = parseInt(nilai.value);
  let letter;

  if (score >= 80) {
    letter = "A";
  } else if (score >= 70) {
    letter = "B";
  } else if (score >= 60) {
    letter = "C";
  } else if (score >= 50) {
    letter = "D";
  } else if (score >= 0) {
    letter = "E";
  } else {
    letter = "Nilai yang dimasukkan tidak valid";
  }
  console.log(letter);
}
