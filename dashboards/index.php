<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WheelHouse</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
      <div class="header">

        <div class="logo">
            <h2 style="color: #99744A;"><i class="fa-solid fa-car-side" style="color: #000000;"></i>West-Side Co. <br></h2>
             <span style="color: black;">West-Side Co.</span>
        </div>

        <div class="links">
            <a href="#">Cars</a>
            <a href="#">Bikes</a>
            <a href="#">Import</a>
            <a href="#">Dealers</a>
        </div>

        <div class="buttons">
            <button type="submit" style="background-color: white;">Login</button>
            <button type="submit">Become a Seller</button>
        </div>

        <div class="hamburger" id="hamburger">
            ☰
        </div>

      </div>
    </div>

     <div class="container2">
        <div class="hero-section">
            <h1>West-Side Co.</h1>
            <h3>Your Premier Automotive Marketplace</h3>
            <p>Discover premium vehicles from trusted dealers. Cars, bikes, and import vehicles all in one place.</p>
            <div class="quick-link">
                <button type="submit">Browse Vehicles -></button>
                <button type="submit" style="background-color: white;">Become a Seller</button>
            </div>
        </div>
     </div>

<div class="container3">
  <div class="search-bar">
    <input type="text" name="search" placeholder="Search by brand or model...">
    <button class="active">All Vehicles</button>
    <button>Cars</button>
    <button>Bikes</button>
    <button class="search-btn">🔍 Search</button>
    <button class="filter-btn" onclick="toggleAccordion()">⚙️ Filter</button>
  </div>
</div>

<!-- Accordion Filter Section -->
<div class="container3B" id="accordion">
  <div class="accordion-content">
    <div class="budget-filter">
      <div class="form-group">
        <label for="brand">Brand</label>
        <select name="brand" id="brand">
          <option value="">Select brand</option>
          <option value="toyota">Toyota</option>
          <option value="honda">Honda</option>
          <option value="bmw">BMW</option>
          <option value="audi">Audi</option>
        </select>
      </div>

      <div class="form-group">
        <label for="price">Budget</label>
        <select name="price" id="price">
          <option value="">Price range</option>
          <option value="under10k">Under $10,000</option>
          <option value="10-25k">$10,000 - $25,000</option>
          <option value="25-50k">$25,000 - $50,000</option>
          <option value="50-75k">$50,000 - $75,000</option>
          <option value="75-100k">$75,000 - $100,000</option>
          <option value="above100k">Above $100,000</option>
        </select>
      </div>

      <div class="form-group">
        <label for="year">Year</label>
        <input type="text" placeholder="From">
        <input type="text" placeholder="To">
      </div>

      <div class="form-group">
        <label for="location">Location</label>
        <input type="text" placeholder="City or ZIP code">
      </div>

      <div class="filter-buttons">
        <button class="clear-btn">Clear Filters</button>
        <button class="apply-btn">Apply Filters</button>
      </div>
    </div>
  </div>
</div>

<div class="container4">
  <h4>Popular:</h4>
  <button>Luxury Cars</button>
  <button>SUVs</button>
  <button>Electric</button>
  <button>Under $20k</button>
  <button>New Arrivals</button>
  <button>Sport Bikes</button>
</div>


<script>
  function toggleAccordion() {
  document.getElementById("accordion").classList.toggle("active");
}
</script>
    <!-- #414A37, #99744A, #DBC2A6 -->
    <!-- #50207A, #D6B9FC, #838CE5 -->
</body>
</html>