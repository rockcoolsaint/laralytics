<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client as HttpClient;

//use Cookie;

class LoginController extends Controller
{
	/**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/admin';

    function __construct()
	{
		// Initiate instance of Guzzle Client
		$this->client = new HttpClient();

		$this->url = "analytics-api.energy360africa.com/api/v1/auth";
	}

	public function login(Request $request)
	{
		//dd($request->all());

		//return redirect('/overview');
		
		$username = $request->email;
		$password = $request->password;

		//$request->session()->put('username', $username);

        $req = $this->client->request('POST', $this->url, [
            'json' => ['username' => $username, 'password' => $password]
        ]);
        
        //dd($req->getBody()
        //echo gettype($req->getBody()."\n");
        //print_r($req->json());
        $data = json_decode($req->getBody(), TRUE);

        //print_r($data["data"]);
        
        if($req->getStatusCode() == 200)
        {
        	$stationRole = $data["data"]["userRole"];
        	$cookie_role = "role"; 
        	$cookie_appRole = $stationRole;
        	//echo $cookie_appRole."<br/>";
        	setcookie($cookie_role, $cookie_appRole, time() + (86400 * 30), "/"); // 86400 = 1 day
        	//

        	
        	$company = $data["data"]["companies"];
        	//print_r($stations);
        	echo json_encode($company);
        	$cookie_stationNames = json_encode($company);
        	
        	//echo $cookie_stationName."<br/>";
        	$cookie_company = "company";
			setcookie($cookie_company, $cookie_stationNames, time() + (86400 * 30), "/"); // 86400 = 1 day
        	//

			/**
        	$stations = $data["data"]["stations"];
        	$cookie_stationValue = "";
        	$i = 0;
        	//echo count($companies)."<br>"; => 12
        	foreach ($stations as $key => $value) {
    			if ( $i < count($stations)-1) {
    				$cookie_stationValue .= $key .",";
    			} else {
    				$cookie_stationValue .= $key;
    			}
    			$i++;
        	}
        	//echo $cookie_compValue."<br/>";
        	$cookie_stations = "stations";
			setcookie($cookie_stations, $cookie_stationValue, time() + (86400 * 30), "/"); // 86400 = 1 day
			*/
        	//

			/**
        	$companies = $data["data"]["companies"];
        	$cookie_compValue = "";
        	$i = 0;
        	//echo count($companies)."<br>"; => 12
        	foreach ($companies as $key => $value) {
    			if ( $i < count($companies)-1) {
    				$cookie_compValue .= $key .",";
    			} else {
    				$cookie_compValue .= $key;
    			}
    			$i++;
        	}
        	//echo $cookie_compValue."<br/>";
        	$cookie_company = "companies";
			setcookie($cookie_company, $cookie_compValue, time() + (86400 * 30), "/"); // 86400 = 1 day
			*/

			$cookie_token = "token";
			$cookie_tokenValue = $data["data"]["token"];
			setcookie($cookie_token, $cookie_tokenValue, time() + (86400 * 30), "/"); // 86400 = 1 day

			print_r($data["data"]);

        	$user = [
        		'user' => $username,
        	];
        	$request->session()->put('username', $username);

        	return redirect()->route('overview');
        }
	}
}
