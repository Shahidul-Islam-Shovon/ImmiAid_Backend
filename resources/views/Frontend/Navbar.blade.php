<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responsive Menu</title>
</head>
<body>

<style>
  .navbar {
    background: #005bbb;
    color: #fff;
    padding: 15px 20px;
    position: sticky;
    top: 0%;
    width: 100%;
    z-index: 1000;
  }

  .navbar .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
  }

  .logo {
    font-size: 1.8rem;
    font-weight: bold;
    color: #fff;
  }

  .menu {
    list-style: none;
    display: flex;
    gap: 15px;
  }

  .menu li a {
    color: #fff;
    font-weight: 500;
    padding: 6px 10px;
  }

  .nav-toggle {
    display: none;
    font-size: 24px;
    color: #fff;
    cursor: pointer;
  }

  @media (max-width: 768px) {
    .nav-toggle {
      display: block;
    }

    .menu {
      flex-direction: column;
      width: 100%;
      display: none;
      background-color: #005bbb;
      margin-top: 10px;
    }

    .menu.active {
      display: flex;
    }

    .menu li {
      border-top: 1px solid #ffffff33;
      padding: 10px 0;
    }
  }

  /* Prevent navbar from covering content */
  body {
    padding-top: 70px;
  }
</style>

<nav class="navbar">
  <div class="container">
    <div class="nav-left">
      <span class="logo">Aid Immigration</span>
    </div>

    <div class="nav-toggle" onclick="toggleMenu()">☰</div>

    <ul class="menu" id="menu">
      <li><a href="{{ route('front_end_index') }}">Home</a></li>
      <li><a href="{{ route('choose_us') }}">Why Choose Us</a></li>
      <li><a href="{{ route('services') }}">Services</a></li>
      <li><a href="{{ route('pricing') }}">Pricing</a></li>
      <li><a href="{{ route('contact_us') }}">Contact Us</a></li>
      <li><a href="{{ route('review_us') }}">Review Us</a></li>
      <li><a href="{{ route('sitemap') }}">Sitemap</a></li>
    </ul>
  </div>
</nav>

<script>
  function toggleMenu() {
    const menu = document.getElementById('menu');
    menu.classList.toggle('active');
  }
</script>


</body>
</html>