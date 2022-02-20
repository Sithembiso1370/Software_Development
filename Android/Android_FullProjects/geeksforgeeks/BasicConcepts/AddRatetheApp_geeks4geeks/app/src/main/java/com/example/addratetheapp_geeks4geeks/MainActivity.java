package com.example.addratetheapp_geeks4geeks;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;


import hotchemi.android.rate.AppRate;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(
            Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);


//        ENABLE ON GRADLE IMPLEMENTATIONS
//        CONFIGURE HERE AS WELL
        // Here 0 means
        // the installation date.
        AppRate.with(this)
                // default 10
                .setInstallDays(1)
                // default 10
                .setLaunchTimes(3)
                // default 1
                .setRemindInterval(1)
                .monitor();
        // Show a dialogue
        // if meets conditions
        AppRate.showRateDialogIfMeetsConditions(this);
    }
}

