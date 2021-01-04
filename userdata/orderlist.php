<?php
require('navbar.php')?>
<?php 

require('function.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
    $type=get_safe_value($con,$_GET['type']);
    if($type=='status'){
        $operation=get_safe_value($con,$_GET['operation']);
        $oid=get_safe_value($con,$_GET['oid']);
        if($operation=='active'){
            $status='1';
        }else{
            $status='0';
        }
        $update_status="UPDATE `order` SET `status`='$status' WHERE oid='$oid'";
       
        mysqli_query($con,$update_status);
    }

    if($type=='delete'){  
        $oid=get_safe_value($con,$_GET['oid']);
    
        $delete_status="DELETE from `order` WHERE oid='$oid'";
       
        mysqli_query($con,$delete_status);
    }

}

$sqli = "SELECT * FROM `order`";
$runn = mysqli_query($con,$sqli);
  
?>


  
   <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">id</th>
        <th scope="col">prodect</th>
        <th scope="col">quantity</th>
        <th scope="col">size</th>
        <th scope="col">photo</th>
        
        
        <th scope="col">price</th>
        </tr>
    </thead>
    <tbody>
        
        <?php $i=1;
      
        while($ro=mysqli_fetch_array($runn)){?>
    <tr><th scope="row"><?php echo $i;
    $i++; ?>
 </th>
        
        <td><?php echo $ro['oid']?></td>

        <td><?php echo $ro['product']?></td>
        <td><?php echo $ro['quantity']?></td>
        <td><?php echo $ro['size']?></td>
        <td><img src="<?php echo $ro['photo']; ?>"width="200px" height="200px"> </td>
        <td><?php echo $ro['prize']?></td>
        <td><?php if($ro['status']==1)
        {
             echo "&nbsp&nbsp&nbsp&nbsp<a href='?type=status&operation=deactive&oid=".$ro['oid']."'>Active</a>";
        }
        else
        {
            echo "&nbsp&nbsp&nbsp&nbsp<a href='?type=status&operation=active&oid=".$ro['oid']."'>Deactive</a>";
        }
          echo "&nbsp&nbsp<a href='?type=delete&oid=".$ro['oid']."'>Delete</a>";
        ?></td>
        
        </tr>
        <?php } ?>
</tbody>
   </table>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>