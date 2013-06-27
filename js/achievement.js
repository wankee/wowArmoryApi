var jq = $.noConflict();
jq(document).ready(function(){
	jq(".has_submenu").click(function(){
			//$(".submenu").slideUp();
			//$(this).next(".submenu").stop();
			jq(this).next(".submenu").slideToggle();
	})	
});

function getAchieve(index){
	jq.post("getachieve.php",	{index:index},
			function(data,status){
				//data=urldecode(data);
				jq("#content").text(data);
				//var  dataObj=JSON.parse(data);
				var  dataObj=eval("("+data+")");
				//alert(dataObj.length);
				jq.each(dataObj,function(i,data){ 
				//	if(idx==0){ 
				//	return true; 
				//	} 
				//	alert(dataObj.length);
				//	alert(i+"\n"+data['title']); 
				})
			}
	);
}
