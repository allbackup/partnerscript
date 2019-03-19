<?php 
	session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>
<?php 
include("inc/commonvars.php");
echo ("$companyname - My messages");
?>
</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
<?php
include("inc/topmenu.php");
?>
<table border='0' cellpadding='0' cellspacing='5' width='768' align='center'  class='mtable'  style='font-size: 12px;'>
<tr><td><?php
if (isset($_SESSION['id'])) include("inc/membermenu.php");
?></td></tr>
<tr>
<td align="center">
<span style="font-size: 18px;">
Search for your soulmate among <b>SinglesTown</b> 
</span>
<br />
<?php 
  $countries="";

	 $data['action']='selectcountries';
	 $line=get_db_value($data);
   foreach ($line as $arr)
   {
   $countries.="<option value='{$arr['id']}'>{$arr['nameEng']}</option>";        
   }
?>
Personals
Search in our web's most up-to-date and real singles database. 
<b>SinglesTown</b> features profiles of singles posted from many dating 
websites united in <b>SinglesTown</b> Partnership Network. 
All our members were recently added to the database and agreed 
to take part or joined themselves. Profiles are sorted according to 
the member's activity. Members that logged into their accounts recently 
will show up first. You may always be sure that all members are real and 
have only their personal contact information listed. 

<table width="70%" class="mtable">
  <tr valign="top">
  <form action="search_results.php" method="get">
  <input type="hidden" name="age_start" value="1" />
  <input type="hidden" name="age_end" value="99" />
  <input type="hidden" name="WC" value="3" />
  <input type="hidden" name="you" value="2" />
  <input type="hidden" name="page" value="1" />
    <td class="mtable" colspan='2'>
      <u><b>Seeking for ID:</b></u><br />
      <table cellspacing=2 cellpadding=0>
      <tr><td><input name='userid' type='text' size='15'></td>
			<td><input type='submit' value='   fetch   ' /></td></tr>
      </table>
    </td>
	</form>
  </tr>
</table>

<form action="search_results.php" method="GET">
<table width="70%" class="mtable">
  <tr valign="top">
    <td class="mtable">
      <u><b>Seeking for:</b></u><br />
      <table cellspacing=0 cellpadding=0>
      <tr><td><input name=you type=radio value=0></td><td>&nbsp;a man</td></tr>
      <tr><td><input name=you type=radio value=1 checked></td><td>&nbsp;a woman</td></tr>
      <tr><td><input name=you type=radio value=2></td><td>&nbsp;both</td></tr>
      </table>
    </td>
    <td class="mtable">
      <u><b>Aged</b></u>
      <table class=text cellspacing=0 cellpadding=2>
        <tr><td align=right>from&nbsp;</td><td><select name=age_start><option                     value=18>18</option><option value=19>19</option><option value=20>20</option><option                     value=21>21</option><option value=22>22</option><option value=23>23</option><option                     value=24>24</option><option value=25>25</option><option value=26>26</option><option                     value=27>27</option><option value=28>28</option><option value=29>29</option><option                     value=30>30</option><option value=31>31</option><option value=32>32</option><option                     value=33>33</option><option value=34>34</option><option value=35>35</option><option                     value=36>36</option><option value=37>37</option><option value=38>38</option><option                     value=39>39</option><option value=40>40</option><option value=41>41</option><option                     value=42>42</option><option value=43>43</option><option value=44>44</option><option                     value=45>45</option><option value=46>46</option><option value=47>47</option><option                     value=48>48</option><option value=49>49</option><option value=50>50</option><option                     value=51>51</option><option value=52>52</option><option value=53>53</option><option                     value=54>54</option><option value=55>55</option><option value=56>56</option><option                     value=57>57</option><option value=58>58</option><option value=59>59</option><option                     value=60>60</option><option value=61>61</option><option value=62>62</option><option                     value=63>63</option><option value=64>64</option><option value=65>65</option><option                     value=66>66</option><option value=67>67</option><option value=68>68</option><option                     value=69>69</option><option value=70>70</option><option value=71>71</option><option                     value=72>72</option><option value=73>73</option><option value=74>74</option><option                     value=75>75</option></select></td></tr><tr><td align=right>to&nbsp;</td><td><select                     name=age_end><option value=18>18</option><option value=19>19</option><option                     value=20>20</option><option value=21>21</option><option value=22>22</option><option                     value=23>23</option><option value=24>24</option><option value=25>25</option><option                     value=26>26</option><option value=27>27</option><option value=28>28</option><option                     value=29>29</option><option value=30>30</option><option value=31>31</option><option                     value=32>32</option><option value=33>33</option><option value=34>34</option><option                     value=35>35</option><option value=36>36</option><option value=37>37</option><option                     value=38>38</option><option value=39>39</option><option value=40 selected>40</option><option                     value=41>41</option><option value=42>42</option><option value=43>43</option><option                     value=44>44</option><option value=45>45</option><option value=46>46</option><option                     value=47>47</option><option value=48>48</option><option value=49>49</option><option                     value=50>50</option><option value=51>51</option><option value=52>52</option><option                     value=53>53</option><option value=54>54</option><option value=55>55</option><option                     value=56>56</option><option value=57>57</option><option value=58>58</option><option                     value=59>59</option><option value=60>60</option><option value=61>61</option><option                     value=62>62</option><option value=63>63</option><option value=64>64</option><option                     value=65>65</option><option value=66>66</option><option value=67>67</option><option                     value=68>68</option><option value=69>69</option><option value=70>70</option><option                     value=71>71</option><option value=72>72</option><option value=73>73</option><option                     value=74>74</option><option value=75>75</option></select></td></tr>	</table></td>
  </tr>
