$(function(){
    $("#changeClass").change(function (){
			x = $("#changeClass option:selected").text();
			url = "view/connect.php?letter=" + x;
			$.get(url, function(data){
				$("#cooking").html(data);
			})
		});
		$("#changeClass").trigger("change");
		x = true;
});
