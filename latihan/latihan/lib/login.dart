import 'package:flutter/material.dart';
import 'package:shared_preferences/shared_preferences.dart';
import 'package:http/http.dart'as http;
class LoginPage extends StatefulWidget {
  const LoginPage({ Key? key }) : super(key: key);

  @override
  State<LoginPage> createState() => _LoginPageState();
}

SharedPreferences? localStorage;
TextEditingController emailController = new TextEditingController();
TextEditingController pwdController = new TextEditingController();
class _LoginPageState extends State<LoginPage> {


  static Future init() async {
    localStorage = await SharedPreferences.getInstance();
  }
    void login()async {
        var response = await http.post(Uri.parse("http://localhost:8000/login"), body:({
        "email": emailController, "password": pwdController
        }));
        if(response.statusCode==200) {
            print("berhasil");
        } else {
            print("gagal");
        }


    }

  @override
  Widget build(BuildContext context) {
    return SingleChildScrollView(
      child: Scaffold(
        body: Padding(
          padding: const EdgeInsets.all(30.0),
          child: Center(
            child: Column(
              children: <Widget>[
                Padding(
                  padding: EdgeInsets.only(top: 200),
                ),
                Container(
                  margin: EdgeInsets.symmetric(vertical: 10),
                  child: Column(
                    crossAxisAlignment: CrossAxisAlignment.start,
                    children: <Widget>[
                      Text(
                        "Email Id:",
                        style:
                            TextStyle(fontWeight: FontWeight.bold, fontSize: 15),
                      ),
                      SizedBox(
                        height: 10,
                      ),
                      TextField(
                          controller: emailController,
                          obscureText: false,
                          decoration: InputDecoration(
                              border: InputBorder.none,
                              fillColor: Color(0xfff3f3f4),
                              filled: true))
                    ],
                  ),
                ),
                Container(
                  margin: EdgeInsets.symmetric(vertical: 10),
                  child: Column(
                    crossAxisAlignment: CrossAxisAlignment.start,
                    children: <Widget>[
                      Text(
                        "Password :",
                        style:
                            TextStyle(fontWeight: FontWeight.bold, fontSize: 15),
                      ),
                      SizedBox(
                        height: 10,
                      ),
                      TextField(
                          controller: pwdController,
                          obscureText: true,
                          decoration: InputDecoration(
                              border: InputBorder.none,
                              fillColor: Color(0xfff3f3f4),
                              filled: true))
                    ],
                  ),
                ),
                Padding(
                  padding: EdgeInsets.only(top: 50),
                ),
                // RaisedButton(
                //   onPressed: ({print("object")}),
                //   child: Text('Login'),
                // ),

                Padding(

                  padding: EdgeInsets.only(top: 50),
                ),
                if (localStorage != null)
                  Padding(
                    padding: const EdgeInsets.all(15.0),
                    child: Text("User Logged in!!! ->  Email Id: ${localStorage!.get('email')}  Password: ${localStorage!.get('password')}",style: TextStyle(fontSize: 20),),
                  ),
              ],
            ),
          ),
        ),
      ),
    );
  }
}
//     save() async {
//   await LoginPage.init();
//   localStorage!.setString('email', emailController.text.toString());
//   localStorage!.setString('password', pwdController.text.toString());

// }
