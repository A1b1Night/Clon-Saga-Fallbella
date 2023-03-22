<!DOCTYPE html>
<html  ng-app="angularRoutingApp" style="background: #151515">
<head>
<?php
include "inc/links.php";
?>
</head>
<?php
include "inc/menu.php";
?>

<body ng-controller="mainController">



<div id="main">

 	<!--aqui inyectamos las vistas-->
    <div ng-view></div>

</div>

</body>


  
    	<?php
include "inc/footer.php";
?>
   

 </html>   
