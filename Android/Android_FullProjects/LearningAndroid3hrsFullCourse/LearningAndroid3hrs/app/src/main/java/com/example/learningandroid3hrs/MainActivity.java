package com.example.learningandroid3hrs;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.appcompat.app.AppCompatActivity;

public class MainActivity extends AppCompatActivity {
//    DECLAIRING THE PRIVATE VARIABLE HOLDERS FOR MY VIEW.OBJECTS
    private TextView txtCounter;

//    DECLAIRING MULTIPLE btn VARIABLES IN A SINGLE LINE TO HOLD OBJACT VALUES FOR MY BUTTONS
    private Button btnPlus, btnMinus, btnReset,btnHideShow;

    private ImageView ivMeme ;

//    Constructor method of all my activities is called first when an activity runs
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);


//        setting what to do after the activity has been created
//        get and store View Objects into private Variables
        txtCounter = findViewById(R.id.txt_counter);
        btnPlus = findViewById(R.id.btn_plus);
        btnMinus = findViewById(R.id.btn_minus);
        btnReset = findViewById(R.id.btn_reset);
        ivMeme = findViewById(R.id.iv_meme);
        btnHideShow = findViewById(R.id.btn_hide_show);

//        Add click functionality to click buttons
//        public void plusFunction(View){
//            int counter = Integer.parseInt(txtCounter.getText().toString());
//            if (counter == 20) {
//                txtCounter.setText("0");
//            }
//            else {
//                counter++;
//                txtCounter.setText(counter+"");
//            }
//        }

// Event(Click) Listener for the button with id = btnPlus
// First parameter is a call to the Views OnclickListener Interface
        btnPlus.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                int counter = Integer.parseInt(txtCounter.getText().toString());
                if (counter == 20) {
                    txtCounter.setText("0");
                }
                else {
                    counter++;
                    txtCounter.setText(counter+"");
                }
            }
        });

        btnMinus.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                int counter = Integer.parseInt(txtCounter.getText().toString());

                if(counter != 0) {
                    counter--;
                    txtCounter.setText(counter+"");
                }
            }
        });

        btnReset.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
//                int counter = Integer.parseInt(txtCounter.getText().toString());
                txtCounter.setText("0");
            }
        });


//         4th way to handle click events in android java
//        @Override
//        public void onClick(View view){
//            int id = view.getId();
//            int counter = 0;
//            switch (id){
//
//                case R.id.btn_plus:
//                    int counter = Integer.parseInt(txtCounter.getText().toString());
//                    if (counter == 20) {
//                        txtCounter.setText("0");
//                    }
//                    else {
//                        counter++;
//                        txtCounter.setText(counter+"");
//                    }
//
//                    break;
//            }
//
//        }
//
//        public void operation(View view){
//
//        }
//
        btnHideShow.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if(ivMeme.getVisibility() == View.VISIBLE){
                    ivMeme.setVisibility(View.GONE);
                }
                else {
                    ivMeme.setVisibility(View.VISIBLE);
                }
            }
        });
                


    }
}

