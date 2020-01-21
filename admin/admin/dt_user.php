				<thead>
					<tr>
						<th width="2%">No</th>
						<th width="4%">ID</th>
						<th width="10%"Name</th>
						<th width="10%">Address</th>
						<th width="30%">Phone</th>
						<th width="4%">Type</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querydosen = mysqli_query ($konek, "SELECT * FROM  users");
						if($querydosen == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						$i=1;
						while ($ar = mysqli_fetch_array ($querydosen)){
							
							echo "
								<tr>
									<td align=center>$i</td>
									<td>$ar[id]</td>
									<td>$ar[fname]</td>
									<td>$ar[address]</td>
									<td>$ar[phone]</td>
									<td>$ar[type]</td>
								</tr>";
						$i++;		
						}
					?>
				</tbody>