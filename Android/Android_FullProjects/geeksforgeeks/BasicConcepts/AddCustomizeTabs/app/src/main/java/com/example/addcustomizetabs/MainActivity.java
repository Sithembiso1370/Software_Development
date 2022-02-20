package com.example.addcustomizetabs;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        getSupportFragmentManager().beginTransaction().add(R.id.layout,new AlgorithmFragment()).commit();
    }


    public void onClick(View v){
        switch (v.getId()){
            case R.id.algo_lay:
                getSupportFragmentManager().beginTransaction()
                        .replace(R.id.layout,
                                new AlgorithmFragment()).commit();
                break;
            case R.id.course_lay:
                getSupportFragmentManager().beginTransaction()
                        .replace(R.id.layout,
                                new CourseFragment()).commit();
                break;
            case R.id.profile_lay:
                getSupportFragmentManager().beginTransaction()
                        .replace(R.id.layout,
                                new ProfileFragment()).commit();
                break;
        }
    }
}