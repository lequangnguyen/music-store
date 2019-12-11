function update_cart(rowId,qty){
	$.get('/cart/update/'+rowId+'/'+qty,
		function(data)
	{
         if (data==1)
         {
         	location.reload();
         }
         else{
         	alert("Cập nhật thất bại");
         }
	}
		);
}
function delete_cart(name){
   return confirm("Bạn có muốn xóa sản phẩm "+name+" trong giỏ hàng");
}