<?php
   class education 
   {
    public $blueTitle = "";
    public $Title  = "";
    public $date = "";
    public $paragraph  = "";
   }
   require_once('db.php');
   $education=[];   
   if (isset($_GET) && !empty($_GET))
   {
       
   $sql= vsprintf("SELECT * from education where userid in (select id from users where name='%s')",$_GET['user']);
   $result = $mysqli->query($sql);
   
       
   if ($result->num_rows > 0) 
   {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        $ar1=new education;
        $ar1->blueTitle=$row['blueTitle'];
		$ar1->Title=$row['Title'];
        $ar1->date=$row['date'];
		$ar1->paragraph=$row['paragraph'];	
        
        array_push($education,$ar1);
    } 
  
     $mysqli->close();
   }
   }
  else
   {
    echo "0 results";
   }

   header('Content-Type: application/json');
   echo json_encode($education);
 

  
?>


