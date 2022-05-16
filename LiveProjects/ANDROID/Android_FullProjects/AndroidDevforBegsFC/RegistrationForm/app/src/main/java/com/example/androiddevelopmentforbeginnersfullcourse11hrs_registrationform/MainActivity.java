package com.example.androiddevelopmentforbeginnersfullcourse11hrs_registrationform;

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

    public void onRegisterBtnClick(View view){
//        get my EditText variables
        EditText edt_txt_firstname = findViewById(R.id.txtFirstName);
        EditText edt_txt_lastname = findViewById(R.id.txtLastName);
        EditText edt_txt_email = findViewById(R.id.txtEmail);

        //        get my texview variables
        TextView tv_firstname = findViewById(R.id.tv_name);
        TextView tv_lastname = findViewById(R.id.tv_lastname);
        TextView tv_email = findViewById(R.id.tv_email);

//        Get the text in each edit text and pass it to be the text in each textView
        tv_firstname.setText(edt_txt_firstname.getText());
        tv_lastname.setText(edt_txt_lastname.getText());
        tv_email.setText(edt_txt_email.getText());







    }


}