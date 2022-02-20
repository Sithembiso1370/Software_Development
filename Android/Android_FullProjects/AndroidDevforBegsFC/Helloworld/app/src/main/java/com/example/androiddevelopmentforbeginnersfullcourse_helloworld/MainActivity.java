package com.example.androiddevelopmentforbeginnersfullcourse_helloworld;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

//    Start point of the application
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
//        accesing the activity Layout main within R
        setContentView(R.layout.activity_main);
//        access the textview and storing in  AN OBJECT NAMES txthello
        TextView txthello = findViewById(R.id.txthello);


//        access the button
        Button mybtn = findViewById(R.id.button);

//        access edit text
        EditText edttxtName = findViewById(R.id.editTextTextPersonName);
//        get the text of the edit text
        edttxtName.getText().toString();

//
    }

    //        on button click
    public void onBtnClick(View view){
        TextView txthello = findViewById(R.id.txthello);
        //        access edit text
        EditText edttxtName = findViewById(R.id.editTextTextPersonName);
//        get the text of the edit text


        //        change the text of the textview
        txthello.setText(edttxtName.getText().toString());
    }

}