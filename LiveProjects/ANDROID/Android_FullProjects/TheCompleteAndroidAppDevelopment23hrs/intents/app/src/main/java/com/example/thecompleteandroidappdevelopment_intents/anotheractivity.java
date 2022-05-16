package com.example.thecompleteandroidappdevelopment_intents;

import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.TextView;
import android.widget.Toast;

public class anotheractivity extends AppCompatActivity {
//    TODO : ON the other activity started Create a variable holder for the data passed to the intent
    TextView tv_show;



//    TODO : On Application State On Creation - Do the Following
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        Toast.makeText(this,"onCreate",Toast.LENGTH_LONG).show();
        setContentView(R.layout.activity_anotheractivity);
//        Read data from an intent
//
//        TODO : Collect intent parameters into an intent bundle
        Bundle b = getIntent().getExtras();
        String name = b.getString("name");
        String userName = b.getString("userName");

//        Grab the element with the id specified
        tv_show = (TextView) findViewById(R.id.tv_1);
        tv_show.setText(name);




//        Prevent bypassing of passwords
//        Set a string value as a parameter to the Intent calling and fetch it here in another activity
//        thus ensuring the previous form feald was submited successfully.
        if(b.getString("key").equals("")){
            finish();
        }
    }

    // TODO :   On Application State On Start - Do the Following
    @Override
    protected  void  onStart(){
        super.onStart();
        Toast.makeText(this,"onStart",Toast.LENGTH_LONG).show();
    }

    // TODO :   On Application State On Start - Do the Following
    @Override
    protected  void  onRestart(){
        super.onRestart();
        Toast.makeText(this,"Restart",Toast.LENGTH_LONG).show();
    }

    // TODO:    On Application State On Start - Do the Following
    @Override
    protected  void  onResume(){
        super.onResume();
        Toast.makeText(this,"onResume",Toast.LENGTH_LONG).show();
    }
    // TODO :    On Application State On Start - Do the Following
    @Override
    protected  void  onPause(){
        super.onPause();
        Toast.makeText(this,"onPause",Toast.LENGTH_LONG).show();
    }

    // TODO :    On Application State On Start - Do the Following
    @Override
    protected  void  onStop(){
        super.onStop();
        Toast.makeText(this,"onStop",Toast.LENGTH_LONG).show();
    }

    // TODO :   On Application State On Start - Do the Following
    @Override
    protected  void  onDestroy(){
        super.onDestroy();
        Toast.makeText(this,"onDestroy",Toast.LENGTH_LONG).show();
    }




//  Declaire a function that when executed will Finish the current activity otherwise it wont close by itself.
    public  void BuClose(View view){

        finish();
    }

}