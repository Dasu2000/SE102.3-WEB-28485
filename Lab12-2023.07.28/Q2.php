<html>
	<body>
		<?php
			$s = "localhost";
			$u = "root";
			$p = "";
			$d = "university";

			$c = new mysqli($s, $u, $p, $d);

			$i = $_REQUEST["a"];
			$n = $_REQUEST["b"];
			$un = $_REQUEST["c"];
			$pw = $_REQUEST["d"];

			$s1 = "INSERT INTO student VALUES('$i', '$n', '$un', '$pw')";

			if ($c->query($s1) === TRUE) {
				echo "Record Updated successfully";

				$s1 = "SELECT * FROM student";
				$result = $c->query($s1);
		?>
			<table border="1">
				<tr>
					<th>ID</th>
					<th>Name</th>
				</tr>

				<?php
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
				?>
				<tr>
					<td>
						<?php 
							echo $row["id"];
						?>
					</td>
					<td>
						<?php 
							echo $row["name"];
						?>
					</td>
				</tr>
				<?php
					}
				} else {
					echo "Error Updating Record: " . $c->error;
				}
				?>
			</table>
		<?php
			} else {
				echo "Error Updating Record: " . $c->error;
			}
		?>
	</body>
</html>
