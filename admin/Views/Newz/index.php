<style>
    .search-wrapper {
            display: flex;
            gap: 10px;
            width: 400px;
            margin: 50px auto;
            align-items: center;
            position: relative;
        }

        .search-container {
            position: relative;
            flex-grow: 1;
        }

        .search-input {
            width: 100%;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            border-radius: 25px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
        }

        .filter-btn {
            background: none;
            border: 1px solid #ddd;
            border-radius: 25px;
            padding: 12px 15px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            position: relative;
        }

        .filter-btn:hover {
            background-color: #f5f5f5;
            border-color: #007bff;
            color: #007bff;
        }

        .filter-dropdown {
            display: none;
            position: absolute;
            right: 0;
            top: 110%;
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            min-width: 200px;
            z-index: 100;
        }

        .filter-dropdown.active {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        .filter-option {
            margin-bottom: 10px;
        }

        .filter-option label {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            padding: 8px;
            border-radius: 4px;
        }

        .filter-option label:hover {
            background-color: #f8f9fa;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .search-input:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.25);
        }

          body {
            background: #f0f5f9;
            font-family: 'Poppins', sans-serif;
        }
        
        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
        }
        
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }
        
        .card-img {
            height: 220px;
            object-fit: cover;
            transition: transform 0.3s;
        }
        
        .card:hover .card-img {
            transform: scale(1.05);
        }
        
        .card-body {
            padding: 1.5rem;
        }
        
        .card-title {
            font-weight: 700;
            color: #2d3436;
            background: linear-gradient(45deg, #6c5ce7, #a8a4e6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .card-text {
            color: #636e72;
            font-size: 0.95rem;
            line-height: 1.7;
            margin: 1rem 0;
        }
        
        .price-tag {
            font-size: 1.5rem;
            color: #e84393;
            font-weight: 700;
            margin: 1rem 0;
        }
        
        .btn-book {
            background: linear-gradient(45deg, #6c5ce7, #a8a4e6);
            border: none;
            border-radius: 8px;
            color: white;
            padding: 0.8rem 2rem;
            width: 100%;
            transition: all 0.3s;

        }
        
        .btn-book:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(108, 92, 231, 0.4);
        }
        
        .badge-trending {
            position: absolute;
            top: 15px;
            left: -5px;
            background: #e84393;
            color: white;
            padding: 0.3rem 1.5rem;
            transform: rotate(-45deg);
            font-size: 0.8rem;
            z-index: 1;
        }
        
        .rating {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(255, 255, 255, 0.9);
            color: #ff9f43;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-weight: 600;
        }
</style>
    
    <div class="search-wrapper">
        <div class="search-container">
            <input type="search" id = "searchInput" class="search-input" placeholder="Search...">
            <i class="fas fa-search search-icon"></i>
        </div>
        <div class="filter-wrapper">
            <button class="filter-btn" aria-label="Filter options" id="filterButton">
                <i class="fas fa-filter"></i>
                <span>Filters</span>
            </button>
            <div class="filter-dropdown" id="filterDropdown">
                <div class="filter-option">
                    <label>
                        <input type="checkbox" name="position">
                        Position
                    </label>
                </div>
                <div class="filter-option">
                    <label>
                        <input type="checkbox" name="price">
                        Price
                    </label>
                </div>
                <div class="filter-option">
                    <label>
                        <input type="checkbox" name="dimension">
                        Dimension
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="item-list" id="itemList"></div>
            

 <div class="container-fluid">
    <div class="row">

    <div class="container py-5">
        <h2 class="text-center mb-5" style="color: #2d3436;"> Mwananchi Ads Cards</h2>
        
        <div class="row  row-cols-1 row-cols-md-3 row-cols-lg-3 g-3">
            <!-- Card 1 -->
            <?=$Mwananchi; ?>
        </div>
    </div>



    <div class="container py-5">
        <h2 class="text-center mb-5" style="color: #2d3436;">Citizen Ads</h2>
        
        <div class="row  row-cols-1 row-cols-md-3 row-cols-lg-3 g-3">
            <!-- Card 1 -->
            <?=$Citizen; ?>
        </div>
    </div>






    <div class="container py-5">
        <h2 class="text-center mb-5" style="color: #2d3436;">MwanaSpoti Ads</h2>
        
        <div class="row  row-cols-1 row-cols-md-3 row-cols-lg-3 g-3">
            <!-- Card 1 -->
            <?=$mwanaspoti; ?>
        </div>
    </div>


     







           
               
            <!--    SPONSORED CONTENT -->
            <div class="row" style = 'margin-bottom:5px;margin-top:8%; display: none;'>
                <div class="col-md-9 border-right" style = 'margin-bottom:5%;margin-top:22px;'>
                    <h3 style = 'color: #D0D4E7;'> SPONSORED CONTENT</h3>
                </div>


                <?=$sc; ?>
            </div>
    
    </div> <!-- end row --> 


</div> <!-- container-fluid -->

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

    

   

   









