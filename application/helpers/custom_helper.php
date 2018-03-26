<?php

if( ! function_exists('trimLower')) 
{
	function trimLower($string) {
		$string = trim($string);
		$string = strtolower($string);

		return $string;
	}
}

if( ! function_exists('toRupiah'))
{
	function toRupiah($number) {
		return "Rp".number_format($number, 0, '.', '.');
	}
}

if( ! function_exists('imageEncrypt'))
{
	function imageEncrypt($fileName) {
		$x = explode('.', $fileName);
		$random1 = rand(11111111,99999999);
		$random2 = rand(111111,999999);
		$random3 = substr(sha1($fileName), 0, rand(4,9));
		$random4 = rand(5000,15000);

		return $random1.'_'.$random2.'_'.$random3.'_'.$random4.'.'.end($x);
	}
}

if ( ! function_exists('timeAgo'))
{
	// time_passed(strtotime('2018-03-06 19:15'))
	function timeAgo($timestamp){
	    //type cast, current time, difference in timestamps
	    $timestamp      = (int) $timestamp;
	    $current_time   = time();
	    $diff           = $current_time - $timestamp;
	   
	    //intervals in seconds
	    $intervals      = array (
	        'year' => 31556926, 'month' => 2629744, 'week' => 604800, 'day' => 86400, 'hour' => 3600, 'minute'=> 60
	    );
	   
	    //now we just find the difference
	    if ($diff == 0)
	    {
	        return 'Baru saja';
	    }   

	    if ($diff < 60)
	    {
	        return $diff == 1 ? $diff . ' detik yang lalu' : $diff . ' detik yang lalu';
	    }       

	    if ($diff >= 60 && $diff < $intervals['hour'])
	    {
	        $diff = floor($diff/$intervals['minute']);
	        return $diff == 1 ? $diff . ' menit yang lalu' : $diff . ' menit yang lalu';
	    }       

	    if ($diff >= $intervals['hour'] && $diff < $intervals['day'])
	    {
	        $diff = floor($diff/$intervals['hour']);
	        return $diff == 1 ? $diff . ' jam yang lalu' : $diff . ' jam yang lalu';
	    }   

	    if ($diff >= $intervals['day'] && $diff < $intervals['week'])
	    {
	        $diff = floor($diff/$intervals['day']);
	        return $diff == 1 ? $diff . ' hari yang lalu' : $diff . ' hari yang lalu';
	    }   

	    if ($diff >= $intervals['week'] && $diff < $intervals['month'])
	    {
	        $diff = floor($diff/$intervals['week']);
	        return $diff == 1 ? $diff . ' minggu yang lalu' : $diff . ' minggu yang lalu';
	    }   

	    if ($diff >= $intervals['month'] && $diff < $intervals['year'])
	    {
	        $diff = floor($diff/$intervals['month']);
	        return $diff == 1 ? $diff . ' minggu yang lalu' : $diff . ' minggu yang lalu';
	    }   

	    if ($diff >= $intervals['year'])
	    {
	        $diff = floor($diff/$intervals['year']);
	        return $diff == 1 ? $diff . ' tahun yang lalu' : $diff . ' tahun yang lalu';
	    }
	}
}

if( ! function_exists('createSlug'))
{
	// Refrence: https://stackoverflow.com/questions/2955251/php-function-to-make-slug-url-string
	function createSlug($text) {
	  // replace non letter or digits by -
	  $text = preg_replace('~[^\pL\d]+~u', '-', $text);

	  // transliterate
	  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

	  // remove unwanted characters
	  $text = preg_replace('~[^-\w]+~', '', $text);

	  // trim
	  $text = trim($text, '-');

	  // remove duplicate -
	  $text = preg_replace('~-+~', '-', $text);

	  // lowercase
	  $text = strtolower($text);

	  if (empty($text)) {
	    return 'n-a';
	  }

	  $text .= '-'.substr(sha1(rand(10000,99999)), 0, rand(6,8));

	  return $text;
	}
}

if ( ! function_exists('urlEncoder'))
{
	function urlEncoder($input) {
	 return strtr(base64_encode($input), '+/=', '._-');
	}
}

if ( ! function_exists('urlDecoder'))
{
	function urlDecoder($input) {
	 return base64_decode(strtr($input, '._-', '+/='));
	}
}

if ( ! function_exists('validSlug'))
{
	function validSlug($str) {
    return (bool) preg_match('/^[a-z][-a-z0-9]*$/', $str);
  }
}
