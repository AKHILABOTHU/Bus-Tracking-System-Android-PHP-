package com.example.howlong;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;

import org.apache.http.NameValuePair;
import org.apache.http.message.BasicNameValuePair;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;



import android.app.Activity;
import android.app.ProgressDialog;
import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.util.Log;
import android.view.Menu;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ListAdapter;
import android.widget.ListView;
import android.widget.SimpleAdapter;

public class SearchActivity extends Activity {

	private EditText b;
	private EditText a;
	private View btn;
	ListView lv;
	ListAdapter adapter;
	private String f;
	private String t;
	private String c;
	Button tr;
	
	//String url ="http://10.0.2.2/howlong/getroute.php";
	String url ="http://192.168.43.79/howlong/getroute.php";
	ProgressDialog pd;
	ArrayList<HashMap<String, String>> list;


	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_search);
		 a = (EditText) findViewById(R.id.editText1);
		 b = (EditText) findViewById(R.id.editText2);
		 lv = (ListView) findViewById(R.id.listView1);
		tr = (Button) findViewById(R.id.button2);
		
		tr.setOnClickListener(new OnClickListener() {
			
			@Override
			public void onClick(View v) {
				// TODO Auto-generated method stub
				f = a.getText().toString();
				 t = b.getText().toString();
				
				 Intent iii = new Intent(SearchActivity.this,ForMap.class);
					iii.putExtra("f", f);
					iii.putExtra("t", t);
					startActivity(iii);
			}
		});
		 
		 btn = findViewById(R.id.button1);
		 btn.setOnClickListener(new OnClickListener() {
			
			

			@Override
			public void onClick(View arg0) {
				// TODO Auto-generated method stub
				
				
				 f = a.getText().toString();
				 t = b.getText().toString();
				
				 Intent ii = new Intent(SearchActivity.this,ResultActivity.class);
					ii.putExtra("f", f);
					ii.putExtra("t", t);
					startActivity(ii);
				
				
			}
		});
		
	}

	
}
