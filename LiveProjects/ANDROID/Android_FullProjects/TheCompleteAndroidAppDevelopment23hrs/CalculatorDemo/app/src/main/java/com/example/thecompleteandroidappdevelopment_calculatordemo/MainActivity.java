package com.example.thecompleteandroidappdevelopment_calculatordemo;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.text.Editable;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {
    EditText edt_num1;
    EditText edt_num2;
    TextView result1;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        //    get my numbers edit textview
        edt_num1 = (EditText) findViewById(R.id.edt_num1);
        edt_num2 = (EditText) findViewById(R.id.edt_num2);
        // get my numbers Plain textview
        result1 = (TextView) findViewById(R.id.tv_result);
    }

    // get my button
//    Button btn_sum1 = findViewById(R.id.btn_sum);

    public void addnumbers(View view){
        int n1 = Integer.parseInt(edt_num1.getText().toString());
        int n2 = Integer.parseInt(edt_num2.getText().toString());
        int sum = n1 + n2;
        result1.setText(String.valueOf(sum));
    }

    public void multiplynumbers(View view){
        int n1 = Integer.parseInt(edt_num1.getText().toString());
        int n2 = Integer.parseInt(edt_num2.getText().toString());
        int sum = n1 * n2;
        result1.setText(String.valueOf(sum));
    }

}