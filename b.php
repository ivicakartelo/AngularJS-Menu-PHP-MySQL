<!DOCTYPE html>
<head>
<script src="//code.angularjs.org/1.3.0-rc.1/angular.min.js"></script>
<link rel="stylesheet" href="style6.css">
</head>
<body>
  <ul>
  <li ng-repeat="x in json">
  <h1>{{ x.name }}</h1>
  <p>{{ x.content }}</p>
  </ul>
</body>
</html>

