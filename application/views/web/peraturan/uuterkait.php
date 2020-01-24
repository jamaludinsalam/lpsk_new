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
							<td>'.character_limiter(strip_tags($sip->rules_content), 100).'</td>
							<td>
								<a class="btn btn-primary btn-custom" target="_blank" href="'.base_url()."assets/uploads/files/".$sip->rules_download_url.'" style="font-size: .9em;">
									Open
								</a>
							</td>
						</tr>
					</tbody>';
			$no++;
		}

		echo $hasil;
	}
?>

{links}