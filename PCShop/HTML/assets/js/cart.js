$(document).ready(function(){
   $(".quantity").change(function(){
        slm=$(this).val();
        masp=$(this).attr("data-masp");
        $.ajax({
            url:"assets/js/xuly_cart.php",
            type:"post",
            data:"slm="+slm+"&masp="+masp,
            async:true,
            success:function(kq){
                location.reload();
            }
        });
   }); 
});