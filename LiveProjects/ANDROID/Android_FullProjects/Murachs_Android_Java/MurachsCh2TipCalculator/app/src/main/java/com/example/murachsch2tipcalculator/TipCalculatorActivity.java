package com.example.murachsch2tipcalculator;

import android.app.Activity;
import android.os.Bundle;
//Import statements for the required widget classes
//import android.view.View;
import android.view.KeyEvent;
import android.view.inputmethod.EditorInfo;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.TextView.onEditorActionListener;

import androidx.appcompat.app.AppCompatActivity;

import java.text.NumberFormat;

public class TipCalculatorActivity  extends Activity {

//   Declare private variables to hold reference to the widgets
    private EditText billAmountEditText;
    private TextView tipTextView;
    private TextView totalTextView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_tip_calculator);
//        On Create of the layout get reference to the widgets and store their values in the previously declaired  variables
        billAmountEditText = (EditText) findViewById(R.id.billAmountEditText);
        tipTextView = (TextView) findViewById(R.id.tipTextView);
        totalTextView = (TextView) findViewById(R.id.totalTextView);
    }

//    @Override
//    public void  onClick(View v){
//        switch (v.getId()){
//            case R.id.percentDownButton:
//                tipPercent = tipPercent - .01f;
//                calculateAndDisplay();
//                break;
//        }
//    }


    public void  calculateAndDisplay(){
//        Get the bill amount
        String billAmountString = billAmountEditText.getText().toString();

        float billAmount;

        if(billAmountString.equals("")){
            billAmount = 0;
        }
        else
        {
            billAmount = Float.parseFloat(billAmountString);
        }
//        Calculate the tip and the total
        float tipPercent = .15f;
        float tipAmount = billAmount*tipPercent;
        float totalAmount = billAmount + tipAmount;

//        Display the results with formatting
//        Getting the currency class pf the view
        NumberFormat currency = NumberFormat.getCurrencyInstance();
//        Casting these individual values to currency state
        tipTextView.setText(currency.format(tipAmount));
        totalTextView.setText(currency.format(totalAmount));
    }
}



