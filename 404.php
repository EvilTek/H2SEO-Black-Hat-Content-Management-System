<html>
<head>
<title>No Page Found 404</title><br>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta http-equiv="refresh" content="2; url=http://www.h2seo.net/">
  <meta name="description" content="This is not the page you're looking for.. Move along.">
  <meta name="keywords" content="H₂SEO,Black,Hat,CMS">
  <meta name="author" content="KoNxT3D">

<style>
html, body {
  background: #000000; /* Old browsers */
  background: -moz-radial-gradient(center, ellipse cover, #990000 0%, #0c0c0c 35%, #000000 100%); /* FF3.6-15 */
  background: -webkit-radial-gradient(center, ellipse cover, #990000 0%,#0c0c0c 35%,#000000 100%); /* Chrome10-25,Safari5.1-6 */
  background: radial-gradient(ellipse at center, #990000 0%,#0c0c0c 35%,#000000 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#990000', endColorstr='#0c0c0c',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
  background-attachment: fixed;
  color: #990000;
  text-decoration: none;
  font-family: 'Roboto', sans-serif;
  max-width: 1120px;
  margin: auto;
  margin-top: 10px;
  font-size: large;
  font-weight: 4;
  text-shadow: 0px 1px 1px #000000, 0 0 5px #0c0c0c, 0 0 5px #000000;
}

a {
	color: #990000;
	text-decoration: none;
}

#container {
	width:500px;
	margin:0 auto;
	margin-top:150px;
}

#error {
	color:red;
	font-weight:bold;
}

#footer {
	text-align:center;
	font-size:10px;
	margin-top:35px;
	clear:both;
}
</style>

</head>

<body>

<div id="container">

	<div style="text-align:center;">
		<h1>Wrong Turn!</h1>
	</div>
	
	<?php if(isset($error_msg)){ ?>
	
	<div id="error">
		<p><?php echo $error_msg; ?></p>
	</div>
	
	<?php } ?>
	
	
</div>
<div id="track">
<?PHP

function getUserIP()
{
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

 
$user_ip = getUserIP();

?>
</div>
<table width="500" border="2" align="center" cellpadding="2" cellspacing="2" bordercolor="#990000">
  <tr>
    <td><div align="center"><h3>Your IP: 
    <div id="track">
    <?php echo $_SERVER['REMOTE_ADDR']; ?> Using Port: <?php echo $_SERVER['REMOTE_PORT']; ?></h3></div></td>
  </tr>
  <tr>
    <td><div align="center"><h3>Using Browser: 
    <div id="browser">
    <?php echo $_SERVER['HTTP_USER_AGENT']; ?></h3></div> </td>
  </tr>
</table>
</td>
<tr>
 <td>
<div id="footer">
	<a href="http://www.h2seo.net/" target="_blank"><h2>H₂SEO Black Hat CMS</a></h2>
</div>
</body>
</html>
