int factorial(int number) {
  if (number <= 0) {
    // Kondisi berhenti (Base Case)
    return 1;
  } else {
    return number * factorial(number - 1);
    //rekursi (Memanggil dirinya sendiri)
  }
}

void main() {
  int angka = 5; //Deklarasi variable angka
  int hasil = factorial(angka); // Memanggil fungsi fungsional

  print('Faktorial dari $angka adalah $hasil');
}
