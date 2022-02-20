package com.example.customfonts_geeks4geeks;

import androidx.appcompat.app.AppCompatActivity;
import androidx.core.content.res.ResourcesCompat;

import android.graphics.Typeface;
import android.os.Bundle;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState)
    {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        TextView textView = findViewById(R.id.textview);
        TextView textView2 = findViewById(R.id.textview2);

//        method one
        Typeface typeface = ResourcesCompat.getFont(this, R.font.dancingscript_bold);
        textView.setTypeface(typeface);

//        method 2
        textView2.setTypeface(Typeface.createFromAsset(this.getAssets(), "moolahlah_regular.ttf"));
    }
}