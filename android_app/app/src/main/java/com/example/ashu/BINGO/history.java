package com.example.ashu.BINGO;

import android.os.AsyncTask;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.TextView;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.util.ArrayList;
import java.util.concurrent.ExecutionException;

public class history extends AppCompatActivity {

    ListView listView;
    TextView textView;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_history);

        textView=findViewById(R.id.tv2);
        listView=findViewById(R.id.lv);
        ArrayList<String> result=new ArrayList<>();

        ArrayAdapter adapter;


        String myUrl = "https://recyclebingo.000webhostapp.com/hist.php?uid=9246";
        //Instantiate new instance of our class
        HttpGetRequest2 getRequest = new HttpGetRequest2();
        //Perform the doInBackground method, passing in                 our url
        try {
            result=getRequest.execute(myUrl).get();
            //textView.setText(r);
            adapter=new ArrayAdapter<>(this,android.R.layout.simple_list_item_1,result);
            listView.setAdapter(adapter);
        } catch (InterruptedException e) {
            e.printStackTrace();
        } catch (ExecutionException e) {
            e.printStackTrace();
            textView.setText(e.toString());
        }
    }
}

class HttpGetRequest2 extends AsyncTask<String, Void, ArrayList<String>> {
    private static final String REQUEST_METHOD = "GET";
    private static final int READ_TIMEOUT = 15000;
    private static final int CONNECTION_TIMEOUT = 15000;
    @Override
    protected ArrayList<String> doInBackground(String... params){
        String stringUrl = params[0];
        ArrayList<String> result=new ArrayList<>();
        String inputLine;
        try {
            //Create a URL object holding our url
            URL myUrl = new URL(stringUrl);
            //Create a connection
            HttpURLConnection connection =(HttpURLConnection)
                    myUrl.openConnection();
            //Set methods and timeouts
            connection.setRequestMethod(REQUEST_METHOD);
            connection.setReadTimeout(READ_TIMEOUT);
            connection.setConnectTimeout(CONNECTION_TIMEOUT);

            //Connect to our url
            connection.connect();
            //Create a new InputStreamReader
            InputStreamReader streamReader = new
                    InputStreamReader(connection.getInputStream());
            //Create a new buffered reader and String Builder
            BufferedReader reader = new BufferedReader(streamReader);
            //Check if the line we are reading is not null
            while((inputLine = reader.readLine()) != null){
                Log.d("dib", "doInBackground: input "+inputLine);
                result.add(inputLine);
            }
            //Close our InputStream and Buffered reader
            reader.close();
            //Set our result equal to our stringBuilder
            Log.d("dib", "doInBackground: "+result);

        }
        catch(IOException e){
            e.printStackTrace();
            //result = "The Bin can't be Unlock!."+"\nIts due to You are far away from Bin or some problem Occur"+"\nPLEASE TRY AGAIN";
        }

        return result;
    }
    protected void onPostExecute(ArrayList<String> result){
        super.onPostExecute(result);
    }

}
