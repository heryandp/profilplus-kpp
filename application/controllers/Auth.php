<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}
	
	function customError()
	{
	  echo "";
	}

	public function index()
	{
		$this->load->view('auth/login');
	}

	public function login()
	{
		$url = 'https://appportal/login/login/loging_simpel';
		$POSTDATA = 'username='.$_POST['username'].'&password='.$_POST['password'];
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_COOKIEJAR, '/tmp/cookie.txt'); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_close ($ch);
		 
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_POST, 1 );
		curl_setopt($ch, CURLOPT_POSTFIELDS, $POSTDATA);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_COOKIEFILE, '/tmp/cookie.txt');
		curl_setopt($ch, CURLOPT_COOKIEJAR, '/tmp/cookie.txt'); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Fedora; Linux x86_64; rv:36.0) Gecko/20100101 Firefox/36.0");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HEADER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		$content = curl_exec ($ch);
		$hasil = $content;
		
		//nama sikka
		$first_step = explode( '<div id="control">' , $hasil );
		$second_step = explode("</div>" , $first_step[1] );
		$nama = explode(" |", $second_step[0]);
		$nama = array('nip'=>$_POST['username'],'nama' => trim($nama[1]));

		//cookies appportal
		preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $content, $matches);
		$cookies = array();
		foreach($matches[1] as $item) {
		    parse_str($item, $cookie);
		    $cookies = array_merge($nama, $cookies, $cookie);
		}
		var_dump($cookies);
		curl_close ($ch);
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */