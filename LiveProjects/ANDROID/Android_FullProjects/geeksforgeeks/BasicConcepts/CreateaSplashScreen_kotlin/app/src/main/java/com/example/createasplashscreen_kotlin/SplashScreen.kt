package com.example.createasplashscreen_kotlin

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.os.Handler
import android.view.WindowManager

/**
 *Go to app > java > first package name > right-click > New > Activity >
 * Empty Activity and create another activity and named it as SplashScreen.
 * Edit the activity_splash_screen.xml file and add image,
 * text in the splash screen as per the requirement. Here we are adding
 * an image to the splash screen. Below is the code for the activity_splash_screen.xml file.
 * */
@Suppress("DEPRECATION")

class SplashScreen : AppCompatActivity() {

    override fun onCreate(savedInstanceState: Bundle?) {
//        Call reference to the oncreate saved instance state
        super.onCreate(savedInstanceState)

//        set the content of the activity to be teh xml file activity_splash_screen
        setContentView(R.layout.activity_splash_screen)


        // This is used to hide the status bar and make
        // the splash screen as a full screen activity.
        window.setFlags(
            WindowManager.LayoutParams.FLAG_FULLSCREEN,
            WindowManager.LayoutParams.FLAG_FULLSCREEN
        )

        // we used the postDelayed(Runnable, time) method
        // to send a message with a delayed time.
        Handler().postDelayed({
            val intent = Intent(this, MainActivity::class.java)
            startActivity(intent)
            finish()
        }, 3000) // 3000 is the delayed time in milliseconds.

    }
}