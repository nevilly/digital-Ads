
<?php include_once('db.php');

 
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



     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="styles.css">
    <style>
   *{margin: 0;padding: 0;-webkit-font-smoothing: antialiased;-webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;text-shadow: rgba(0,0,0,.01) 0 0 1px}body{font-family: 'Rubik', sans-serif;font-size: 14px;font-weight: 400;background: #E0E0E0;color: #000000}ul{list-style: none;margin-bottom: 0px}.button{display: inline-block;background: #0e8ce4;border-radius: 5px;height: 48px;-webkit-transition: all 200ms ease;-moz-transition: all 200ms ease;-ms-transition: all 200ms ease;-o-transition: all 200ms ease;transition: all 200ms ease}.button a{display: block;font-size: 18px;font-weight: 400;line-height: 48px;color: #FFFFFF;padding-left: 35px;padding-right: 35px}.button:hover{opacity: 0.8}.cart_section{width: 100%;padding-top: 93px;padding-bottom: 111px}.cart_title{font-size: 30px;font-weight: 500}.cart_items{margin-top: 8px}.cart_list{border: solid 1px #e8e8e8;box-shadow: 0px 1px 5px rgba(0,0,0,0.1);background-color: #fff}.cart_item{width: 100%;padding: 15px;padding-right: 46px}.cart_item_image{width: 133px;height: 133px;float: left}.cart_item_image img{max-width: 100%}.cart_item_info{width: calc(100% - 133px);float: left;padding-top: 18px}.cart_item_name{margin-left: 7.53%}.cart_item_title{font-size: 14px;font-weight: 400;color: rgba(0,0,0,0.5)}.cart_item_text{font-size: 18px;margin-top: 35px}.cart_item_text span{display: inline-block;width: 20px;height: 20px;border-radius: 50%;margin-right: 11px;-webkit-transform: translateY(4px);-moz-transform: translateY(4px);-ms-transform: translateY(4px);-o-transform: translateY(4px);transform: translateY(4px)}.cart_item_price{text-align: right}.cart_item_total{text-align: right}.order_total{width: 100%;height: 60px;margin-top: 30px;border: solid 1px #e8e8e8;box-shadow: 0px 1px 5px rgba(0,0,0,0.1);padding-right: 46px;padding-left: 15px;background-color: #fff}.order_total_title{display: inline-block;font-size: 14px;color: rgba(0,0,0,0.5);line-height: 60px}.order_total_amount{display: inline-block;font-size: 18px;font-weight: 500;margin-left: 26px;line-height: 60px}.cart_buttons{margin-top: 60px;text-align: right}.cart_button_clear{display: inline-block;border: none;font-size: 18px;font-weight: 400;line-height: 48px;color: rgba(0,0,0,0.5);background: #FFFFFF;border: solid 1px #b2b2b2;padding-left: 35px;padding-right: 35px;outline: none;cursor: pointer;margin-right: 26px}.cart_button_clear:hover{border-color: #0e8ce4;color: #0e8ce4}.cart_button_checkout{display: inline-block;border: none;font-size: 18px;font-weight: 400;line-height: 48px;color: #FFFFFF;padding-left: 35px;padding-right: 35px;outline: none;cursor: pointer;vertical-align: top}
    </style>



     <style>
        .gradient-bg {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
        }
        
        .modal-header {
            border-bottom: none;
            padding: 2rem;
        }
        
        .modal-content {
            border-radius: 1rem;
            overflow: hidden;
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        
        .checkout-form .form-control {
            border-radius: 0.5rem;
            padding: 1rem;
            border: 2px solid #e5e7eb;
            transition: all 0.3s ease;
        }
        
        .checkout-form .form-control:focus {
            border-color: #6366f1;
            box-shadow: none;
        }
        
        .payment-options {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
            margin: 1rem 0;
        }
        
        .payment-card {
            border: 2px solid #e5e7eb;
            border-radius: 0.5rem;
            padding: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .payment-card:hover {
            border-color: #6366f1;
        }
        
        .payment-card.active {
            border-color: #6366f1;
            background: #f8f9fa;
        }
        
        .confirm-btn {
            background: #6366f1;
            color: white;
            padding: 1rem 2rem;
            border-radius: 0.5rem;
            border: none;
            width: 100%;
            transition: all 0.3s ease;
        }
        
        .confirm-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(99, 102, 241, 0.3);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark clipped-header">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-rocket me-2"></i>MwanaAds</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Download</a>
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
              <!--           <a href="#" class="text-white cart-icon">
                            <i class="bi bi-person-circle fs-5"></i>
                        </a> -->
                    </div></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>



     <div class="cart_section">
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-10 offset-lg-1">
                 <div class="cart_container">
                     <div class="cart_title">Booking System<small> (<?=$result_badge_count; ?> item in your book) </small></div>


                     <div class="cart_items">
                         <ul class="cart_list">
                           <?=$book; ?>
                         </ul>
                     </div>
                     <div class="order_total">
                         <div class="order_total_content text-md-right">
                             <div class="order_total_title">Order Total:</div>
                             <div class="order_total_amount"><?= $total; ?> Tsh</div>
                         </div>
                     </div>
                     <div class="cart_buttons">

                      <a href="index.php"> <button type="button" class="button cart_button_clear">Continue Shopping</button> </a>
                        <button type="button" class="button  cart_button_checkout" style=" background: linear-gradient(135deg, #6366f1, #8b5cf6)" data-bs-toggle="modal" data-bs-target="#checkoutModal">Checkout</button> </div>
                 </div>
             </div>
         </div>
     </div>
 </div>





 <!-- Checkout Modal -->
<div class="modal fade" id="checkoutModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header gradient-bg text-white">
                <h5 class="modal-title">Checkout</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body p-4">
                
                    <!-- Personal Info -->
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" >
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" >
                    </div>
                    
                    <!-- Payment Details -->
                    <div class="mb-3">
                        <label class="form-label">Card Number</label>
                        <input type="text" class="form-control" placeholder="4242 4242 4242 4242" >
                    </div>
                    
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label class="form-label">Expiration Date</label>
                            <input type="text" class="form-control" placeholder="MM/YY" >
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">CVC</label>
                            <input type="text" class="form-control" placeholder="123" >
                        </div>
                    </div>
                    
                    <!-- Payment Methods -->
                    <div class="payment-options">
                        <div class="payment-card active">
                            <i class="bi bi-credit-card fs-5"></i>
                            <span>Credit Card</span>
                        </div>
                        <div class="payment-card">
                            <i class="bi bi-paypal fs-5"></i>
                            <span>PayPal</span>
                        </div>
                        <div class="payment-card">
                            <i class="bi bi-google fs-5"></i>
                            <span>Google Pay</span>
                        </div>
                    </div>
                    
                    <!-- Confirm Button -->
                    <a href="invoice.php"><button type="submit"  class="confirm-btn mt-4">
                        Confirm Payment - <?= $total; ?> Tsh
                    </button>
               
            </div>


   

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>






