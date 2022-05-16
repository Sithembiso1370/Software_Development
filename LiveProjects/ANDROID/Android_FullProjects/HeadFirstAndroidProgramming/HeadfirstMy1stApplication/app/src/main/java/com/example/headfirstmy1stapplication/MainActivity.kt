//This is the package name.
package com.example.headfirstmy1stapplication


//These are Android classes used in MainActivity.
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle

//MainActivity extends the Android class android.app.Activity.
class MainActivity : AppCompatActivity() {

//Implement the onCreate() method from the Activity class. This method is called
//when the activity is first created.
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)

// Specify which layout to use.
        setContentView(R.layout.activity_main)
    }
}