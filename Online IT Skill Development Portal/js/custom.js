$(document).ready(function(){

	$(function(){
		$("#playlist li").on("click", function(){
			$('#videoarea').attr('src',$(this).attr('title'));
			$('#text').html($(this).attr('role'));
		});
		$("#copy").on("click", function(){
			navigator.clipboard.writeText($('#text').html());
		});
		$("#btn1").on("click",function(){
			$("#fgh11").toggleClass("collapse");
			$(".vid-content").toggleClass("nav-vmt");
		});
	});
});