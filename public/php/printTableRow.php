<?php 
    // LOOP TILL END OF DATA
    while($rows=$result->fetch_assoc())
    {
?> 

        <head><link rel="stylesheet" href="public/css/history.css"></head>
        <tr id="input">
            <td id="ID"><?php echo $rows['ID'];?></td>
            <td id="date"><?php echo $rows['TIMEDATE'];?></td>

            <?php echo $rows['ACTION'] == 0 ? 
                        '<td id="negative" class="type">-</td>' : 
                        '<td id="positive" class="type">+</td>';
            ?>
            
            
            <td id="amount"><?php echo $rows['AMOUNT'];?> лв.</td>
            <td id="description"><?php echo $rows['DESCRIPTION'];?></td>
        </tr>

<?php
    }
?>