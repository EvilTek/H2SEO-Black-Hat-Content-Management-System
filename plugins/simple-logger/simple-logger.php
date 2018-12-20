<?php
  // H₂SEO Simple IP Logger Plugin
  $outputWebBug = 'logs/ip-log.csv';

  @ $details = json_decode(file_get_contents("http://ipinfo.io/{$_SERVER['REMOTE_ADDR']}/json"));
  @ $hostname=gethostbyaddr($_SERVER['REMOTE_ADDR']);
  
  // Get the query string from the URL.
  $QUERY_STRING = preg_replace("%[^/a-zA-Z0-9@,_=]%", '', $_SERVER['QUERY_STRING']);
  
  // Write the ip address and info to file.
  @ $fileHandle = fopen($outputWebBug, "a");
  if ($fileHandle)
  {
    $string ='"'.$_SERVER['REMOTE_ADDR'].'","'
      .$hostname.'","'
      .$_SERVER['HTTP_USER_AGENT'].'","'
      .$_SERVER['HTTP_REFERER'].'","'
      .$details->loc.'","'
      .$details->org.'","'
      .$details->city.'","'
      .$details->region.'","'
      .$details->country.'","'
      .date("D dS M-Y h:i a").'"'
      ."\n"
      ;
     $write = fputs($fileHandle, $string);
    @ fclose($fileHandle);
  }

  $string = '<code>'
    .'<p>'.$QUERY_STRING.'</p><p>IP address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
    .$_SERVER['REMOTE_ADDR'].'</p><p>Hostname:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
    .$hostname.'</p><p>Browser and OS:&nbsp;'
    .$_SERVER['HTTP_USER_AGENT'].'</p><p>'
    .$_SERVER['HTTP_REFERER'].'</p><p>Coordinates:&nbsp;&nbsp;&nbsp;&nbsp;'
    .$details->loc.'</p><p>ISP provider:&nbsp;&nbsp;&nbsp;'
    .$details->org.'</p><p>City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
    .$details->city.'</p><p>State:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
    .$details->region.'</p><p>Country:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
    .$details->country.'</p><p>Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
    .date("D dS M-Y h:i a").'</p></code>'
    ;

?>
