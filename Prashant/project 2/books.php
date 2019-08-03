<?php

include "connection.php";
include "navbar.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>books</title>
</head>
<body>
	<?php
if ($_SESSION['login_user']) {
?>
<div style="margin-top: 60px;margin-bottom: 0px;">
	<?php
      echo "Hello ".$_SESSION['login_user'];

	?>
</div>
<?php
}
?>
	<!----search bar----->
	<div style="margin-top: 10px;margin-left: 5px;">
		<form class="navbar-form" method="post" name="form1">
			<div>
				<input type="text" name="search" placeholder="search books.." required="">
				<button type="submit" name="submit" class="btn btn-primary">search</button>
			</div>
		</form>
	</div>
  <h2>List of books</h2>
  <?php
if (isset($_POST['submit'])) {
	$q=mysqli_query($db,"SELECT * FROM `books` WHERE name like '%$_POST[search]%';"
);
	if (mysqli_num_rows($q)==0) {
		echo "sorry no books found";
	}
	else{
		echo "<table class='table table-bordered table-hover'>";
  echo "<tr style='background-color:white;'>";
    echo "<th>"; echo "ID"; echo "</th>";
    echo "<th>"; echo "BOOK-NAME"; echo "</th>";
    echo "<th>"; echo "AUTHOR NAME"; echo "</th>";
    echo "<th>"; echo "EDITION"; echo "</th>";
    echo "<th>"; echo "STATUS"; echo "</th>";
    echo "<th>"; echo "QUANTITY"; echo "</th>";
    echo "<th>"; echo "DEPARTMENT"; echo "</th>";
echo "</tr>";

while ($row=mysqli_fetch_assoc($q)) {
	echo "<tr>";
	echo "<td>"; echo $row['bid']; echo "</td>";
	echo "<td>"; echo $row['name']; echo "</td>";
	echo "<td>"; echo $row['author']; echo "</td>";
	echo "<td>"; echo $row['edition']; echo "</td>";
	echo "<td>"; echo $row['status']; echo "</td>";
	echo "<td>"; echo $row['quantity']; echo "</td>";
	echo "<td>"; echo $row['department']; echo "</td>";
	echo "</tr>";
}
echo "</table>";
	}
}
else{
	$res=mysqli_query($db,"SELECT * FROM `books`;");
  echo "<table class='table table-bordered table-hover'>";
  echo "<tr style='background-color:white;'>";
    echo "<th>"; echo "ID"; echo "</th>";
    echo "<th>"; echo "BOOK-NAME"; echo "</th>";
    echo "<th>"; echo "AUTHOR NAME"; echo "</th>";
    echo "<th>"; echo "EDITION"; echo "</th>";
    echo "<th>"; echo "STATUS"; echo "</th>";
    echo "<th>"; echo "QUANTITY"; echo "</th>";
    echo "<th>"; echo "DEPARTMENT"; echo "</th>";
echo "</tr>";

while ($row=mysqli_fetch_assoc($res)) {
	echo "<tr>";
	echo "<td>"; echo $row['bid']; echo "</td>";
	echo "<td>"; echo $row['name']; echo "</td>";
	echo "<td>"; echo $row['author']; echo "</td>";
	echo "<td>"; echo $row['edition']; echo "</td>";
	echo "<td>"; echo $row['status']; echo "</td>";
	echo "<td>"; echo $row['quantity']; echo "</td>";
	echo "<td>"; echo $row['department']; echo "</td>";
	echo "</tr>";
}
echo "</table>";
}


  

  ?>
</body>
</html>