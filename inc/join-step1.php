<?php
   $countries="";
   $addinfo='';
   $data['action']='selectcountries';
   $line=get_db_value($data);
   foreach ($line as $arr)
   {
   $countries.="<option value='{$arr['id']}'>{$arr['nameEng']}</option>";
   }
   $data['action']='getfields';
   $acc=get_db_value($data);
?>
<script type="text/javascript">
<!--
function checkform(){
  empty=false;
//  if(document.all.NickName.value=="") empty=true;
  if(document.all.RealName.value=="") empty=true;
  if(document.all.City.value=="") empty=true;
  if(document.all.DescriptionMe.value=="") empty=true;
  if(document.all.Email.value=="") empty=true;
  if(document.all.Password.value=="") empty=true;
  if(empty){
  alert("Please fill all fields needed!");
  return false;
  }
  if(document.all.Email.value!=document.all.ConfirmEmail.value){
  alert("E-mail and Confirm E-mail fields doesn't match. Please check them");
  return false;
  }
  if(document.all.Password.value!=document.all.ConfirmPassword.value){
  alert("Password and Confirm password fields doesn't match. Please check them");
  return false;
  }
}
// -->
</script>
<form method="post" action="" onsubmit="return checkform(this);">
 <tr>
   <td colspan="3"><b>Congratulations!</b> You are on your way to join the
   fascinating community of singles looking for serious relationship.<br><br>
   Membership in <b>SinglesTown</b>
   is free and is not time-limited. However you should keep your profile up-to-date and
   expose communication activity. Every profile is thoroughly checked before joining the
   system. Now just fill our forms and complete your registration. Let your search for a
   soulmate be interesting and successful.<br><br>
   <center><b>Step 1 - Your personal information</b></center>
   <br><br>Fields with (*) are mandatory<br><br>
   <center><b>Personal details</b></center>
   </td>
 </tr>
 <tr style="padding-left: 10px; display: none">
    <td><b>NickName *</b></td>
    <td><input name="NickName" type="text" size="40" value=""></td>
    <td>2 to 10 characters. Use latin characters only.</td>
 </tr>
 <tr style="padding-left: 10px;">
    <td><b>Real name *</b></td>
    <td><input name="RealName" type="text" size="40" value=""></td>
    <td>Use latin characters only</td>
 </tr>
 <tr style="padding-left: 10px;">
    <td><b>Sex *</b></td>
    <td><select name="Sex">
  <option value=1 >Female</option>
  <option value=0 >Male</option>
    </select></td>
    <td></td>
 </tr>
 <tr style="padding-left: 10px;">
    <td><b>Country *</b></td>
    <td><select name="Country">
    <?php echo $countries; ?>
    </select></td>
  </tr>
  <tr style="padding-left: 10px;">
    <td><b>City *</b></td>
    <td><input name="City" type="text" size="40" value=""></td>
    <td>Use latin characters only</td>
  </tr>
  <tr style="padding-left: 10px;">
    <td><b>Children *</b></td>
    <td>
      <table cellspacing=0 cellpadding=0>
         <td><input name="Children" type="text" size="3" value="0"></td>
         <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
         <td>
         <select name="WhereChildren">
         <option value=0>living with me</option>
         <option value=1>not living with me</option>
         <option value=2>sometimes living with me</option>
         <option value=3>I will tell you later</option>
    </select>
      </td>
  </table>
    </td>
 </tr>
 <tr style="padding-left: 10px; <?php echo $acc['wantchildren'] ?>">
    <td><b>Want children?</b></td>
    <td>
  <select name="WantChildren">
      <option value="4">I will tell you later</option>
      <option value="0">No</option>
      <option value="1">Yes</option>
      <option value="2">Maybe</option>
      <option value="3">No matters</option>
  </select>
    </td>
    <td></td>
