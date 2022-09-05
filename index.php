<?php
include_once 'config.php';
?>
<html>
  <head>
  	<title>Student Information</title>
  	<meta charset="UTF-8">	

 <!--Adding Datatable Style cdn-->
 <link rel= "stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
 <!--Adding Jquery cdn-->
 <script src="https://code.jquery.com/jquery-3.5.1.js">    </script>
 <!--Adding Datatable cdn-->
 <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">   
 </script>
 <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"> </script>


    <script>
        $(document).ready(function () {
      
          $('#St_Table').DataTable();
               });
    </script> 


  </head>

  <body>
  
    <table id="St_Table" class="display" style="width:100%">
    <thead>
	    <tr>
	      <th>St_Id</th>
	      <th>St_Name</th>
	      <th>St_FName</th>
	      <th>St_MName</th>
	      <th>St_Mobile</th>
        </tr>
    </thead>

        <?php
    $sql = "SELECT* from St_Table";
    $result=mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_array($result)){

      ?>
      
      <tr>
        <td> <?php echo $row['St_Id'];?> </td>
        <td> <?php echo $row['St_Name'];?> </td>
        <td> <?php echo $row['St_FName'];?> </td>
        <td> <?php echo $row['St_MName'];?> </td>
        <td> <?php echo $row['St_Mobile'];?> </td>
      </tr>
      <?php
    } ?>
	   
  

            
    <tfoot>
	    <tr>
            <th>St_Id</th>
            <th>St_Name</th>
            <th>St_FName</th>
            <th>St_MName</th>
            <th>St_Mobile</th>
	    </tr>
    </tfoot>
    </table>
  </body>
</html>

