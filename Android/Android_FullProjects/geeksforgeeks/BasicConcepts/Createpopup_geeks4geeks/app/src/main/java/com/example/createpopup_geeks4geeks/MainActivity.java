package com.example.createpopup_geeks4geeks;

import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import com.tapadoo.alerter.Alerter;
import com.tapadoo.alerter.OnHideAlertListener;
import com.tapadoo.alerter.OnShowAlertListener;

public class MainActivity extends AppCompatActivity {

    Button button;
    @Override
    protected void onCreate(Bundle savedInstanceState)
    {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        button = findViewById(R.id.button);
    }

    public void showAlerter(View v)
    {
        Alerter.create(this)
                .setTitle("Alert Title")
                .setText("Alert Text")
                .setIcon(R.drawable.ic_android_black_24dp)
                .setBackgroundColorRes(R.color.colorAccent)
                .setDuration(3000)
                .setOnClickListener(
                        new View.OnClickListener() {

                            @Override
                            public void onClick(View v)
                            {
                                // do something when
                                // Alerter message was clicked
                            }
                        })

                .setOnShowListener(
                        new OnShowAlertListener() {

                            @Override
                            public void onShow()
                            {
                                // do something when
                                // Alerter message shows
                            }
                        })

                .setOnHideListener(
                        new OnHideAlertListener() {

                            @Override
                            public void onHide()
                            {
                                // do something when
                                // Alerter message hides
                            }
                        })
                .show();
    }
}