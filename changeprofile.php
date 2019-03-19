<?php
  $id=$_SESSION['id'];
  if(isset($_REQUEST['action'])){
  $data['id']=$id;
  $data['password']=$_SESSION['password'];
  $data['request']=$_REQUEST;
  $data['action']='changeprofile';
  $result = get_db_value($data);
  }

  $countries="";
  include("inc/fldvars.php");

  $data['id']=$id;
  $data['action']='viewprofile';
  $data['password']=$_SESSION['password'];
  $result=get_db_value($data);
  $line=$result['line'];

  $data['action']='selectcountries';
  $result=get_db_value($data);
  foreach ($result as $arr)
  {
   $sel=$line['countryid']==$arr['id'] ? 'selected' : '';
   $countries.="<option value='{$arr['id']}' $sel>{$arr['nameEng']}</option>";
  }
  $f=$line['sex']==1 ? 'selected' : '';
  $m=$line['sex']==0 ? 'selected' : '';
  $addinfo='';
  $data['action']='getfields';
  $acc=get_db_value($data);

  $hitems="";
  $btitems="";

  for($i=0; $i<47; $i++){
  $wc[$i]=$line['childrenstatus']==$i ? 'selected' : '';
  $wac[$i]=$line['wantchildren']==$i ? 'selected' : '';
//  $h[$i]=$line['height']==$i ? 'selected' : '';
//  $bt[$i]=$line['bodytype']==$i ? 'selected' : '';
  if(isset($height[$i])){
    $sel=$line['height']==$i ? 'selected' : '';
    $hitems.="<option value='$i' $sel>{$height[$i]}</option>";
  }
  if(isset($bodytype[$i])){
    $sel=$line['bodytype']==$i ? 'selected' : '';
    $btitems.="<option value='$i' $sel>{$bodytype[$i]}</option>";
  }
  $ms[$i]=$line['marital']==$i ? 'selected' : '';
  $e[$i]=$line['education']==$i ? 'selected' : '';
  $in[$i]=$line['income']==$i ? 'selected' : '';
  $sm[$i]=$line['smoke']==$i ? 'selected' : '';
  $dr[$i]=$line['drink']==$i ? 'selected' : '';
  $lf[$i]=$line['lookfor']==$i ? 'selected' : '';
  }
  $years='';
  for($i=1929; $i<1987; $i++){
  $sel=$line['yearofbirth']==$i ? 'selected' : '';
  $years.="<option value='$i' $sel>$i</option>";
  }
  $months='';
  foreach($month as $value){
  $sel=$line['monthofbirth']==$value ? 'selected' : '';
  $months.="<option value='$value' $sel>$value</option>";
  }
  $etn='';
  foreach($ethnicity as $value){
  $sel=$line['ethnicity']==$value ? 'selected' : '';
  $etn.="<option value='$value' $sel>$value</option>";
  }
  $days='';
  for($i=1; $i<32; $i++){
  $sel=$line['dayofbirth']==$i ? 'selected' : '';
  $days.="<option value='$i' $sel>$i</option>";
  }
  $relig='';
  for($i=0; $i<28; $i++){
  $sel=$line['religion']==$i ? 'selected' : '';
  $relig.="<option value='$i' $sel>$religions[$i]</option>";
  }
  $lang1='';
  $lang2='';
  $lang3='';
  for($i=0; $i<54; $i++){
  $sel1=$line['language1']==$i ? 'selected' : '';
  $sel2=$line['language2']==$i ? 'selected' : '';
  $sel3=$line['language3']==$i ? 'selected' : '';
  $lang1.="<option value='$i' $sel1>$language[$i]</option>";
  $lang2.="<option value='$i' $sel2>$language[$i]</option>";
  $lang3.="<option value='$i' $sel3>$language[$i]</option>";
  }
  $act=$line['r_act']=='on' ? 'checked=checked' : '';
  $fri=$line['r_fri']=='on' ? 'checked=checked' : '';
  $mar=$line['r_mar']=='on' ? 'checked=checked' : '';
  $rel=$line['r_rel']=='on' ? 'checked=checked' : '';
  $rom=$line['r_rom']=='on' ? 'checked=checked' : '';
  $cas=$line['r_cas']=='on' ? 'checked=checked' : '';
  $tra=$line['r_tra']=='on' ? 'checked=checked' : '';
  $pen=$line['r_pen']=='on' ? 'checked=checked' : '';
