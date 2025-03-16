import 'dart:async';
import 'package:flutter/material.dart';
import 'package:flutter_local_notifications/flutter_local_notifications.dart';

void main() => runApp(
  MaterialApp(
    theme: ThemeData(appBarTheme: AppBarTheme(color: Colors.amber)),
    home: MyApp(),
    debugShowCheckedModeBanner: false,
  ),
);

class MyApp extends StatefulWidget {
  @override
  _MyAppState createState() => _MyAppState();
}

class _MyAppState extends State<MyApp> {
  FlutterLocalNotificationsPlugin flutterLocalNotificationsPlugin =
      FlutterLocalNotificationsPlugin();

  @override
  void initState() {
    super.initState();
    var initializationSettingsAndroid = AndroidInitializationSettings(
      'flutter_devs',
    );
    var initializationSettingsIOS = IOSInitializationSettings();
    var initSettings = InitializationSettings(
      android: initializationSettingsAndroid,
      iOS: initializationSettingsIOS,
    );
    flutterLocalNotificationsPlugin.initialize(
      initSettings,
      onSelectNotification: onSelectNotification,
    );
  }

  Future onSelectNotification(String? payload) {
    return Navigator.of(context).push(
      MaterialPageRoute(
        builder: (_) {
          return NewScreen(payload: payload ?? '');
        },
      ),
    );
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        backgroundColor: Colors.amber,
        title: Text('Flutter notification demo'),
      ),
      body: Center(
        child: Column(
          children: <Widget>[
            ButtonTheme(
              minWidth: 250.0,
              child: ElevatedButton(
                style: ElevatedButton.styleFrom(
                  backgroundColor: Colors.blueAccent,
                ),
                onPressed: showNotification,
                child: Text('showNotification'),
              ),
            ),
          ],
        ),
      ),
    );
  }

  Future<void> showNotification() async {
    var android = AndroidNotificationDetails(
      'id',
      'channel',
      'description',
      priority: Priority.high,
      importance: Importance.max,
    );
    var iOS = IOSNotificationDetails();
    var platform = NotificationDetails(android: android, iOS: iOS);
    await flutterLocalNotificationsPlugin.show(
      0,
      'Flutter devs',
      'Flutter Local Notification Demo',
      platform,
      payload: 'Welcome to the Local Notification demo',
    );
  }
}

class NewScreen extends StatelessWidget {
  final String payload;
  NewScreen({required this.payload});

  @override
  Widget build(BuildContext context) {
    return Scaffold(appBar: AppBar(title: Text(payload)));
  }
}
