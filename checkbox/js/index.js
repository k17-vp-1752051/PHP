$('document').ready(function(){
    //lua chọn hoac bo lua chon cac checkbox class='checkbox'
    $("#select_checkbox").click(function(){
         if ($(this).is(':checked')) {
                $(".checkbox").attr("checked", true);
         } else {
                $(".checkbox").attr("checked", false);
         }
    })
})

{/* lay cac gia tri dc chon */}

$('document').ready(function(){
            //lay cac gia tri cua checkbox duoc lua chon
            $("button#delete_all").click(function(){
                //tao bien luu mang cac gia tri cua checkbox duoc chon
                var ids = new Array();
                $(this).parent('div#checkall').find('[name="ids[]"]:checked').each(function()
                {
                    ids.push($(this).val());
                });
                 
                ids = $.unique(ids);
                if(confirm("Bạn chắc chắn muốn xóa"))
                {
                    alert(ids);
                }
            })
        })