</tr style="padding-left: 10px;">
<tr style="padding-left: 10px;">
    <td><b>Date of birth *</b></td>
    <td>
  <table cellspacing=0 cellpadding=0>
      <td><select name="YearOfBirth">
      <option value="1929">1929</option><option value="1930">1930</option>
      <option value="1931">1931</option><option value="1932">1932</option>
      <option value="1933">1933</option><option value="1934">1934</option>
      <option value="1935">1935</option><option value="1936">1936</option>
      <option value="1937">1937</option><option value="1938">1938</option>
      <option value="1939">1939</option><option value="1940">1940</option>
      <option value="1941">1941</option><option value="1942">1942</option>
      <option value="1943">1943</option><option value="1944">1944</option>
      <option value="1945">1945</option><option value="1946">1946</option>
      <option value="1947">1947</option><option value="1948">1948</option>
      <option value="1949">1949</option><option value="1950">1950</option>
      <option value="1951">1951</option><option value="1952">1952</option>
      <option value="1953">1953</option><option value="1954">1954</option>
      <option value="1955">1955</option><option value="1956">1956</option>
      <option value="1957">1957</option><option value="1958">1958</option>
      <option value="1959">1959</option><option value="1960">1960</option>
      <option value="1961">1961</option><option value="1962">1962</option>
      <option value="1963">1963</option><option value="1964">1964</option>
      <option value="1965">1965</option><option value="1966">1966</option>
      <option value="1967">1967</option><option value="1968">1968</option>
      <option value="1969">1969</option><option value="1970">1970</option>
      <option value="1971">1971</option><option value="1972">1972</option>
      <option value="1973">1973</option><option value="1974">1974</option>
      <option value="1975">1975</option><option value="1976">1976</option>
      <option value="1977">1977</option><option value="1978">1978</option>
      <option value="1979">1979</option><option value="1980" selected>1980</option>
      <option value="1981">1981</option><option value="1982">1982</option>
      <option value="1983">1983</option><option value="1984">1984</option>
      <option value="1985">1985</option><option value="1986">1986</option>
      </select></td>
      <td>&nbsp;-&nbsp;</td>
      <td><select name="MonthOfBirth">
      <option value="January">January</option><option value="February">February</option>
      <option value="March">March</option><option value="April">April</option>
      <option value="May">May</option><option value="June">June</option>
      <option value="July">July</option><option value="August">August</option>
      <option value="September">September</option><option value="October">October</option>
      <option value="November">November</option><option value="December">December</option>
      </select></td>
      <td>&nbsp;-&nbsp;</td>
      <td><select name="DayOfBirth">
      <option value="1">1</option><option value="2">2</option>
      <option value="3">3</option><option value="4">4</option>
      <option value="5">5</option><option value="6">6</option>
      <option value="7">7</option><option value="8">8</option>
      <option value="9">9</option><option value="10">10</option>
      <option value="11">11</option><option value="12">12</option>
      <option value="13">13</option><option value="14">14</option>
      <option value="15">15</option><option value="16">16</option>
      <option value="17">17</option><option value="18">18</option>
      <option value="19">19</option><option value="20">20</option>
      <option value="21">21</option><option value="22">22</option>
      <option value="23">23</option><option value="24">24</option>
      <option value="25">25</option><option value="26">26</option>
      <option value="27">27</option><option value="28">28</option>
      <option value="29">29</option><option value="30">30</option>
      <option value="31">31</option>
      </select></td>
  </table>
    </td>
    <td></td>
</tr style="padding-left: 10px;">
<tr style="padding-left: 10px; <?php echo $acc['height'] ?>">
    <td><b>Height</b></td>
    <td>
  <select name="Height">
  <option value=0>I will tell you later</option>
