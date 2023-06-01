<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>THE CONSULTANT</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
  <header>
    <nav>
        <div class="wrapper">
        <div class="logo">
            <img src="logo.png" alt="logo">
    </div>
         <ul>
        <li><a href="#">Home</a></li>
        <li><a href="mealplanner.html">Meal Planner</a></li>
        <li><a href="goalmanager.html">Goal Manager</a></li>
        <li><a href="progress.html">Track Progress</a></li>
        <li><a href="advice.html">Dietitian's Advice</a></li>
        <li><a href="logout.php">Logout</a></li>
      
      </ul>
     
    </nav>
  </header>

  <section class="hero">
    <div class="container">
      <h1>Welcome to The Consultant Diet Planner</h1>
      <p>Take control of your diet, achieve your health goals, and improve your well-being.</p>
      <a class="button" href="#">Get Started>>>>></a>
    </div>
  </section>

  <section class="features">
    <div class="container">
      <h2>Key Features</h2>
      <div class="feature">
        <i class="fas fa-utensils"></i>
        <h3>Plan Your Diet</h3>
        <p>Create personalized meal plans tailored to your dietary preferences and goals.</p>
      </div>
      <div class="feature">
        <i class="fas fa-check"></i>
        <h3>Manage Goals</h3>
        <p>Set and track your health and fitness goals to stay motivated and on track.</p>
      </div>
      <div class="feature">
        <i class="fas fa-chart-line"></i>
        <h3>Track Progress</h3>
        <p>Monitor your progress with intuitive charts and graphs to see your improvements over time.</p>
      </div>
      <div class="feature">
        <i class="fas fa-comments"></i>
        <h3>Expert Advice</h3>
        <p>Get guidance and nutritional advice from certified dietitians to optimize your diet plan.</p>
      </div>
    </div>
  </section>

  
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>