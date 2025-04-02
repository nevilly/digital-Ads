
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
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Downloads</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="booking.php">Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
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

   

    <div class="container mt-5">


    	<div class="row">

    	<?= $news; ?>











    		

    	</div>

    </div>

     onclick=""

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




<!-- HTML Part -->


<script>

// bookNow(id,brandNm,ad_type, img,size,position,appearence,price,ad_unit,cashType,category,placement_type) 
// JavaScript Part
function bookNow(id) {
  // Collect form data
  const bookingData = {
    id: id
    
    // email: document.getElementById('email').value,
    // date: document.getElementById('date').value
  };

  //console.log(bookingData.id);

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
      showSmoothAlert('Action completed successfully!');
    // Reload window after successful submission
    window.location.reload();

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


