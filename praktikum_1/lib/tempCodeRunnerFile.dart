void main() {
  print("NO 1");
  List<List<int>> array2D = [
    List.generate(4, (index) => (index + 1) * 6), // Baris 1: Kelipatan 6
    List.generate(5, (index) => index * 2 + 3), // Baris 2: Bilangan ganjil
    List.generate(
      6,
      (index) => (index + 4) * (index + 4) * (index + 4),
    ), // Baris 3: Pangkat tiga
    List.generate(7, (index) => 3 + index * 7), // Baris 4: Bilangan asli beda 7
  ];

  print("Isi List:");
  for (var row in array2D) {
    print(row.join(" "));
  }

  print("NO 2");
  int hitungFPB(int a, int b) {
    while (b != 0) {
      int temp = b;
      b = a % b;
      a = temp;
    }
    return a;
  }

  int bilangan1 = 12;
  int bilangan2 = 8;
  int fpb = hitungFPB(bilangan1, bilangan2);

  print('Bilangan 1: $bilangan1');
  print('Bilangan 2: $bilangan2');
  print('FPB $bilangan1 dan $bilangan2 = $fpb');
}
