 <?php 
include_once('db.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MwanaAds</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">




    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="styles.css">
  
</head>
<body>
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
        <!-- PDF Card -->
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Sample Document</h5>
                <p class="card-text">Click the button below to view the PDF document.</p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pdfModal">
                    View PDF
                </button>
            </div>
        </div>
    </div>

    <!-- PDF Viewer Modal -->
    <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pdfModalLabel">PDF Viewer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- PDF Viewer -->
                    <embed 
                        src="your-document.pdf" 
                        type="application/pdf" 
                        style="width: 100%; height: 80vh;"
                        aria-label="PDF Document"
                    >
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>