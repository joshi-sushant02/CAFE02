<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="invoice-title">
				<h2>Invoice</h2>
				<h3 class="pull-right">Order # 12345</h3>
			</div>
			<hr>
			<div class="row">
				<div class="col-xs-6">
					<address>
						<strong>Billed To:</strong><br>

						<?php




						require('db_connection.php');

						$result = mysqli_query($connection, "SELECT email_2 FROM login_info2 order by id DESC LIMIT 1");

						$row = mysqli_fetch_row($result);
						if ($row == null) {
							echo "you are not logged in";
						} else {

							$value = $row[0];


							$result2 = mysqli_query($connection, "SELECT username FROM users where email='$value'");
							$mail = mysqli_fetch_row($result2);
							echo "$mail[0]";
						}
						?>



						<br>
						1234 Main<br>
						Apt. 4B<br>
						Springfield, ST 54321
					</address>
				</div>
				<div class="col-xs-6 text-right">
					<address>
						<strong>By:</strong><br>
						Cafe Reminiscence<br>
						1234 Main<br>
						Apt. 4B<br>
						Kotharud Pune, ST 54321.
					</address>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<address>
						<strong>Payment Method:</strong><br>
						Visa ending **** 4242<br>
						<?php




						require('db_connection.php');

						$result = mysqli_query($connection, "SELECT email_2 FROM login_info2 order by id DESC LIMIT 1");

						$row = mysqli_fetch_row($result);
						if ($row == null) {
							echo "you are not logged in";
						} else {




							echo $row[0];
						}



						?>
					</address>
				</div>
				<div class="col-xs-6 text-right">
					<address>
						<strong>Order Date:</strong><br>

						<?php




						require('db_connection.php');

						$result = mysqli_query($connection, "SELECT email_2 FROM login_info2 order by id DESC LIMIT 1");

						$row = mysqli_fetch_row($result);
						if ($row == null) {
							echo "you are not logged in";
						} else {

							$value = $row[0];


							$result2 = mysqli_query($connection, "SELECT username FROM users where email='$value'");
							$mail = mysqli_fetch_row($result2);
							$result3 = mysqli_query($connection, "SELECT date FROM order1 where username='$mail[0]'");
							$datee = mysqli_fetch_row($result3);
							echo "$datee[0]";
						}



						?>

						<br><br>
					</address>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><strong>Order summary</strong></h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-condensed">
							<thead>
								<tr>
									<td><strong>Item</strong></td>
									<td class="text-center"><strong>Price</strong></td>
									<td class="text-center"><strong>Quantity</strong></td>
									<td class="text-right"><strong>Totals</strong></td>
								</tr>
							</thead>
							<tbody>
								<!-- foreach ($order->lineItems as $line) or some such thing here -->
								<tr>
									<td>

										<?php




										require('db_connection.php');

										$result = mysqli_query($connection, "SELECT email_2 FROM login_info2 order by id DESC LIMIT 1");

										$row = mysqli_fetch_row($result);
										if ($row == null) {
											echo "you are not logged in";
										} else {

											$value = $row[0];


											$result2 = mysqli_query($connection, "SELECT username FROM users where email='$value'");
											$mail = mysqli_fetch_row($result2);
											$result3 = mysqli_query($connection, "SELECT orderr FROM order1 where username='$mail[0]' order by id DESC LIMIT 1");
											$food = mysqli_fetch_row($result3);
											echo "$food[0]";
										}



										?>



									</td>
									<td class="text-center">


										<?php




										require('db_connection.php');

										$result = mysqli_query($connection, "SELECT email_2 FROM login_info2 order by id DESC LIMIT 1");

										$row = mysqli_fetch_row($result);
										if ($row == null) {
											echo "you are not logged in";
										} else {

											$value = $row[0];


											$result2 = mysqli_query($connection, "SELECT username FROM users where email='$value'");
											$mail = mysqli_fetch_row($result2);
											$result3 = mysqli_query($connection, "SELECT orderr FROM order1 where username='$mail[0]' order by id DESC LIMIT 1");
											$food = mysqli_fetch_row($result3);
											$result4 = mysqli_query($connection, "SELECT prise FROM bill where food='$food[0]'");
											$prise = mysqli_fetch_row($result4);
											echo "$prise[0]";
										}



										?>

									</td>
									<td class="text-center">
									<?php




require('db_connection.php');

$result = mysqli_query($connection, "SELECT email_2 FROM login_info2 order by id DESC LIMIT 1");

$row = mysqli_fetch_row($result);
if ($row == null) {
	echo "you are not logged in";
} else {

	$value = $row[0];


	$result2 = mysqli_query($connection, "SELECT username FROM users where email='$value'");
	$mail = mysqli_fetch_row($result2);
	$result3 = mysqli_query($connection, "SELECT peoples FROM order1 where username='$mail[0]' order by id DESC LIMIT 1");
	$peoples = mysqli_fetch_row($result3);
	
	echo "$peoples[0]";
}



?>



									</td>
									<td class="text-right">
										
									
									<?php




										require('db_connection.php');

										$result = mysqli_query($connection, "SELECT email_2 FROM login_info2 order by id DESC LIMIT 1");

										$row = mysqli_fetch_row($result);
										if ($row == null) {
											echo "you are not logged in";
										} else {

											$value = $row[0];


											$result2 = mysqli_query($connection, "SELECT username FROM users where email='$value'");
											$mail = mysqli_fetch_row($result2);
											$result3 = mysqli_query($connection, "SELECT orderr FROM order1 where username='$mail[0]' order by id DESC LIMIT 1");
											$food = mysqli_fetch_row($result3);
											$result4 = mysqli_query($connection, "SELECT prise FROM bill where food='$food[0]'");
											$prise = mysqli_fetch_row($result4);
											$result5 = mysqli_query($connection, "SELECT peoples FROM order1 where username='$mail[0]' order by id DESC LIMIT 1");
											$peoples = mysqli_fetch_row($result5);
											$total=$peoples[0]*$prise[0];
											echo "$total";
										}



										?>
								
								
								</td>
								</tr>
								
								
								<tr>
									<td class="no-line"></td>
									<td class="no-line"></td>
									<td class="no-line text-center"><strong>Booking Charges</strong></td>
									<td class="no-line text-right">50</td>
								</tr>
								<tr>
									<td class="no-line"></td>
									<td class="no-line"></td>
									<td class="no-line text-center"><strong>Total in Rs.</strong></td>
									<td class="no-line text-right">
										
									<?php




										require('db_connection.php');

										$result = mysqli_query($connection, "SELECT email_2 FROM login_info2 order by id DESC LIMIT 1");

										$row = mysqli_fetch_row($result);
										if ($row == null) {
											echo "you are not logged in";
										} else {

											$value = $row[0];


											$result2 = mysqli_query($connection, "SELECT username FROM users where email='$value'");
											$mail = mysqli_fetch_row($result2);
											$result3 = mysqli_query($connection, "SELECT orderr FROM order1 where username='$mail[0]' order by id DESC LIMIT 1");
											$food = mysqli_fetch_row($result3);
											$result4 = mysqli_query($connection, "SELECT prise FROM bill where food='$food[0]'");
											$prise = mysqli_fetch_row($result4);
											$result5 = mysqli_query($connection, "SELECT peoples FROM order1 where username='$mail[0]' order by id DESC LIMIT 1");
											$peoples = mysqli_fetch_row($result5);
											$t=$peoples[0]*$prise[0];
											
$total=$t+50;
											echo "$total";
										}



										?>
								
								</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<button class="submit2"><a href="index.html">Done</a></button>