$str = <<<EOT
<form action="" method="POST">
 <tr style="padding-left: 10px; display: none">
    <td><b>NickName *</b></td>
    <td><input name="NickName" type="text" size="40" value=""></td>
    <td>2 to 10 characters. Use latin characters only.</td>
 </tr>
 <tr style="padding-left: 10px;">
    <td><b>Real name *</b></td>
    <td><input name="RealName" type="text" size="40" value="{$line['name']}"></td>
    <td>Use latin characters only</td>
 </tr>

 <tr style="padding-left: 10px;">
    <td><b>Sex *</b></td>
    <td><select name="Sex">
  <option value=1 $f>Female</option>
  <option value=0 $m>Male</option>
    </select></td>
    <td></td>
 </tr>
 <tr style="padding-left: 10px;">
    <td><b>Country *</b></td>
    <td><select name="Country">
    $countries
    </select></td>
  </tr>
  <tr style="padding-left: 10px;">
    <td><b>City *</b></td>
    <td><input name="City" type="text" size="40" value="{$line['city']}"></td>
    <td>Use latin characters only</td>
  </tr>
  <tr style="padding-left: 10px;">
    <td><b>Children *</b></td>
    <td>
      <table cellspacing=0 cellpadding=0>
         <td><input name="Children" type="text" size="3" value="{$line['children']}"></td>
         <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
         <td>
         <select name="WhereChildren">
         <option value=0 $wc[0]>living with me</option>
         <option value=1 $wc[1]>not living with me</option>
         <option value=2 $wc[2]>sometimes living with me</option>
         <option value=3 $wc[3]>I will tell you later</option>
    </select>
      </td>
  </table>
    </td>
 </tr>
 <tr style="padding-left: 10px; {$acc['wantchildren']}">
    <td><b>Want children?</b></td>
    <td>
  <select name="WantChildren">
      <option value="" $wac[4]>I will tell you later</option>
      <option value="0" $wac[0]>No</option>
      <option value="1" $wac[1]>Yes</option>
      <option value="2" $wac[2]>Maybe</option>
      <option value="3" $wac[3]>No matters</option>
  </select>
    </td>
    <td></td>
</tr style="padding-left: 10px;">
<tr style="padding-left: 10px;">
    <td><b>Date of birth *</b></td>
    <td>
  <table cellspacing=0 cellpadding=0>
      <td><select name="YearOfBirth">
     $years;
      </select></td>
      <td>&nbsp;-&nbsp;</td>
      <td><select name="MonthOfBirth">
     $months
      </select></td>
      <td>&nbsp;-&nbsp;</td>
      <td><select name="DayOfBirth">
     $days
      </select></td>
  </table>
    </td>
    <td></td>
</tr style="padding-left: 10px;">
<tr style="padding-left: 10px; {$acc['height']}">
    <td><b>Height</b></td>
    <td>
  <select name="Height">
    $hitems
  </select></td>
    <td></td>
</tr style="padding-left: 10px;">
<tr style="padding-left: 10px; {$acc['weight']}">
    <td><b>Weight</b></td>
    <td><select name="BodyType">
    $btitems
    </select></td>
    <td></td>