<tr>
  <td class="mtable">
		<b>Location:</b><br />
		<select name="c[]" multiple size="20"><?php echo $countries;?></select>	
  </td>
	<td valign=top class="mtable">
	&nbsp;<u><b>Height</b></u>:<br>
		 <input type=checkbox name=H[1] id=H1>&nbsp;<label for=H1>4'7" (140cm) or below</label><br>
		 <input type=checkbox name=H[2] id=H2>&nbsp;<label for=H2>4'8" - 4'11" (141-150cm)</label><br>
		 <input type=checkbox name=H[3] id=H3>&nbsp;<label for=H3>5'0" - 5'3" (151-160cm)</label><br>
		 <input type=checkbox name=H[4] id=H4>&nbsp;<label for=H4>5'4" - 5'7" (161-170cm)</label><br>
		 <input type=checkbox name=H[5] id=H5>&nbsp;<label for=H5>5'8" - 5'11" (171-180cm)</label><br>
		 <input type=checkbox name=H[6] id=H6>&nbsp;<label for=H6>6'0" - 6'3" (181-190cm)</label><br>
		 <input type=checkbox name=H[7] id=H7>&nbsp;<label for=H7>6'4" (191cm) or above</label><br>
	&nbsp;<u><b> Body type</b></u>:<br>
		 <input type=checkbox name=B[1] id=B1>&nbsp;<label for=B1>Average</label><br>
		 <input type=checkbox name=B[2] id=B2>&nbsp;<label for=B2>Ample</label><br>
		 <input type=checkbox name=B[3] id=B3>&nbsp;<label for=B3>Athletic</label><br>
		 <input type=checkbox name=B[4] id=B4>&nbsp;<label for=B4>Cuddly</label><br>
		 <input type=checkbox name=B[5] id=B5>&nbsp;<label for=B5>Slim</label><br>
		 <input type=checkbox name=B[6] id=B6>&nbsp;<label for=B6>Very Cuddly</label>	 
	</td>
