<html>
<title></title>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<!-- <link rel="stylesheet" href="webroot/css/bootstrap.min.css"> -->
<body>
<h3><center><?= __('BOOK') ?></center></h3>
   <?php 
//    echo $this->Form->create('Book',array('action'=>'search'));
echo $this->Form->create('Book', array(
    'url'   => array(
         'controller' => 'Books','action' => 'search'
    )
    ));
   ?>
   
   <?php
    echo $this->Form->input('title');
    echo $this->Form->input('description');
    echo $this->Form->submit('Search');
   ?>

   <?php echo $this->Form->end();?>
   <?php $this->Paginator->options(array('url' => $this->passedArgs)); ?>
   <!--Hiển thị dữ liệu sau khi tìm kiếm-->
   <?php if(!empty($posts)){?>
   <table>
    <tr>
    <th><?php echo $this->Paginator->sort("id","Id");?></th>
    <th><?php echo $this->Paginator->sort("title","Title");?> </th>
    <th><?php echo $this->Paginator->sort("description","Description");?></th>
    </tr>
   <?php
    foreach($posts as $item){
     echo "<tr>";
     echo "<td>".$item['Book']['id']."</td>";
     echo "<td>".$item['Book']['title']."</td>";
     echo "<td>".$item['Book']['description']."</td>";
     echo "</tr>";
    }
   ?>
   </table>
 <?php
   echo $this->Paginator->prev('« Previous ', null, null, array('class' => 'disabled'));
   echo " | ".$this->Paginator->numbers()." | ";
   echo $this->Paginator->next(' Next »', null, null, array('class' => 'disabled'));
 } ?>
 
</body>
</html>