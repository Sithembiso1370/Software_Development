package com.example.typingindicator;


// TODO Step 4: Add the following code in MainActivity.java file. In this file add setOnClickListner() to the button which will hide the message indicator.
import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;

import com.qifan.library.ChatTypingIndicatorView;

public class MainActivity extends AppCompatActivity {
    Button message;
    ChatTypingIndicatorView indicatorView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        message = findViewById(R.id.button);
        indicatorView = findViewById(R.id.indicatorView);

        // whenever user clicks on the Message Received
        // button this function get invoked
        // automaicaly.
        message.setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View v) {
                    // hide the indicator view
                    indicatorView.setVisibility(View.INVISIBLE);
                }
        });

    }
}