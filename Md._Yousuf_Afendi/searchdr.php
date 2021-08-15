<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Doctor</title>
	<script type="./js/searchdr.js"></script>
</head>
<body>
   <h1>Doctor List</h1>
   <form action="Controller/searchdr.php" method="GET" name="sd" onsubmit="getResult(this);return false;">
   	<input type="text" name="name">
   	<input type="submit" name="search" value="search">
   </form>
<hr>
<div id="result"></div>
</body>
</html>