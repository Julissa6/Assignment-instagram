</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <a href="index.php">
  <button class="back-home">Home</button>
</a>
<table border="1">
    <tr>
        <th>EVENT_ID</th>
         <th>EVENT_TITLE</th>
          <th>EVENT_Description</th>
           <th>EVENT_Date</th>
            <th>EVENT_Venue</th>
             <th>EVENT_Organizer</th>
              <th>EVENT_ Max_Attandance</th>
               <th>EVENT_ticket_price</th>
               <th>action</th>
    </tr>
    <?php
    $con=mysqli_connect('localhost','root','','event_management');
    $query=mysqli_query($con,"SELECT * from event");
    while ($fetch=mysqli_fetch_array($query)) { 
    ?>
    <tr>
        <td><?php echo $fetch['eve_id'];?></td>
        <td><?php echo $fetch['title'];?></td>
        <td><?php echo $fetch['description'];?></td>
         <td><?php echo $fetch['event_date'];?></td>
          <td><?php echo $fetch['venue'];?></td>
           <td><?php echo $fetch['organizer'];?></td>
            <td><?php echo $fetch['max_attandes'];?></td>
             <td><?php echo $fetch['ticket_price'];?></td>
             <td>
                <a href="modify.php? x=<?php echo $fetch['eve_id'];?>">Modify</a>
                <a href="remove.php? b=<?php echo $fetch['eve_id'];?>">REMOVE</a>
             </td>
    </tr>

    <?php
    }
    ?>

</table>
</body>
</html>