</tr>
<tr>
<td>
<table border="0" cellpadding="0" cellspacing="0" class="mtable">
 <tr>
  <td colspan="4"><u><b>Religion</b></u>:</td>
 </tr>	
	<tr>
	 <td><input type=checkbox name=R[1] id=R1></td>
	 <td width=50%>&nbsp;<label for=R1>Adventist</label></td>
	 <td><input type=checkbox name=R[2] id=R2></td>
	 <td width=50%>&nbsp;<label for=R2>Agnostic</label></td>
	</tr>
	<tr>
	 <td><input type=checkbox name=R[3] id=R3></td>
	 <td width=50%>&nbsp;<label for=R3>Atheist</label></td>
	 <td><input type=checkbox name=R[4] id=R4></td>
	 <td width=50%>&nbsp;<label for=R4>Baptist</label></td>
	</tr>
	<tr>
	  <td><input type=checkbox name=R[5] id=R5></td>
	  <td width=50%>&nbsp;<label for=R5>Buddhist</label></td>
	  <td><input type=checkbox name=R[6] id=R6></td>
	  <td width=50%>&nbsp;<label for=R6>Caodaism</label></td>
	 </tr>
	 <tr>
	  <td><input type=checkbox name=R[7] id=R7></td>
	  <td width=50%>&nbsp;<label for=R7>Catholic</label></td>
	  <td><input type=checkbox name=R[8] id=R8></td>
	  <td width=50%>&nbsp;<label for=R8>Christian</label></td>
	 </tr> 
	 <tr>
	   <td><input type=checkbox name=R[9] id=R9></td>
		<td width=50%>&nbsp;<label for=R9>Hindu</label></td>
		<td><input type=checkbox name=R[10] id=R10></td>
		<td width=50%>&nbsp;<label for=R10>Iskcon</label></td>
	 </tr>
	 <tr>
	   <td><input type=checkbox name=R[11] id=R11></td>
		<td width=50%>&nbsp;<label for=R11>Jainism</label></td>
		<td><input type=checkbox name=R[12] id=R12></td>
		<td width=50%>&nbsp;<label for=R12>Jewish</label></td>
	 </tr>
	 <tr>
	   <td><input type=checkbox name=R[13] id=R13></td>
		<td width=50%>&nbsp;<label for=R13>Methodist</label></td>
		<td><input type=checkbox name=R[14] id=R14></td>
		<td width=50%>&nbsp;<label for=R14>Mormon</label></td>
	 </tr>
	 <tr>
	   <td><input type=checkbox name=R[15] id=R15></td>
		<td width=50%>&nbsp;<label for=R15>Moslem</label></td>
		<td><input type=checkbox name=R[16] id=R16></td>
		<td width=50%>&nbsp;<label for=R16>Orthodox</label></td>
	 </tr>
	 <tr>
	   <td><input type=checkbox name=R[17] id=R17></td>
		<td width=50%>&nbsp;<label for=R17>Pentecostal</label></td>
		<td><input type=checkbox name=R[18] id=R18></td>
		<td width=50%>&nbsp;<label for=R18>Protestant</label></td>
	 </tr>
	 <tr>
	   <td><input type=checkbox name=R[19] id=R19></td>
		<td width=50%>&nbsp;<label for=R19>Quaker</label></td>
		<td><input type=checkbox name=R[20] id=R20></td>
		<td width=50%>&nbsp;<label for=R20>Scientology</label></td>
	 </tr>
	 <tr>
	   <td><input type=checkbox name=R[21] id=R21></td>
		<td width=50%>&nbsp;<label for=R21>Shinto</label></td>
		<td><input type=checkbox name=R[22] id=R22></td>
		<td width=50%>&nbsp;<label for=R22>Sikhism</label></td>
	 </tr>
	 <tr>
	   <td><input type=checkbox name=R[23] id=R23></td>
		<td width=50%>&nbsp;<label for=R23>Spiritual</label></td>
		<td><input type=checkbox name=R[24] id=R24></td>
		<td width=50%>&nbsp;<label for=R24>Taoism</label></td>
	 </tr>
	 <tr>
	   <td><input type=checkbox name=R[25] id=R25></td>
		<td width=50%>&nbsp;<label for=R25>Wiccan</label></td>
		<td><input type=checkbox name=R[26] id=R26></td>
		<td width=50%>&nbsp;<label for=R26>Other</label></td>
	</tr>
