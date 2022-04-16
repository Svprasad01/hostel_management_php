<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style media="screen">
  .table {
    border: 2px solid black;
    padding: 0px;
    background-color: #f2f2f2;
    position: absolute;
    float: center;
    left:20%;
    top: 20%;
    }
    th {
    border: 2px solid black;
    padding: 5px;
    background-color: green;
    color: white;
    }
    td {
    border: 2px solid black;
    padding: 5px;
    }

        </style>
  </head>
  <body>
    <center>
    <table class="table">
        <tr>
        <th>stud_id</th>
        <th>Student Name</th>
        <th>email id</th>
        <th>phone no</th>
        <th>Father Name</th>
        <th>D0B</th>
        <th>AGE</th>
        <th>ROOM NO</th>
      </tr><br>
      <?php
       $conn=mysqli_connect("localhost","root","");
       $db=mysqli_select_db($conn,"hostel");
       if(!$conn)
       {
         echo "connection failed";
       }
       if(isset($_POST["submit"]))
       {
          $id=$_POST["STUD_ID"];
           $query="SELECT * FROM student where STUD_ID='$id'";
           $query_run=mysqli_query($conn,$query);
           while( $row= mysqli_fetch_array($query_run)){
             ?>
             <tr>
               <td><?php echo $row['STUD_ID'] ;?></td>
               <td><?php echo $row['stud_name'] ;?></td>
               <td><?php echo $row['email_id'] ;?></td>
               <td><?php echo $row['phone_no'] ;?></td>
               <td><?php echo $row['father_name'] ;?></td>
               <td><?php echo $row['DOB'] ;?></td>
               <td><?php echo $row['AGE'] ;?></td>
               <td><?php echo $row['room_no'] ;?></td>
             </tr><?php
           }
         }
         ?>
    </table>
    </center>
  </body>
</html>
