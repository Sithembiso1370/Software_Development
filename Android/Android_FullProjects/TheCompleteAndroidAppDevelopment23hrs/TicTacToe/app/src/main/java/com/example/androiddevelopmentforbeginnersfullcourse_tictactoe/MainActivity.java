package com.example.androiddevelopmentforbeginnersfullcourse_tictactoe;

import androidx.appcompat.app.AppCompatActivity;

import android.graphics.Color;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;

import java.util.ArrayList;
import java.util.Random;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }


//    TODO : CREATE A FUNCTION TO BE EXECUTED WHEN EACH CELL IS CLICKED IN THE GAME
    public void buClick(View view) {
//      TODO :  Get the current  event object CLICKED, propagated AND STORE OBJECT IN A BUTTON VARIABLE
        Button buSelected = (Button) view;
//        buSelected.setBackgroundColor(Color.RED);
//        TODO : SET THE DEFAULT CELLID TO 0
        int CellID = 0;

//        TODO : CHECK WHICH BUTTON ID HAS BEEN SELECTED AND SET THE NECESARY CELLID TO THE RIGHT VALUE
        switch ((buSelected.getId())){
            case  R.id.bu1:
                CellID=1;
                break;
            case  R.id.bu2:
                CellID=2;
                break;
            case  R.id.bu3:
                CellID=3;
                break;
            case  R.id.bu4:
                CellID=4;
                break;
            case  R.id.bu5:
                CellID=5;
                break;
            case  R.id.bu6:
                CellID=6;
                break;
            case  R.id.bu7:
                CellID=7;
                break;
            case  R.id.bu8:
                CellID=8;
                break;
            case  R.id.bu9:
                CellID=9;
                break;
        }

//        TODO : CALL THE PLAYGAME FUNCTION AND PASS IT THE  CELL ID AND OBJECT REFERENCE OF THE BUTTON SELECTED
        PlayGame(CellID, buSelected);
    }

    // TODO : CREATE A VARIABLE TO Hold value for the currently active player
    int ActivePlayer = 1;

    // TODO : CREATE A VARIABLE TO Hold data for player 1/buttons already selected
    ArrayList<Integer> Player1 = new ArrayList<Integer>();

    // TODO : CREATE A VARIABLE TO Hold data for player 2/buttons already selected
    ArrayList<Integer> Player2 = new ArrayList<Integer>();

    // TODO : CREATE Function PLAYGAME  to PROCESS the tictactoe game IT TAKES IN THE CELL ID AND BUTTON OBJECT SELECTED
    void  PlayGame(int CellID, Button buSelected){
    //  TODO : TEST - Log.d("Player:",String.valueOf(CellID));

//        TODO : IF ACTIVE PLAYER = 1
        if(ActivePlayer == 1){
//            TODO : setBackgroundColor(Color.GREEN)
            buSelected.setBackgroundColor(Color.GREEN);
//            TODO : setText("X")
            buSelected.setText("X");
//            TODO : Player1 ARRAYLIST add THE CellID JUST SELECTED
            Player1.add(CellID);
//            TODO : SET THE ACTIVE PLAYER TO PLAYER 2
            ActivePlayer = 2;
//            TODO : EXECUTE THE AUTOPLAY FUNCTION
            AutoPlay();
        }
//        TODO : OTHERWISE OF ACTIVE PLAYER IS = 2
        else if(ActivePlayer == 2){
//           TODO :  Set The background color of the button/box being clicked to Blue
            buSelected.setBackgroundColor(Color.BLUE);
//          TODO :  Set the text attribute of the button clicked to O
            buSelected.setText("O");
//           TODO :  Add the CellId of the clicked button to the Player 2 array LIST
            Player2.add(CellID);
//            TODO : set the active player to player 2
            ActivePlayer = 1;
        }

//       TODO : DISABLE BUTTON SELECTED
        buSelected.setEnabled(false);
//        TODO : CHECK THE WINNER
        CheckWinner();
    }

