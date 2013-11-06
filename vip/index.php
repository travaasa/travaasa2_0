

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>KTTOM VIP Form</title>
	<link rel="STYLESHEET" type="text/css" href="https://www.freecrm.com/skins/sanfrancisco/style.css">
</head>

<body>
	<table width=90% border=0 cellpadding=2 cellspacing=2 class="publicformtable" align=center>
	<tr>
	<td colspan=3 align=left valign=top class="publicformtablehead">
	KTTOM VIP SUBMISSION 
	</td>
	</tr>
	<tr>
	<td align=left valign=top width=10><img src="https://www.freecrm.com/images/clear.gif" width=10 height=400 border=0></td>
	<td align=left valign=top>
	 
<script type="text/javascript">
	 function validateForm() {
	 	var oFrm = document.feedbackForm;
	 	var ok = true;
		var errors = new Array(0); 
		var thisName, thisVal, elm;
		for (var i=0; i < oFrm.elements.length; i++) {
			element = oFrm.elements[i];
			isError = false;
			if (element.type != 'hidden') {
				thisName = element.name; 
				isRequired = getDomAttribute(element, 'required', 'false');
				if (isRequired == 'true') {
					if (element.type=='checkbox' && !element.checked) {
						isError = true;
					} else if ((element.type=='text' || element.type=='textarea') && element.value=='') {
						isError = true;
					} else if ((element.type=='select-one' || element.type == 'select-multiple')) {
						if (element.value=='') isError = true;
					} else if (element.type=='radio') {	
						if (getRadioValue(element) == '') isError = true;
					}  	
					if (isError) {
						errors.push(getDomAttribute(element, 'message', 'No message defined'));
					}
				}
			}
		}
		//alert('asdfasfd');
// 		alert(dumpObject(messages));
		if (errors.length > 0) {
			ok = false;
			alert(errors.join('\n'));
		}
		//alert(ok);
		return ok;
		
	}
	
	function getDomAttribute(obj, attr, def) {
		if (!def) def = null;
		try {
			if (obj.hasAttribute(attr)) {
				return obj.getAttribute(attr);
			}
		} catch (e) {
			if (obj[attr] != undefined) {
				return obj[attr];
			}
		}
		return def;
	}
	
	function getRadioValue(radio) { 
		for (var r=0; r<radio.form[radio.name].length; r++) {
			if (radio.form[radio.name][r].checked == true) {
				return radio.form[radio.name][r].value;
			} 
		}
		return '';	
	}

	function dumpObject(obj) {
	var dbg = "";
	for (p in obj) {
		dbg += p + "=" + obj[p] + "\n";
	}
	return dbg;
}

</script>
<form action="https://www.freecrm.com/form.cfm" method="post" name="feedbackForm" onSubmit="return validateForm();">

<input type="hidden" name="action"  value="form">
<input type="hidden" name="sub"  value="feedback">
<input type="hidden" name="form_id"  value="6663">
<input type="hidden" name="page"  value="1">
<input type="hidden" name="row_id"  value="">

	<input type="hidden" name="id" value="6663">
	<input type="hidden" name="vc" value="FTDFAPHJRI">
	<input type="hidden" name="p" value="1">

