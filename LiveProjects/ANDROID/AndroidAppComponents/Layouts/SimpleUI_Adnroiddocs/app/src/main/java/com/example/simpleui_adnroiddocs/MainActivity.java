package com.example.simpleui_adnroiddocs;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {
//     add the EXTRA_MESSAGE constant and the sendMessage() code
    public static final String EXTRA_MESSAGE = "com.example.simpleui_adnroiddocs.MESSAGE";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }

    /** Called when the user taps the Send button */
    public void sendMessage(View view) {

//        Creates a new intent to the DisplayMessageActivity
        Intent intent = new Intent(this, DisplayMessageActivity.class);

//        get the edit text using its id
        EditText editText = (EditText) findViewById(R.id.editTextTextPersonName);

//        Get the text within the edit text
        String message = editText.getText().toString();

//        Pass extra data from the edit text to the intent
        intent.putExtra(EXTRA_MESSAGE, message);

//        Start the new activity
        startActivity(intent);
    }


}