</table>
</td>
<td valign="top">
  <table cellspacing=0 cellpadding=0 class="mtable">
  <tr>
	  <td colspan="4">&nbsp;<u><b>Ethnicity</b></u>:</td>
	   <tr>
		 <td><input type=checkbox name=E[1] id=E1></td>
	    <td width=50%>&nbsp;<label for=E1>African</label></td>
	    <td><input type=checkbox name=E[2] id=E2></td>
	    <td width=50%>&nbsp;<label for=E2>African American</label></td>
	   </tr>
		<tr>
		 <td><input type=checkbox name=E[3] id=E3></td>
		 <td width=50%>&nbsp;<label for=E3>Asian</label></td>
		 <td><input type=checkbox name=E[4] id=E4></td>
		 <td width=50%>&nbsp;<label for=E4>Caucasian</label></td>
		</tr>
		<tr>
		 <td><input type=checkbox name=E[5] id=E5></td>
		 <td width=50%>&nbsp;<label for=E5>East Indian</label></td>
		 <td><input type=checkbox name=E[6] id=E6></td>
		 <td width=50%>&nbsp;<label for=E6>Hispanic</label></td>
		</tr> 
		<tr>
		 <td><input type=checkbox name=E[7] id=E7></td>
		 <td width=50%>&nbsp;<label for=E7>Indian</label></td>
		 <td><input type=checkbox name=E[8] id=E8></td>
		 <td width=50%>&nbsp;<label for=E8>Latino</label></td>
		</tr>
		<tr>
		 <td><input type=checkbox name=E[9] id=E9></td>
		 <td width=50%>&nbsp;<label for=E9>Mediterranean</label></td>
		 <td><input type=checkbox name=E[10] id=E10></td>
		 <td width=50%>&nbsp;<label for=E10>Middle Eastern</label></td>
		</tr>
		<tr>
		 <td><input type=checkbox name=E[11] id=E11></td>
		 <td width=50% colspan="4">&nbsp;<label for=E11>Mixed</label></td>
		</tr>
		<tr>
		  <td colspan="4">&nbsp;<u><b>Marital status</b></u></td>
		</tr>
		<tr>
		 <td><input type=checkbox name=MS[1] id=M1></td>
		 <td width=50%>&nbsp;<label for=M1>Single</label></td>
		 <td><input type=checkbox name=MS[2] id=M2></td>
		 <td width=50%>&nbsp;<label for=M2>Attached</label></td>
		</tr>
		<tr>
		 <td><input type=checkbox name=MS[3] id=M3></td>
		 <td width=50%>&nbsp;<label for=M3>Divorced</label></td>
		 <td><input type=checkbox name=MS[4] id=M4></td>
		 <td width=50%>&nbsp;<label for=M4>Married</label></td>
		</tr> 
		<tr>
		 <td><input type=checkbox name=MS[5] id=M5></td>
		 <td width=50%>&nbsp;<label for=M5>Separated</label>
		 </td><td><input type=checkbox name=MS[6] id=M6></td>
		 <td width=50%>&nbsp;<label for=M6>Widow</label></td>
		</tr>
		<tr>
		 <td colspan="4">&nbsp;<u><b>Willing to have children</b></u>:</td>
		</tr>
		<tr>
		 <td colspan="4">
		 <input name=WC type=radio value=1>&nbsp;Yes&nbsp;
		 <input name=WC type=radio value=0>&nbsp;No&nbsp;
		 <input name=WC type=radio value="3" checked>&nbsp;doesn't matter&nbsp;
		 </td>
		</tr>
	</table>
