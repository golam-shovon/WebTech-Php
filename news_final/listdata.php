<?php
session_start();
if (!(isset($_SESSION['un']))){
    header("location:viewdata.php");
}//else //{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>News Site</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">News Site</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="home.php">Insert data</a></li>
            <li><a href="viewdata.php">View data</a></li>
            <li class="active"><a href="listdata.php">List Data</a></li>
            <li><a href="logoutm.php">Logout</a></li>
            <li><a href="searchrt.php">Search</a></li>
            <?php if(isset($_SESSION['un'])){
                $un= $_SESSION['un'];
        
                echo "<li><a href='#' style='float:right;'>"."<span class='label label-info'>Logged in as ".$un."</span></a></li>";

            }
            ?>
        </ul>
    </div>
</nav>
<div class="container">
<h3><a href='convertxml.php' style='float:right;' class='btn btn-info'>Export as Xml</a></h3><br/><br/>
    <div class="form-group">
    <form method="post" action="search.php" name="searchr">
        <input type="text" name="search" class="form-control" />
        <input type="submit" name="submit" value="Search" class="btn btn-success" />
    </form>
    <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
if(isset($_REQUEST['term'])){
    // Prepare a select statement
    $sql = "SELECT * FROM test WHERE heading LIKE ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term = $_REQUEST['term'] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<p>" . $row["name"] . "</p>";
                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
 
// close connection
mysqli_close($link);
?>
    </div>
	<table class="table table-striped table-bordered table-condensed">
		<tr>
        <th>News ID</th>
        <th>Headline</th>
        <th>Posting Date and Time</th>
        <th>Action</th>
		</tr>
        <?php
            require 'config.php';

            $statement="select * from test where deleted_at is null order by id desc";
            $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>"; 
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['heading']."</td>";
					echo "<td>".$row['datetime']."</td>";
					echo "<td><a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> | <a href=\"editv.php?id=$row[id]\">Edit</a> | <a href=\"singleview.php?id=$row[id]\">View</a></td>";
					echo "</tr>";
                }
			
            }
            else
            {
                echo "Nothing found in db";
            }
            mysqli_close($conn);
        ?>
		</table>
</div>
</body>
</html>