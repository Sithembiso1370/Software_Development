package com.example.androidresourcesorganizingaccessing;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.ImageView;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

//        To access res/drawable/myimage.png and set an ImageView
        ImageView imageView = (ImageView) findViewById(R.id.myimageview);
        imageView.setImageResource(R.drawable.img1);

//        set the text on a TextView object with ID msg using a resource ID
        TextView msgTextView = (TextView) findViewById(R.id.msg_textView);
        msgTextView.setText(R.string.hello);
    }

    public void showimage(View view) {
//        To access res/drawable/myimage.png and set an ImageView
        ImageView imageView = (ImageView) findViewById(R.id.myimageview);
        imageView.setImageResource(R.drawable.img2);

//        set the text on a TextView object with ID msg using a resource ID
        TextView msgTextView = (TextView) findViewById(R.id.msg_textView);
        msgTextView.setText(R.string.fname);

        //        set the background color on a TextView object with ID msg using a resource ID
        msgTextView.setBackgroundColor(getResources().getColor(R.color.opaque_red));
//        set the text color
        msgTextView.setTextColor(getResources().getColor(R.color.white));
    }
}