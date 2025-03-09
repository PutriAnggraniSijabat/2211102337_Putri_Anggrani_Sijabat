import 'package:flutter/material.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: Scaffold(
        appBar: AppBar(title: const Text("Flutter Expanded Example")),
        body: Padding(
          padding: const EdgeInsets.all(16.0),
          child: Row(
            children: const <Widget>[
              FlutterLogo(
                size: 40,
              ), // Ukuran logo sedikit diperkecil agar lebih proporsional
              SizedBox(width: 8), // Memberi jarak antara logo dan teks
              Expanded(
                child: Text(
                  "Flutter's hot reload helps you quickly and easily experiment, build UIs, add "
                  "features, and fix bugs faster. Experience sub-second reload times, without losing state, "
                  "on emulators, simulators, and hardware for iOS and Android.",
                  softWrap:
                      true, // Memastikan teks bisa turun ke baris berikutnya jika tidak cukup lebar
                  overflow: TextOverflow.visible, // Agar teks tidak dipotong
                  style: TextStyle(
                    fontSize: 16,
                  ), // Menyesuaikan ukuran teks agar lebih mudah dibaca
                ),
              ),
              SizedBox(width: 8), // Memberi jarak sebelum ikon
              Icon(
                Icons.sentiment_very_satisfied,
                size: 30,
              ), // Menyesuaikan ukuran ikon
            ],
          ),
        ),
      ),
    );
  }
}
