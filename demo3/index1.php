<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <script type="text/javascript" src="jquery.js"></script>
</head>
<body>
    <div>
        <a href="#" id="load-du-lieu">Load dữ liệu</a>
    </div>
    <div id="noidung">
        
    </div>
    <script type="text/javascript">
    //get
   $(document).ready(function() {
        $('#load-du-lieu').click(function(e) {
            e.preventDefault();
            $.get('vidu1.php', function(ketqua) {
                $('#noidung').html(ketqua);
                $('#noidung').html($('#chuoi-can-lay').html());
            });
            
        });
    });
    </script>
</body>
</html>