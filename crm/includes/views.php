<?php

function DisplayContacts($results)
{
	
	?>
	<table border=0 cellpadding=2 cellspacing=0 class="contactList">
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
		</tr>
		<?php
		$i =1;
		while($row = mysqli_fetch_assoc($results))
		{
			echo"<tr class='row".($i%2)."'>";
			echo "<td>$i</td>";
			echo "<td><a href='./contact.php?id=".$row['id']."'>".$row["fname"]." ".$row['lname']."</a></td>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["phone"]."</td>";
			echo "</tr>";
			$i++;
		}
		if($i==1)
		{
			echo "<tr><td colspan='5'>No Contacts found!</td></tr>";
		}
		?>
	</table>
	<?php
}

?>