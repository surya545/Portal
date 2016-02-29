// JavaScript Document
$(document).ready(function() {
	   var date = new Date();
            date.setDate(date.getDate()-1);
		    $('.datepicker').datepicker({startDate:false,format:'yyyy-mm-dd',autoclose: true,orientation: "auto",todayHighlight:true}); 
		
	   $("#register").on("click",function(e){
		   e.preventDefault();
	   });
});