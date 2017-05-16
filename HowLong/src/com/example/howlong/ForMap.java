package com.example.howlong;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;

import org.apache.http.NameValuePair;
import org.apache.http.message.BasicNameValuePair;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import android.annotation.SuppressLint;
import android.app.ProgressDialog;
import android.graphics.Color;
import android.os.AsyncTask;
import android.os.Bundle;
import android.support.v4.app.FragmentActivity;
import android.util.Log;
import android.view.View;
import android.widget.ListAdapter;
import android.widget.ListView;
import android.widget.TextView;

import com.google.android.gms.maps.CameraUpdateFactory;
import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.SupportMapFragment;
import com.google.android.gms.maps.model.BitmapDescriptorFactory;
import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.MarkerOptions;
import com.google.android.gms.maps.model.PolylineOptions;

@SuppressLint("NewApi")
public class ForMap extends FragmentActivity {
	ListView lv;
	ListAdapter adapter;
	private String f;
	private String t;
	private String c;
	JSONObject obj;
	String sf, st;
	GoogleMap map;
	double lat, lng;
	// String url ="http://10.0.2.2/howlong/formap.php";
	String url = "http://192.168.43.79/howlong/formap.php";
	ProgressDialog pd;
	ArrayList<HashMap<String, String>> list;
	LatLng s, d, as, bs, cs, bus;
	JSONObject js;
	String s1, s2, d1, d2;
	String as1, as2;
	String bs1, bs2;
	String cs1, cs2;
	TextView time;
	ArrayList<LatLng> points = null;
	PolylineOptions lineOptions = null;

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_for_map);
		time = (TextView) findViewById(R.id.time_textView2);
		points = new ArrayList<LatLng>();
		lineOptions = new PolylineOptions();

		SupportMapFragment mapFragment = (SupportMapFragment) getSupportFragmentManager()
				.findFragmentById(R.id.fragment1);
		map = mapFragment.getMap();
		map.setMyLocationEnabled(true);
		/*
		 * LatLng geo=new LatLng(lat, lng);
		 * 
		 * map.moveCamera(CameraUpdateFactory.newLatLngZoom(geo, 13));
		 * map.addMarker(new
		 * MarkerOptions().title("EyeOpen Technologies").snippet
		 * ("We go the extra mile").position(geo));
		 */
		sf = getIntent().getStringExtra("f");
		st = getIntent().getStringExtra("t");
		LoadUrl L = new LoadUrl();
		L.execute(url);

	}

	public void showBus(View v) {
		finish();
		startActivity(getIntent());
		// LoadUrl L = new LoadUrl();
		// L.execute(url);

	}

	public class LoadUrl extends AsyncTask<String, String, String> {

		@Override
		protected void onPreExecute() {
			// TODO Auto-generated method stub
			super.onPreExecute();
			pd = new ProgressDialog(ForMap.this);
			pd.setTitle("Tracking Bus..");
			pd.setMax(100);
			pd.setCancelable(false);
			pd.setIndeterminate(false);
			pd.show();
		}

		@Override
		protected String doInBackground(String... params) {
			// TODO Auto-generated method stub

			List<NameValuePair> param = new ArrayList<NameValuePair>();
			param.add(new BasicNameValuePair("fr", sf));
			param.add(new BasicNameValuePair("to", st));
			list = new ArrayList<HashMap<String, String>>();
			JSONParser jp = new JSONParser();
			final JSONObject obj = jp.makeHttpRequest(url, "GET", param);
			Log.d("JSON", obj.toString());
			runOnUiThread(new Runnable() {
				public void run() {
					try {
						JSONArray arr = obj.getJSONArray("product");
						for (int i = 0; i < arr.length(); i++) {
							js = arr.getJSONObject(i);
							HashMap<String, String> map1 = new HashMap<String, String>();
							map1.put("from_", js.getString("from_")); // getting
																		// latitude
																		// and
																		// longitude
							map1.put("r1", js.getString("r1")); // getting
																// latitude and
																// longitude
							map1.put("a1", js.getString("a1")); // getting
																// latitude and
																// longitude
							map1.put("r2", js.getString("r2")); // getting
																// latitude and
																// longitude
							map1.put("a2", js.getString("a2"));
							map1.put("r3", js.getString("r3"));
							map1.put("a3", js.getString("a3"));
							map1.put("r4", js.getString("r4"));
							map1.put("a4", js.getString("a4"));
							map1.put("r5", js.getString("r5"));
							map1.put("a5", js.getString("a5"));
							map1.put("to_", js.getString("to_"));
							map1.put("blat", js.getString("blat"));
							map1.put("blng", js.getString("blng"));// getting
																	// latitude
																	// and
																	// longitude

							list.add(map1);
							s1 = js.getString("r1");
							s2 = js.getString("a1");
							as1 = js.getString("r2");
							as2 = js.getString("a2");
							bs1 = js.getString("r3");
							bs2 = js.getString("a3");
							cs1 = js.getString("r4");
							cs2 = js.getString("a4");
							d1 = js.getString("r5");
							d2 = js.getString("a5");
							s = new LatLng(Double.parseDouble(s1),
									Double.parseDouble(s2));
							as = new LatLng(Double.parseDouble(as1),
									Double.parseDouble(as2));
							bs = new LatLng(Double.parseDouble(bs1),
									Double.parseDouble(bs2));
							cs = new LatLng(Double.parseDouble(cs1),
									Double.parseDouble(cs2));
							d = new LatLng(Double.parseDouble(d1),
									Double.parseDouble(d2));
							bus = new LatLng(Double.parseDouble(js
									.getString("blat")), Double.parseDouble(js
									.getString("blng")));
							map.moveCamera(CameraUpdateFactory.newLatLngZoom(
									bus, 8));
							map.addMarker(new MarkerOptions()
									.title(js.getString("s"))
									.snippet("Starting").position(s));
							map.addMarker(new MarkerOptions()
									.title(js.getString("s1")).snippet("Stop")
									.position(as));
							map.addMarker(new MarkerOptions()
									.title(js.getString("s2")).snippet("Stop")
									.position(bs));
							map.addMarker(new MarkerOptions()
									.title(js.getString("s3")).snippet("Stop")
									.position(cs));
							map.addMarker(new MarkerOptions()
									.title(js.getString("d")).snippet("Ending")
									.position(d));

						}

					} catch (JSONException e) {
						// TODO Auto-generated catch block
						e.printStackTrace();
					}

					String url = getDirectionsUrl(bus, d);

					DownloadTask downloadTask = new DownloadTask();

					// Start downloading json data from Google Directions API
					downloadTask.execute(url);
					// downloadTask.execute(url1);
					// downloadTask.execute(url2);
					// downloadTask.execute(url3);

				}
			});

			return null;
		}

		@Override
		protected void onPostExecute(String result) {
			// TODO Auto-generated method stub
			super.onPostExecute(result);
			if (pd != null && pd.isShowing())
				pd.dismiss();
			// adapter=new SimpleAdapter(ResultActivity.this, list,
			// R.layout.customlist, new
			// String[]{"from_","r1","a1","r2","a2","r3","a3","r4","a4","r5","a5","to_"},
			// new
			// int[]{R.id.textView1,R.id.textView2,R.id.textView3,R.id.textView4,R.id.textView5,R.id.textView6,R.id.textView7,R.id.textView8,R.id.textView9,R.id.textView10,R.id.textView11,R.id.textView12});
			// lv.setAdapter(adapter);
		}

	}

	private String getDirectionsUrl(LatLng origin, LatLng dest) {

		// Origin of route
		String str_origin = "origin=" + origin.latitude + ","
				+ origin.longitude;

		// Destination of route
		String str_dest = "destination=" + dest.latitude + "," + dest.longitude;

		// Sensor enabled
		String sensor = "sensor=false";

		// Building the parameters to the web service
		String parameters = str_origin + "&" + str_dest + "&" + sensor;

		// Output format
		String output = "json";

		// Building the url to the web service
		String url = "https://maps.googleapis.com/maps/api/directions/"
				+ output + "?" + parameters;

		Log.d("url", url);
		return url;
	}

	private class DownloadTask extends AsyncTask<String, Void, String> {

		// Downloading data in non-ui thread
		@Override
		protected String doInBackground(String... url) {

			// For storing data from web service
			String data = "";

			try {
				// Fetching the data from web service

				data = downloadUrl(url[0]);

			} catch (Exception e) {
				Log.d("Background Task", e.toString());
			}
			return data;
		}

		// Executes in UI thread, after the execution of
		// doInBackground()
		@Override
		protected void onPostExecute(String result) {
			super.onPostExecute(result);
			try {
				JSONObject job = new JSONObject(result);
				JSONArray array = job.getJSONArray("routes");
				JSONObject routes = array.getJSONObject(0);
				JSONArray dist_data1 = new JSONArray(routes.getString("legs"));
				JSONObject dist_Obj2 = dist_data1.getJSONObject(0);

				String res_str = dist_Obj2.getString("distance");
				String res_str1 = dist_Obj2.getString("duration");

				// distance
				JSONObject dist_res = new JSONObject(res_str);
				String distance = dist_res.getString("text");
				// duration
				JSONObject dist_res1 = new JSONObject(res_str1);
				String duration = dist_res1.getString("text");
				time.setText(distance + "/" + duration);
				map.addMarker(new MarkerOptions()
						.title("Bus")
						.snippet("To reach: " + distance + "/" + duration)
						.position(bus)
						.icon(BitmapDescriptorFactory
								.fromResource(R.drawable.blogo)));
			} catch (JSONException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}

			ParserTask parserTask = new ParserTask();

			// Invokes the thread for parsing the JSON data
			parserTask.execute(result);

		}
	}

	/** A method to download json data from url */
	private String downloadUrl(String strUrl) throws IOException {
		String data = "";
		InputStream iStream = null;
		HttpURLConnection urlConnection = null;
		try {
			URL url = new URL(strUrl);

			// Creating an http connection to communicate with url
			urlConnection = (HttpURLConnection) url.openConnection();

			// Connecting to url
			urlConnection.connect();

			// Reading data from url
			iStream = urlConnection.getInputStream();

			BufferedReader br = new BufferedReader(new InputStreamReader(
					iStream));

			StringBuffer sb = new StringBuffer();

			String line = "";
			while ((line = br.readLine()) != null) {
				sb.append(line);
			}

			data = sb.toString();

			br.close();

		} catch (Exception e) {
			Log.d("Exception while downloading url", e.toString());
		} finally {
			iStream.close();
			urlConnection.disconnect();
		}

		return data;
	}

	private class ParserTask extends
			AsyncTask<String, Integer, List<List<HashMap<String, String>>>> {

		// Parsing the data in non-ui thread
		@Override
		protected List<List<HashMap<String, String>>> doInBackground(
				String... jsonData) {

			JSONObject jObject;
			List<List<HashMap<String, String>>> routes = null;

			try {
				jObject = new JSONObject(jsonData[0]);
				DirectionsJSONParser parser = new DirectionsJSONParser();

				// Starts parsing data
				routes = parser.parse(jObject);
			} catch (Exception e) {
				e.printStackTrace();
			}
			return routes;
		}

		// Executes in UI thread, after the parsing process
		@Override
		protected void onPostExecute(List<List<HashMap<String, String>>> result) {

			MarkerOptions markerOptions = new MarkerOptions();

			// Traversing through all the routes
			for (int i = 0; i < result.size(); i++) {

				// Fetching i-th route
				List<HashMap<String, String>> path = result.get(i);

				// Fetching all the points in i-th route
				for (int j = 0; j < path.size(); j++) {
					HashMap<String, String> point = path.get(j);

					double lat = Double.parseDouble(point.get("lat"));
					double lng = Double.parseDouble(point.get("lng"));
					LatLng position = new LatLng(lat, lng);

					points.add(position);

				}

				// Adding all the points in the route to LineOptions
				lineOptions.addAll(points);
				lineOptions.width(4);
				lineOptions.color(Color.RED);

			}

			// Drawing polyline in the Google Map for the i-th route
			map.addPolyline(lineOptions);
		}
	}

}
