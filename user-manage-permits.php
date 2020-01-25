<html>
	
	<header>
		<title>UPark - Manage User Permits</title>
		<link rel='stylesheet' href='stylesheet.css'>
	</header>

	<body>
		<div>
		  <img class="ulogo" src="media/ulogo.png" alt="UofU Logo">
		</div>
		
		<div class="topnav">
		  
		  <a href="Homepage.html">Home</a>
		  <a href="parkingmap_user.html">Map</a>
		  <a class="active" href="user-manage-permits.html">Permits</a>
		  <a href="manageviolation_user.html">Violations</a>
		  <div class="currentuser">
			<a>John Doe</a>
		  </div>
		</div>
		
		<div class="userinfo">
			</br><h1>Manage Permit</h1></br>
			<h3>My Info</h3>
			
			<form>
				<b>Full Name: </b><input type="text" value="John Doe" name="fullname"></br></br>
				<b>Vehicle Make: </b><input type="text" value="Mitsubishi" name="Vehicle Make"></br></br>
				<b>Vehicle Model: </b><input type="text" value="Outlander" name="Vehicle Model"></br></br>
				<b>Vehicle Year: </b><input type="text" value="2003" name="Vehicle Year"></br></br>
				<b>Vehicle Color: </b><input type="text" value="Black" name="Vehicle Color"></br></br>
				<b>License Plate Nubmer: </b><input type="text" value="123-ABC-4" name="License Plate Nubmer"></br></br>
			<button type="button">Buy New Permit</button>
			<button type="button">Cancel Permit</button>
			<button type="button">Save Changes</button>
		</div>
		
		<div class="currentpermit">
				<p><b>Current Permit: </b>00001</p>
				<p><b>Permit Type: </b>Student</p>
				<p><b>Status: </b>Active</p>
		</div>	
	</body>
</html>
