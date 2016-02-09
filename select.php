<?php
session_start();

include("includes/openDBConn.php");
//this file is validating as HTML5
//you need to use an html5 validator

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta charset="utf-8" />
    <title>Lab 5 - Select</title>
</head>

<body>

<?php
	//Prepare SQL statements
	$sql = "SELECT EmployeeID, LastName, FirstName, Title FROM EmployeesLab5";
	//execute the SQL query and store the result of the execution into $result 
	$result = mysql_query($sql);
	
	//check to see if there are records in the result, if not set the number of results = 0
	if(empty($result))
		$num_results = 0;
	else 
		$num_results = mysql_num_rows($result);
?>
	<h1 style="text-align:center;">Lab 5 - Select</h1>
    
    <?php
		include("includes/menu.php");
	?>
    <div style="font-style:italic; text-align:center; font-size:9px;"> this set of pages validates as HTML5 compliant <br/>&nbsp;</div>
    
    <table style="border:0px; width:500px; padding:0px; margin:0 auto; border-spacing:0px;" title="Listing of Employees">
    	<thead>
        	<tr>
            	<th colspan="4" style="font-weight:bold; background-color:#b1946c; text-align:center; text-decoration:underline;">EmployeesLab5 Table</th>
            </tr>
            <tr>
            	<th style="font-weight:bold; background-color:#b1946c;">EmployeeID</th>
                <th style="font-weight:bold; background-color:#b1946c;">LastName</th>
                <th style="font-weight:bold; background-color:#b1946c;">FirstName</th>
                <th style="font-weight:bold; background-color:#b1946c;">Title</th>
                
            </tr>
        </thead>
        <tfoot>
        	<tr>
            	<td colspan="4" style="text-align:center; font-style:italic;">Information pulled from the northwind database</td>
            </tr>
        </tfoot>
        <tbody>
        	<?php
			//loop through the results
			for($i=0; $i < $num_results; $i++)
			{
				$row = mysql_fetch_array($result);
				
				//below always use trim on data
				?>
                <tr>
                	<td style="border-right: 1px solid #00000;"><?php echo trim($row["EmployeeID"]); ?></td>
                    <td style="border-right: 1px solid #00000;"><?php echo trim($row["LastName"]); ?></td>
                    <td style="border-right: 1px solid #00000;"><?php echo trim($row["FirstName"]); ?></td>
                    <td><?php echo trim($row["Title"]); ?></td>
                </tr>
                <?php
			}
			?>
            </tbody>
    </table>
    
    <p>&nbsp;</p>
    <?php
	//Prepare sql statement
	$sql = "SELECT ShipperID, CompanyName, Phone FROM ShippersLab5";
	
	//execute the sql query and store the result
	$result = mysql_query($sql);
	
	//check to see if ther are any records in the results, if not set the number of results = 0
	if(empty($result))
		$num_results = 0;
	else 
		$num_results = mysql_num_rows($result);
	?>
    <table style="border:0px; width:500px; padding:0px; margin:0 auto; border-spacing:0px;" title="Listing of Employees">
    	<thead>
        	<tr>
            	<th colspan="4" style="font-weight:bold; background-color:#b1946c; text-align:center; text-decoration:underline;">ShippersLab5 Table</th>
            </tr>
            <tr>
            	<th style="font-weight:bold; background-color:#b1946c;">ShipperID</th>
                <th style="font-weight:bold; background-color:#b1946c;">CompanyName</th>
                <th style="font-weight:bold; background-color:#b1946c;">Phone</th>     
            </tr>
        </thead>
        <tfoot>
        	<tr>
            	<td colspan="4" style="text-align:center; font-style:italic;">Information pulled from the northwind database</td>
            </tr>
        </tfoot>
        <tbody>
        	<?php
			//loop through the results
			for($i=0; $i < $num_results; $i++)
			{
				$row = mysql_fetch_array($result);
				
				//below always use trim on data
				?>
                <tr>
                	<td style="border-right: 1px solid #00000;"><?php echo trim($row["ShipperID"]); ?></td>
                    <td style="border-right: 1px solid #00000;"><?php echo trim($row["CompanyName"]); ?></td>
                    <td style="border-right: 1px solid #00000;"><?php echo trim($row["Phone"]); ?></td>
                    
                </tr>
                <?php
			}
			?>
            </tbody>
    </table>
    <?php
	//clean up
	$mysql_free_result($result);
	include("includes/closeDBConn.php");
	?>
</body>
</html>
