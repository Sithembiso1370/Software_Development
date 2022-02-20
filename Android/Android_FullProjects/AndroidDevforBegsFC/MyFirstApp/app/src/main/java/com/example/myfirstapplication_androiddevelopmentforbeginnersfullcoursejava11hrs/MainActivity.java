package com.example.myfirstapplication_androiddevelopmentforbeginnersfullcoursejava11hrs;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }

    public void onBtnClick(View view){
        //Getting the reference to the textview with the supplied id
        TextView txtHello = findViewById(R.id.txt_message);

//        Getting reference to the users input
        EditText editText = findViewById(R.id.edt_text);
         editText.getText().toString();

        if (txtHello.getText().toString() == "Hello Stheraz World!"){
            //Setting the reference to the textview with the supplied id
            txtHello.setText("Hello " +editText.getText().toString());
        }
        else {
            //Setting the reference to the textview with the supplied id
            txtHello.setText("Hello Stheraz World!");
        }
    }

    //TODO --- ADD OTHER FUNCTIONS
}