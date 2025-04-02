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

           .custom-alert {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: linear-gradient(145deg, #6d8cff, #00ffcc);
            padding: 35px 60px;
            border-radius: 20px;
            color: white;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            z-index: 1000;
            animation: float 3s ease-in-out infinite;
            border: 2px solid rgba(255,255,255,0.1);
        }

        @keyframes float {
            0%, 100% { transform: translate(-50%, -50%) translateY(0); }
            50% { transform: translate(-50%, -50%) translateY(-10px); }
        }

        .alert-content {
            text-align: center;
            font-family: 'Segoe UI', sans-serif;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.2);
        }

        .alert-button {
            background: rgba(255,255,255,0.9);
            color: #0066ff;
            border: none;
            padding: 12px 30px;
            border-radius: 30px;
            margin-top: 25px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
        }

        .alert-button:hover {
            background: white;
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.4);
            backdrop-filter: blur(5px);
            z-index: 999;
        }

        .alert-message {
            font-size: 1.2em;
            margin: 15px 0;
            line-height: 1.5;
        }
   
    </style>
</head>
<body>