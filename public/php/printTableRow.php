<?php 
    // LOOP TILL END OF DATA
    while($rows=$result->fetch_assoc())
    {
?> 

            <tr id="input">
                <td id="ID"><?php echo $rows['ID'];?></td>
                <td id="date"><?php echo $rows['TIMEDATE'];?></td>
                <td id="type"><?php echo $rows['ACTION'];?></td>
                <td id="money"><?php echo $rows['AMOUNT'];?> лв.</td>
                <td id="reason"><?php echo $rows['DESCRIPTION'];?></td>
            </tr>

<?php
    }
?>