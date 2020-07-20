<!DOCTYPE html>
<html lang="en-us" ng-app="myFoo">
<head>
    <title>AngularJS Menu</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
        <script src="//code.angularjs.org/1.3.0-rc.1/angular.min.js"></script>
        <script src="//code.angularjs.org/1.3.0-rc.1/angular-route.min.js"></script>
        <script src="app.js"></script>
</head>
<body>
	<div class="container">
    
    <div class="grid4">

    <a href="#">Home</a>
        
    <?php
    define("DB_HOST", "localhost");
    define("DB_USERNAME", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "cmsoop");

    $link = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    $sql = "SELECT menu_id, name,
				CONCAT(LEFT(content,400))
				AS content, published
			  	FROM menu ORDER BY menu_id ASC";
    $result = mysqli_query($link, $sql);

    While ($row = mysqli_fetch_assoc($result))
    {
    print "<p><a href='#/second/" . $row["menu_id"] . "'>" . $row["name"] . "</a></p>";
    }
    ?>
    </div>
    <div class="grid8 last">
            
    <div ng-view></div>
        
    </div>   
    </div>
</body>
</html>