//    TODO : CREATE THE AutoPlay FUNCTION
    void AutoPlay(){
        // TODO : Create an array to hold empty cells id
        ArrayList<Integer>  EmptyCells = new ArrayList<Integer>();

//       TODO :  LOOP THROUGH ALL THE CELLS AND CHECK IF THEIR ID'S ARE ALREADY SELECTED
        for(int cellID=1; cellID<10; cellID++){
//           TODO : Check for unused cells
            if (!(Player1.contains(cellID) || Player2.contains(cellID))){
//                TODO : ADD EMPTY CELL ID's to and array list
                EmptyCells.add(cellID);
            }
        }

//       TODO : Create a new instance of the random class
        Random r = new Random();

        //TODO : Get random number within the range length of the array of empty cells
        int RandIndex = r.nextInt(EmptyCells.size() - 0) + 0;
        int CellID = EmptyCells.get(RandIndex);

//       TODO : CREATE A VARIABLE TO HOLD THE CURRENT BUTTON SELECTED
        Button buSelected ;


//        TODO : CHECK THE CELL ID OF THE BUTTON SELECTED AND GET REFERENCE TO ITS ID
        switch (CellID){

            case  1:
                buSelected = (Button) findViewById(R.id.bu1);
                break;
            case  2:
                buSelected = (Button) findViewById(R.id.bu2);
                break;
            case  3:
                buSelected = (Button) findViewById(R.id.bu3);
                break;
            case  4:
                buSelected = (Button) findViewById(R.id.bu4);
                break;
            case  5:
                buSelected = (Button) findViewById(R.id.bu5);
                break;
            case  6:
                buSelected = (Button) findViewById(R.id.bu6);
                break;
            case  7:
                buSelected = (Button) findViewById(R.id.bu7);
                break;
            case  8:
                buSelected = (Button) findViewById(R.id.bu8);
                break;
            case  9:
                buSelected = (Button) findViewById(R.id.bu9);
                break;
            default:
                throw new IllegalStateException("Unexpected value: " + CellID);
        }

//        EXECUTE THE PLAYGAME FUNCTION AND PASS IT THE CELL ID OF THE BUTTON SELECTED  AND THE REFERENCE TO ITS OBJECT
        PlayGame(CellID,buSelected);
    }


//  TODO : CREATE A  Function to check the winner of the game
    void CheckWinner(){
        int winner = -1;
//       TODO : CHECK  for  rows
//       TODO : CHECK  for row 1
        if (Player1.contains(1) && Player1.contains(2) && Player1.contains(3)){
            winner = 1;
        }

        if (Player2.contains(1) && Player2.contains(2) && Player2.contains(3)){
            winner = 2;
        }

        //TODO : CHECK  For row 2
        if (Player1.contains(4) && Player1.contains(5) && Player1.contains(6)){
            winner = 1;
        }

        if (Player2.contains(4) && Player2.contains(5) && Player2.contains(6)){
            winner = 2;
        }

        //TODO : CHECK For row 3
        if (Player1.contains(7) && Player1.contains(8) && Player1.contains(9)){
            winner = 1;
        }

        if (Player2.contains(7) && Player2.contains(8) && Player2.contains(9)){
            winner = 2;
        }

//       TODO : CHECK  for Columns
        //TODO : CHECK  For Column 1
        if (Player1.contains(1) && Player1.contains(4) && Player1.contains(7)){
            winner = 1;
        }

        if (Player2.contains(1) && Player2.contains(4) && Player2.contains(7)){
            winner = 2;
        }

        // TODO : CHECK For Column 2
        if (Player1.contains(2) && Player1.contains(5) && Player1.contains(8)){
            winner = 1;
        }

        if (Player2.contains(2) && Player2.contains(5) && Player2.contains(8)){
            winner = 2;
        }

        //TODO : CHECK  For Column 3
        if (Player1.contains(3) && Player1.contains(6) && Player1.contains(9)){
            winner = 1;
        }

        if (Player2.contains(3) && Player2.contains(6) && Player2.contains(9)){
            winner = 2;
        }

//        TODO : CHECK  For Diagnols
//        TODO : CHECK  For Diagnol 45degrees
        if (Player1.contains(3) && Player1.contains(5) && Player1.contains(7)){
            winner = 1;
        }

        if (Player2.contains(3) && Player2.contains(5) && Player2.contains(7)){
            winner = 2;
        }

        // TODO : CHECK For Diagnol 135degrees
        if (Player1.contains(1) && Player1.contains(5) && Player1.contains(9)){
            winner = 1;
        }

        if (Player2.contains(1) && Player2.contains(5) && Player2.contains(9)){
            winner = 2;
        }


//       TODO : Confirm winner value
        if(winner != -1){
//            TODO : DISPLAY A TOAST "We have a winner"
            if(winner == 1){
                Toast.makeText(this,"Player 1 is THE winner ",Toast.LENGTH_LONG).show();
            }
            if(winner == 2){
                Toast.makeText(this,"Player 2 is THE winner ",Toast.LENGTH_LONG).show();
            }
        }
    }




}