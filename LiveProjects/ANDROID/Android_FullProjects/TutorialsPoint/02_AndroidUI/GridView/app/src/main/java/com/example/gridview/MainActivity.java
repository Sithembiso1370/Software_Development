package com.example.gridview;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.GridView;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);


//        TODO : GET REFERENCE TO THE GRID VIEW
        GridView gridview = (GridView) findViewById(R.id.gridview);
//        TODO : APPLY THE ADAPTER ON THE GRID
        gridview.setAdapter(new ImageAdapter(this));


//        TODO : SET ONCLICK LISTENER TO OPEN IMAGES
        gridview.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            public void onItemClick(AdapterView<?> parent,
                                    View v, int position, long id){
                // TODO : Send intent to SingleViewActivity
                Intent i = new Intent(getApplicationContext(), SingleViewActivity.class);

                // TODO : Pass image index
                i.putExtra("id", position);

//                TODO : Start a new activity
                startActivity(i);
            }
        });



    }
}