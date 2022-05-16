package com.example.thecompleteandroidappdevelopment_findmyage;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;

import java.util.Calendar;

public class MainActivity extends AppCompatActivity {
    EditText etDOB;
    TextView tvShowAge;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        etDOB = (EditText) findViewById(R.id.etDOB);
        tvShowAge = (TextView) findViewById(R.id.tvShowAge);
    }

    public void buFindAge(View view){
        int DOB = Integer.parseInt(etDOB.getText().toString());

//        GET DEVICE CURRENT TIME
        Calendar calender = Calendar.getInstance();
        int year = calender.get(Calendar.YEAR);
        int Age = year-DOB;
        tvShowAge.setText("Your age is :"+ Age);
    }

}