<!DOCTYPE html>
<html>
<head>
	<title>Management main page</title>
	<style>
		th {
			text-align: left;
		}
		td {
			width: auto;
		}
	</style>
</head>
<body>
	<div style="width: 600px; margin: 0 auto">
        <form style="float: left; width: 50%" action="add_form.html" method="get">
            <input type="submit" name="add" value="ADD">
        </form>
		<div style="float: right; width: 50%; text-align: right; font-weight: bold">MANAGEMENT MAIN PAGE</div>
		<br>
		<br>
		<table border="0" width="100%">
			<tr>
				<th>Last</th>
				<th>First</th>
				<th>Email</th>
				<th>Best Phone</th>
				<th></th>
				<th></th>
			</tr>
			<tr style="height: 10px"></tr>
            <?php
                $connect = mysqli_connect("localhost", "root", "AleksandR24", "conactmanager")
                    or die("Unable to connect to MySQL");
                $result = mysqli_query($connect, "SELECT last, first, email, bestphone FROM contacts");
                if (!$result) {
                    printf("Error: %s\n", mysqli_error($connect));
                    die();
                }
                $tr_html = "";
                while ($row = mysqli_fetch_array($result)) {
                    $td_html = "<td>".$row{'last'}."</td>"
                        ."<td>".$row{'first'}."</td>"
                        ."<td>".$row{'email'}."</td>"
                        ."<td>".$row{'bestphone'}."</td>"
                        ."<td style=\"text-align: right\">edit/view</td>"
                        ."<td style=\"text-align: right\">delete</td>";
                    $tr_html .= "<tr>$td_html</tr>";
                }
                echo $tr_html;
                mysqli_close($connect);
            ?>
		</table>
		<br>
        <form style="clear: both" action="add_form.html" method="get">
            <input type="submit" name="add" value="ADD">
        </form>
	</div>
</body>
</html>