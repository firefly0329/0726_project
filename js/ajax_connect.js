$(function(){
    $("#changeClassBtn").click(function (){
			x = $("#changeClass option:selected").text();
			url = "connect.php?letter=" + x;
			$.get(url, function(data){
				$("#cooking").html(data);
			})
		});
		$("#changeClassBtn").trigger("click");
		x = true;
});
