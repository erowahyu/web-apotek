				<thead>
					<tr align="center">
						<th width="2%">No</th>
						<th width="10%">Product Code</th>
						<th width="10%">Product Name</th>
						<th width="10%">Product Desc</th>
						<th width="7%">Price</th>
						<th width="3%">Unit</th>
						<th width="7%">Total</th>
						<th width="10%">Date</th>
						<th width="30%">Phone</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querydosen = mysqli_query ($konek, "SELECT * FROM  orders");
						if($querydosen == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						$i=1;
						while ($ar = mysqli_fetch_array ($querydosen)){
							
							echo "
								<tr>
									<td align=center>$i</td>
									<td align=center>$ar[product_code]</td>
									<td align=center>$ar[product_name]</td>
									<td align=center>$ar[product_desc]</td>
									<td align=center>$ar[price]</td>
									<td align=center>$ar[units]</td>
									<td align=center>$ar[total]</td>
									<td align=center>$ar[date]</td>
									<td align=center>$ar[email]</td>
								</tr>";
						$i++;		
						}
					?>
				</tbody>