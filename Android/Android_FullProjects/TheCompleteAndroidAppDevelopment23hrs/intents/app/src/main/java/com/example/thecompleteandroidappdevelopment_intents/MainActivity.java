package com.example.thecompleteandroidappdevelopment_intents;



import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {
    //    Crate variable holders
    EditText etUserName;
    EditText etPassword;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

//       TODO : On Create GET THE VALUES OF THE EDIT TEXT VIEW COMPONENTS
        etUserName = (EditText) findViewById(R.id.et_username);
        etPassword = (EditText) findViewById(R.id.et_password);
    }

//    TODO : Creating the variables to confirm inputs against
    String userName = "admin";
    String Password = "1111";
    String Name = "SITHEMBISO MAPHANGA";

//    TODO  : Create a buttion click Function that will be executed and called by the button being clicked passed in as an argument
    public  void buLogin(View view){
//        etUserName.getText().toString()) gets the text contained in the object with that id and converts it to string
//       TODO : Check if the strings match the desired strings
        if( userName.equals(etUserName.getText().toString()) && Password.equals(etPassword.getText().toString())){

//            TODO : If the strings matched desired strings ,Start another activity/ intent
//            TODO : CREATE AN INTENT OBJECT TO START A NEW INTENT
            Intent intent = new Intent(this,anotheractivity.class);

//            TODO : PASS DATA TO THE INTENT USING PUTEXTRA AND THE ARRAY KEY AND ARRAY VALUE
//            Pass data to the intent
            intent.putExtra("name",Name);
            intent.putExtra("userName",userName);

//           TODO :  Start the new activity
            startActivity(intent);
        }
    }

}