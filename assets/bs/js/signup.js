	var no = 0;
	function photos(){
    var filename = document.getElementById("photo").value;
    if(filename.length==0)
      document.getElementById("pwd").disabled = true;
    else
      document.getElementById("pwd").disabled = false;
    console.log("j"+filename+"j");
  }
	function pass()
	{
		text = document.getElementById("pwd").value; 
		var test = /[0-9!]/.test(text);
		if(test == false && text != "")
		{
			document.getElementById("fname").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("fname").disabled = true;
			alert("password is not valid!");
		}
	}
  function hob() {
    var checkboxes = document.getElementsByName('hobb');
          var vals = "";
          for (var i=0, n=checkboxes.length;i<n;i++)
          if (checkboxes[i].checked)
          {
            if(checkboxes[i].value!="others")
            {
              vals += checkboxes[i].value+",";
            }
            else
            {
              vals += document.getElementById("extrah").value;
            }
          }
         //alert(vals);
         //heckboxes.value = vals;
         var t = document.getElementById("ho");
         t.value = vals;
  }

     function other(){
      //alert("othes is checked");
      var h = document.getElementById("oth");
     	var show = document.getElementById("extrah");
     	show.style.display = h.checked ? "block" : "none";
     }
	function fnames() {
		text = document.getElementById("fname").value; 
		var test = /[0-9!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("lname").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("lname").disabled = true;
			alert("First Name is not valid!");
		}
	}
	function lnames() {
		text = document.getElementById("lname").value; 
		var test = /[0-9!]/.test(text);
		if(test == false){
			document.getElementById("branch").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("branch").disabled = true;
			console.log("False");
		}
	}
	function branchs() {
		text = document.getElementById("branch").value; 
		var test = /^[^0-9]/.test(text);
		if(test == true){
			document.getElementById("yearofjoin").disabled = false;
			var year = document.getElementById("yearofjoin").value;
			var last = year.substring(2, 4); 
			var branch = document.getElementById("branch").value;
			document.getElementById("roll").innerHTML = "";
			for(i=1;i<=150;i++){
				str = document.getElementById("roll").innerHTML;
				if(i == 1)
					document.getElementById("roll").innerHTML = str+"<option selected>"+last+"/"+branch+"/"+i+"</option>";
				else
					document.getElementById("roll").innerHTML = str+"<option>"+last+"/"+branch+"/"+i+"</option>";
			}
			console.log("True");
		}
		else{
			document.getElementById("yearofjoin").disabled = true;
			console.log("False");
		}
	}
	function yearofjoins() {
		text = document.getElementById("yearofjoin").value; 
		var test = /[0-9]/.test(text);
		if(test == true){
			document.getElementById("roll").disabled = false;
			var year = document.getElementById("yearofjoin").value;
			var last = year.substring(2, 4); 
			var branch = document.getElementById("branch").value;
			document.getElementById("roll").innerHTML = "";
			for(i=1;i<=150;i++){
				str = document.getElementById("roll").innerHTML;
				document.getElementById("roll").innerHTML = str+"<option>"+last+"/"+branch+"/"+i+"</option>";
			}
			console.log("Truegg");
		}
		else{
			document.getElementById("roll").disabled = true;
			console.log("Falsegg");
		}
	}
	function rolls() {
		document.getElementById("dob").disabled = false;
	}
	function dobs() {
		document.getElementById("reg").disabled = false;
		
	}
	function regs() {
		text = document.getElementById("reg").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("father").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("father").disabled = true;
			alert(" Only digits allowed");
		}
		
		}
		
		function fathernames() {
		text = document.getElementById("father").value; 
		var test = /[0-9!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("mother").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("mother").disabled = true;
			alert("Father Name is not valid!");
		}
	}
	function mothernames() {
		text = document.getElementById("mother").value; 
		var test = /[0-9!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("paddr").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("paddr").disabled = true;
			alert("Mother name is not valid!");
		}
	}
		function p_addr() {
		text = document.getElementById("paddr").value; 
		var test = /[0-9!]/.test(text);
		if(text != ""){
			document.getElementById("C_addr").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("C_addr").disabled = true;
			alert("Permanent Address is not valid!");
		}
	}
		function c_addr() {
		text = document.getElementById("C_addr").value; 
		var test = /[0-9!]/.test(text);
		if(text != ""){
			document.getElementById("email").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("email").disabled = true;
			alert("Correspondence Address is not valid!");
		}
	}
	function emails(){
		text = document.getElementById("email").value; 
		var test1 = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(text);
		if(test1 == true){
			document.getElementById("phone").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("phone").disabled = true;
		}
	}
	/*function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}*/
 /*function checkEmail() {

    var email = document.getElementById('txtEmail');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
	 }

	function phone() {
		text = document.getElementById("phone").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("board").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("board").disabled = true;
			alert("Phone number is not valid!");
			
		}
	}*/
	/*function email() {
		text = document.getElementById("email").value; 
		var test = /[0-9!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("phone_num").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("phone_num").disabled = true;
			alert("email Address is not valid!");
		}
	}*/

	/*function phones() {
		document.getElementById("C_board").disabled=false;
			console.log("True");
	}*/
	function phones() {
		text = document.getElementById("phone").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("C_board").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("C_board").disabled = true;
			alert(" Only digits allowed");
		}
	}
	/*function board() {
		document.getElementById("school1").disabled = false;
		
		}*/
	function board() {
		text = document.getElementById("C_board").value; 
		var test = /[0-9!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("school1").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("school1").disabled = true;
			alert(" Only Alphabets allowed");
		}
	}
		/*function school() {
		document.getElementById("marks10").disabled = false;
		
		}*/
	function school() {
		text = document.getElementById("school1").value; 
		var test = /[0-9!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("school1y").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("school1y").disabled = true;
			alert(" Only Alphabets allowed");
		}
	}
	function schooly() {
		text = document.getElementById("school1y").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("marks10").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("marks10").disabled = true;
			alert(" Only Numbers allowed");
		}
	}
	/*function marks() {
		document.getElementById("fmarks").disabled = false;
		
		}*/	
	function marks() {
		text = document.getElementById("marks10").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("fmarks").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("fmarks").disabled = true;
			alert(" Only digits allowed");
		}
	}
	function full() {
		text = document.getElementById("fmarks").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("perct").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("perct").disabled = true;
			alert(" Only digits allowed");
		}
	}
	function cent() {
		text = document.getElementById("perct").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("board12").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("board12").disabled = true;
			alert(" Only digits allowed");
		}
	}
	function inter() {
		text = document.getElementById("board12").value; 
		var test = /[0-9!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("interschool").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("interschool").disabled = true;
			alert(" No digits allowed");
		}
	}
	function schoolname() {
		text = document.getElementById("interschool").value; 
		var test = /[0-9!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("interschooly").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("interschooly").disabled = true;
			alert(" No digits allowed");
		}
	}
	function schoolyr() {
		text = document.getElementById("interschooly").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("marks12").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("marks12").disabled = true;
			alert(" Only digits allowed");
		}
	}
	function th12() {
		text = document.getElementById("marks12").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("fmarks12").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("fmarks12").disabled = true;
			alert(" Only digits allowed");
		}
	}
	function full12() {
		text = document.getElementById("fmarks12").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("perc12").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("perc12").disabled = true;
			alert(" Only digits allowed");
		}
	}
	function percent() {
		text = document.getElementById("perc12").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("ds1").disabled = false;
			document.getElementById("ds2").disabled = false;
			document.getElementById("g1").disabled = false;
			document.getElementById("g2").disabled = false;
			document.getElementById("id1").disabled = false;
			document.getElementById("id2").disabled = false;
			document.getElementById("id3").disabled = false;
			document.getElementById("id4").disabled = false;
			document.getElementById("id5").disabled = false;
			document.getElementById("id6").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("ds1").disabled = true;
			document.getElementById("ds2").disabled = true;
			document.getElementById("g1").disabled = false;
			document.getElementById("g2").disabled = false;
			document.getElementById("id1").disabled = true;
			document.getElementById("id2").disabled = true;
			document.getElementById("id3").disabled = true;
			document.getElementById("id4").disabled = true;
			document.getElementById("id5").disabled = true;
			document.getElementById("id6").disabled = true;
			alert(" Only digits allowed");
		}
	}
