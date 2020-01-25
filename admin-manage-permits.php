<html>
	
	<header>
		<title>UPark - Admin Permit Management</title>
		<link rel='stylesheet' href='stylesheet.css'>
	</header>

	<body>
		<div>
		  <img class="ulogo" src="media/ulogo.png" alt="UofU Logo">
		</div>

		<div class="topnav">
		  <a href="admin_parkingmap.html">Manage Maps</a>
		  <a class="active" href="admin-manage-permits.html">Manage Permits</a>
		  <a href="admin_violation.html">Manage Violations</a>
		  <div class="currentuser">
			<a>John Doe</a>
		  </div>

		</div>
		
		<div>
		</br>
		<input type="text" placeholder="Search..">
		</br></br>
		<table class='permitlist'>
			<tr>
				<td><p><b>Name</b></p></td>
				<td><p><b>Permit #</b></p></td>
				<td><p><b>License Plate</b></p></td>
				<td><p><b>Permit Type</b></p></td>
			</tr>
			<tr>
				<td><p>Jane Doe</p></td>
				<td><p>00002</p></td>
				<td><p>145-JYK-L</p></td>
				<td><p>Student</p></td>
				<td><button type="button">Disable</button></td>
			</tr>
			<tr>
				<td><p>John Doe</p></td>
				<td><p>00001</p></td>
				<td><p>123-ABC-4</p></td>
				<td><p>Student</p></td>
				<td><button type="button">Disable</button></td>
			</tr>
			<tr>
				<td><p>Jack Black</p></td>
				<td><p>00003</p></td>
				<td><p>SKL-RCK-1</p></td>
				<td><p>Faculty</p></td>
				<td><button type="button">Disable</button></td>
			</tr>
			<tr>
				<td><p>Mario Bruun</p></td>
				<td><p>00004</p></td>
				<td><p>456-MBA-6</p></td>
				<td><p>Student</p></td>
				<td><button type="button">Disable</button></td>
			</tr>
		</table>	
	</div>		
	</body>

</html>
