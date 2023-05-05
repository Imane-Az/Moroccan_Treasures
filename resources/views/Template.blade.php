<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>@yield('title')</title>
</head>
<body>
<header>
<nav>
    <ul>
        <li><a href="#">Hotels</a></li>
        <li><a href="#">Clothes</a></li>
        <li><a href="#">Activites</a></li>
        <li><a href="#">cooperatives</a></li>
        <li><a href="#">Activites</a></li>
        <li>
           <a href="#">Autre services</a>
        <select>
          <option value="c">  <a href="#">c</a></option>
          <option value="b">  <a href="#">b</a></option>
          <option value="a">  <a href="#">a </a></option>
        </select>
        </li>


    </ul>
</nav>
</header>
<footer>
    @yield('footer')
</footer>

</body>
</html>
