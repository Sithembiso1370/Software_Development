package com.example.headfirstbeeradviser;

import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Spinner;
import android.widget.TextView;
import java.util.List;


public class FindBeerActivity extends AppCompatActivity {
//    TODO : CREATE A PRIVATE INSTANCE OF THE BEER EXPECT CLASS AND STORE IN  VARIABLE
    private BeerExpert expert = new BeerExpert();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_find_beer);
    }

    // TODO : Called when the user clicks the button
    public void onClickFindBeer(View view){
        // TODO : Get a reference to the TextView
        TextView brands =  (TextView) findViewById(R.id.brands);

        // TODO :Get a reference to the Spinner
        Spinner color = (Spinner) findViewById(R.id.color);

        // TODO : Get the selected item in the Spinner
        String beerType = String.valueOf(color.getSelectedItem());

        // TODO : Display the selected item on the brands textview
//        brands.setText(beerType);

        // TODO : Get recommendations from the BeerExpert class
        List<String> brandsList = expert.getBrands(beerType);

//        TODO : CREATE A NEW STRING TO HOLD THE BRANDS
        StringBuilder brandsFormatted = new StringBuilder();
        for (String brand : brandsList) {
//            TODO : Build the string on iteration of the array returned by the beer expert array items SEPARATED BY NEW LINES
            brandsFormatted.append(brand).append('\n');
        }

        // TODO : Display the beers in the Textview
        brands.setText(brandsFormatted);
    }
}