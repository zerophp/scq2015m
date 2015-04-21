<a href="/users/insert">Insert</a>
<table border=1>
       <?php 
        foreach($users as $id => $user)
        {
            ?>
            <tr>
           <?php 
            $user = explode(",", $user);
          
            foreach ($user as $value)
            {?>               
                <td><?php echo $value;?></td>
                <?php 
            }
           ?>
            <td>
            <a href="/users/update/id/<?=$id;?>">Update</a> | 
            <a href="/users/delete/id/<?=$id;?>">Delete</a>
            </tr>
            <?php 
        }
        ?>
</table>