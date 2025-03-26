<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <title>MwanaAds 1.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="reddeath" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <!-- <link rel="shortcut icon" href="<?=Util::staticUrl()?>assets/images/favicon.ico"> -->

    <!-- App css -->

    <link href="<?=Util::staticUrl()?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Plugins css -->
    <link href="<?=Util::staticUrl()?>assets/libs/quill/quill.core.css" rel="stylesheet" type="text/css" />
    <link href="<?=Util::staticUrl()?>assets/libs/quill/quill.bubble.css" rel="stylesheet" type="text/css" />
    <link href="<?=Util::staticUrl()?>assets/libs/quill/quill.snow.css" rel="stylesheet" type="text/css" />

    <!-- icons -->
    <link href="<?=Util::staticUrl()?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <link href="<?=Util::staticUrl()?>assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=Util::staticUrl()?>assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=Util::staticUrl()?>assets/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />
<style>


	.cart-item img {
     max-width: 100px;
     height: auto;
 }

 .quantity-input {
     width: 50px;
 }

 .cart-summary {
     background-color: #f8f9fa;
     border-radius: 10px;
 }
.scrollable-table {
    overflow-x: auto;
    white-space: nowrap;
}
.table {
    min-width: 1000px;
}


 .deduction-badge {
            background-color: #ff4444;
            color: white;
        }
        .help-icon {
            cursor: help;
            font-size: 1.2rem;
            color: #6c757d;
        }

    
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            padding: 15px;
        }

      .carousel-item.active {
    display: block;
    height: 200px;
    background-color: grey;
}


        
        .size-option {
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .size-option:hover {
            background-color: #f8f9fa;
        }
        
        .size-option.active {
            background-color: #0d6efd;
            color: white;
        }

         .product-card {
            max-width: 900px;
            width: 100%;
            margin: 0 auto;
        }

        
        
        .info-icon {
            cursor: pointer;
            color: #0d6efd;
            transition: transform 0.3s;
        }
        
        .info-icon:hover {
            transform: scale(1.2);
        }
        
        .specs-list dt {
            color: #6c757d;
            width: 160px;
        }
        
        .specs-list dd {
            margin-left: 180px;
        }
        
        @media (max-width: 768px) {
            .specs-list dt {
                width: 100%;
            }
            
            .specs-list dd {
                margin-left: 0;
                margin-bottom: 1rem;
            }




        }
    </style>
</head>
<script type="text/javascript">
      let client = {a : "<?=$this->token;?>",uri:"<?=Util::staticUrl();?>", u: "<?=$_SESSION['name']; ?>"}
   // let client = {a : "<?=$this->token;?>",uri:"<?=Util::staticUrl();?>"}
</script>
<!-- body start -->
<body class="loading" data-layout-color="light"  data-layout-mode="default" data-layout-size="fluid" data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='true'>

<!-- Begin page -->
<div id="wrapper">
	