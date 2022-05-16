package com.example.swipe2refresh_geeks4geeks;

import androidx.appcompat.app.AppCompatActivity;
import androidx.swiperefreshlayout.widget.SwipeRefreshLayout;

import android.os.Bundle;
import android.widget.TextView;

/**
 * Step 3: Coming to the “MainActivity” file, a preview of the same is provided below.
 * In this file connect the swipeRefreshLayout and textView to its XML file by using the findViewById() method.
 * And also call the setOnRefreshListener() to change the text after the user swipe down the screen.
 * The users can also write the required codes as their needs inside this method.
 * **/
public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        // Declaring a layout (changes are to be made to this)
        // Declaring a textview (which is inside the layout)
        SwipeRefreshLayout swipeRefreshLayout = (SwipeRefreshLayout)findViewById(R.id.refreshLayout);
        TextView textView = (TextView)findViewById(R.id.tv1);

        // Add an event listener to Refresh  the layout
        swipeRefreshLayout.setOnRefreshListener(
                new SwipeRefreshLayout.OnRefreshListener() {
                    @Override
                    public void onRefresh() {

                        // Your code goes here : WHAT HAPPENS WHEN WE REFRESH
                        // In this code, we are just
                        // changing the text in the textbox
                        textView.setText("Refreshed");


                        //  textView.text = "Refreshed";
                        // This line is important as it explicitly
                        // refreshes only once
                        // If "true" it implicitly refreshes forever
                        swipeRefreshLayout.setRefreshing(false);
                    }
                }
        );
    }
}