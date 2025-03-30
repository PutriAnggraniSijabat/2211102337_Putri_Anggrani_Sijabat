import 'package:flutter/foundation.dart';
import 'item.dart';

class CartModel extends ChangeNotifier {
  final List<Item> _items = [];

  List<Item> get items => _items;

  int get totalPrice => _items.fold(0, (total, item) => total + item.price);

  void add(Item item) {
    _items.add(item);
    notifyListeners();
  }

  // Perbaikan: Hapus item berdasarkan nama, bukan instance
  void remove(Item item) {
    _items.removeWhere((cartItem) => cartItem.name == item.name);
    notifyListeners();
  }

  // Perbaikan: Pastikan metode clear() ada
  void clear() {
    _items.clear();
    notifyListeners();
  }
}
