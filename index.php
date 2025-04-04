
<?php 
    include_once('db.php');
    include_once('head.php');


?>



    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark clipped-header">
        <div class="container">
            <a class="navbar-brand" href="index.php"><i class="fas fa-rocket me-2"></i>MwanaAds</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                   
                    
                    <li class="nav-item">
                        <a class="nav-link" href="booking.php">Booking</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">  <!-- Icons -->
                    <div class="d-flex gap-3">
                        <a href="booking.php" class="text-white cart-icon position-relative">
                            <i class="bi bi-cart3 fs-5"></i>
                            <span class="badge bg-warning text-dark"><?=$result_badge_count; ?></span>
                        </a>
                        <a href="#" class="text-white cart-icon">
                            <i class="bi bi-person-circle fs-5"></i>
                        </a>
                    </div></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

   
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Ads Finder</h1>
        
        <!-- Search and Filters -->
        <div class="row mb-4">
            <div class="col-md-12">
                <input type="text" id="searchInput" class="form-control" placeholder="Search... Eg: Mwananchi">
            </div>
            <div class="col-md-3 mt-3">
                <select class="form-select" id="priceFilter">
                    <option value="">Price Range</option>
                    <option value="0-50">1 Tsh - 100000 Tsh</option>
                    <option value="100001-1000000">100001 Tsh - 1000000 Tsh</option>
                    <option value="10000001-10000001">10000001 Tsh - 10000000 Tsh</option>
                </select>
            </div>
            <div class="col-md-3 mt-3">
                <select class="form-select" id="sizeFilter">
                    <option value="">Position Size</option>
                    <option value="One Eight">One Eight</option>
                    <option value="Front Strip">Front Strip</option>
                    <option value="Half Page">Half Page</option>
                    <option value="Column Depth 33cm">Column Depth 33cm</option>
                </select>
            </div>
            <div class="col-md-3 mt-3">
                <select class="form-select" id="categoryFilter">
                    <option value="">Category</option>
                    <option value="card rate">card rate</option>
                    <option value="news">News</option>
                </select>
            </div>
        </div>

        <!-- Results Container -->
        <div class="row mt-5" >
              <div class=" row  w-100" id="resultsContainer">

        </div>
        </div>
    </div>





