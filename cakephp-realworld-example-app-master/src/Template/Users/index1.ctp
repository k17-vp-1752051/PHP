<html>
<script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
<?php
// if($data==NULL){
//  echo "<h2>Dada Empty</h2>";
// }
// else{
//  echo "<table>
//  <tr>
//    <td>Id</td>
//    <td>Username</td>
//  </tr>";
//  foreach($data as $item){
//    echo "<tr>";
//    echo "<td>".$item["id"]."</td>";
//    echo "<td>".$item["username"]."</td>";
//    echo "</tr>";
//  }
// }
?>

       
        <div id="result2">JSON</div>
        
        <br/>
       
        <input type="button" name="clickme" id="json-click" value="Get List By Json"/>
        
        <script language="javascript">
            $('#json-click').click(function()
            {
                $.ajax({
                    url : 'ApiController.php',
                    type : 'get',
                    dataType : 'json',
                    success : function (result){
                         
                        var html = '';
                        html += '<table border="1" cellspacing="0" cellpadding="10">';
                        html += '<tr>';
                           html += '<td>';
                                html += 'Username';
                                html += '</td>';
                                html += '<td>';
                                html += 'Email';
                           html += '</td>';
                        html += '<tr>';
                         
                        // Kết quả là một object json
                        // Nên ta sẽ loop result
                        $.each (result, function (key, item){
                            html +=  '<tr>';
                                html +=  '<td>';
                                    html +=  item['username'];
                                html +=  '</td>';
                                html +=  '<td>';
                                    html +=  item['email'];
                                html +=  '</td>';
                            html +=  '<tr>';
                        });
                         
                        html +=  '</table>';
                         
                        $('#result2').html(html);
                    }
                });
            });
        </script>
</html>