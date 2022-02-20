package com.example.geeks4geeks_multiscreen_app;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class SecondActivity extends AppCompatActivity {

    // define the global variable
    TextView question2;
    // Add button Move to next Activity and previous Activity
    Button next_button, previous_button;
    @Override
    protected void onCreate(Bundle savedInstanceState)
    {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_second);

        // by ID we can use each component which id is assign in xml file
        // use findViewById() to get the both Button and textview

        next_button = (Button)findViewById(R.id.second_activity_next_button);
        previous_button = (Button)findViewById(R.id.second_activity_previous_button);
        question2 = (TextView)findViewById(R.id.question2_id);

        // In question1 get the TextView use by findViewById()
        // In TextView set question Answer for message

        question2.setText("Q 2 - What is ADB in android?\n"
                + "\n"
                + "Ans- Android Debug Bridge");

        // Add_button add clicklistener
        next_button.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v)
            {

                // Intents are objects of the android.content.Intent type. Your code can send them
                // to the Android system defining the components you are targeting.
                // Intent to start an activity called ThirdActivity with the following code:

                Intent intent = new Intent(SecondActivity.this, ThirdActivity.class);

                // start the activity connect to the specified class
                startActivity(intent);
            }
        });

        // Add_button add clicklistener
        previous_button.setOnClickListener(new View.OnClickListener() {

            public void onClick(View v)
            {

                // Intents are objects of the android.content.Intent type. Your code can send them
                // to the Android system defining the components you are targeting.
                // Intent to start an activity called oneActivity with the following code:

                Intent intent = new Intent(SecondActivity.this, MainActivity.class);

                // start the activity connect to the specified class
                startActivity(intent);
            }
        });
    }
}