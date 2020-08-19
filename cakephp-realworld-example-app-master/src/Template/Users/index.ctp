<h1>Users</h1>
<hr>
    <button id = "load" type="button" onclick="loadDoc()">Load more ...</button>
<hr>

<table id="idTable">
    <tr>
        <th>Username</th>
        <th>Email</th>
    </tr>
    <?php foreach ($datas as $d): ?>
    <tr>
        <td>
            <?= $d->username ?>
        </td>
        <td>
            <?= $d->email ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
    <!-- Here is where we iterate through our $articles query object, printing out article info -->

<script>
var pageNum = 1;
function loadDoc() {
    pageNum++;
    
    $.ajax({
        type : 'GET', 
        url  : 'http://localhost:8765/user/search/' + pageNum,
        
        success :  function(result)
               {
                    var datas = JSON.parse(result);
                    var table = document.getElementById("idTable");
                    datas.forEach(e => {
                        var row = table.insertRow(-1);
                        var cell1 = row.insertCell(0);
                        var cell2 = row.insertCell(1);
                        cell1.innerHTML = e.username;
                        cell2.innerHTML = e.email;
                    });
               }
        });
}
</script>

