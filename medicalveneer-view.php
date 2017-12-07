   <?php 
function conectarse($host,$usuario,$password,$BBDD){ 
   $link=mysql_connect($host,$usuario,$password) or die (mysql_error()); 
   mysql_select_db($BBDD,$link) or die (mysql_error()); 
   return $link; 
} 

$link=conectarse("mysql.hostinger.mx","u292495417_checo","123456","u292495417_hospi");  

$sql = "SELECT * FROM medicalveneer"; 
$sql = mysql_query($sql, $link); 
$rs=mysql_fetch_array($sql);
$rs2=mysql_fetch_array($sql);
?> 
<!DOCTYPE html>
<html>
  
      
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
      <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}

</style>
</head>
<body>
    <div class="well"  style="background-color: #26c6da; font-size:18px;color:#fff;">Cartilla de vacunacion</div>

<table id="customers">
  <tr>
    <th width="5" >Vacuna</th>
    <th width="20">Enfermedad que Previene</th>
    <th width="10">Dosis</th>
    <th width="20">Edad y frecuencia</th>
    <th width="10">fecha de aplicacion</th>
    
			
				
				<td style="width:20px;" class="td-actions"><a href="index.php?view=editmedicalvaneer" rel="tooltip" title="Editar" class="btn btn-simple btn-warning btn-xs"><center><i class='fa fa-pencil'></center></i></a>
				
			

			

  </tr>
  <tr>
    <td style="background-color: #337ab7;font-size:12px;color:#fff;">BCG</td>
    <td>Tuberculosis</td>
    <td>Unica</td>
    <td>Al nacer</td>
  
      
   <?  echo 
          "<td>".$rs['date1']."</td>" ; ?>
          
 


  </tr>
  <tr>
    <td style="background-color: #da8826;font-size:12px;color:#fff;">Hepatitis B</td>
    <td>Hepatitis B</td>
    <td>Primera<br>
    
         segunda<br>
         Tercera<br></td>
          <td>Al nacer<br>
    
         2 meses<br>
         6 meses<br></td>
       <?  echo 
          "<td>".$rs['date2']."<br>".$rs['date3']."<br>".$rs['date4']."</td>" ; ?>
  </tr>
  <tr>
    <td style="background-color: #1a96a6;font-size:12px;color:#fff;">Pentavalente acelular <br> (Dpat+Vpi+Hib)</td>
    <td>Difteria,Tos ferina<br>Tetanos,Poliomelitis, E <br>infecciones por H.influenzae b </td>
    <td>Primera<br>
    
         segunda<br>
         Tercera<br>
         cuarta</td>
         <td>2 meses<br>
    
         4 meses<br>
         6 meses<br>
         18 meses</td>
   <?  echo 
          "<td>".$rs['date5']."<br>".$rs['date6']."<br>".$rs['date7']."<br>".$rs['date8']."</td>" ; ?>
  </tr>
  
  
  <tr>
    <td style="background-color: #e4ec4b;font-size:12px;color:#fff;">DPT</td>
    <td>Difteria,Tos Ferina <br>Tetanos </td>
    <td>Refuerzo</td>
         <td>4 años</td>
     <?  echo 
          "<td>".$rs['date9']."</td>" ; ?>
  </tr>
  
  <tr>
    <td style="background-color: #84b785;font-size:12px;color:#fff;">Rotavirus</td>
    <td>Diarrea por Rotavirus </td>
    <td>primera <br>segunda  <br>Tercera</td>
         <td>2 meses <br>4 meses <br> 6 meses</td>
     <?  echo 
          "<td>".$rs['date10']."<br>".$rs['date11']."<br>".$rs['date3']."</td>" ; ?>
  </tr>
  
  
</table>

</body>
</html>
