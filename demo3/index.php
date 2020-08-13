<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<?php
    $link = new mysqli ('localhost', 'user', '123', 'demo') or die("Fail!");
    mysqli_select_db($link,"demo") or die(mysql_error());
?>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
    </tr>
  </thead>

<?php
  $query = "SELECT * FROM books";
  $result = mysqli_query($link, $query);
  if(mysqli_num_rows($result) > 0){
    $i = 0;
  while($row = mysqli_fetch_array($result)){
    $ID= $row['id'];
    $Title = $row['title'];
    $Des = $row['description'];
      ?>
      <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["title"]; ?></td>
        <td><?php echo $row["description"]; ?></td>
      </tr>
      <?php
  }
}
?>

<table width="600">
<form class="form-horizontal" id="form_input">
<tr>
<td><button type="submit">Load</button></td>
</tr>
</form>
</table>

<script type="text/javascript">
//     //get
//    $(document).ready(function() {
//         $('#load-du-lieu').click(function(e) {
//             e.preventDefault();
//             $.get('vidu1.php', function(ketqua) {
//                 $('#noidung').html(ketqua);
//                 $('#noidung').html($('#chuoi-can-lay').html());
//             });
            
//         });
//     });

$(document).ready(function()
{  
    //khai báo nút submit form
    var submit   = $("button[type='submit']");
     
    //khi thực hiện kích vào nút Login
    submit.click(function()
    {    
        // //lay tat ca du lieu trong form login
        //     var data = $('form#form_login').serialize();
        // //su dung ham $.ajax()
        $.ajax({
        type : 'POST', //kiểu post
        url  : 'submit.php', //gửi dữ liệu sang trang submit.php
        data : data,
       // contentType: "application/json",
        success :  function(data)
               {                       
                    var obj = JSON.parse(data);
                    // obj.age;
                    obj.id;
                    obj.title;
                    obj.description;
               }
        });
        return false;
    });
});
    </script>

</html>