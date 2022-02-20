package com.example.listview;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.ArrayAdapter;
import android.widget.ListView;

public class MainActivity extends AppCompatActivity {

    //    TODO : CREATE AN ARRAY OF STRINGS TO POPULAT THE LISTVIEW
    String[] mobileArray = {"Android","IPhone","WindowsMobile","Blackberry",
            "WebOS","Ubuntu","Windows7","Max OS X"};

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

//      TODO : initialize a new ArrayAdapter using a constructor to specify the layout for each string and the string array
        ArrayAdapter adapter = new ArrayAdapter<String>(this, R.layout.activity_listview, mobileArray);


//       TODO : GET REFERENCE TO THE LIST VIEW
        ListView listView = (ListView) findViewById(R.id.mobile_list);

//        TODO : SET THE LIST ITEMS WITH THE ADAPTER
        listView.setAdapter(adapter);
    }
}