function hg() {
		hob();
		text = document.getElementById("h").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("w").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("w").disabled = true;
			alert(" Only digits allowed");
		}
	}
	function wg() {
		text = document.getElementById("w").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("pr").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("pr").disabled = true;
			alert(" Only digits allowed");
		}
	}
	function pwr() {
		text = document.getElementById("pr").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("pl").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("pl").disabled = true;
			alert(" Only digits allowed");
		}
	}
	function pwl() {
		text = document.getElementById("pl").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("num1").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("num1").disabled = true;
			alert(" Only digits allowed");
		}
	}
	function sem1() {
		text = document.getElementById("num1").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("num2").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("num2").disabled = true;
			alert(" Only digits allowed");
		}
	}
	function sem2() {
		text = document.getElementById("num2").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("num3").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("num3").disabled = true;
			alert(" Only digits allowed");
		}
	}
	function sem3() {
		text = document.getElementById("num3").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("num4").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("num4").disabled = true;
			alert(" Only digits allowed");
		}
	}
	function sem4() {
		text = document.getElementById("num4").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("num5").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("num5").disabled = true;
			alert(" Only digits allowed");
		}
	}
	function sem5() {
		text = document.getElementById("num5").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("num6").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("num6").disabled = true;
			alert(" Only digits allowed");
		}
	}
	function sem6() {
		text = document.getElementById("num6").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("num7").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("num7").disabled = true;
			alert(" Only digits allowed");
		}
	}
	function sem7() {
		text = document.getElementById("num7").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("num8").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("num8").disabled = true;
			alert(" Only digits allowed");
		}
	}
	function sem8() {
		text = document.getElementById("num8").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("num9").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("num9").disabled = true;
			alert(" Only digits allowed");
		}
	}
	function sem9() {
		text = document.getElementById("num9").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("num10").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("num10").disabled = true;
			alert(" Only digits allowed");
		}
	}
	function sem10() {
		text = document.getElementById("num10").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("num11").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("num11").disabled = true;
			alert(" Only digits allowed");
		}
	}
	function sem11() {
		text = document.getElementById("num11").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("num12").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("num12").disabled = true;
			alert(" Only digits allowed");
		}
	}
	function sem12() {
		text = document.getElementById("num12").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("num13").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("num13").disabled = true;
			alert(" Only digits allowed");
		}
	}
	function sem13() {
		text = document.getElementById("num13").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("num14").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("num14").disabled = true;
			alert(" Only digits allowed");
		}
	}
	function sem14() {
		text = document.getElementById("num14").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("num15").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("num15").disabled = true;
			alert(" Only digits allowed");
		}
	}
	function sem15() {
		text = document.getElementById("num15").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("num16").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("num16").disabled = true;
			alert(" Only digits allowed");
		}
	}
	function sem16() {
		text = document.getElementById("num16").value; 
		var test = /[a-zA-Z!]/.test(text);
		if(test == false && text != ""){
			document.getElementById("submit").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("submit").disabled = true;
			alert(" Only digits allowed");
		}
	}