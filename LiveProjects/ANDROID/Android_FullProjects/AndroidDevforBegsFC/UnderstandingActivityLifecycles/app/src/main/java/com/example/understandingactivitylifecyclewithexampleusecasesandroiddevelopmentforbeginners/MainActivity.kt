package com.example.understandingactivitylifecyclewithexampleusecasesandroiddevelopmentforbeginners

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.util.Log

class MainActivity : AppCompatActivity() {
    val TAG = "EVENT"
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)
    }

    override fun onStart() {
        Log.d(TAG, "onStart")
        super.onStart()
    }

    override fun onResume() {
        Log.d(TAG, "onStart")
        super.onResume()
    }

    override fun onPause() {
        Log.d(TAG, "onStart")
        super.onPause()
    }

    override fun onStop() {
        Log.d(TAG, "onStart")
        super.onStop()

    }

    override fun onDestroy() {
        Log.d(TAG, "onStart")
        super.onDestroy()
    }
}