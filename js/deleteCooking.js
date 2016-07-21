function click_delete(x){
            url = "control/deleteCooking.php?cookingId=" + x;
			$.get(url, function(data){
				if(data == true){
				    if(confirm('您確定要刪除本篇文章?')){
				        url = "control/deleteCooking_2.php?cookingId=" + x;
				        alert('刪除成功!!');
				        location.href = url;
				    }
				}else{
				    alert("您不是本篇作者");
				}
			});
        }