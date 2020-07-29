<html>
<head>
	<title>Checkbox</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/index.js"></script>
</head>
<body>
	<?php
		$connect = mysqli_connect('localhost','user','123','demo');
    mysqli_set_charset($connect,"utf8");
    $query = "SELECT * FROM class ORDER BY ClassID DESC";
    $result = mysqli_query($connect, $query);
	?>
 
 
	<div class="container">
		<div class="row">
		
			<div class="col-md-6 div col-md-offset-3">
      <div class="alert alert-warning">
					<h1><center>CLASS</center></h1>
				</div>
      <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ClassID</th>
      <th scope="col">ClassName</th>
    </tr>
  </thead>

  <?php
  while($row = mysqli_fetch_array($result)){
      ?>
      <tr>
        <td><?php echo $row["ClassID"]; ?></td>
        <td><?php echo $row["ClassName"]; ?></td>
        <td><input type="checkbox" id="ids_<?php echo $row["ClassID"]; ?>" class="checkbox" value=""/><br/><a href="delete.php?id=$ids?>"></a></td>
        
      </tr>
      <?php
  }
  ?>

  </table>
  <input type="checkbox" id="select_checkbox" name="select_checkbox" /> check/uncheck all
           
            <button onclick="aaa(this)">Delete</button>
				</div>
			</div>

</body>
</html>

<script>
function aaa(){
  var delete_checkbox = document.getElementById('ids');
 
  var txt;
  var r = confirm("Bạn chắc chắn muốn xóa");
  if (r == false) {
      return;
  }
  var sList = '';
  var arrCheck=[];
  $('input[type=checkbox]').each(function () {
    if(this.checked ){
      sList += this.id;
      var id = this.id;
      var splitArray = new Array();
      var regex = /_/;
      splitArray = id.split(regex);
      arrCheck.push("'"+splitArray[1]+"'")
    }
});
if(arrCheck.length > 0){
var data = {
  test: arrCheck
};
$.ajax({
        type : 'POST', //kiểu post
        url  : 'delete.php', //gửi dữ liệu sang trang submit.php
        data : { test: JSON.stringify( data ) },
       // contentType: "application/json",
        success :  function(data)
               {                      

                    // var obj = JSON.parse(data);
                    if(data.status){
                      location.reload();
                    }

               }
        });

    }
}

</script>
