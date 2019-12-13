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
$(document).ready(function(){ 
  $("#form-cart").submit(function(e){
    $.get('/checklogin',
      function(data)
   {   if (data==1) {
         $('#login-modal').modal('show');
       }
       else{
         var r=confirm("Are you sure to want to pay ?");
         if (r==true) {
           window.location.href="/checkout";
         }        
       }
   }

   );
    e.preventDefault();
  });
});
// $( document ).ready(function() {
//   //  $.('#form-cart').submit(function(){
//   //     alert('adsad');
//   //  $.get('/checklogin',
//   //     function(data)
//   //  {   if (data==1) {
//   //        $('#login-modal').modal('show');
//   //      }
//   //      else{
//   //        var r=confirm("Are you sure to want to pay ?");
//   //        if (r==true) {
//   //          window.location.href="/checkout";
//   //        }        
//   //      }
//   //  }
//   //  );
//   // });
// });

// function check_out(){
//    $.get('/checklogin',
//       function(data)
//    {   if (data==1) {
//          $('#login-modal').modal('show');
//        }
//        else{
//          var r=confirm("Are you sure to want to pay ?");
//          if (r==true) {
//            window.location.href="/checkout";
//          }        
//        }
//    }
//    );
// }