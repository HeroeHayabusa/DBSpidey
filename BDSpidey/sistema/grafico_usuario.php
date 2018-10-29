<?php
session_start();
	if($_SESSION['rol'] != 1)
	{
		header("location: ./");
	}
	
	include "../conexion.php";
 $query = "SELECT rol, count(*) as number FROM usuario GROUP BY rol";  
 $result = mysqli_query($conection, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head> 
	<meta charset="UTF-8">
	<?php include "includes/scripts.php"; ?>
	
           <title>Graficos de Usuarios</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['rol', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["rol"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Porcentaje de usuarios y administradores',  
                      is3D:true,  
				pieHole: 0.4  
                     };
					
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body> 
	  <?php include "includes/header.php"; ?>
	  <?php include "includes/footer.php"; ?>
           <br /><br />  
		   <br /><br />  
                <div id="piechart" style="width: 1326px; height: 550px;"></div>    
      </body>  
 </html>
?>