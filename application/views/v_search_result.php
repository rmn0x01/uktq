<br>
<table border="1" cellpadding="8" class="bordered">
	<tr>
		<th>Universitas</th>
		<th>Program Studi</th>
		<th>Logo</th>
		<th>Golongan 1</th>
		<th>Golongan 2</th>
		<th>Golongan 3</th>
		<th>Golongan 4</th>
		<th>Golongan 5</th>
	</tr>

	<?php
	if((!empty($ukt))&&($ukt!='starter')){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
		foreach($ukt as $data){ // Lakukan looping pada variabel dari controller
			echo "<tr>";
			echo "<td>".$data->ukt2_univ."</td>";
			if($data->ukt2_linkprodi==NULL){
				echo "<td>".$data->ukt2_prodi."</td>";
			} else {
			echo "<td> <a href=".$data->ukt2_linkprodi.">".$data->ukt2_prodi."</td>";
			}
			echo "<td> <img src=".base_url('upload/logo/'.$data->ukt2_logoprodi)." width='64' /> </td>";
			echo "<td> Rp. ".$data->ukt2_gol1."</td>";
			echo "<td> Rp. ".$data->ukt2_gol2."</td>";
			echo "<td> Rp. ".$data->ukt2_gol3."</td>";
			echo "<td> Rp. ".$data->ukt2_gol4."</td>";
			echo "<td> Rp. ".$data->ukt2_gol5."</td>";
			echo "</tr>";
		}
	}	else if ($ukt=='starter'){
		//echo "<tr><td colspan='4'></td></tr>";
	}
		else{ // Jika data tidak ada
		echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
	}
	?>
</table>