</tr style="padding-left: 10px;">
<tr style="padding-left: 10px; {$acc['build']}">
    <td nowrap><b>Build (##-##-##)</b></td>
    <td><input name="build" type="text" size="40" value="{$line['build']}"></td>
    <td></td>
</tr style="padding-left: 10px;">
<tr style="padding-left: 10px; {$acc['religion']}">
    <td><b>Religion</b></td>
    <td><select name="Religion">
    $relig
    </select></td>
    <td></td>
</tr style="padding-left: 10px;">
<tr style="padding-left: 10px; {$acc['ethnicity']}">
    <td><b>Ethnicity</b></td>
    <td><select name="Ethnicity">
    $etn
    </select></td>
    <td></td>
</tr style="padding-left: 10px;">
<tr style="padding-left: 10px; {$acc['marital']}">
    <td><b>Marital status</b></td>
    <td><select name="MaritalStatus">
    <option value=0 $ms[0]>I will tell you later</option>
    <option value="1"  $ms[1]>Single</option><option value="2"  $ms[2]>Attached</option>
    <option value="3"  $ms[3]>Divorced</option><option value="4" $ms[4] >Married</option>
    <option value="5"  $ms[5]>Separated</option><option value="6"  $ms[6]>Widow</option>
    </select></td>
    <td></td>
</tr style="padding-left: 10px;">
<tr style="padding-left: 10px; {$acc['occupation']}">
    <td><b>Occupation</b></td>
    <td><input name="Occupation" type="text" size="40" value="{$line['occupation']}"></td>
    <td>In English only</td>
</tr style="padding-left: 10px;">
<tr style="padding-left: 10px;">
    <td><b>Language 1 *</b></td>
    <td><select name="Language1">
    $lang1
    </select></td>
    <td></td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px; {$acc['language2']}">
    <td><b>Language 2</b></td>
    <td><select name="Language2">
    $lang2
    </select></td>
    <td></td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px; {$acc['language3']}">
    <td><b>Language 3</b></td>
    <td><select name="Language3">
    $lang3
    </select></td>
    <td></td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px; {$acc['education']}">
    <td><b>Education</b></td>
    <td><select name="Education">
    <option value=0 $e[0]>I will tell you later</option>
    <option value=1 $e[1]>High School graduate</option><option value=2 $e[2]>Some college</option>
    <option value=3 $e[3]>College student</option><option value=4 $e[4]>AA (2 years college)</option>
    <option value=5 $e[5]>BA/BS (4 years college)</option><option value=6 $e[6]>Some grad school</option>
    <option value=7 $e[7]>Grad school student</option><option value=8 $e[8]>MA/MS/MBA</option>
    <option value=9 $e[9]>PhD/Post doctorate</option><option value=10 $e[10]>JD</option>
    </select></td>
    <td></td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px; {$acc['income']}" class=table1>
    <td><b>Income</b></td>
    <td><select name="Income">
  <option value=0 $in[0]>I will tell you later</option>
<option value=1 $in[1]>$10,000/year and less</option>
<option value=2 $in[2]>$10,000-$30,000/year</option>
<option value=3 $in[3]>$30,000-$50,000/year</option>
<option value=4 $in[4]>$50,000-$70,000/year</option>
<option value=5 $in[5]>$70,000/year and more</option>
</select></td>
    <td></td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px; {$acc['smoke']}">
    <td><b>Do you smoke?</b></td>
    <td><select name="Smoker">
    <option value=0 $sm[0]>I will tell you later</option>
    <option value=1 $sm[1]>No</option><option value=2 $sm[2]>Rarely</option>
    <option value=3 $sm[3]>Often</option><option value=4 $sm[4]>Very often</option>
    </select></td>
    <td></td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px; {$acc['drink']}">
    <td><b>Do you drink?</b></td>
    <td><select name="Drinker">
    <option value=0 $dr[0]>I will tell you later</option>
    <option value=1 $dr[1]>No</option><option value=2 $dr[2]>Rarely</option>
    <option value=3 $dr[3]>Often</option><option value=4 $dr[4]>Very often</option>
    </select></td>
    <td></td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px;">
    <td valign="top"><b>Description *</b></td>
    <td valign="top">
    <textarea name="DescriptionMe" cols=40 rows=10>{$line['description']}</textarea>
    </td>
    <td valign="top">General self-description. You must write this in ENGLISH only.
    Otherwise, your profile may not be activated.</td>
</tr style="padding-left: 10px;">
<tr style="padding-left: 10px; {$acc['hobbies']}">
    <td><b>Hobbies</b></td>
    <td><input name="hobbies" type="text" size="40" value="{$line['hobbies']}"></td>
    <td></td>
</tr style="padding-left: 10px;">
<tr style="padding-left: 10px; {$acc['sports']}">
    <td><b>Sports</b></td>
    <td><input name="sports" type="text" size="40" value="{$line['sports']}"></td>
    <td></td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px;"><td valign="top" align="center" colspan="3"><b>Contact information</b></td></tr style="padding-left: 10px;">

<tr style="padding-left: 10px;">
    <td valign="top"><b>E-mail *</b></td>
    <td valign="top"><input name="Email" size="40" value="{$line['email']}"></td>
    <td valign="top">Must be valid. Otherwise, you won't be able to finish the registration.</td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px;"><td valign="top" align="center" colspan="3"><b>Additional contact information</b></td></tr style="padding-left: 10px;">

<tr style="padding-left: 10px;">
    <td><b>Homepage</b></td>
    <td>
  <input name="HomePage" size="40" value="{$line['homepage']}"></td>
    <td></td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px;">
    <td><b>Phone</b></td>
    <td><input name="Phone" size="40" value="{$line['phone']}"></td>
    <td></td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px;">
    <td valign="top"><b>Home address</b></td>
    <td valign="top">
  <input name="HomeAddress" size="40" value="{$line['address']}"><br>
  <input name="HomeAddress1" size="40" value="{$line['address1']}"></td>
    <td valign="top">Use latin characters only</td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px;">
    <td><b>ICQ UIN</b></td>
    <td><input name="IcqUIN" size="40" value="{$line['icq']}"></td>
    <td></td>
</tr style="padding-left: 10px;">
<tr style="padding-left: 10px;">
    <td><b>I look for</b></td>
    <td><select name="LookingFor">
    <option value=0 $lf[0]>a man</option>
    <option value=1 $lf[1]>a woman</option>
    <option value=2 $lf[2]>a man or a woman</option>
    </select></td>
    <td>Whom are you looking for?</td>
</tr style="padding-left: 10px;">

<tr>
   <td valign="top"><b>Relationship</b></td>
   <td valign="top" style="padding-left: 5;">
      <table cellspacing="0" cellpadding="0" class="text"  style="font-size: 12px;">
      <tr><td><input name="r_act" type="checkbox" $act></td><td>&nbsp;Activity Partner</td></tr>
      <tr><td><input name="r_fri" type="checkbox" $fri></td><td>&nbsp;Friendship</td></tr>
      <tr><td><input name="r_mar" type="checkbox" $mar></td><td>&nbsp;Marriage</td></tr>
      <tr><td><input name="r_rel" type="checkbox" $rel></td><td>&nbsp;Relationship</td></tr>
      <tr><td><input name="r_rom" type="checkbox" $rom></td><td>&nbsp;Romance</td></tr>
      <tr><td><input name="r_cas" type="checkbox" $cas></td><td>&nbsp;Casual</td></tr>
      <tr><td><input name="r_tra" type="checkbox" $tra></td><td>&nbsp;Travel Partner</td></tr>
      <tr><td><input name="r_pen" type="checkbox" $pen></td><td>&nbsp;Pen Pal</td></tr>
      </table>
    </td>
    <td valign="top">What do you seek somebody for?</td>
</tr>

<tr>
    <td valign="top"><b>Description *</b></td>
    <td valign="top"  style="padding-left: 9;">
  <textarea name="DescriptionYou" cols="40" rows="10">{$line['partnerdescription']}</textarea>
    </td>
    <td valign="top">General description. You must write this in ENGLISH only.
     Otherwise, your profile may not be activated.</td>
</tr>


<tr style="padding-left: 10px;">
    <td align="center" colspan="3"><b>Remember</b>: By specifying your additional contact
    information you increase your chances to be contacted by other members of SinglesTown
    system.</td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px;"><td valign="top" align="center" colspan="3"><b>Password</b></td></tr style="padding-left: 10px;">

<tr style="padding-left: 10px;">
    <td><b>Password *</b></td>
    <td>
    <input name="action" type="hidden" value="change">
    <input name="Password" type="text" size="40" value="{$line['password']}"></td>
    <td>4 to 8 characters. Use latin set.</td>
</tr style="padding-left: 10px;">
<tr style="padding-left: 10px;">
 <td colspan="3"><center><input type="submit" value="Change profile" style="width: 170px;"></center></td>
</tr style="padding-left: 10px;">

</form>
EOT;
echo $str;
?>

