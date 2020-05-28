//	DATA VALIDATION
//==================================

	function isEmpty(obj) {
		
		var len = obj.value.length;
		var fl_empty = true;
		
		for(i = 0; i < len; i++) {
			if (obj.value.substring(i,i + 1) != " ")
				fl_empty = false;
			if (!fl_empty)
				break;
		}
		
		if (fl_empty) {
			obj.focus();
			obj.select();
			alert("All fields marked with (*) can't be empty!");
			return true;
		}

		return false;

	}

//-------------------------------------------------


function isSelectAnyOne(obj,obj1) {
		        if(obj.selectedIndex != 0 && obj1.selectedIndex != 0)
			 {      
			alert("Select either Supplier Name or Propritor Name!!!");
			obj.focus();
			return true;
			}
		else
			return false;
	}
	
//-------------------------------------------------


function isSelected(obj) {
		if ( obj.value == "Select One" || obj.selectedIndex == 0 ) {
			
			alert("Please, select an item in the list!");
                                       obj.focus();
			return true;
		}
		else
			return false;
	}

//--------------------------------------------------------------------

	function isChecked(obj) {

		var ok = false;
			if ( obj.checked )
				return true;
			else {
				alert("The field must be selected!");
				//obj.focus();
				return false;
			}
	}

//--------------------------------------------------------------------

	function isEmail(obj) {
		
		var len = obj.value.length;
		var str = " ~!#='`/$^&*()+\\|?><:;,\"{}[]";
		var char_tmp ="";
		
		for(i=0;i<len;i++) {
			char_tmp = obj.value.substring(i,i + 1);  
			if ( str.indexOf(char_tmp) != -1 )   {
				obj.focus();
				obj.select();
				alert("Symbol: " + char_tmp + " is not permitted for e-mail address!");
				return false;
			}
		}
		
			if (obj.value.indexOf("@", 0)>=0)
	 			return true;
			else {
				obj.focus();
				obj.select();
				alert("Please enter a valid e-mail address!");
				return false;
			}

		return true;
			
	}

//--------------------------------------------------------------------

	function isPhone(obj) {
	
		var len = obj.value.length;
		var str = "`~!@=$%^&*_|\\}{[]:;\"'<,>?/";
		var char_tmp ="";
		
		for(i=0;i<len;i++) {
			char_tmp = obj.value.substring(i,i + 1);  
			if ( str.indexOf(char_tmp) != -1 )   {
				obj.focus();
				obj.select();
				alert("Symbol: " + char_tmp + " is not permitted for phone number!");
				return false;
			}
		}
		
		return true;

	}

//--------------------------------------------------------------------

	function isNumber(obj) {
	
		var len = obj.value.length;
		var str = "0123456789-/";
		var char_tmp ="";
		var count=0;
	
		for(i=0;i<len;i++) {
			char_tmp = obj.value.substring(i,i + 1);  
			if ( str.indexOf(char_tmp) != -1 )   
				count++;
		}
		
		if ( count == len )
			return true;
		else {
			obj.focus();
			obj.select();
			alert("Field must be numeric!");
			return false;
		}
	}


	function isPhoneNumber(obj) {
	
		var len = obj.value.length;
		var str = "0123456789-+.";
		var char_tmp ="";
		var count=0;
	
		for(i=0;i<len;i++) {
			char_tmp = obj.value.substring(i,i + 1);  
			if ( str.indexOf(char_tmp) != -1 )   
				count++;
		}
		
		if ( count == len )
			return true;
		else {
			obj.focus();
			obj.select();
			alert("Phone number may contain only numeric characters!");
			return false;
		}
	}



//--------------------------------------------------------------------

function chk_pass()
 {

   if ((document.cp.password.value) !=  (document.cp.repassword.value))
      {
        document.cp.password.select();
        alert("password not same in confirm password box");
        return true;
      
       }else
          {               
               return false;
           }

}

//--------------------------------------------------------------------

	function isRadioEmpty(obj) {

		var ok = false;
		var len = obj.length;
		for (i = 0; i < len; i++) {
			if (obj[i].checked) 
				{ ok= true; }	
		}
		if (!ok) {
			obj[0].focus();
			alert("You must select any one option!");
			return true;
		}
		return false;

	}

//-----------------------------------------------------------------

//	FIELD ENABLING/DISABLING
//=======================================================================

	var actColor = "#ffffff";
	var inactColor = "#cccccc";
	
	function disableText(obj) {
		obj.value = "";
		obj.disabled = true;
		obj.className = "controlgrey";
		return true;
	}

	function enableText(obj) {
		obj.disabled = false;
		obj.className = "control";
		return true;
	}

