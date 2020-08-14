<h1>Articles</h1>
<hr>
<button>Load more</button>
<hr>

<table id="idTable">
    <tr>
        <th>Username</th>
        <th>Email</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

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