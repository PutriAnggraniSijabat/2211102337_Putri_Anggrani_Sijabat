import 'package:flutter/material.dart';
import '../../detail_screen.dart';

class Album {
  final int userId;
  final int id;
  final String title;

  const Album({required this.userId, required this.id, required this.title});

  factory Album.fromJson(Map<String, dynamic> json) {
    return Album(userId: json['user_id'], id: json['id'], title: json['title']);
  }
}

// Example function to navigate to DetailScreen
void navigateToDetailScreen(BuildContext context) {
  Navigator.push(
    context,
    MaterialPageRoute(builder: (context) => DetailScreen(title: 'Detail User')),
  );
}
