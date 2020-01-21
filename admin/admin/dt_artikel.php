				<thead>
					<tr>
						<th width="2%">No</th>
						<th width="4%">ID</th>
						<th width="7%">Product Code</th>
						<th width="10%">Product Name</th>
						<th width="25%">Product Desc</th>
						<th width="4%">Qty</th>
						<th width="5%">Price</th>
						<th width="7%">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					include "koneksi.php";
						$querydosen = mysqli_query($konek, "SELECT * FROM  products");
						if($querydosen == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						$i=1;
						while ($ar = mysqli_fetch_array ($querydosen)){
							
							echo "
								<tr>
									<td align=center>$i</td>
									<td align=center>$ar[id]</td>
									<td align=center>$ar[product_code]</td>
									<td align=center>$ar[product_name]</td>
									<td align=center>$ar[product_desc]</td>
									<td align=center>$ar[qty]</td>
									<td align=center>$ar[price]</td>
									<td align=center>
									<a href='#' class='open_modal' id='$ar[id]'>Edit</a> |
									<a href='#' onClick='confirm_delete(\"artikel_delete.php?id=$ar[id]\")'>Delete</a>
									</td>
								</tr>";
						$i++;		
						}
					?>
				</tbody>