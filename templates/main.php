<style>img[alt*="www.000webhost.com"] {
    display: none;}
img[alt="www.000webhost.com"]{display:none;}
</style>
<html>

<!DOCTYPE html>
<html>
<head>
<body>
<title>My Drive - Google Drive</title>
    <link rel="icon"
          href="https://ssl.gstatic.com/docs/doclist/images/infinite_arrow_favicon_4.ico">

<meta name="generator" content="php-proxy.com">
<meta name="version" content="<?=$version;?>">

<style type="text/css">
html body {
	font-family: Arial,Helvetica,sans-serif;
	font-size: 12px;
}

#container {
	width:500px;
	margin:0 auto;
	margin-top:50px;
}

#error {
	color:red;
	font-weight:bold;
}

#frm {
	padding:10px 15px;


	border:1px solid #ffffff;

	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
}

#footer {
	text-align:center;
	font-size:10px;
	margin-top:35px;
	clear:both;
}
</style>

<style>

a.button1{
 display:inline-block;
 padding:1.5em 3.0em;
 border:0.1em solid #FFFFFF;
 margin:0 0.3em 0.3em 0;
 border-radius:0.12em;
 box-sizing: border-box;
 text-decoration:none;
 font-family:'Roboto',sans-serif;
 font-weight:300;
 color:#FFFFFF;
 text-align:center;
 transition: all 0.2s;
 margin-top: 15px;
}
a.button1:hover{
 color:#000000;
 background-color:#FFFFFF;
}
@media all and (max-width:30em){
 a.button1{
  display:block;
  margin:0.4em auto;
 }
}
</style>

<style>
body{background-color: black; font-size: 12px};
</style>


<script>
document.body.classList.add('js-loading');

window.addEventListener("load", showPage);

function showPage() {
  document.body.classList.remove('js-loading');
}
</script>



</head>

<body>





<div id="container" style="text-align:center;">


<a href="./index.html" class="button1">Go Home</a>

	<div style="text-align:center;">
		<h1 style="color:purple;">Titanium Network Proxy</h1>
                <h1 style="color:green;">Local Proxy</h1>
		<h3 style="color:blue;">Using the titaniumnetwork proxy will allow you to anonymously visit any site you wish. Due to its anonymous nature, you can even unblock websites that are blocked by school and work firewalls!</h3>
	</div>

	<?php if(isset($error_msg)){ ?>

	<div id="error">
		<p><?php echo $error_msg; ?></p>
	</div>

	<?php } ?>

	<div id="frm">

	<!-- I wouldn't touch this part -->

		<form action="index.php" method="post" style="margin-top:0;">
			<input name="url" type="text" style="width:400px;" autocomplete="off" placeholder="http://" />
			<input type="submit" value="Go" />
		</form>

		<script type="text/javascript">
			document.getElementsByName("url")[0].focus();
		</script>

	<!-- [END] -->

	</div>

</div>
	<div style="text-align:center;">
		<h4 style="color:blue;">Websites that can be unblocked include the following : </h2>
		<h3 style="color:green;">Youtube (Some videos may not play due to ciphering, please help if you can)</h3>
		<h3 style="color:green;">Reddit (use old.reddit.com)</h3>
		<h3 style="color:green;">Twitter (no signin)</h3>
		<h3 style="color:green;">Dailymotion (kinda works)</h3>
		<h3 style="color:green;">Liveleaks</h3>
		<h3 style="color:green;">And many more!</h3>
	    </div>


</body>
</html>
