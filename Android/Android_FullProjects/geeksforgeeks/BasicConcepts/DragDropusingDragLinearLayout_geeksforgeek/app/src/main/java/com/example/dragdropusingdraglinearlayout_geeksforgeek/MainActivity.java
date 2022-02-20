package com.example.dragdropusingdraglinearlayout_geeksforgeek;

// TODO : Step 5: Working with the MainActivity.java file


import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import com.jmedeisis.draglinearlayout.DragLinearLayout;

public class MainActivity extends AppCompatActivity {

    //    On Create of the application Activity
    @Override
    protected void onCreate(Bundle savedInstanceState) {
//       1. Create an Instance of the activity Class
        super.onCreate(savedInstanceState);

//        2. Set the Content View of the activity to the elements on the xml layout named below within the Resources ID
//        Object of the Resoucre Object/ Require the xml in a wy
        setContentView(R.layout.activity_main);

        // 3. below lines is to initialize our Drag linear layout
        DragLinearLayout dragLayout = findViewById(R.id.container);

        // 4.  we are creating for loop for dragging
        // and dropping of child items.
        for (int i = 0; i < dragLayout.getChildCount(); i++) {

            // below is the child inside dragger layout
            View child = dragLayout.getChildAt(i);

            // below line will set all children draggable
            // except the header layout.
            // the child is its own drag handle.
            dragLayout.setViewDraggable(child, child);
        }
    }
}