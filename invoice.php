
<?php include_once('db.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .invoice-container {
            max-width: 1000px;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        
        .invoice-header {
            border-bottom: 2px solid #0d6efd;
            margin-bottom: 30px;
            padding-bottom: 20px;
        }
        
        .invoice-table th {
            background-color: #f8f9fa !important;
        }
        
        .total-section {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
        }
        
        .print-btn {
            transition: all 0.3s ease;
        }
        
        @media print {
            .print-btn { display: none; }
            .invoice-container { box-shadow: none; }
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <!-- Header -->
        <div class="invoice-header">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-primary"><i class="bi bi-receipt"></i> Invoice</h2>
                    <p class="mb-0">Your Company Name</p>
                    <p class="mb-0">123 Business Street</p>
                    <p class="mb-0">New York, NY 10001</p>
                </div>
                <div class="col-md-6 text-end">
                    <p class="mb-0"><strong>Invoice #:</strong> INV-00123</p>
                    <p class="mb-0"><strong>Date:</strong> 2023-12-25</p>
                    <p class="mb-0"><strong>Due Date:</strong> 2024-01-25</p>
                </div>
            </div>
        </div>

        <!-- Bill To -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Bill To:</h5>
                        <p class="mb-0">Client Name</p>
                        <p class="mb-0">Client Company</p>
                        <p class="mb-0">456 Client Address</p>
                        <p class="mb-0">New York, NY 10001</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Items Table -->
        <table class="table invoice-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Color</th>
                    <th>size</th>
                    <th>Postion</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                
                <?= $invoice; ?>
               
            </tbody>
        </table>

        <!-- Total Section -->
        <div class="total-section mt-4">
            <dl class="row">
                <dt class="col-sm-9 text-end">Subtotal:</dt>
                <dd class="col-sm-3 text-end"><?= $total; ?> Tsh</dd>
                
                <dt class="col-sm-9 text-end">Tax (10%):</dt>
                <dd class="col-sm-3 text-end">0 Tsh</dd>
                
                <dt class="col-sm-9 text-end"><strong>Grand Total:</strong></dt>
                <dd class="col-sm-3 text-end"><strong><?=$total; ?> Tsh</strong></dd>
            </dl>
        </div>

        <!-- Footer -->
        <div class="mt-5 border-top pt-3">
            <div class="row">
                <div class="col-md-6">
                    <h6>Payment Instructions:</h6>
                    <p class="mb-0">Bank Name: Example Bank</p>
                    <p class="mb-0">Account Number: 123-456-789</p>
                    <p class="mb-0">SWIFT/BIC: EXMPUS33</p>
                </div>
                <div class="col-md-6 text-end">
                    <p class="text-muted">Thank you for your business!</p>
                    <button class="btn btn-primary print-btn" onclick="window.print()">
                        <i class="bi bi-printer"></i> Print Invoice
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>