<table width=100% border=0 cellpadding=2 cellspacing=3>
	<tr><td align=left valign=top class="datatitle">
	
	<table width=100% border=0 cellpadding=0 cellspacing=0>
	<tr><td align=left valign=top class="header">
	KTTOM VIP SUBMISSION 
	</td>
	<td align=right valign=top>
	
	<em>(Page 1 of 1)</em>
	</td></tr></table>
	
	</td></tr>
	<tr><td align=left valign=top>
	<BR>
	<span class="footnote">(Fields marked with <span style="color:red;font-weight:bold;">*</span> are required.)</span>
	</td></tr>
	
		<tr><td align=left valign=top><strong>VIP Name</strong> 
			<span style="color:red;font-weight:bold;">*</span> 
		</td></tr>
		<tr><td align=left valign=top>
	 
			
		<input type="text" name="ff_elem_36911" size="30"  value="" 
			required="true" 
			message="`VIP Name` is required"> 
		
	
			 
		</td></tr>	
		
		<tr><td align=left valign=top><strong>VIP Association/Company</strong> 
			
		</td></tr>
		<tr><td align=left valign=top>
	 
			
		<input type="text" name="ff_elem_36919" size="30"  value="" 
			required="false" 
			message="`VIP Association/Company` is required"> 
		
	
			 
		</td></tr>	
		
		<tr><td align=left valign=top><strong>VIP Email</strong> 
			<span style="color:red;font-weight:bold;">*</span> 
		</td></tr>
		<tr><td align=left valign=top>
	 
			
		<input type="text" name="ff_elem_36912" size="30"  value="" 
			required="true" 
			message="`VIP Email` is required"> 
		
	
			 
		</td></tr>	
		
		<tr><td align=left valign=top><strong>VIP Phone</strong> 
			
		</td></tr>
		<tr><td align=left valign=top>
	 
			
		<input type="text" name="ff_elem_36913" size="30"  value="" 
			required="false" 
			message="`VIP Phone` is required"> 
		
	
			 
		</td></tr>	
		
		<tr><td align=left valign=top><strong>VIP Street Address</strong> 
			<span style="color:red;font-weight:bold;">*</span> 
		</td></tr>
		<tr><td align=left valign=top>
	 
			
		<textarea name="ff_elem_36914" rows="3" cols="30"
			required="true" 
			message="`VIP Street Address` is required"></textarea> 
	
			 
		</td></tr>	
		
		<tr><td align=left valign=top><strong>City, State, Zip</strong> 
			<span style="color:red;font-weight:bold;">*</span> 
		</td></tr>
		<tr><td align=left valign=top>
	 
			
		<input type="text" name="ff_elem_36915" size="30"  value="" 
			required="true" 
			message="`City, State, Zip` is required"> 
		
	
			 
		</td></tr>	
		
		<tr><td align=left valign=top><strong>Date VIP Card Sent</strong> 
			<span style="color:red;font-weight:bold;">*</span> 
		</td></tr>
		<tr><td align=left valign=top>
	 
			<select class="select" name="ff_elem_36916_day" id="ff_elem_36916_day"><option value=1>1</option><option value=2>2</option><option value=3>3</option><option value=4 selected >4</option><option value=5>5</option><option value=6>6</option><option value=7>7</option><option value=8>8</option><option value=9>9</option><option value=10>10</option><option value=11>11</option><option value=12>12</option><option value=13>13</option><option value=14>14</option><option value=15>15</option><option value=16>16</option><option value=17>17</option><option value=18>18</option><option value=19>19</option><option value=20>20</option><option value=21>21</option><option value=22>22</option><option value=23>23</option><option value=24>24</option><option value=25>25</option><option value=26>26</option><option value=27>27</option><option value=28>28</option><option value=29>29</option><option value=30>30</option><option value=31>31</option></select> <select class="select" name="ff_elem_36916_month" id="ff_elem_36916_month"><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="September">September</option><option value="October">October</option><option value="November" selected >November</option><option value="December">December</option></select> <select class="select" name="ff_elem_36916_year" id="ff_elem_36916_year"><option value=1900>1900</option><option value=1901>1901</option><option value=1902>1902</option><option value=1903>1903</option><option value=1904>1904</option><option value=1905>1905</option><option value=1906>1906</option><option value=1907>1907</option><option value=1908>1908</option><option value=1909>1909</option><option value=1910>1910</option><option value=1911>1911</option><option value=1912>1912</option><option value=1913>1913</option><option value=1914>1914</option><option value=1915>1915</option><option value=1916>1916</option><option value=1917>1917</option><option value=1918>1918</option><option value=1919>1919</option><option value=1920>1920</option><option value=1921>1921</option><option value=1922>1922</option><option value=1923>1923</option><option value=1924>1924</option><option value=1925>1925</option><option value=1926>1926</option><option value=1927>1927</option><option value=1928>1928</option><option value=1929>1929</option><option value=1930>1930</option><option value=1931>1931</option><option value=1932>1932</option><option value=1933>1933</option><option value=1934>1934</option><option value=1935>1935</option><option value=1936>1936</option><option value=1937>1937</option><option value=1938>1938</option><option value=1939>1939</option><option value=1940>1940</option><option value=1941>1941</option><option value=1942>1942</option><option value=1943>1943</option><option value=1944>1944</option><option value=1945>1945</option><option value=1946>1946</option><option value=1947>1947</option><option value=1948>1948</option><option value=1949>1949</option><option value=1950>1950</option><option value=1951>1951</option><option value=1952>1952</option><option value=1953>1953</option><option value=1954>1954</option><option value=1955>1955</option><option value=1956>1956</option><option value=1957>1957</option><option value=1958>1958</option><option value=1959>1959</option><option value=1960>1960</option><option value=1961>1961</option><option value=1962>1962</option><option value=1963>1963</option><option value=1964>1964</option><option value=1965>1965</option><option value=1966>1966</option><option value=1967>1967</option><option value=1968>1968</option><option value=1969>1969</option><option value=1970>1970</option><option value=1971>1971</option><option value=1972>1972</option><option value=1973>1973</option><option value=1974>1974</option><option value=1975>1975</option><option value=1976>1976</option><option value=1977>1977</option><option value=1978>1978</option><option value=1979>1979</option><option value=1980>1980</option><option value=1981>1981</option><option value=1982>1982</option><option value=1983>1983</option><option value=1984>1984</option><option value=1985>1985</option><option value=1986>1986</option><option value=1987>1987</option><option value=1988>1988</option><option value=1989>1989</option><option value=1990>1990</option><option value=1991>1991</option><option value=1992>1992</option><option value=1993>1993</option><option value=1994>1994</option><option value=1995>1995</option><option value=1996>1996</option><option value=1997>1997</option><option value=1998>1998</option><option value=1999>1999</option><option value=2000>2000</option><option value=2001>2001</option><option value=2002>2002</option><option value=2003>2003</option><option value=2004>2004</option><option value=2005>2005</option><option value=2006>2006</option><option value=2007>2007</option><option value=2008>2008</option><option value=2009>2009</option><option value=2010>2010</option><option value=2011>2011</option><option value=2012>2012</option><option value=2013 selected >2013</option><option value=2014>2014</option><option value=2015>2015</option><option value=2016>2016</option><option value=2017>2017</option><option value=2018>2018</option><option value=2019>2019</option><option value=2020>2020</option></select> 
			 
		</td></tr>	
		
		<tr><td align=left valign=top><strong>Include Note</strong> 
			<span style="color:red;font-weight:bold;">*</span> 
		</td></tr>
		<tr><td align=left valign=top>
	 
			
		<input type="radio" name="ff_elem_36917" value="Yes"  required="true"  message="`Include Note` is required"> Yes  
		<input type="radio" name="ff_elem_36917" value="NO" checked> No  
		 
	
			 
		</td></tr>	
		
		<tr><td align=left valign=top><strong>VIP Note (if yes)</strong> 
			
		</td></tr>
		<tr><td align=left valign=top>
	 
			
		<textarea name="ff_elem_36920" rows="3" cols="30"
			required="false" 
			message="`VIP Note (if yes)` is required"></textarea> 
	
			 
		</td></tr>	
		
		<tr><td align=left valign=top><strong>Your Name</strong> 
			<span style="color:red;font-weight:bold;">*</span> 
		</td></tr>
		<tr><td align=left valign=top>
	 
			
		<input type="text" name="ff_elem_36918" size="30"  value="" 
			required="true" 
			message="`Your Name` is required"> 
		
	
			 
		</td></tr>	
		
	<tr><Td align=left valign=top>
		<input type="submit"  value=" Finish " class="button">
	</TD></tr>
</table> 
</form>

	</td>
	</table>
</body>
</html>
