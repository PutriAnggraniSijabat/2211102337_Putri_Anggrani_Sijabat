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
        body: Center(
          child: Column(
            mainAxisAlignment:
                MainAxisAlignment.center, // Pusatkan elemen secara vertikal
            crossAxisAlignment:
                CrossAxisAlignment.center, // Pusatkan elemen secara horizontal
            children: const <Widget>[
              Text(
                'Deliver features faster',
                style: TextStyle(fontSize: 18, fontWeight: FontWeight.bold),
              ),
              Text(
                'Craft beautiful UIs',
                style: TextStyle(fontSize: 18, fontWeight: FontWeight.bold),
              ),
              SizedBox(height: 16), // Memberi jarak antara teks dan logo
              Expanded(
                child: FittedBox(
                  fit: BoxFit.contain, // Memastikan logo tetap proporsional
                  child: FlutterLogo(),
                ),
              ),
            ],
          ),
        ),
      ),
    );
  }
}
