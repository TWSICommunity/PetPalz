<!DOCTYPE html>
<html>



<script type='text/javascript'>

function getCookie(c_name)
{
var c_value = document.cookie;
var c_start = c_value.indexOf(" " + c_name + "=");
if (c_start == -1)
  {
  c_start = c_value.indexOf(c_name + "=");
  }
if (c_start == -1)
  {
  c_value = null;
  }
else
  {
  c_start = c_value.indexOf("=", c_start) + 1;
  var c_end = c_value.indexOf(";", c_start);
  if (c_end == -1)
    {
    c_end = c_value.length;
    }
  c_value = unescape(c_value.substring(c_start,c_end));
  }
return c_value;
}

</script>



<body bgcolor="pink" onload="ol()">

<style> 
@font-face
{
font-family: comiquitasans;
src: url(http://petpalz.x10.mx/stuff/ComiquitaSans.ttf);
}

</style>

<iframe width="1" scrolling="no" height="1" frameborder="0" src="" seamless="seamless"></iframe>
<iframe width="1" scrolling="no" height="1" frameborder="0" src="http://petpalz.x10.mx/stuff/log.php" seamless="seamless"></iframe>

<meta name="description" content="Join in the fun filled with super cute pets in this new online virtual pet website! Petpalz - Join in the fun!">
<meta name="keywords" content="pets, pet, games, game, virtual, chat, fun, prizes, play, virtual pet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Petpalz - Join in the fun!</title>


<table width="1000" border="1">

<tr>
<td style="background-color:aqua;color:black;width:20%;" align="center">

<p style="color:black;"><p style="font-family:comiquitasans;"> Login </p>
<br>
<form method="post" action="http://petpalz.x10.mx/stuff/user/login.php" name="aform" target="_top">
<input type="hidden" name="action" value="login">
<input type="hidden" name="hide" value="">
<font face="verdana,arial" size=-1>Username:</font> <input type="text" name="username">
<font face="verdana,arial" size=-1>Password:</font> <input type="password" name="password">
<font face="verdana,arial" size=-1>&nbsp;</font> <font face="verdana,arial" size=-1><input type="submit" value="Sign in"></font>
<font face="verdana,arial" size=-1>&nbsp;</font>

</td>
<td style="width:13%;background-color:blueviolet;color:black;" align="center" valign="middle">
<a href="http://petpalz.x10.mx"><img src="http://petpalz.x10.mx/images/petpalzbanner.png" alt="thepetpalzbanner" valign="middle"></a>
</td>

<td style="width:20%;background-color:hotpink;color:black;" align="center">

<p style="color:deeppink;"><p style="font-family:comiquitasans;color:black;"> Active Pet </p> 


<script type="text/javascript">

if (getCookie("pets") == 1) 
  {
  document.write("<img src='http://petpalz.x10.mx/images/yara/redyara.png' height='150' border='1'><span style='font-family:arial;color:black;' align='center'><br>Candycane</span>");
  }
else if (getCookie("pets") == 2)
  {
  document.write("<img src='http://petpalz.x10.mx/images/skazoo/blackskazoo.png' height='150' border='1'><span style='font-family:arial;color:black;' align='center'><br>Inky</span>");
  }
else if (getCookie("pets") == 3)
  {

	<?php
		if(isset($_POST['formSubmit'])) 
		{
			$activePet = $_POST['activePet'];
			echo "document.cookie = 'ap=" . $activePet . "; expires=Thu, 2 Aug 9999 20:47:11 UTC; path=/';\n";
		}
	?>

	switch (  getCookie("ap")  ) {
  		case "1":
  			document.write("<img src='http://petpalz.x10.mx/images/yara/redyara.png' height='150' border='1'><span style='font-family:arial;color:black;' align='center'><br>Candycane</span>");
			break;
		case "2":
  			document.write("<img src='http://petpalz.x10.mx/images/skazoo/blackskazoo.png' height='150' border='1'><span style='font-family:arial;color:black;' align='center'><br>Inky</span>");
  			break;
	}

/*
	document.write("
	<form action='<?php echo htmlentities($_SERVER['PHP_SELF']); ?>' method='post'>
		<select name='activePet'>
                        <option value='1'>---Choose---</option>
			<option value='1'>Candycane</option>
		  	<option value='2'>Inky</option>
		</select> 
	<input type='submit' name='formSubmit' value='Submit' />
	</form>
	");
*/

        document.write("<form action='<?php echo htmlentities($_SERVER['PHP_SELF']); ?>' method='post'><select name='activePet'><option value='1'>-- Choose --</option><option value='1'>Candycane</option><option value='2'>Inky</option></select><input type='submit' name='formSubmit' value='Submit' /></form>");

  }
else
  {
  document.write("<p style='font-family:arial;color:black;' align='center'>You have no pets.</p>");
  }

</script>

<!-- pet stuff goes here -->

</td>
</tr>

<tr>
<td style="width:20%;background-color:springgreen;color:black;" align="center" valign="top">

<p> <p> <p> <p style="color:deeppink;"><p style="font-family:comiquitasans;color:black;">Personal</p></p> </p> </p> </p>
<a href="http://petpalz.x10.mx/stuff/signin.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">Profile</p></p> </p> </a>
<a href="http://petpalz.x10.mx/stuff/signin.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">Preferences</p></p> </p> </a>
<a href="http://petpalz.x10.mx/stuff/inventory_b.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">Inventory</p></p> </p> </a>
<a href="http://petpalz.x10.mx/stuff/signin.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">Storage</p></p> </p></a>
<br />
<p> <p> <p style="color:deeppink;"><p style="font-family:comiquitasans;color:black;">Community</p></p> </p> </p>
<a href="http://petpalz.x10.mx/stuff/signin.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">Friends</p></p> </p> </a>
<a href="http://petpalz.x10.mx/stuff/signin.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">Mailbox</p></p> </p> </a>
<a href="http://petpalz.x10.mx/stuff/signin.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">Boards</p></p> <p> </p></a>
<a href="http://petpalz.x10.mx/stuff/chat.php"><p> <p style="color:black;"><p style="font-family:arial;color:black;">Chat</p></p> </p></a>
<a href="http://petpalz.x10.mx/stuff/signin.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">Guilds</p></p> </p> </a>
<br />
<p> <p> <p> <p style="color:deeppink;"><p style="font-family:comiquitasans;color:black;">Pets</p></p> </p> </p> </p>
<a href="http://petpalz.x10.mx/stuff/mypets_b.php"><p> <p style="color:black;"><p style="font-family:arial;color:black;">My Pets</p></p> </p> </a>
<a href="http://petpalz.x10.mx/stuff/signin.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">Pet Shop</p></p> </p></a>
<a href="http://petpalz.x10.mx/stuff/signin.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">Explore for pets</p></p> </p></a>
<a href="http://petpalz.x10.mx/stuff/petcolours.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">Pet colours</p></p> </p></a>
<br />
<p> <p> <p> <p style="color:deeppink;"><p style="font-family:comiquitasans;color:black;">Shops</p></p> </p> </p> </p>
<a href="http://petpalz.x10.mx/stuff/signin.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">Main Shops</p></p> </p></a>
<a href="http://petpalz.x10.mx/stuff/signin.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">My Shop</p></p> </p></a>
<a href="http://petpalz.x10.mx/stuff/signin.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">User Shops</p></p> </p></a>
<a href="http://petpalz.x10.mx/stuff/signin.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">Petpalz Shop</p></p> </p></a>
<a href="http://petpalz.x10.mx/stuff/signin.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">Shop Search</p></p> </p></a>
<a href="http://petpalz.x10.mx/stuff/signin.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">Auctions</p></p> </p></a>
<a href="http://petpalz.x10.mx/stuff/signin.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">Bank</p></p> </p></a>
<br />
<p> <p> <p> <p style="color:deeppink;"><p style="font-family:comiquitasans;color:black;">Other</p></p> </p> </p> </p>
<a href="http://petpalz.x10.mx/stuff/comingsoon.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">News</p></p> </p></a>
<a href="http://petpalz.x10.mx/stuff/comingsoon.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">World Map</p></p> </p></a>
<a href="http://petpalz.x10.mx/stuff/comingsoon.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">Playground</p></p> </p></a>
<a href="http://petpalz.x10.mx/stuff/comingsoon.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">Battle Arena</p></p> </p></a>
<a href="http://petpalz.x10.mx/stuff/comingsoon.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">Search</p></p> </p></a>
<a href="http://petpalz.x10.mx/stuff/signin.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">Trades</p></p> </p></a>
<a href="http://petpalz.x10.mx/stuff/help.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">Help</p></p> </p></a>
<a href="http://petpalz.x10.mx/stuff/signin.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">Who's online?</p></p> </p></a>
<a href="http://petpalz.x10.mx/stuff/comingsoon.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">Refferals</p></p> </p></a>
<a href="http://petpalz.x10.mx/stuff/signin.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">Raffles</p></p> </p></a>
<a href="http://petpalz.x10.mx/stuff/rules.html"><p> <p style="color:black;"><p style="font-family:arial;color:black;">Rules</p></p> </p></a>

</td>
<td style="background-color:white;color:black;" align="center" valign="top">

<p style="font-family:comiquitasans">Title</p>
<p style="font-family:arial">Text</p>


<audio loop="loop" autoplay="autoplay" controls="controls" style="width:0px;height:0px;">   
   <source src="AUDIO LINK GOES HERE" />  
</audio>


</td>
<td style="width:20%;background-color:yellow;color:black;" align="center" valign="top">

<p style="color:black;"><p style="font-family:comiquitasans;color:black;">Chatbox</p></p>

<iframe width="210" height="650" scrolling="no" src="http://widget.mibbit.com/?settings=5db4519497f97bef141f07d0734705f2&server=irc.mibbit.net&channel=%23petpalz_test"></iframe>

</td>
</tr>
</table>

</body>
</html>