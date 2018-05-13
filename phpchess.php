<!DOCTYPE HTML>  
<html>
<head>
 <link rel="shortcut icon" href="favicon.ico" />
 <link href="styles.css" rel="stylesheet" />

 <title>Kate's Chess Board (MOD)</title>
 <link rel="stylesheet" href="chessboard.css">
 
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  


		<div class="board">
			<div class="row">
				<div class="space">&#9820</div>
				<div class="space gray">&#9822</div>
				<div class="space">&#9821</div>
				<div class="space gray">&#9818</div>
				<div class="space">&#9819</div>
				<div class="space gray">&#9821</div>
				<div class="space">&#9822</div>
				<div class="space gray">&#9820</div>
			</div>
			<div class="row">
				<div class="space gray">&#9823</div>
				<div class="space">&#9823</div>
				<div class="space gray">&#9823</div>
				<div class="space">&#9823</div>
				<div class="space gray">&#9823</div>
				<div class="space">&#9823</div>
				<div class="space gray">&#9823</div>
				<div class="space">&#9823</div>
			</div>
			<div class="row">
				<div class="space"></div>
				<div class="space gray"></div>
				<div class="space"></div>
				<div class="space gray"></div>
				<div class="space"></div>
				<div class="space gray"></div>
				<div class="space"></div>
				<div class="space gray"></div>
			</div>
			<div class="row">
				<div class="space gray"></div>
				<div class="space"></div>
				<div class="space gray"></div>
				<div class="space"></div>
				<div class="space gray"></div>
				<div class="space"></div>
				<div class="space gray"></div>
				<div class="space"></div>
			</div>
			<div class="row">
				<div class="space"></div>
				<div class="space gray"></div>
				<div class="space"></div>
				<div class="space gray"></div>
				<div class="space"></div>
				<div class="space gray"></div>
				<div class="space"></div>
				<div class="space gray"></div>
			</div>
			<div class="row">
				<div class="space gray"></div>
				<div class="space"></div>
				<div class="space gray"></div>
				<div class="space"></div>
				<div class="space gray"></div>
				<div class="space"></div>
				<div class="space gray"></div>
				<div class="space"></div>
			</div>
			<div class="row">
				<div class="space">&#9817</div>
				<div class="space gray">&#9817</div>
				<div class="space">&#9817</div>
				<div class="space gray">&#9817</div>
				<div class="space">&#9817</div>
				<div class="space gray">&#9817</div>
				<div class="space">&#9817</div>
				<div class="space gray">&#9817</div>
			</div>
			<div class="row">
				<div class="space gray">&#9814</div>
				<div class="space">&#9816</div>
				<div class="space gray">&#9815</div>
				<div class="space">&#9813</div>
				<div class="space gray">&#9812</div>
				<div class="space">&#9815</div>
				<div class="space gray">&#9816</div>
				<div class="space">&#9814</div>
			</div>
		</div>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 <br>
  &nbsp; &nbsp; 
 <input type="submit" name="btn_submit" value="Button1"  />
  &nbsp; &nbsp;
 <input type="submit" name="btn_submit" value="Button2"  />
  &nbsp; &nbsp;
 <input type="submit" name="btn_submit" value="Button3"  />
  &nbsp; &nbsp; 
 <input type="submit" name="btn_submit" value="Button4"  />
 <br>
 <br>

  &nbsp; &nbsp; 
 <input type="submit" name="btn_submit" value="Button5"  />
  &nbsp; &nbsp; 
 <input type="submit" name="btn_submit" value="Button6"  />
  &nbsp; &nbsp;
 <input type="submit" name="btn_submit" value="Button7"  />
  &nbsp; &nbsp; 
 <input type="submit" name="btn_submit" value="Button8"  />
 <br>

 <br>
  &nbsp; &nbsp; 
 <input type="submit" name="btn_submit" value="Button-a"  />
  &nbsp; &nbsp;
 <input type="submit" name="btn_submit" value="Button-b"  />
  &nbsp; &nbsp;
 <input type="submit" name="btn_submit" value="Button-c"  />
  &nbsp; &nbsp; 
 <input type="submit" name="btn_submit" value="Button-d"  />
 <br>

 <br>
  &nbsp; &nbsp; 
 <input type="submit" name="btn_submit" value="Button-e"  />
  &nbsp; &nbsp; 
 <input type="submit" name="btn_submit" value="Button-f"  />
  &nbsp; &nbsp;
 <input type="submit" name="btn_submit" value="Button-g"  />
  &nbsp; &nbsp; 
 <input type="submit" name="btn_submit" value="Button-h"  />

</form>


<?php    
if( $_REQUEST['btn_submit'] == "Button0" )
{
  echo $_REQUEST['btn_submit'] . ' Button<br><br>' ;
  $myfile = fopen("file.txt", "ab+") or die("Unable to open file!");
  $txt = "Button 0" . ";"  ; fwrite($myfile, $txt); fclose($myfile);
}

else if( $_REQUEST['btn_submit'] == "Button1" )
{
  echo $_REQUEST['btn_submit'] . ' Button<br><br>' ;
  $myfile = fopen("file.txt", "ab+") or die("Unable to open file!");
  $txt = "Button 1" . ";"  ; fwrite($myfile, $txt); fclose($myfile);
}

else if( $_REQUEST['btn_submit'] == "Button2" )
{
  echo $_REQUEST['btn_submit'] . ' Button<br><br>' ;
  $myfile = fopen("file.txt", "ab+") or die("Unable to open file!");
  $txt = "Button 2" . ";"  ; fwrite($myfile, $txt); fclose($myfile);
}

else if( $_REQUEST['btn_submit'] == "Button3" )
{
  echo $_REQUEST['btn_submit'] . ' Button<br><br>' ;
  $myfile = fopen("file.txt", "ab+") or die("Unable to open file!");
  $txt = "Button 3" . ";"  ; fwrite($myfile, $txt); fclose($myfile);
}

else if( $_REQUEST['btn_submit'] == "Button4" )
{
  echo $_REQUEST['btn_submit'] . ' Button<br><br>' ;
  $myfile = fopen("file.txt", "ab+") or die("Unable to open file!");
  $txt = "Button 4" . ";"  ; fwrite($myfile, $txt); fclose($myfile);
}
?>


<?php
    echo "[Turn: White Move] ";
    echo "[Last: e5 e4] ";
    echo "[Button Input: f] ";
?>


</body>
</html>



