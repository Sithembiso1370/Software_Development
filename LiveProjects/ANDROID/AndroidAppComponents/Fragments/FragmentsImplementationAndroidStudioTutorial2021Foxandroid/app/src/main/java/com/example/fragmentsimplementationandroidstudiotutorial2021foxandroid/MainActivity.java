package com.example.fragmentsimplementationandroidstudiotutorial2021foxandroid;

import androidx.appcompat.app.AppCompatActivity;
import androidx.fragment.app.Fragment;
import androidx.fragment.app.FragmentManager;
import androidx.fragment.app.FragmentTransaction;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;


/** AIM OF THE PROJECT IS TO CREATE A CLASS THAT CAN REPLACE/CREATE FRAGMENTS **/
public class MainActivity extends AppCompatActivity {

    Button firstfragmentBtn, secondfragmentBtn, fragment3btn ;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        /**   CREATE BUTTON VARIABLE HOLDERS      **/
        firstfragmentBtn = findViewById(R.id.btn1);
        secondfragmentBtn = findViewById(R.id.btn2);
        fragment3btn = findViewById(R.id.btn3);

        /**   CREATE BUTTON1 ONCLICK LISTENERS      **/
        firstfragmentBtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                /**  Call the function Created to REplace fragments and pass it the fragment to be replaced   */
                replaceFragment(new fragment1());
            }
        });

        /**   CREATE BUTTON2 ONCLICK LISTENERS      **/
        secondfragmentBtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                replaceFragment(new fragment2());
            }
        });

        /**   CREATE BUTTON3 ONCLICK LISTENERS   with lambda   **/
//        fragment3btn.setOnClickListener(v -> replaceFragment(new fragment3()));
    }

    /**   CREATE the function to replace fragments      **/
    /**     CAN MAKE THIS MORE DYNAMIC BY PASSING IN THE LAYOUT TO BE REPLACED ON   **/
    private void replaceFragment(Fragment fragment) {

        /**  USE THE FRAGMENT MANAGER TO HANDLE FRAGMENTS  **/
        FragmentManager fragmentManager = getSupportFragmentManager();

        /** CREATE A FRAGMENT TRANSACTION WITH THE FRAGMENT MANAGER  **/
        FragmentTransaction fragmentTransaction = fragmentManager.beginTransaction();

        /**  REPLACE THE CURRENT FRAGMENT WITH  THE FRAGMENTS PASSED INTO THE FUNCTION **/
        fragmentTransaction.replace(R.id.frameLayout, fragment);

        /**  COMMIT THE FRAGMENT TRANSACTION TO THE APP/Make it occur     **/
        fragmentTransaction.commit();
    }
}