<?php 
$games= [
    [
        "title" => "Game 1",
        "price" => "100",
        "genre" => "Action",
        "availability" => "Available",
        "platform" => "PC",
        "size" => "10GB",
        "release_date" => "2022",
        "min_requirements" => "Intel Core i5, 8GB RAM, 2GB VRAM, 20GB Storage",
        "image" => "https://i.pinimg.com/564x/3f/4c/84/3f4c84129f0c01e819e73fc392480bce.jpg"
      ],
      [
        "title" => "Game 2",
        "price" => "200",
        "genre" => "Adventure",
        "availability" => "Available",
        "platform" => "PC",
        "size" => "20GB",
        "release_date" => "2022",
        "min_requirements" => "Intel Core i7, 16GB RAM, 4GB VRAM, 40GB Storage",
        "image" => "https://i.pinimg.com/564x/97/a4/88/97a488fdb368f0b37e719c2a191305c0.jpg"
      ],
      [
        "title" => "Game 3",
        "price" => "300",
        "genre" => "RPG",
        "availability" => "Available",
        "platform" => "PC",
        "size" => "30GB",
        "release_date" => "2022",
        "min_requirements" => "Intel Core i9, 32GB RAM, 8GB VRAM, 60GB Storage",
        "image" => "https://i.pinimg.com/736x/af/bf/cf/afbfcfcaf49486a63eafbd6e845beccf.jpg"
      ],
      [
        "title" => "Game 4",
        "price" => "400",
        "genre" => "Shooter",
        "availability" => "Available",
        "platform" => "PC",
        "size" => "40GB",
        "release_date" => "2022",
        "min_requirements" => "Intel Core i3, 4GB RAM, 1GB VRAM, 10GB Storage",
        "image" => "https://i.pinimg.com/736x/ab/0f/26/ab0f260c508429e347c66acc18d4f24a.jpg"
      ],
      [
        "title" => "Game 5",
        "price" => "500",
        "genre" => "Strategy",
        "availability" => "Available",
        "platform" => "PC",
        "size" => "50GB",
        "release_date" => "2022",
        "min_requirements" => "Intel Core i5, 8GB RAM, 2GB VRAM, 20GB Storage",
        "image" => "https://i.pinimg.com/564x/0f/55/c2/0f55c28bbaf2deb75ea2d33707e75129.jpg"
      ],
      [
        "title" => "Game 6",
        "price" => "600",
        "genre" => "Simulation",
        "availability" => "Available",
        "platform" => "PC",
        "size" => "60GB",
        "release_date" => "2022",
        "min_requirements" => "Intel Core i5, 8GB RAM, 2GB VRAM, 20GB Storage",
        "image" => "https://i.pinimg.com/736x/e5/da/ae/e5daae2ee37b767d982982cc766ae76f.jpg"
    
      ],
      [
        "title" => "Game 7",
        "price" => "700",
        "genre" => "Sports",
        "availability" => "Available",
        "platform" => "PC",
        "size" => "70GB",
        "release_date" => "2022",
        "min_requirements" => "Intel Core i5, 8GB RAM, 2GB VRAM, 20GB Storage",
        "image" => "https://i.pinimg.com/564x/fe/c6/83/fec683f6067f82ed11d75b33e73ea5de.jpg"
      ],
      [
        "title" => "Game 8",
        "price" => "800",
        "genre" => "Horror",
        "availability" => "Available",
        "platform" => "PC",
        "size" => "80GB",
        "release_date" => "2022",
        "min_requirements" => "Intel Core i5, 8GB RAM, 2GB VRAM, 20GB Storage",
        "image" => "https://i.pinimg.com/564x/2a/77/5d/2a775da242bfe46dd245823826fee4dd.jpg"
      ]
      // Add more games as needed
    ];
    $products= [
      [
        "name" => "Product 1",
        "category" => "Gaming Pad",
        "stock" => "In Stock",
        "delivery" => "Local Delivery Available",
        "price" => "69.99",
        "image" => "https://i.pinimg.com/564x/be/76/7e/be767e78f76491d297104777627b2f17.jpg"
      ],
      [
        "name" => "Product 2",
        "category" => "Gaming Pad",
        "stock" => "In Stock",
        "delivery" => "Local Delivery Available",
        "price" => "69.99",
        "image" => "https://i.pinimg.com/564x/cf/d6/7c/cfd67cf1c0bb1c311b185c144dd211b6.jpg"
      ],
      [
        "name" => "Product 3",
        "category" => "Gaming Pad",
        "stock" => "In Stock",
        "delivery" => "Local Delivery Available",
        "price" => "69.99",
        "image" => "https://i.pinimg.com/564x/be/76/7e/be767e78f76491d297104777627b2f17.jpg"
      ],
      [
        "name" => "Product 4",
        "category" => "PS 5",
        "stock" => "In Stock",
        "delivery" => "Local Delivery Available",
        "price" => "69.99",
        "image" => "https://i.pinimg.com/736x/3f/4c/84/3f4c84129f0c01e819e73fc392480bce.jpg"
      ],
      [
        "name" => "Product 5",
        "category" => "Cusomized Gaming Pad",
        "stock" => "In Stock",
        "delivery" => "Local Delivery Available",
        "price" => "69.99",
        "image" => "https://i.pinimg.com/564x/fe/c6/83/fec683f6067f82ed11d75b33e73ea5de.jpg"
      ],
      [
        "name" => "Product 6",
        "category" => "Gaming Pad",
        "stock" => "In Stock",
        "delivery" => "Local Delivery Available",
        "price" => "69.99",
        "image" => "https://i.pinimg.com/564x/2a/77/5d/2a775da242bfe46dd245823826fee4dd.jpg"
      ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>x-Gamers</title>
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" href="static/bootstrap/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
      body {
        background-color: #f2f2f2;
      }
      #sidebar {
        width: 250px;
        display: none;
      }
    </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Details</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Customer Portal</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="d-flex">
    <button class="btn btn-dark" id="menuToggle"><i class="bi bi-list"></i></button>
  </div>
  <div id="sidebar" class="bg-dark position-fixed top-0 start-0 vh-100">
    <ul class="list-group list-group-flush mt-3">
      <li class="list-group-item bg-dark text-light">
        <a href="components/Dashboard.html" class="text-decoration-none text-light">Dashboard</a>
      </li>
      <li class="list-group-item bg-dark text-light">
        <a href="components/Aboutus.html" class="text-decoration-none text-light">About Us</a>
      </li>
      <li class="list-group-item bg-dark text-light">
        <a href="components/Products.html" class="text-decoration-none text-light">Products</a>
      </li>
    </ul>
  </div>
  
  <script>
    document.getElementById("menuToggle").onclick = function() {
      var sidebar = document.getElementById("sidebar");
      sidebar.style.display = sidebar.style.display === "none" ? "block" : "none";
    };
  </script>

  <section>
    <div class="hero w-100 h-90 video-background">
      <iframe id="youtube-video" 
        src="https://www.youtube.com/embed/g3T9K06p358?autoplay=1&mute=1&loop=1&playlist=g3T9K06p358&controls=0&showinfo=0&modestbranding=1"
        title="YouTube video player" 
        frameborder="0" 
        allow="autoplay; fullscreen" 
        allowfullscreen>
      </iframe>
      <div class="content">
        <h1>Welcome to My Website</h1>
        <p>Enjoy the background video!</p>
      </div>
    </div>
  </section>

  <section class="games">
    <div class="text">
      <h1>Games</h1>
      <p>Get the best games at the best prices</p>
      <div class="d-flex flex-row align-items-start overflow-x-scroll gap-3 p-3 w-100">
        <?php foreach ($games as $game) { ?>
        <div class="card mb-3 game-card col-md-3 shadow border rounded-md">
          <div class="card-header bg-white border-0 p-0">
            <div class="w-100 h-64 overflow-hidden min-w-72 position-relative">
              <img src="<?php echo $game["image"]; ?>" class="card-img-top img-fluid" alt="...">
              <button type="button" class="btn btn-outline-primary position-absolute top-2 right-2 z-3 border-0 shadow-none">
                <i class="bi-heart"></i>
              </button>
            </div>
          </div>
          <div class="card-body p-2">
            <h5 class="card-title"><?php echo $game["title"]; ?></h5>
            <div>
              <span class="badge rounded-pill text-bg-primary"><?php echo $game["price"]; ?></span>
              <span class="badge rounded-pill text-bg-secondary"><?php echo $game["genre"]; ?></span>
              <span class="badge rounded-pill text-bg-warning"><?php echo $game["platform"]; ?></span>
              <span class="badge rounded-pill text-bg-info"><?php echo $game["size"]; ?></span>
              <span class="badge rounded-pill text-bg-success"><?php echo $game["availability"]; ?></span>
            </div>
            <p class="card-text bold">Release Date: <strong><?php echo $game["release_date"]; ?></strong></p>
            <p class="card-text">Minimum requirements: <small class="text-body-secondary"><?php echo $game["min_requirements"]; ?></small></p>
          </div>
          <div class="card-footer d-flex align-items-center gap-2 justify-content-between bg-white border-0 p-2">
            <a href="#" class="btn btn-primary">View</a>
            <a href="#" class="btn btn-secondary">Add to Cart</a>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <section class="shop">
    <div class="products d-flex flex-row align-items-start overflow-x-scroll gap-3 p-3">
      <?php foreach ($products as $item) { ?>
      <div class="col-md-4 product-card">
        <div class="card">
          <img src="<?php echo $item["image"]; ?>" alt="Elden Ring" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title fst-italic fw-bold"><?php echo $item["name"]; ?></h5>
            <p class="card-text"><strong>Category:</strong> <?php echo $item["category"]; ?></p>
            <p class="card-text"><strong><?php echo $item["stock"]; ?></strong></p>
            <p class="card-text"><i class="bi bi-truck"></i> <?php echo $item["delivery"]; ?></p>
            <p class="card-text"><strong>Price:</strong> $<?php echo $item["price"]; ?></p>
            <button class="btn add-to-cart"><i class="bi bi-cart"></i> Add to Cart</button>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </section>

  <?php include("templates/footer.html");?>

  <script src="static/js/index.js"></script>
</body>
</html>