<option value="1">4' 0&quot; (1.21m)<option value="2">4' 1&quot; (1.24m)<option value="3">4' 2&quot; (1.27m)
<option value="4">4' 3&quot; (1.30m)<option value="5">4' 4&quot; (1.32m)<option value="6">4' 5&quot; (1.35m)
<option value="7">4' 6&quot; (1.37m)<option value="8">4' 7&quot; (1.40m)<option value="9">4' 8&quot; (1.42m)
<option value="10">4' 9&quot; (1.45m)<option value="11">4' 10&quot; (1.47m)<option value="12">4' 11&quot; (1.50m)
<option value="13">5' 0&quot; (1.52m)<option value="14">5' 1&quot; (1.55m)<option value="15">5' 2&quot; (1.57m)
<option value="16">5' 3&quot; (1.60m)<option value="17">5' 4&quot; (1.63m)<option value="18">5' 5&quot; (1.65m)
<option value="19">5' 6&quot; (1.68m)<option value="20">5' 7&quot; (1.70m)<option value="21">5' 8&quot; (1.73m)
<option value="22">5' 9&quot; (1.75m)<option value="23">5' 10&quot; (1.78m)<option value="24">5' 11&quot; (1.80m)
<option value="25">6' 0&quot; (1.83m)<option value="26">6' 1&quot; (1.85m)<option value="27">6' 2&quot; (1.88m)
<option value="28">6' 3&quot; (1.90m)<option value="29">6' 4&quot; (1.93m)<option value="30">6' 5&quot; (1.96m)
<option value="31">6' 6&quot; (1.98m)<option value="32">6' 7&quot; (2.01m)<option value="33">6' 8&quot; (2.03m)
<option value="34">6' 9&quot; (2.06m)<option value="35">6' 10&quot; (2.08m)<option value="36">6' 11&quot; (2.11m)
<option value="37">7' 0&quot; (2.13m)<option value="38">7' 1&quot; (2.16m)<option value="39">7' 2&quot; (2.18m)
<option value="40">7' 3&quot; (2.21m)<option value="41">7' 4&quot; (2.24m)<option value="42">7' 5&quot; (2.26m)
<option value="43">7' 6&quot; (2.29m)</option>
    </select></td>
    <td></td>
</tr style="padding-left: 10px;">
<tr style="padding-left: 10px; <?php echo $acc['weight'] ?>">
    <td><b>Weight</b></td>
    <td><select name="BodyType">
  <option value=0>I will tell you later</option>
<option value="1">80 lbs. (36kg)<option value="2">85 lbs. (39kg)<option value="3">90 lbs. (41kg)
<option value="4">95 lbs. (43kg)<option value="5">100 lbs. (45kg)<option value="6">105 lbs. (48kg)
<option value="7">110 lbs. (50kg)<option value="8">115 lbs. (52kg)<option value="9">120 lbs. (54kg)
<option value="10">125 lbs. (57kg)<option value="11">130 lbs. (59kg)<option value="12">135 lbs. (61kg)
<option value="13">140 lbs. (64kg)<option value="14">145 lbs. (66kg)<option value="15">150 lbs. (68kg)
<option value="16">155 lbs. (70kg)<option value="17">160 lbs. (73kg)<option value="18">165 lbs. (75kg)
<option value="19">170 lbs. (77kg)<option value="20">175 lbs. (79kg)<option value="21">180 lbs. (82kg)
<option value="22">185 lbs. (84kg)<option value="23">190 lbs. (86kg)<option value="24">195 lbs. (88kg)
<option value="25">200 lbs. (91kg)<option value="26">205 lbs. (93kg)<option value="27">210 lbs. (95kg)
<option value="28">215 lbs. (98kg)<option value="29">220 lbs. (100kg)<option value="30">225 lbs. (102kg)
<option value="31">230 lbs. (104kg)<option value="32">235 lbs. (107kg)<option value="33">240 lbs. (109kg)
<option value="34">245 lbs. (111kg)<option value="35">250 lbs. (113kg)<option value="36">255 lbs. (116kg)
<option value="37">260 lbs. (118kg)<option value="38">265 lbs. (120kg)<option value="39">270 lbs. (122kg)
<option value="40">275 lbs. (125kg)<option value="41">280 lbs. (127kg)<option value="42">285 lbs. (129kg)
<option value="43">290 lbs. (132kg)<option value="44">295 lbs. (134kg)<option value="45">300 lbs. (136kg)
<option value="46">300+ lbs. (136kg+)</option>
    </select></td>
    <td></td>
