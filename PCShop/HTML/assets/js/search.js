$(document).ready(function(){

   $("#txtsearch").keyup(function(){
       var s = document.getElementById("check");
       var a = s.options[s.selectedIndex].value;
        k=$("#txtsearch").val();
        if(k==""){
            $(".quick-results").css("display","none");
        }else{
            $.ajax({
               url:"assets/js/xuly_search.php",
               type:"get",
               data:"keyword="+k+"&check="+a,
               async:true,
               success:function(kq){
                    $(".quick-results").html(kq);
                    $(".quick-results").css("display","block");
               } 
            });
            return false;
        }
   });
});