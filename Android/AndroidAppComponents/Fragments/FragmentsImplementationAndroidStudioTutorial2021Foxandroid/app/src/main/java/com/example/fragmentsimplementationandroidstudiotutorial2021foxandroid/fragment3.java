package com.example.fragmentsimplementationandroidstudiotutorial2021foxandroid;

import android.os.Bundle;

import androidx.fragment.app.Fragment;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;


public class fragment3 extends Fragment {
    View view;
    Button fragment3btn;
//    fragment3btn = findViewById(R.id.btn3);

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        view = inflater.inflate(R.layout.fragment_fragment2, container, false);
        return  view;
    }

    /**   CREATE BUTTON3 ONCLICK LISTENERS   with lambda   **/
//        fragment3btn.setOnClickListener(v -> replaceFragment(new fragment3()));
}