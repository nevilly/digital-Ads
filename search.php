<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Filter</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Search Filter</h2>
        
        <!-- Search and Filters -->
        <div class="row mb-4">
            <div class="col-md-12">
                <input type="text" id="searchInput" class="form-control" placeholder="Search...">
            </div>
            <div class="col-md-3 mt-3">
                <select class="form-select" id="priceFilter">
                    <option value="">Price Range</option>
                    <option value="0-50">0 Tsh - 50 Tsh</option>
                    <option value="51-100">$51 - $100</option>
                    <option value="101-200">$101 - $200</option>
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
        <div id="resultsContainer"></div>
    </div>

    <!-- Bootstrap JS and dependencies -->
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
</body>
</html>