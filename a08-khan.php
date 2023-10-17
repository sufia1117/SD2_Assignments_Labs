<!DOCTYPE html>
<!-- 10-14-23 a08-khan.php -->
<!-- Sufia Khan -->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Fizz-Buzz Program Table </title>
	
	<style>
		h1 {
			color: blue;
		}
		
		h4 {
			color: red;
		}

        table {
            background-color: lightgreen;
        }

        .head {
            color: white;
            background-color: grey;
        }

        .fizz {
            background-color: lightblue;
        }

        .buzz {
            background-color: pink;
        }

	</style>
</head>

<body>
	<h1> Assignment 8 - Sufia Khan </h1>
	<h4> This PHP program creates a FIZZ/BUZZ table! </h4>
	
	<table border=1>
		<tr>
			<th class="head">Number</th>
			<th class="head">FIZZ</th>
			<th class="head">BUZZ</th>
		</tr>
	
        <?php
		for ($x = 0; $x <= 100; $x++) {
			echo "<tr>";
				echo "<td>" . $x . "</td>";
                if ($x % 3 == 0) {
                    echo "<td class='fizz'> FIZZ </td>";
                } else {
                    echo "<td>  </td>";
                }

                if ($x % 5 == 0) {
                    echo "<td class='buzz'> BUZZ </td>";
                } else {
                    echo "<td>  </td>";
                }
			echo "</tr>";
		}
	    ?>
	</table>
	
	<hr>
	<footer>
		<small> (C) Sufia Khan, 2023 </small>
	</footer>

</body>
</html>