$(function(){
	let start =0;
	let end = $(".num").html();
	let speed =50;

	setInterval(function(){
		if(start<end){
			start++;
		}
		$(".num").html(start);
	},speed);
})



