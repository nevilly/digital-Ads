
<?php 
include_once('db.php');
include_once('head.php');

$products = [
    ['id' => 1, 'name' => 'Citizen', 'size' => 'One Eight', 'position' => 'Normal', 'price' => 500000],
    ['id' => 2, 'name' => 'Mwananchi', 'size' => 'Full Page', 'position' => 'Normal', 'price' => 2400000],
    ['id' => 8, 'name' => 'MwanaSpoti', 'size' => 'Full Page', 'position' => 'Normal', 'price' => 2400000],
    ['id' => 7, 'name' => 'Citizen', 'size' => 'small', 'position' => 'Special', 'price' => 1000000],
    ['id' => 4, 'name' => 'The citizen', 'size' => 'small', 'position' => 'Special', 'price' => 50],
    ['id' => 10, 'name' => 'Facebook', 'size' => 'medium', 'position' => 'Font', 'price' => 1],
    ['id' => 11, 'name' => 'Instagram', 'size' => 'medium', 'position' => 'Font', 'price' => 211385],
];

// Initialize filtered products
$filteredProducts = $products;

// Filter functions
if (!empty($_GET['search'])) {
    $search = strtolower($_GET['search']);
    $filteredProducts = array_filter($filteredProducts, function($product) use ($search) {
        return strpos(strtolower($product['name']), $search) !== false;
    });
}

if (!empty($_GET['size'])) {
    $size = $_GET['size'];
    $filteredProducts = array_filter($filteredProducts, function($product) use ($size) {
        return $product['size'] === $size;
    });
}

if (!empty($_GET['position'])) {
    $position = $_GET['position'];
    $filteredProducts = array_filter($filteredProducts, function($product) use ($position) {
        return $product['position'] === $position;
    });
}

$minPrice = isset($_GET['min_price']) ? (float)$_GET['min_price'] : null;
$maxPrice = isset($_GET['max_price']) ? (float)$_GET['max_price'] : null;

$filteredProducts = array_filter($filteredProducts, function($product) use ($minPrice, $maxPrice) {
    
    //echo var_dump($product['price']);

    $price =  400 ;
   

    return (($minPrice === null || $price >= $minPrice) && 
            ($maxPrice === null || $price <= $maxPrice));
});

// Reset array keys
$filteredProducts = array_values($filteredProducts);


// AJAX response
if (isset($_GET['ajax'])) {
    if (empty($filteredProducts)) {
        echo '';
    } else {
        foreach ($filteredProducts as $product) {
            echo '<div class="card mb-3">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . htmlspecialchars($product['name']) . '</h5>';
            echo '<p class="card-title"> Adv on ' . htmlspecialchars($product['name']) . '</p>';
            echo '<div class="row">';
            echo '<div class="col"> <span class="badge bg-primary">' . htmlspecialchars($product['size']) . '</span></div>';
            echo '<div class="col"> <span class="badge bg-secondary">' . htmlspecialchars($product['position']) . '</span></div>';
            echo '<div class="col"><span class="badge bg-success">' . htmlspecialchars($product['price']) . '</span></div>';
            echo '</div>    </div>
             <div class=\"col text-center \" style="background:purple; border-radius:24px 24px 0px 0px; cursor:pointer;" type=\"button\" id="\btnT\" onClick = bookNow('.$product['id'].')  >
                                    <h5 class=\"text-center\" style="margin-left:40%; color:white;padding-top:10px;">Book</h5>
                                  </div>

            </div>';
        }
    }
    exit;
}
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

    <!-- Hero Section -->
  <!--   <div class="container">
        <div class="hero-content">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bold mb-4">Transform Your Digital Experience</h1>
                <p class="lead mb-4">Innovative solutions for modern businesses</p>
                <button class="btn btn-custom">Start Free Trial</button>
            </div>
        </div>
    </div> -->

     <div class="container py-5">
        <h1 class="mb-4 text-center">Ads Finder</h1>
        
        <!-- Search Form -->
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

        <!-- Results Container -->
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

        <!-- Loader -->
        <div id="loader" class="loader text-center">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class ="ju">
<h1 class="mb-4 text-center ">advertisement Rate</h1>
</div>

    	<div class="row">


    	<?= $news; ?>
    		

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

   

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        const loadResults = () => {
            $('#loader').show();
            $.ajax({
                url: window.location.pathname + '?ajax=1',
                data: $('#searchForm').serialize(),
                success: (response) => {
                    $('#results').html(response);
                    $('#loader').hide();
                },
                error: () => {
                    $('#results').html('<div class="alert alert-danger">Error loading results</div>');
                    $('#loader').hide();
                }
            });
        };

        // Initial load
        loadResults();

        // Trigger search on any filter change
        $('#searchForm input, #searchForm select').on('input change', function() {
            history.replaceState(null, '', '?' + $('#searchForm').serialize());
            loadResults();
        });
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




  