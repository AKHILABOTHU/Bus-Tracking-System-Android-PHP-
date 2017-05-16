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
import android.widget.ListAdapter;
import android.widget.ListView;
import android.widget.SimpleAdapter;
import android.widget.Toast;

public class ResultActivity extends Activity {
	ListView lv;
	ListAdapter adapter;
	private String f;
	private String t;
	private String c;
	JSONObject obj;
	String sf,st;

	//String url="http://10.0.2.2/howlong/getroute.php";
	String url ="http://192.168.43.79/howlong/getroute.php";
	ProgressDialog pd;
	ArrayList<HashMap<String, String>> list;
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_result);
		lv = (ListView) findViewById(R.id.listView1);
		sf=getIntent().getStringExtra("f");
		st=getIntent().getStringExtra("t");
		LoadUrl L = new LoadUrl();
		L.execute(url);
		
		}
	public class LoadUrl extends AsyncTask<String, String, String>
	{

		@Override
		protected void onPreExecute() {
			// TODO Auto-generated method stub
			super.onPreExecute();
			pd=new ProgressDialog(ResultActivity.this);
			pd.setTitle("Getting Bus Routes..");
			pd.setMax(100);
			pd.setCancelable(false);
			pd.setIndeterminate(false);
			pd.show();
		}

		

		@Override
		protected String doInBackground(String... params) {
			// TODO Auto-generated method stub
			List<NameValuePair> param=new ArrayList<NameValuePair>();
			param.add(new BasicNameValuePair("fr", sf));
			param.add(new BasicNameValuePair("to", st));
			 list=new ArrayList<HashMap<String,String>>();
			JSONParser jp=new JSONParser();
			JSONObject obj=jp.makeHttpRequest(url, "GET", param);
			Log.d("JSON", obj.toString());
			try {
				JSONArray arr=obj.getJSONArray("product");
				for(int i=0;i<arr.length();i++)					
				{
					JSONObject js=arr.getJSONObject(i);
					HashMap<String, String> map=new HashMap<String, String>();
	map.put("from_", js.getString ("from_"));
    map.put("r1", js.getString  ("r1"));
	map.put("a1", js.getString("a1"));
	map.put("r2", js.getString ("r2"));
	map.put("a2", js.getString ("a2"));
	map.put("r3", js.getString ("r3"));
	map.put("a3", js.getString ("a3"));
	map.put("r4", js.getString ("r4"));
	map.put("a4", js.getString ("a4"));
	map.put("r5", js.getString ("r5"));
	map.put("a5", js.getString ("a5"));
	map.put("to_", js.getString ("to_"));
	
					list.add(map);
					
				}
				
			} catch (JSONException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
			
			
			return null;
		}
		@Override
		protected void onPostExecute(String result) {
			// TODO Auto-generated method stub
			super.onPostExecute(result);
			if(pd!=null && pd.isShowing())
				pd.dismiss();
			 adapter=new SimpleAdapter(ResultActivity.this, list, R.layout.customlist, new String[]{"from_","r1","a1","r2","a2","r3","a3","r4","a4","r5","a5","to_"}, new int[]{R.id.textView1,R.id.textView2,R.id.textView3,R.id.textView4,R.id.textView5,R.id.textView6,R.id.textView7,R.id.textView8,R.id.textView9,R.id.textView10,R.id.textView11,R.id.textView12});
			  lv.setAdapter(adapter);
		}
		
	}

}
