<?php 
session_start();

if(!isset($_SESSION['examineeSession']['examineenakalogin']) == true) header("location:index.php");


 ?>
<?php include("conn.php"); ?>
<!-- MAO NI ANG HEADER -->
<?php include("includes/header.php"); ?>      

<!-- UI THEME DIRI -->
<?php //include("includes/ui-theme.php"); ?>

<div class="app-main">
<!-- sidebar diri  -->
<?php include("includes/sidebar.php"); ?>



<!-- Condition If unza nga page gi click -->
<?php 
   @$page = $_GET['page'];


   if($page != '')
   {
     if($page == "exam")
     {
       include("pages/exam.php");
     }
     else if($page == "result")
     {
       include("pages/result.php");
     }
     else if($page == "myscores")
     {
       include("pages/myscores.php");
     }
     
   }
   // Else ang home nga page mo display
   else
   {
     include("pages/home.php"); 
   }


 ?> 
 <img style="margin:20px 0px 0px 0px " height="200" width="950" src="assets/images/pp.png">
 <img style="margin:30px 0px 0px 0px " height="300" width="950" src="assets/images/book.webp">
 </div>
<img style="margin:25px 25px 0px 0px " height="100" width="100" src="assets/images/Onn.png">


<?php include("includes/footer.php"); ?>

<?php include("includes/modals.php"); ?>