</tr style="padding-left: 10px;">
<tr style="padding-left: 10px;<?php echo $acc['build'] ?>">
    <td><b>Build (##-##-##)</b></td>
    <td><input name="build" type="text" size="40" value=""></td>
    <td></td>
</tr style="padding-left: 10px;">
<tr style="padding-left: 10px;<?php echo $acc['religion'] ?>">
    <td><b>Religion</b></td>
    <td><select name="Religion">
    <option value="27" selected>None</option><option value=0>I will tell you later</option>
    <option value=1>Adventist</option><option value=2>Agnostic</option>
    <option value=3>Atheist</option><option value=4>Baptist</option>
    <option value=5>Buddhist</option><option value=6>Caodaism</option>
    <option value=7>Catholic</option><option value=8>Christian</option>
    <option value=9>Hindu</option><option value=10>Iskcon</option>
    <option value=11>Jainism</option><option value=12>Jewish</option>
    <option value=13>Methodist</option><option value=14>Mormon</option>
    <option value=15>Moslem</option><option value=16>Orthodox</option>
    <option value=17>Pentecostal</option><option value=18>Protestant</option>
    <option value=19>Quaker</option><option value=20>Scientology</option>
    <option value=21>Shinto</option><option value=22>Sikhism</option>
    <option value=23>Spiritual</option><option value=24>Taoism</option>
    <option value=25>Wiccan</option><option value=26>Other</option>
    </select></td>
    <td></td>
</tr style="padding-left: 10px;">
<tr style="padding-left: 10px;<?php echo $acc['ethnicity'] ?>">
    <td><b>Ethnicity</b></td>
    <td><select name="Ethnicity">
    <option value=0>I will tell you later</option>
    <option value="African">African</option><option value="African American">African American</option>
    <option value="Asian">Asian</option><option value="Caucasian">Caucasian</option>
    <option value="East Indian">East Indian</option><option value="Hispanic">Hispanic</option>
    <option value="Indian">Indian</option><option value="Latino">Latino</option>
    <option value="Mediterranean">Mediterranean</option><option value="Middle Eastern">Middle Eastern</option>
    <option value="Mixed">Mixed</option>
    </select></td>
    <td></td>
</tr style="padding-left: 10px;">
<tr style="padding-left: 10px;<?php echo $acc['marital'] ?>">
    <td><b>Marital status</b></td>
    <td><select name="MaritalStatus">
    <option value=0>I will tell you later</option>
    <option value="1" >Single</option><option value="2" >Attached</option>
    <option value="3" >Divorced</option><option value="4" >Married</option>
    <option value="5" >Separated</option><option value="6" >Widow</option>
    </select></td>
    <td></td>
</tr style="padding-left: 10px;">
<tr style="padding-left: 10px;<?php echo $acc['occupation'] ?>">
    <td><b>Occupation</b></td>
    <td><input name="Occupation" type="text" size="40" value=""></td>
    <td>In English only</td>
</tr style="padding-left: 10px;">
<tr style="padding-left: 10px;">
    <td><b>Language 1*</b></td>
    <td><select name="Language1">
    <option value=0 selected>English</option><option value=1>Afrikaans</option>
    <option value=2>Arabic</option><option value=3>Belgian</option>
    <option value=4>Bulgarian</option><option value=5>Burmese</option>
    <option value=6>Cantonese</option><option value=7>Croatian</option>
    <option value=8>Danish</option><option value=9>Dutch</option>
    <option value=10>Esperanto</option><option value=11>Estonian</option>
    <option value=12>Finnish</option><option value=13>French</option>
    <option value=14>German</option><option value=15>Greek</option>
    <option value=16>Gujrati</option><option value=17>Hebrew</option>
    <option value=18>Hindi</option><option value=19>Hungarian</option>
    <option value=20>Icelandic</option><option value=21>Indian</option>
    <option value=22>Indonesian</option><option value=23>Italian</option>
    <option value=24>Japanese</option><option value=25>Korean</option>
    <option value=26>Latvian</option><option value=27>Lithuanian</option>
    <option value=28>Malay</option><option value=29>Mandarin</option>
    <option value=30>Marathi</option><option value=31>Moldovian</option>
    <option value=32>Nepalese</option><option value=33>Norwegian</option>
    <option value=34>Persian</option><option value=35>Polish</option>
    <option value=36>Portuguese</option><option value=37>Punjabi</option>
    <option value=38>Romanian</option><option value=39>Russian</option>
    <option value=40>Serbian</option><option value=41>Spanish</option>
    <option value=42>Swedish</option><option value=43>Tagalog</option>
    <option value=44>Taiwanese</option><option value=45>Tamil</option>
    <option value=46>Telugu</option><option value=47>Thai</option>
    <option value=48>Tongan</option><option value=49>Turkish</option>
    <option value=50>Ukrainian</option><option value=51>Urdu</option>
    <option value=52>Vietnamese</option><option value=53>Visayan</option>
    </select></td>
    <td></td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px; <?php echo $acc['language2'] ?>">
    <td><b>Language 2</b></td>
    <td><select name="Language2">
    <option value="54" selected>None</option>
    <option value=0>English</option><option value=1>Afrikaans</option>
    <option value=2>Arabic</option><option value=3>Belgian</option>
    <option value=4>Bulgarian</option><option value=5>Burmese</option>
    <option value=6>Cantonese</option><option value=7>Croatian</option>
    <option value=8>Danish</option><option value=9>Dutch</option>
    <option value=10>Esperanto</option><option value=11>Estonian</option>
    <option value=12>Finnish</option><option value=13>French</option>
    <option value=14>German</option><option value=15>Greek</option>
    <option value=16>Gujrati</option><option value=17>Hebrew</option>
    <option value=18>Hindi</option><option value=19>Hungarian</option>
    <option value=20>Icelandic</option><option value=21>Indian</option>
    <option value=22>Indonesian</option><option value=23>Italian</option>
    <option value=24>Japanese</option><option value=25>Korean</option>
    <option value=26>Latvian</option><option value=27>Lithuanian</option>
    <option value=28>Malay</option><option value=29>Mandarin</option>
    <option value=30>Marathi</option><option value=31>Moldovian</option>
    <option value=32>Nepalese</option><option value=33>Norwegian</option>
    <option value=34>Persian</option><option value=35>Polish</option>
    <option value=36>Portuguese</option><option value=37>Punjabi</option>
    <option value=38>Romanian</option><option value=39>Russian</option>
    <option value=40>Serbian</option><option value=41>Spanish</option>
    <option value=42>Swedish</option><option value=43>Tagalog</option>
    <option value=44>Taiwanese</option><option value=45>Tamil</option>
    <option value=46>Telugu</option><option value=47>Thai</option>
    <option value=48>Tongan</option><option value=49>Turkish</option>
    <option value=50>Ukrainian</option><option value=51>Urdu</option>
    <option value=52>Vietnamese</option><option value=53>Visayan</option>
    </select></td>
    <td></td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px;<?php echo $acc['language3'] ?>">
    <td><b>Language 3</b></td>
    <td><select name="Language3">
    <option value="54" selected>None</option>
    <option value=0>English</option><option value=1>Afrikaans</option>
    <option value=2>Arabic</option><option value=3>Belgian</option>
    <option value=4>Bulgarian</option><option value=5>Burmese</option>
    <option value=6>Cantonese</option><option value=7>Croatian</option>
    <option value=8>Danish</option><option value=9>Dutch</option>
    <option value=10>Esperanto</option><option value=11>Estonian</option>
    <option value=12>Finnish</option><option value=13>French</option>
    <option value=14>German</option><option value=15>Greek</option>
    <option value=16>Gujrati</option><option value=17>Hebrew</option>
    <option value=18>Hindi</option><option value=19>Hungarian</option>
    <option value=20>Icelandic</option><option value=21>Indian</option>
    <option value=22>Indonesian</option><option value=23>Italian</option>
    <option value=24>Japanese</option><option value=25>Korean</option>
    <option value=26>Latvian</option><option value=27>Lithuanian</option>
    <option value=28>Malay</option><option value=29>Mandarin</option>
    <option value=30>Marathi</option><option value=31>Moldovian</option>
    <option value=32>Nepalese</option><option value=33>Norwegian</option>
    <option value=34>Persian</option><option value=35>Polish</option>
    <option value=36>Portuguese</option><option value=37>Punjabi</option>
    <option value=38>Romanian</option><option value=39>Russian</option>
    <option value=40>Serbian</option><option value=41>Spanish</option>
    <option value=42>Swedish</option><option value=43>Tagalog</option>
    <option value=44>Taiwanese</option><option value=45>Tamil</option>
    <option value=46>Telugu</option><option value=47>Thai</option>
    <option value=48>Tongan</option><option value=49>Turkish</option>
    <option value=50>Ukrainian</option><option value=51>Urdu</option>
    <option value=52>Vietnamese</option><option value=53>Visayan</option>
    </select></td>
    <td></td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px; <?php echo $acc['education'] ?>">
    <td><b>Education</b></td>
    <td><select name="Education">
    <option value=0>I will tell you later</option>
    <option value=1>High School graduate</option><option value=2>Some college</option>
    <option value=3>College student</option><option value=4>AA (2 years college)</option>
    <option value=5>BA/BS (4 years college)</option><option value=6>Some grad school</option>
    <option value=7>Grad school student</option><option value=8>MA/MS/MBA</option>
    <option value=9>PhD/Post doctorate</option><option value=10>JD</option>
    </select></td>
    <td></td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px;<?php echo $acc['income'] ?>" class=table1>
    <td><b>Income</b></td>
    <td><select name="Income">
  <option value=0>I will tell you later</option>
<option value=1>$10,000/year and less</option><option value=2>$10,000-$30,000/year</option><option value=3>$30,000-$50,000/year</option><option value=4>$50,000-$70,000/year</option><option value=5>$70,000/year and more</option>    </select></td>
    <td></td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px;<?php echo $acc['smoke'] ?>">
    <td><b>Do you smoke?</b></td>
    <td><select name="Smoker">
    <option value=0>I will tell you later</option>
    <option value=1>No</option><option value=2>Rarely</option>
    <option value=3>Often</option><option value=4>Very often</option>
    </select></td>
    <td></td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px;<?php echo $acc['drink'] ?>">
    <td><b>Do you drink?</b></td>
    <td><select name="Drinker">
    <option value=0>I will tell you later</option>
    <option value=1>No</option><option value=2>Rarely</option>
    <option value=3>Often</option><option value=4>Very often</option>
    </select></td>
    <td></td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px;">
    <td valign="top"><b>Description *</b></td>
    <td valign="top">
    <textarea name="DescriptionMe" cols=40 rows=10></textarea>
    </td>
    <td valign="top">General self-description. You must write this in ENGLISH only.
    Otherwise, your profile may not be activated.</td>
</tr style="padding-left: 10px;">
<tr style="padding-left: 10px;<?php echo $acc['hobbies'] ?>">
    <td><b>Hobbies</b></td>
    <td><input name="hobbies" type="text" size="40" value=""></td>
    <td></td>
</tr style="padding-left: 10px;">
<tr style="padding-left: 10px;<?php echo $acc['sports'] ?>">
    <td><b>Sports</b></td>
    <td><input name="sports" type="text" size="40" value=""></td>
    <td></td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px;"><td valign="top" align="center" colspan="3"><b>Contact information</b></td></tr style="padding-left: 10px;">

<tr style="padding-left: 10px;">
    <td valign="top"><b>E-mail *</b></td>
    <td valign="top"><input name="Email" size="40" value=""></td>
    <td valign="top">Must be valid. Otherwise, you won't be able to finish the registration.</td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px;">
    <td nowrap=""><b>Confirm e-mail *</b></td>
    <td><input name="ConfirmEmail" size="40" value=""></td>
    <td>Confirm your e-mail *</td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px;"><td valign="top" align="center" colspan="3"><b>Additional contact information</b></td></tr style="padding-left: 10px;">

<tr style="padding-left: 10px;<?php echo $acc['homepage'] ?>">
    <td><b>Homepage</b></td>
    <td>
  <input name="HomePage" size="40" value=""></td>
    <td></td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px;<?php echo $acc['phone'] ?>">
    <td><b>Phone</b></td>
    <td><input name="Phone" size="40" value=""></td>
    <td></td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px;<?php echo $acc['homeaddress'] ?>">
    <td valign="top"><b>Home address</b></td>
    <td valign="top">
  <input name="HomeAddress" size="40" value=""><br>
  <input name="HomeAddress1" size="40" value=""></td>
    <td valign="top">Use latin characters only</td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px;<?php echo $acc['icq'] ?>">
    <td><b>ICQ UIN</b></td>
    <td><input name="IcqUIN" size="40" value=""></td>
    <td></td>
</tr style="padding-left: 10px;">
<tr style="padding-left: 10px;<?php echo $acc['lookfor'] ?>">
    <td><b>I look for</b></td>
    <td><select name="LookingFor">
    <option value=0 selected>a man</option>
    <option value=1>a woman</option>
    <option value=2>a man or a woman</option>
    </select></td>
    <td>Whom are you looking for? *</td>
</tr style="padding-left: 10px;">

<tr style='<?php echo $acc['relation'] ?>'>
   <td valign="top"><b>Relationship</b></td>
   <td valign="top" style="padding-left: 5;">
      <table cellspacing="0" cellpadding="0" class="text"  style="font-size: 12px;">
      <tr><td><input name="r_act" type="checkbox"></td><td>&nbsp;Activity Partner</td></tr>
      <tr><td><input name="r_fri" type="checkbox"></td><td>&nbsp;Friendship</td></tr>
      <tr><td><input name="r_mar" type="checkbox"></td><td>&nbsp;Marriage</td></tr>
      <tr><td><input name="r_rel" type="checkbox"></td><td>&nbsp;Relationship</td></tr>
      <tr><td><input name="r_rom" type="checkbox"></td><td>&nbsp;Romance</td></tr>
      <tr><td><input name="r_cas" type="checkbox"></td><td>&nbsp;Casual</td></tr>
      <tr><td><input name="r_tra" type="checkbox"></td><td>&nbsp;Travel Partner</td></tr>
      <tr><td><input name="r_pen" type="checkbox"></td><td>&nbsp;Pen Pal</td></tr>
      </table>
    </td>
    <td valign="top">What do you seek somebody for?</td>
</tr>

<tr style='<?php echo $acc['seekfor'] ?>'>
    <td valign="top"><b>Seeking for:</b></td>
    <td valign="top"  style="padding-left: 9;">
  <textarea name="DescriptionYou" cols="40" rows="10"></textarea>
    </td>
    <td valign="top">General description. You must write this in ENGLISH only.
     Otherwise, your profile may not be activated.</td>
</tr>


<tr style="padding-left: 10px;">
    <td align="center" colspan="3"><b>Remember</b>: By specifying your additional contact
    information you increase your chances to be contacted by other members of SinglesTown
    system.</td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px;"><td valign="top" align="center" colspan="3"><b>Additional information</b></td></tr style="padding-left: 10px;">
<?php echo $addinfo ?>
<tr style="padding-left: 10px;"><td valign="top" align="center" colspan="3"><b>Password</b></td></tr style="padding-left: 10px;">

<tr style="padding-left: 10px;">
    <td><b>Password *</b></td>
    <td><input name="Password" type="password" size="40" value=""></td>
    <td>4 to 8 characters. Use latin set.</td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px;">
    <td nowrap=""><b>Confirm password *</b></td>
    <td><input name="ConfirmPassword" type="password" size="40" value=""></td>
    <td>Confirm your password</td>
</tr style="padding-left: 10px;">

<tr style="padding-left: 10px;">
 <td colspan="3"><center><input type="submit" value="Next >>" style="width: 170px;"></center></td>
</tr style="padding-left: 10px;">
<input type="hidden" name="page" value="2">
</form>
