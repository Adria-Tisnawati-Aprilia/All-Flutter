import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:latihan/login.dart';
import 'package:shared_preferences/shared_preferences.dart';


void main() {
runApp(MyPage());
}

class MyPage extends StatefulWidget {
  const MyPage({ Key? key }) : super(key: key);

  @override
  State<MyPage> createState() => _MyPageState();
}

class _MyPageState extends State<MyPage> {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: LoginPage(),
    );
  }
}