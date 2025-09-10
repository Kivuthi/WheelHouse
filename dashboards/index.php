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
        <div class="headaer">

        <div class="logo">
            <img src="" alt="">
        </div>

        <div class="links">
            <a href="#">Cars</a>
            <a href="#">Bikes</a>
            <a href="#">Import</a>
            <a href="#">Dealers</a>
        </div>

        <div class="buttons">
            <button type="submit">Login</button>
            <button type="submit">Become a Seller</button>
        </div>
        </div>
    </div>

     <div class="container2">
        <div class="hero-section">
            <p><h1>West-Side Co.</h1></p>
            <p><h3>Your Premier Automotive Marketplace</h3></p>
            <p>Discover premium vehicles from trusted dealers. Cars, bikes, and import vehicles all in one place.</p>
            <div class="quick-link">
                <button type="submit">Browse Vehicles -></button>
                <button type="submit">Become a Seller</button>
            </div>
        </div>
     </div>

     <div class="container3">
        <div class="search">
            <input type="text" name="search" placeholder="Search by brand, model, or keyword...">
            <button type="submit">All Vehicles</button>
            <button type="submit">cars</button>
            <button type="submit">Bikes</button>
            <button type="submit">Search</button>
            <button class="filter" type="button">filter</button>
        </div>
     </div>

     <div class="container3B">
        <div class="accordion">
            <div class="accordion-content">
                <div class="budget-filter">
                    <label for="brand">Brand</label>
                    <select name="brand" id="brand"></select>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>

                    <label for="budget">Budget</label>
                    <select name="price" id="price"></select>
                    <option value="under $10,000">Under $10,000</option>
                    <option value="$10,000-$25,000">$10,000-$25,000</option>
                    <option value="$25,000-$50,000">$25,000-$50,000</option>
                    <option value="$50,000-$75,000">$50,000-$75,000</option>
                    <option value="$75,000-$100,000">$75,000-$100,000</option>
                    <option value="above $100,000">Above $100,000</option>

                    <label for="year">Year</label>
                    <input type="year" name="year" placeholder="From">
                    <input type="year" name="year" placeholder="To">

                    <label for="location">Location</label>
                    <input type="text" name="loaction" placeholder="city or ZIP code">
                </div>
            </div>
            </div>
        </div>

     <div class="container4">
        <h4>Popular: </h4>
        <button type="button">Luxury cars</button>
        <button type="button">SUVs</button>
        <button type="button">Electric</button>
        <button type="button">Under $20k</button>
        <button type="button">New Arrivals</button>
        <button type="button">Sport Bikes</button>
     </div>


    <script>
  const headers = document.querySelectorAll(".filter");

  headers.forEach(header => {
    header.addEventListener("click", () => {
      const content = header.nextElementSibling;
      content.classList.toggle("open");

      if (content.classList.contains("open")) {
        content.style.maxHeight = content.scrollHeight + "px";
      } else {
        content.style.maxHeight = 0;
      }
    });
  });
</script>
    <!-- #414A37, #99744A, #DBC2A6 -->
    <!-- #50207A, #D6B9FC, #838CE5 -->
</body>
</html>