package com.example.ashu.BINGO;

import android.content.Context;
import android.content.Intent;
import android.net.wifi.WifiConfiguration;
import android.net.wifi.WifiManager;
import android.os.AsyncTask;
import android.os.CountDownTimer;
import android.os.Handler;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.util.List;
import java.util.concurrent.ExecutionException;

import static android.support.constraint.Constraints.TAG;

public class MainActivity extends AppCompatActivity implements View.OnClickListener {
    public static TextView textView, username, bincash,display,ruppee,timer;
    public String TAG = "Mainact";
    Button unlock, history, map, help, scan;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        textView = findViewById(R.id.tv);
        timer = findViewById(R.id.textView4);

        unlock = findViewById(R.id.unlock);
        history = findViewById(R.id.history);
        help = findViewById(R.id.help);
        map = findViewById(R.id.map);
        scan = findViewById(R.id.scan);

        username = findViewById(R.id.username);
        bincash = findViewById(R.id.bingocash);
        display=findViewById(R.id.display);
        ruppee=findViewById(R.id.rupee);


        unlock.setOnClickListener(this);
        history.setOnClickListener(this);
        map.setOnClickListener(this);
        help.setOnClickListener(this);
        scan.setOnClickListener(this);

        bincash.setOnClickListener(this);




        //}
        /*else {
            Context context=this;
            CharSequence text="Sorry No Wifi found ";
            int duration=Toast.LENGTH_LONG;
            Toast.makeText(context, text, duration).show();
        }*/
    }



    @Override
    public void onClick(View v) {

        switch (v.getId()) {
            case R.id.unlock:
                unlock();
                break;
            case R.id.history:
                Intent intent1 = new Intent(getApplicationContext(), history.class);
                startActivity(intent1);
                break;
            case R.id.map:
                Intent intent2 = new Intent(getApplicationContext(), map.class);
                startActivity(intent2);
                break;
            case R.id.help:
                Intent intent3 = new Intent(getApplicationContext(), help.class);
                startActivity(intent3);
                break;
            case R.id.scan:
                Intent intent4 = new Intent(getApplicationContext(), scan.class);
                startActivity(intent4);
                break;
            case R.id.bingocash:
                ruppee.setText("10");
                break;
        }
    }

    private void unlock() {
        String ssid = "test";
        String password = "password";


        /*final int[] counter = {15};
        new CountDownTimer(15000, 1000){
            public void onTick(long millisUntilFinished){

                timer.setText("Waits for:-"+String.valueOf(counter[0]));
                counter[0]--;
            }
            public  void onFinish(){
                timer.setText("");
            }
        }.start();*/

        //if(connectwifi(ssid,password)){
        connectwifi(ssid, password);
        //final int counter = 15;
        textView.setText("16");
        new CountDownTimer(15000, 1000){
            public void onTick(long millisUntilFinished){
                String s= (String) textView.getText();
                int counter=Integer.parseInt(s);
                textView.setText("Waits for:-"+String.valueOf(counter));

                counter--;
            }
            public  void onFinish(){
                timer.setText("");
            }
        }.start();
        final Handler handler = new Handler();
        handler.postDelayed(new Runnable() {
            @Override
            public void run() {
                String myUrl = "http://192.168.4.1";
                //String to place our result in
                String result;
                //Instantiate new instance of our class
                HttpGetRequest getRequest = new HttpGetRequest();
                //Perform the doInBackground method, passing in our url
                try {
                    result = getRequest.execute(myUrl).get();
                    Log.d(TAG, "run: "+result);
                    textView.setText(result);
                } catch (InterruptedException e) {
                    e.printStackTrace();
                } catch (ExecutionException e) {
                    e.printStackTrace();
                    textView.setText(e.toString());
                }
            }
        }, 5000);
    }

    private void connectwifi(String ssid, String password) {

        WifiConfiguration conf = new WifiConfiguration();
        conf.SSID = "\"" + ssid + "\"";   // Please note the quotes. String should contain ssid in quotes
        conf.preSharedKey = "\"" + password + "\"";
        WifiManager wifiManager = (WifiManager) getApplicationContext().getSystemService(Context.WIFI_SERVICE);
        wifiManager.setWifiEnabled(false);
        wifiManager.setWifiEnabled(true);
        wifiManager.addNetwork(conf);
        List<WifiConfiguration> list = wifiManager.getConfiguredNetworks();
        for (WifiConfiguration i : list) {
            if (i.SSID != null && i.SSID.equals("\"" + ssid + "\"")) {
                wifiManager.disconnect();
                wifiManager.enableNetwork(i.networkId, true);
                wifiManager.reconnect();
                break;
            }
        }
    }


}
class HttpGetRequest extends AsyncTask<String, Void, String> {
    private static final String REQUEST_METHOD = "GET";
    private static final int READ_TIMEOUT = 15000;
    private static final int CONNECTION_TIMEOUT = 15000;
    @Override
    protected String doInBackground(String... params){
        String stringUrl = params[0];
        String result;
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
            StringBuilder stringBuilder = new StringBuilder();
            //Check if the line we are reading is not null
            while((inputLine = reader.readLine()) != null){
                stringBuilder.append(inputLine);
            }
            //Close our InputStream and Buffered reader
            reader.close();
            streamReader.close();
            //Set our result equal to our stringBuilder
            result = stringBuilder.toString();
        }
        catch(IOException e){
            e.printStackTrace();
            Log.d("Mainact", "doInBackground: "+e);
            result = "The Bin can't be Unlock!."+"\nIts due to You are far away from Bin or some problem Occur"+"\nPLEASE TRY AGAIN";
        }
        return result;
    }
    protected void onPostExecute(String result){
        super.onPostExecute(result);
    }
}