import'package:flutter/material.dart';
import 'package:latihan/login.dart';
import 'package:shared_preferences/shared_preferences.dart';

class Home extends StatefulWidget {
  const Home({ Key? key }) : super(key: key);

    @override
  State<Home> createState() => _HomeState();
}

class _HomeState extends State<Home> {


  @override
  void initState(){
    super.initState();
  }

  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(
            title: Text("Home"),
            actions: <Widget>[
                IconButton(onPressed: ()async {
                    SharedPreferences pref = await SharedPreferences.getInstance();
                    await pref.clear();
                    Navigator.of(context).pushAndRemoveUntil(MaterialPageRoute(builder:(context)=>LoginPage()
                    ), (route) => false);
                }, icon: Icon(Icons.logout)),
            ],
        ),
        body: Center(child: Text("Home")),
    );
  }
}
