<?php
include ("conexion.php");
$Sentencia="Select * from alimentos;";
$r= mysql_query("Select * from usda;");
?> 

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset='utf-8 with BOOM'"/>
	<meta charset="utf-8" />
	<title>Consultar Nutrientes</title>
	 <link href="./framework/bootstrap.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
	<br>
<div class="container">
	<div class="table-responsive">
			<table class="table table-hover table-striped">
				<tr class="Success">
					<th>NDB_No</th><th>Shrt_Desc</th><th>Water</th><th>Energ_Kcal</th>
					<th>Protein</th><th>Lipid_tot</th><th>Ash</th><th>Carbohydrt</th>
					<th>Fiber_TD</th><th>Sugar_Tot</th><th>Calcium</th><th>Iron</th>
					<th>Magnesium</th><th>Phosphorus</th><th>Potassium</th><th>Zinc</th>
					<th>Copper</th><th>Manganese</th><th>Selenium</th><th>Vit_C</th>
					<th>Thiamin</th><th>Riboflamin</th><th>Niacin</th><th>Panto_Acid</th>
					<th>Vit_B6</th><th>Folate_Tot</th><th>Folic_Acid</th><th>Food_Folate</th>
					<th>Folate_DFE</th><th>Choline_Tot</th><th>Vit_B12</th><th>Vit_A_IU</th>
					<th>Vit_A_RAE</th><th>Retinol</th><th>Alpha_Carot</th><th>Beta_Carot</th>
					<th>Beta_Crypt</th><th>Lycopene</th><th>Lut+Zea</th><th>Vit_E</th>
					<th>Vit_D_mcg</th><th>ViVit_D_IU</th><th>Vit_K</th><th>FA_Sat</th>
					<th>FA_Mono</th><th>FA_Poly</th><th>Cholestrl</th><th>GmWt_1</th>
					<th>GmWt_Desc1</th><th>GmWt_2</th><th>GmWt_Desc2</th><th>Refuse_Pct</th>
				</tr>
				
				
					</html>
					<?php 
						while($Datos=mysql_fetch_array($r)){
							echo "<tr>
							<td align=center>{$Datos['NDB_No']}</td>
							<td align=center>{$Datos['Shrt_Desc']}</td>
							<td align=center>{$Datos['Water']}</td>
							<td align=center>{$Datos['Energ_Kcal']}</td>
							<td align=center>{$Datos['Protein']}</td>
							<td align=center>{$Datos['Ash']}</td>
							<td align=center>{$Datos['Carbohydrt']}</td>
							<td align=center>{$Datos['Fiber_TD']}</td>
							<td align=center>{$Datos['Sugar_Tot']}</td>
							<td align=center>{$Datos['Calcium']}</td>
							<td align=center>{$Datos['Iron']}</td>
							<td align=center>{$Datos['Magnesium']}</td>
							<td align=center>{$Datos['Phosphorus']}</td>
							<td align=center>{$Datos['Potassium']}</td>
							<td align=center>{$Datos['Zinc']}</td>
							<td align=center>{$Datos['Copper']}</td>
							<td align=center>{$Datos['Manganese']}</td>
							<td align=center>{$Datos['Selenium']}</td>
							<td align=center>{$Datos['Vit_C']}</td>
							<td align=center>{$Datos['Thiamin']}</td>
							<td align=center>{$Datos['Riboflamin']}</td>
							<td align=center>{$Datos['Niacin']}</td>
							<td align=center>{$Datos['Panto_Acid']}</td>
							<td align=center>{$Datos['Vit_B6']}</td>
							<td align=center>{$Datos['Folate_Tot']}</td>
							<td align=center>{$Datos['Folic_Acid']}</td>
							<td align=center>{$Datos['Food_Folate']}</td>
							<td align=center>{$Datos['Folate_DFE']}</td>
							<td align=center>{$Datos['Choline_Tot']}</td>
							<td align=center>{$Datos['Vit_B12']}</td>
							<td align=center>{$Datos['Vit_A_IU']}</td>
							<td align=center>{$Datos['Vit_A_RAE']}</td>
							<td align=center>{$Datos['Retinol']}</td>
							<td align=center>{$Datos['Alpha_Carot']}</td>
							<td align=center>{$Datos['Beta_Carot']}</td>
							<td align=center>{$Datos['Beta_Crypt']}</td>
							<td align=center>{$Datos['Lycopene']}</td>
							<td align=center>{$Datos['Lut+Zea']}</td>
							<td align=center>{$Datos['Vit_E']}</td>
							<td align=center>{$Datos['Vit_D_mcg']}</td>
							<td align=center>{$Datos['ViVit_D_IU']}</td>
							<td align=center>{$Datos['Vit_K']}</td>
							<td align=center>{$Datos['FA_Sat']}</td>
							<td align=center>{$Datos['FA_Mono']}</td>
							<td align=center>{$Datos['FA_Poly']}</td>
							<td align=center>{$Datos['Cholestrl']}</td>
							<td align=center>{$Datos['GmWt_1']}</td>
							<td align=center>{$Datos['GmWt_Desc1']}</td>
							<td align=center>{$Datos['GmWt_2']}</td>
							<td align=center>{$Datos['GmWt_Desc2']}</td>
							<td align=center>{$Datos['Refuse_Pct']}</td>
							
							</tr>";
						}
					 ?>
					<html>
				
		</table>
	</div>
	
</div>
	
</body>

</html>