</tr>
<tr>
 <td>
  <table cellspacing=0 cellpadding=0 class="mtable">
	 <tr>
	  <td colspan="2">&nbsp;<u><b>Language</b></u>:</td>
	 </tr>
   <tr>
	  <td><input type=checkbox name=L[0] id=L0></td>
	  <td width=50%>&nbsp;<label for=L0>English</label></td>
	  <td><input type=checkbox name=L[1] id=L1></td>
	  <td width=50%>&nbsp;<label for=L1>Afrikaans</label></td>
	 </tr>
	 <tr>
	   <td><input type=checkbox name=L[2] id=L2></td>
		<td width=50%>&nbsp;<label for=L2>Arabic</label></td>
		<td><input type=checkbox name=L[3] id=L3></td>
		<td width=50%>&nbsp;<label for=L3>Belgian</label></td>
	 </tr>
	 <tr>
	  <td><input type=checkbox name=L[4] id=L4></td>
	  <td width=50%>&nbsp;<label for=L4>Bulgarian</label></td>
	  <td><input type=checkbox name=L[5] id=L5></td>
	  <td width=50%>&nbsp;<label for=L5>Burmese</label></td>
	 </tr> 
	 <tr>
	  <td><input type=checkbox name=L[6] id=L6></td>
	  <td width=50%>&nbsp;<label for=L6>Cantonese</label></td>
	  <td><input type=checkbox name=L[7] id=L7></td>
	  <td width=50%>&nbsp;<label for=L7>Croatian</label></td>
	 </tr> 
	 <tr>
	   <td><input type=checkbox name=L[8] id=L8></td>
		<td width=50%>&nbsp;<label for=L8>Danish</label></td>
		<td><input type=checkbox name=L[9] id=L9></td>
		<td width=50%>&nbsp;<label for=L9>Dutch</label></td>
	 </tr>	
	 <tr>
	   <td><input type=checkbox name=L[10] id=L10></td>
		<td width=50%>&nbsp;<label for=L10>Esperanto</label></td>
		<td><input type=checkbox name=L[11] id=L11></td>
		<td width=50%>&nbsp;<label for=L11>Estonian</label></td>
	 </tr>
	 <tr>
	  <td><input type=checkbox name=L[12] id=L12></td>
	  <td width=50%>&nbsp;<label for=L12>Finnish</label></td>
	  <td><input type=checkbox name=L[13] id=L13></td>
	  <td width=50%>&nbsp;<label for=L13>French</label></td>
	 </tr> 
	 <tr>
	  <td><input type=checkbox name=L[14] id=L14></td>
	  <td width=50%>&nbsp;<label for=L14>German</label></td>
	  <td><input type=checkbox name=L[15] id=L15></td>
	  <td width=50%>&nbsp;<label for=L15>Greek</label></td>
	 </tr> 
	 <tr>
	  <td><input type=checkbox name=L[16] id=L16></td>
	  <td width=50%>&nbsp;<label for=L16>Gujrati</label></td>
	  <td><input type=checkbox name=L[17] id=L17></td>
	  <td width=50%>&nbsp;<label for=L17>Hebrew</label></td>
	 </tr> 
	 <tr>
	  <td><input type=checkbox name=L[18] id=L18></td>
	  <td width=50%>&nbsp;<label for=L18>Hindi</label></td>
	  <td><input type=checkbox name=L[19] id=L19></td>
	  <td width=50%>&nbsp;<label for=L19>Hungarian</label></td>
	 </tr> 
	 <tr>
	   <td><input type=checkbox name=L[20] id=L20></td>
		<td width=50%>&nbsp;<label for=L20>Icelandic</label></td>
		<td><input type=checkbox name=L[21] id=L21></td>
		<td width=50%>&nbsp;<label for=L21>Indian</label></td>
	 </tr>	
	 <tr>
	  <td><input type=checkbox name=L[22] id=L22></td>
	  <td width=50%>&nbsp;<label for=L22>Indonesian</label></td>
	  <td><input type=checkbox name=L[23] id=L23></td>
	  <td width=50%>&nbsp;<label for=L23>Italian</label></td>
	 </tr>
	 <tr>
	  <td><input type=checkbox name=L[24] id=L24></td>
	  <td width=50%>&nbsp;<label for=L24>Japanese</label></td>
	  <td><input type=checkbox name=L[25] id=L25></td>
	  <td width=50%>&nbsp;<label for=L25>Korean</label></td>
	 </tr> 
	 <tr>
	  <td><input type=checkbox name=L[26] id=L26></td>
	  <td width=50%>&nbsp;<label for=L26>Latvian</label></td>
	  <td><input type=checkbox name=L[27] id=L27></td>
	  <td width=50%>&nbsp;<label for=L27>Lithuanian</label></td>
	 </tr> 
	 <tr>
	  <td><input type=checkbox name=L[28] id=L28></td>
	  <td width=50%>&nbsp;<label for=L28>Malay</label></td>
	  <td><input type=checkbox name=L[29] id=L29></td>
	  <td width=50%>&nbsp;<label for=L29>Mandarin</label></td>
	 </tr> 
	 <tr>
	  <td><input type=checkbox name=L[30] id=L30></td>
	  <td width=50%>&nbsp;<label for=L30>Marathi</label></td>
	  <td><input type=checkbox name=L[31] id=L31></td>
	  <td width=50%>&nbsp;<label for=L31>Moldovian</label></td>
	 </tr> 
	 <tr>
	  <td><input type=checkbox name=L[32] id=L32></td>
	  <td width=50%>&nbsp;<label for=L32>Nepalese</label></td>
	  <td><input type=checkbox name=L[33] id=L33></td>
	  <td width=50%>&nbsp;<label for=L33>Norwegian</label></td>
	 </tr> 
	 <tr>
	  <td><input type=checkbox name=L[34] id=L34></td>
	  <td width=50%>&nbsp;<label for=L34>Persian</label></td>
	  <td><input type=checkbox name=L[35] id=L35></td>
	  <td width=50%>&nbsp;<label for=L35>Polish</label></td>
	 </tr> 
	 <tr>
	  <td><input type=checkbox name=L[36] id=L36></td>
	  <td width=50%>&nbsp;<label for=L36>Portuguese</label></td>
	  <td><input type=checkbox name=L[37] id=L37></td>
	  <td width=50%>&nbsp;<label for=L37>Punjabi</label></td>
	 </tr> 
	 <tr>
	  <td><input type=checkbox name=L[38] id=L38></td>
	  <td width=50%>&nbsp;<label for=L38>Romanian</label></td>
	  <td><input type=checkbox name=L[39] id=L39></td>
	  <td width=50%>&nbsp;<label for=L39>Russian</label></td>
	 </tr> 
	 <tr>
	  <td><input type=checkbox name=L[40] id=L40></td>
	  <td width=50%>&nbsp;<label for=L40>Serbian</label></td>
	  <td><input type=checkbox name=L[41] id=L41></td>
	  <td width=50%>&nbsp;<label for=L41>Spanish</label></td>
	 </tr> 
	 <tr>
	  <td><input type=checkbox name=L[42] id=L42></td>
	  <td width=50%>&nbsp;<label for=L42>Swedish</label></td>
	  <td><input type=checkbox name=L[43] id=L43></td>
	  <td width=50%>&nbsp;<label for=L43>Tagalog</label></td>
	 </tr> 
	 <tr>
	  <td><input type=checkbox name=L[44] id=L44></td>
	  <td width=50%>&nbsp;<label for=L44>Taiwanese</label></td>
	  <td><input type=checkbox name=L[45] id=L45></td>
	  <td width=50%>&nbsp;<label for=L45>Tamil</label></td>
	 </tr> 
	 <tr>
	  <td><input type=checkbox name=L[46] id=L46></td>
	  <td width=50%>&nbsp;<label for=L46>Telugu</label></td>
	  <td><input type=checkbox name=L[47] id=L47></td>
	  <td width=50%>&nbsp;<label for=L47>Thai</label></td>
	 </tr> 
	 <tr>
	  <td><input type=checkbox name=L[48] id=L48></td>
	  <td width=50%>&nbsp;<label for=L48>Tongan</label></td>
	  <td><input type=checkbox name=L[49] id=L49></td>
	  <td width=50%>&nbsp;<label for=L49>Turkish</label></td>
	 </tr> 
	 <tr>
	  <td><input type=checkbox name=L[50] id=L50></td>
	  <td width=50%>&nbsp;<label for=L50>Ukrainian</label></td>
	  <td><input type=checkbox name=L[51] id=L51></td>
	  <td width=50%>&nbsp;<label for=L51>Urdu</label></td>
	 </tr> 
	 <tr>
	  <td><input type=checkbox name=L[52] id=L52></td>
	  <td width=50%>&nbsp;<label for=L52>Vietnamese</label></td>
	  <td><input type=checkbox name=L[53] id=L53></td>
	  <td width=50%>&nbsp;<label for=L53>Visayan</label></td>
	</tr>
