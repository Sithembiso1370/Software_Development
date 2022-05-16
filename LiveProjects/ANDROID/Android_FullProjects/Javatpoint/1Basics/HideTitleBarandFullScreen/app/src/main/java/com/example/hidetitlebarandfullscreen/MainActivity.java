package com.example.hidetitlebarandfullscreen;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.Window;
import android.view.WindowManager;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

//        TODO : hide the title
        requestWindowFeature(Window.FEATURE_NO_TITLE);

//        TODO : hide the title bar
//        The getSupportActionBar() method is used to retrieve the instance of ActionBar class.
//        Calling the hide() method of ActionBar class hides the title bar.
        getSupportActionBar().hide();

        // TODO : enable full screen
//        The setFlags() method of Window class is used to display content in full screen mode.
//        You need to pass the WindowManager.LayoutParams.FLAG_FULLSCREEN constant in the setFlags method.
        this.getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,
                WindowManager.LayoutParams.FLAG_FULLSCREEN);


        setContentView(R.layout.activity_main);
    }
}