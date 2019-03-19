<?php 
include("inc/commonvars.php");
$data['action']='index';
$ret=get_db_value($data);
$feat=$ret['feat'];
$last=$ret['last'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<title>
<?php 
echo $companyname;
?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<meta name="description" content="SinglesTown Personals - Online Dating Services for Singles. Free Personal Ads with Photos. Join Free!">
<meta name="keywords" content="personals, dating services, online personals, free personal ads, singles, software, catalog, directory, search engine, partnership, affiliates, free, reciprocal links, exchange, love, soulmates, mail order brides, girls, ladies ">
<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body bgColor="white">
<?php
include("inc/topmenu.php");
?>


<table align="center" width="768" cellpadding="2" cellspacing="0" class="mtable">
 <tr>
   <td valign="top" align="center">
    <table border="0" cellpadding="0" cellspacing="0">
   <tr>
    <td colspan="2" width="525">
		<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
		codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" WIDTH="535" HEIGHT="225" id="logo" ALIGN="CENTER">
		<PARAM NAME=movie VALUE="images/intro.swf">
		<PARAM NAME=quality VALUE=high>
		<EMBED src="images/intro.swf" quality=high WIDTH="535" HEIGHT="225" ALIGN="CENTER"	TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"></EMBED>
		</OBJECT>
    </td>
	 </tr> 
   <tr>
		<td width="196" align="center">
		   <table border="0" cellpadding="0" cellspacing="0" width="196">
				<tr>
  			   <td width="196"><img src="images/romans-top.gif" height="20" width="196"/></td>
           </tr>  
				<tr>
				   <td background="images/romanstourbg.gif" height="130" width="196" align="left" style="; Font-size: 10px; border: 1 SOLID #E4D0CF; padding-left: 48px;">
					<a href="*.html" style="color: BLACK;">
					Meet 500 to 2000 beautiful women during our tours.<br>
					Don't take our word for it! We have hundreds of previous tour clients
              who are happy to <br />share their experiences with you.</a>
					</td>									</td>
				</tr>
			</table>
		 </td>
		 <td align="center" valign="top" style="border: 0 SOLID GRAY; padding-left: 5px;"><div style='color: RED; font-family: Verdana;'>Welcome to <?php echo $companyname; ?></div>
		    <table border="0" cellpadding="0" cellspacing="0" width="315" align="center">
				<tr>
				  <td valign="top"><img src="images/women1.gif" height="90" width="70" style="BORDER:1 SOLID #E4D0CF; margin-right: 5px;"></td>
				  <td colspan="4"><font face="Tahoma" color="#000000" size="1">
					Are you ready to find that one special person
					to share the rest of your life with? We have 
					many sincere women that are looking for a man like you!
					At SinglesTown, we conduct international introductions
					and tours to bring men and women together in a tasteful
					and comfortable environment for the purpose of finding
					a potential spouse. We have a successful average of 
					five engagements a day!</font>
				  </td>
				</tr>
				
				<tr>
				  <td colspan="5" align="right" valign="middle">
					  <table border="0" cellpadding="0" cellspacing="0" width="100%">
						 <tr>
						  <td width="11"><img src="images/arrowright.gif" height="20" width="11"></td>
						  <td width="50%" align="center" bgcolor="#990000"><a href="login.php" style="Font-weight: bold; Font-size: 10px; font-family: Arial; color: WHITE;">LOGIN</a></td>
						  <td>&nbsp;</td>
						  <td width="50%" align="center" bgcolor="#990000"><a href="join.php" style="Font-weight: bold; Font-size: 10px; font-family: Arial; color: WHITE;">JOIN FOR FREE</a></td>
						  <td width="11"><img src="images/arrowleft.gif" height="20" width="11"></td>
						 </tr>
					  </table>
             </td>
				 </tr>
			  </table>
			</td>
     </tr>
</table>
		</td>
	<td valign="top" width="212">
     <table  cellpadding="0" cellspacing="0">
      <tr>
      <td width="212">
      <img src="images/featured_mem.gif" height="20" width="212" />
      </td>
      </tr>
      <tr align="center"><td>
      <table summary="" style="border: 1 SOLID #E4D0CF;" width="212" align="center">
				<?php echo $feat;?>
		 </table>
      </td>
		 </tr>
     </table>
	</td>

<table align="center" width="768" border="0" cellpadding="0" cellspacing="0" class="mtable">
   <tr>
   <td style="padding-left:10px">
   	 <table  cellpadding="0" cellspacing="0">
  	 <tr>
      <td valign="top" align="center" width="196" style="border: 0 SOLID #E4D0CF;">
      	<table  cellpadding="0" cellspacing="0">
        <tr>
        <td width="196" colspan="2"><img src="images/lastaddedprotop.gif" height="20" width="196"></td>
        </tr>
        <tr><td style="border: 1 SOLID #E4D0CF;">
        	<table>
              <tr>
              <td height="2"></td>
              </tr>
							<?php echo $last ?>
              <tr>
              <td height="3"></td>
              </tr>
             </table> 
        </td></tr>
        </table> 
      </td>

  	 <td valign="top" align="center"  width="346" style="border: 0 SOLID #E4D0CF;">
      	<table  cellpadding="0" cellspacing="0" width="340">
        <tr>
        <td width="340" colspan="2"><img src="images/galleriestop.gif" height="20" width="340" /></td>
        </tr>
        <tr><td valign="middle" style="border: 1 SOLID #E4D0CF; padding-left: 10px;">
        	<table>
              <tr>
              <td height="5"></td>
              </tr>
              <tr>
              <td><a href="search_results.php?age_start=18&age_end=25&WC=3&page=1&you=2&po=on"><img src="images/0001.gif" height="30" width="30" border="0"/></a></td>
              <td valign="middle" style="; Font-size: 11px;" width="40%"><a href="search_results.php?age_start=18&age_end=25&WC=3&page=1&you=2&po=on" style="color: black;"><b>18-25 years old</b></a></td>
              <td valign="middle" style="; Font-size: 11px;"><a href="search_results.php?age_start=18&age_end=25&WC=3&page=1&you=2&po=on&selecttype=recent"><img src="images/hot.gif" height="30" width="35" border="0" /></a></td>
              <td valign="middle" style="; Font-size: 11px; padding-left: 10px"><a href="search_results.php?age_start=18&age_end=25&WC=3&page=1&you=2&po=on&selecttype=recent" style="color: black;"><b>Recently added</b></a></td>
              </tr>

              <tr>
              <td><a href="search_results.php?age_start=25&age_end=40&WC=3&page=1&you=2&po=on"><img src="images/0002.gif" border="0" height="30" width="30"/></a></td>
              <td valign="middle" style="; Font-size: 11px;" width="40%"><a href="search_results.php?age_start=25&age_end=40&WC=3&page=1&you=2&po=on" style="color: black;"><b>25-40 years old</b></a></td>
              <td valign="middle" style="; Font-size: 11px;"><a href="search_results.php?age_start=18&age_end=25&WC=3&page=1&you=2&po=on&selecttype=featured"><img src="images/best.gif" height="30" width="35" border="0" /></a></td>
              <td valign="middle" style="; Font-size: 11px; padding-left: 10px"><a href="search_results.php?age_start=18&age_end=25&WC=3&page=1&you=2&po=on&selecttype=featured" style="color: black;"><b>Featured members</b></a></td>
              </tr>

              <tr>
              <td><img src="images/0003.gif" height="30" width="30"/></td>
              <td valign="middle" style="; Font-size: 11px;" width="40%"><a href="search_results.php?age_start=40&age_end=90&WC=3&page=1&you=2&po=on" style="color: black;"><b>Above 40 years old</b></a></td>
              <td valign="middle" style="; Font-size: 11px;"><a href="search_results.php?age_start=1&age_end=90&WC=3&page=1&you=2"><img src="images/all.gif" height="30" width="35" border="0" /></a></td>
              <td valign="middle" style="; Font-size: 11px; padding-left: 10px"><a href="search_results.php?age_start=1&age_end=90&WC=3&page=1&you=2" style="color: black;"><b>All categories</b></a></td>
              </tr>
              <tr>
              <td height="7"></td>
              </tr>
             </table> 
        </td></tr>
        </table> 

      </td>
  	 <td valign="top" align="center"  width="212" style="border: 0 SOLID #E4D0CF;">
      	<table  cellpadding="0" cellspacing="0">
        <tr>
        <td width="212" colspan="2"><img src="images/fastsearchtop.gif" height="20" width="212" /></td>
        </tr>
        <tr><td style="border: 1 SOLID #E4D0CF;">
        <form action="search_results.php" method="get">
			<input type="hidden" name="age_start" value="1" />
			<input type="hidden" name="age_end" value="99" />
			<input type="hidden" name="WC" value="3" />
			<input type="hidden" name="page" value="1" />
        	<table style="font-size: 11px;">
              <tr>
              <td align="right" width="100"><b>I am a</b></td>
              <td>
                <select>
                <option value="man" selected>man</option>
                <option value="woman">woman</option>
                </select></td>
              </tr>

              <tr>
              <td align="right" width="100"><b>Looking for a</b></td>
              <td>
                <select name="you">
                <option value="0">man</option>
                <option value="1" selected>woman</option>
                </select></td>
              </tr>
					<tr>
              <td align="center" colspan="2"><input type="checkbox" name="po" checked=""/><b>With photos only</b></td>
              </tr>
					<tr>
              <td align="center" colspan="2"><input type="submit" value="quick search"/><br />
              <a href="search.php">Advanced search</a>
              </td>
              </tr>
             </table> 
        </td></tr>
        </table> 
        </form>
      </td>
  	 </tr>
   	 </table>   
   </td>
	 </tr>
</table>

 <!-- 3endtable -->
<?php
include("inc/bottom.php"); 
?>
</body>
</html>