</table> 
 </td>
 <td valign="top" colspan="2" class="mtable">&nbsp;<u><b>Education</b></u>:<br>
 <input type=checkbox name=Ed[1] id=Ed1>&nbsp;<label for=Ed1>High School graduate</label><br>
 <input type=checkbox name=Ed[2] id=Ed2>&nbsp;<label for=Ed2>Some college</label><br>
 <input type=checkbox name=Ed[3] id=Ed3>&nbsp;<label for=Ed3>College student</label><br>
 <input type=checkbox name=Ed[4] id=Ed4>&nbsp;<label for=Ed4>AA (2 years college)</label><br>
 <input type=checkbox name=Ed[5] id=Ed5>&nbsp;<label for=Ed5>BA/BS (4 years college)</label><br>
 <input type=checkbox name=Ed[6] id=Ed6>&nbsp;<label for=Ed6>Some grad school</label><br>
 <input type=checkbox name=Ed[7] id=Ed7>&nbsp;<label for=Ed7>Grad school student</label><br>
 <input type=checkbox name=Ed[8] id=Ed8>&nbsp;<label for=Ed8>MA/MS/MBA</label><br>
 <input type=checkbox name=Ed[9] id=Ed9>&nbsp;<label for=Ed9>PhD/Post doctorate</label><br>
 <input type=checkbox name=Ed[10] id=Ed10>&nbsp;<label for=Ed10>JD</label><br>
 <br>
 &nbsp;<u><b>Income</b></u>:<br>
 <input type=checkbox name=I[1] id=I1>&nbsp;<label for=I1>$10,000/year and less</label><br>
 <input type=checkbox name=I[2] id=I2>&nbsp;<label for=I2>$10,000-$30,000/year</label><br>
 <input type=checkbox name=I[3] id=I3>&nbsp;<label for=I3>$30,000-$50,000/year</label><br>
 <input type=checkbox name=I[4] id=I4>&nbsp;<label for=I4>$50,000-$70,000/year</label><br>
 <input type=checkbox name=I[5] id=I5>&nbsp;<label for=I5>$70,000/year and more</label><br>
 <br>
  <table cellspacing=0 cellpadding=0 style="font-size: 12px;">
	 <tr>
	   <td colspan="4">&nbsp;<u><b>Smoking</b></u>:</td>
	 </tr>
	 <tr>
	  <td><input type=checkbox name=S[1] id=S1></td>
	  <td width=50%>&nbsp;<label for=S1>No</label></td>
	  <td><input type=checkbox name=S[2] id=S2></td>
	  <td width=50%>&nbsp;<label for=S2>Rarely</label></td>
	 </tr>
	 <tr>
		<td><input type=checkbox name=S[3] id=S3></td>
		<td width=50%>&nbsp;<label for=S3>Often</label></td>
		<td><input type=checkbox name=S[4] id=S4></td>
		<td width=50%>&nbsp;<label for=S4>Very often</label></td>
	 </tr>
	 <tr>
	   <td colspan="4">&nbsp;<u><b>Drinking</b></u>:</td>
	 </tr>
	 <tr>
	  <td><input type=checkbox name=D[1] id=D1></td>
	  <td width=50%>&nbsp;<label for=D1>No</label></td>
	  <td><input type=checkbox name=D[2] id=D2></td>
	  <td width=50%>&nbsp;<label for=D2>Rarely</label></td>
	 </tr> 
	 <tr>
	  <td><input type=checkbox name=D[3] id=D3></td>
	  <td width=50%>&nbsp;<label for=D3>Often</label></td>
	  <td><input type=checkbox name=D[4] id=D4></td>
	  <td width=50%>&nbsp;<label for=D4>Very often</label></td>
	 </tr> 
	</table>
	</td>
 </tr>
<tr><td colspan="2" align="center">
<input type="hidden" name="page" value="1" />
<input type="checkbox" name="po" checked="" />with photos only  
<input type="submit" name="" value="Search" />
</td></tr>
</table> 
</form>

</td>
</tr>
</table>
<?php
include("inc/bottom.php"); 
?>

</body>
</html>
