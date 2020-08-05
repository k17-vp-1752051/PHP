<?php
if($data==NULL){
 echo "<h2>Dada Empty</h2>";
}
else{
 echo "<table>
 <tr>
   <td>id</td>
   <td>Name</td>
   <td>Description</td>
 </tr>";
 foreach($data as $item){
   echo "<tr>";
   echo "<td>".$item['Book']['id']."</td>";
   echo "<td>".$item['Book']['name']."</td>";
   echo "<td>".$item['Book']['description']."</td>";
   echo "</tr>";
 }
}
?>