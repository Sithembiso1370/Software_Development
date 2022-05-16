package com.example.pull2refreshrecyclerview_geeks4geeks;

import android.os.Bundle;
import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;
import androidx.swiperefreshlayout.widget.SwipeRefreshLayout;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Collections;
import java.util.Random;

public class MainActivity extends AppCompatActivity {
    SwipeRefreshLayout swipeRefreshLayout;
    RecyclerView recyclerView;

    // Using ArrayList to store images and text data
    ArrayList images = new ArrayList<>(Arrays.asList(R.drawable.facebook, R.drawable.twitter,
            R.drawable.instagram, R.drawable.linkedin, R.drawable.youtube, R.drawable.whatsapp));
    ArrayList text = new ArrayList<>(Arrays.asList("Facebook", "Twitter", "Instagram", "LinkedIn", "Youtube", "Whatsapp"));

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        // Getting reference of swipeRefreshLayout and recyclerView
        swipeRefreshLayout = (SwipeRefreshLayout) findViewById(R.id.swipeRefreshLayout);
        recyclerView = (RecyclerView) findViewById(R.id.recyclerView);

        // Setting the layout as Linear for vertical orientation to have swipe behavior
        LinearLayoutManager linearLayoutManager = new LinearLayoutManager(getApplicationContext());
        recyclerView.setLayoutManager(linearLayoutManager);

        // Sending reference and data to Adapter
        Adapter adapter = new Adapter(MainActivity.this, images, text);

        // Setting Adapter to RecyclerView
        recyclerView.setAdapter(adapter);

        // SetOnRefreshListener on SwipeRefreshLayout
        swipeRefreshLayout.setOnRefreshListener(new SwipeRefreshLayout.OnRefreshListener() {
            @Override
            public void onRefresh() {
                swipeRefreshLayout.setRefreshing(false);
                RearrangeItems();
            }
        });
    }

    public void RearrangeItems() {
        // Shuffling the data of ArrayList using system time
        Collections.shuffle(images, new Random(System.currentTimeMillis()));
        Collections.shuffle(text, new Random(System.currentTimeMillis()));
        Adapter adapter = new Adapter(MainActivity.this, images, text);
        recyclerView.setAdapter(adapter);
    }
}
