<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    </head>
    <body>
    <form method="post" id="form_login">
    <div id="content">
    <table>
        <tr>
            <td>
                <input type="text" name="username" id="username" placeholder="Tài khoản" />
            </td>
        </tr>
        <tr>
            <td>
                 <input type="text" name="password" id="password" placeholder="Mật khẩu" />
            </td>
        </tr>
        <tr>
            <td align="center">
                 <button id="button_login" type="submit">Login</button>
            </td>
        </tr>
    </table>
    </div>
</form>

<script type="text/javascript">
$(document).ready(function()
{  
    //khai báo nút submit form
    var submit   = $("button[type='submit']");
     
    //khi thực hiện kích vào nút Login
    submit.click(function()
    {
        //khai báo các biến
        var username = $("input[name='username']").val(); //lấy giá trị input tài khoản
        var password = $("input[name='password']").val(); //lấy giá trị input mật khẩu
         
        //kiem tra xem da nhap tai khoan chua
        if(username == ''){
            alert('Vui lòng nhập tài khoản');
            return false;
        }
         
        //kiem tra xem da nhap mat khau chua
        if(password == ''){
            alert('Vui lòng nhập mật khẩu');
            return false;
        }
         
        //lay tat ca du lieu trong form login
        var data = $('form#form_login').serialize();
        //su dung ham $.ajax()
        $.ajax({
        type : 'POST', //kiểu post
        url  : 'submit.php', //gửi dữ liệu sang trang submit.php
        data : data,
       // contentType: "application/json",
        success :  function(data)
               {                       
                    // if(data == 'false')
                    // {
                    //     alert('Sai tên hoặc mật khẩu');
                    // }else{
                    //     $('#content').html(data);
                    // }

                    var obj = JSON.parse(data);
                    obj.age;
               }
        });
        return false;
    });
});
</script>


    </body>
</html>