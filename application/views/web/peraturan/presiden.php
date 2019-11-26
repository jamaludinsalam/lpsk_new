 <?php 
	$no=$page;
	$no++;$hasil='';
	
	
	
	
	if ($data) {
		$nourut = 1;
		foreach ($data as $sip) {
			
			$hasil.='<tbody>
			<tr>
			<th scope="row">'.$nourut++.'</th>
			<td>'.$sip->rules_title.'</td>
			<td><a href="'.base_url()."assets/uploads/files/".$sip->rules_download_url.'" style="font-size: 1.5em;"><i class="fas fa-file-pdf"></i></a></td>
			</tr>
		</tbody>';
			$no++;
		}

		echo $hasil;
	}
?>

{links}