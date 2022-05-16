package com.example.gridview;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.widget.ImageView;

public class SingleViewActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.single_view);

        // TODO : Get intent data
        Intent i = getIntent();

        // TODO : Selected image id
        int position = i.getExtras().getInt("id");
        ImageAdapter imageAdapter = new ImageAdapter(this);

//        TODO : GET REFRENCE TO THE IMAGE VIEW OF THE NEW ACTIVITY
        ImageView imageView = (ImageView) findViewById(R.id.SingleView);

//        TODO : SET THE RESOURCE TO THE CLICKED IMAGE
        imageView.setImageResource(imageAdapter.mThumbIds[position]);
    }
}