<!--     <div class="container py-5">
        <h1 class="mb-4 text-center">Ads Finder</h1>
        
        <!-- Search Form --
        <form id="searchForm" method="GET" class="mb-4 bg-light p-4 rounded-3 shadow-sm">
            <div class="row g-3">
                <div class="col-md-12">
                    <input type="text" class="form-control" name="search" placeholder="Search Brand Eg Mwananchi..."
                           value="<?= htmlspecialchars($_GET['search'] ?? '') ?>">
                </div>
                
                <div class="col-md-3">
                    <select class="form-select" name="size">
                        <option value="">All Sizes</option>
                        <option value="Full Page" <?= ($_GET['size'] ?? '') === 'Full Page' ? 'selected' : '' ?>>Full Page</option>
                        <option value="One Eight" <?= ($_GET['size'] ?? '') === 'One Eight' ? 'selected' : '' ?>>One Eight</option>
                        <option value="Half Page" <?= ($_GET['size'] ?? '') === 'Half Page ' ? 'selected' : '' ?>>Half Page</option>
                    </select>
                </div>
                
                <div class="col-md-3">
                    <select class="form-select" name="position">
                        <option value="">All Positions</option>
                        <option value="Normal" <?= ($_GET['position'] ?? '') === 'Normal' ? 'selected' : '' ?>>Normal</option>
                        <option value="Special" <?= ($_GET['position'] ?? '') === 'Special' ? 'selected' : '' ?>>Special</option>
                        <option value="Font" <?= ($_GET['position'] ?? '') === 'Font' ? 'selected' : '' ?>>Font</option>
                    </select>
                </div>
                
                <div class="col-md-3">
                    <input type="number" class="form-control" name="min_price" placeholder="Min Price"
                           value="<?= htmlspecialchars($_GET['min_price'] ?? '') ?>" step="1">
                </div>
                
                <div class="col-md-3">
                    <input type="number" class="form-control" name="max_price" placeholder="Max Price"
                           value="<?= htmlspecialchars($_GET['max_price'] ?? '') ?>" step="1">
                </div>
            </div>
        </form>

        <!-- Results Container --
        <div id="results" class ="row" >
            <?php if (empty($filteredProducts)): ?>
                <div class="alert alert-warning">No products found</div>
            <?php else: ?>
                <div class ="row col-md-3">
                    <div class = "col col-md-3">
                <?php foreach ($filteredProducts as $product): ?>
                    <div class="card mb-6" wdith= "3" style="display: none">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($product['name']) ?></h5>
                            <div class="row col-md-12">
                                <div class="col">
                                    <span class="badge bg-primary"><?= htmlspecialchars($product['size']) ?></span>
                                </div>
                                <div class="col">
                                    <span class="badge bg-secondary"><?= htmlspecialchars($product['position']) ?></span>
                                </div>
                           
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>

        <!-- Loader --
        <div id="loader" class="loader text-center">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
 -->

    <div class="container mt-5">
        <div class ="ju">
            <h1 class="mb-4 text-left display-6 ">advertisement Rate</h1>
        </div>

    	<div class="row  justify-content-center " >
    	   <?= $news; ?>
    	</div>
    </div>

    

 
    



    <div class="container content-section py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 w-100" >
                <h3 class="text-left mb-4 display-6 fw-bold ">MwanaAds Digital Advertise</h3>
                
                <div class="paragraph-group">
                    <p class="lead mb-4 fs-5">
                        MwanaAds  advertising encompasses marketing strategies that leverage online channels to promote 
                        products, services, and brands. Through targeted approaches using social media, search engines, 
                        and websites, businesses can reach specific audiences with precision and efficiency.
                    </p>
                    
                    <p class="mb-4 fs-5">
                        Modern digital advertising offers real-time analytics and performance tracking, enabling marketers 
                        to optimize campaigns dynamically. Platforms like Google Ads and Facebook Ads provide sophisticated 
                        targeting options based on demographics, interests, and user behavior.
                    </p>
                    
                    <p class="mb-0 fs-5">
                        The evolution of mobile technology and AI-driven personalization has transformed digital advertising, 
                        allowing for hyper-personalized content delivery. Emerging trends like video marketing and influencer 
                        partnerships continue to reshape the digital advertising landscape.
                    </p>
                </div>
            </div>
        </div>
    </div>


     <div class="container py-5">
        <div class="row justify-content-center g-4">
            <!-- Card 1 -->
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
                <div class="custom-card card shadow p-4">
                  
                        <img src = "https://cdn.landesa.org/wp-content/uploads/Mwananchi-logo.jpg" style="width: 200px;">
                    
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
                <div class="custom-card card shadow p-4">
                

                     <img src = "https://1000logos.net/wp-content/uploads/2023/07/Citizen-logo.jpg" style="width: 200px; padding-top:35px;">
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
                <div class="custom-card card shadow p-4">
                

                     <img src = "https://live.staticflickr.com/6059/5914426481_747a3e81db_b.jpg" style="width: 200px; padding-top:35px;">
                </div>
            </div>

           
        </div>
    </div>

    
    <div class="overlay" id="overlay" style="display: none"></div>

    <div class="custom-alert" id="customAlert">
        <div class="alert-content">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
            </svg>
            <div class="alert-message" id="alertMessage"></div>
            <button class="alert-button" onclick="hideSmoothAlert()">Got it!</button>
        </div>
    </div>

      <footer class="gradient-footer pt-5">
        <div class="container">
            <div class="row g-4">
                <!-- About Section -->
                <div class="col-md-4">
                    <h4 class="footer-heading">About Us</h4>
                    <p>We transform digital experiences through innovative solutions and creative thinking.</p>
                    <div class="d-flex gap-3 mt-4">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f text-white"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter text-white"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-instagram text-white"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-md-2">
                    <h4 class="footer-heading">Quick Links</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#" class="footer-link">Home</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="footer-link">Pricing</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="footer-link">About</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="footer-link">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="col-md-3">
                    <h4 class="footer-heading">Contact</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            123 Tb Street, Dar
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-phone me-2"></i>
                            +255
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-envelope me-2"></i>
                            emwansasu@gmail.com
                        </li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div class="col-md-3">
                    <h4 class="footer-heading">Newsletter</h4>
                    <p>Subscribe to our newsletter for updates</p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Enter email">
                        <button class="btn btn-light" type="button">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="row pt-5 pb-3">
                <div class="col-12 text-center">
                    <p class="mb-0">&copy; 2023 Nehemia David. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

   
</body>
</html>

    
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

 <script>
    $(document).ready(function() {
        // Function to load filtered results
        function loadResults() {
            const search = $('#searchInput').val();
            const price = $('#priceFilter').val();
            const size = $('#sizeFilter').val();
            const category = $('#categoryFilter').val();

            $.ajax({
                url: 'fetch_results.php',
                type: 'GET',
                data: {
                    search: search,
                    price: price,
                    size: size,
                    category: category
                },
                success: function(response) {
                    $('#resultsContainer').html(response);
                }
            });
        }

        // Event listeners for filters
        $('#searchInput, #priceFilter, #sizeFilter, #categoryFilter').on('input change', function() {
            loadResults();
        });

        // Initial load
        loadResults();
    });
    </script>
<!-- HTML Part -->


<script>
// JavaScript Part
    function bookNow(id) {
      // Collect form data
      const bookingData = {
        id: id
      };



      //Send data to server
      fetch('util.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(bookingData),
      })
      .then(response => response.text())
      .then(data => {
       
        // Reload window after successful submission
        window.location.reload();
        showSmoothAlert('Action completed successfully!');

      })
      .catch((error) => {
        console.error('Error:', error);
      });
    }
</script>


<script>
    function showSmoothAlert(message) {
        document.getElementById('overlay').style.display = 'block';
        document.getElementById('customAlert').style.display = 'block';
        document.getElementById('alertMessage').textContent = message;
    }

    function hideSmoothAlert() {
        document.getElementById('overlay').style.display = 'none';
        document.getElementById('customAlert').style.display = 'none';
    }
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();

    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/67e6bae9338fd8190ed1c41d/1inekk8t9';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->




  