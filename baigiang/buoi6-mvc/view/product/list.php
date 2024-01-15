

<table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>gia</th>
    </tr>
    <?php 
        foreach($product as $key => $value){       
        ?>
    <tr>
      
        <td><?php echo $value['id'] ?></td>
        <td><?php echo $value['name'] ?></td>
        <td><?php echo $value['price'] ?></td>
        
    </tr>
    <?php } ?>

</table>