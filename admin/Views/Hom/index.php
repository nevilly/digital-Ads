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

       <!--  <div class="col-sm-8" style="background-color: #141627;"> -->
            <!-- end row -->
            <div class="row" style = 'margin-bottom:5px;margin-top:8%;'>
                <div class="col-md-9 border-right" style = 'margin-bottom:5%;margin-top:22px;'>
                    <h3 style = 'color: #D0D4E7;'>DISPLAY RATE CARD</h3>
                </div>
             
                <?=$dr; ?>
            </div>
            <!-- end row -->


            <div class="row" style = 'margin-bottom:5em;margin-top:8%;'>
                <div class="col-md-9 border-right" style = 'margin-bottom:5%;margin-top:22px;'>

                    <div class="mb-3">
                         
                        <div class="d-flex gap-4">

                           <h4 p-2 style = 'color: #D0D4E7;'>SOCIAL MEDIA</h4>
                           <h4 p-4 style = 'color: #D0D4E7;'>SOCIAL MEDIA</h4>
                           <h4 p-4 style = 'color: #D0D4E7;'>SOCIAL MEDIA</h4>
                        </div>
                    </div>
            
                </div>

                <?=$scm; ?>

            </div>
                <!-- end row -->


           
               
            <!--    SPONSORED CONTENT -->
            <div class="row" style = 'margin-bottom:5px;margin-top:8%; display: none;'>
                <div class="col-md-9 border-right" style = 'margin-bottom:5%;margin-top:22px;'>
                    <h3 style = 'color: #D0D4E7;'> SPONSORED CONTENT</h3>
                </div>


                <?=$sc; ?>
            </div>
       <!--  </div>  --><!-- end row --> 


          <!----Left Sid----->  
     <!--    <div class="col-sm-4">
            <div class="card" style="background-color: #1C1F37; border-radius:30px;  ">

                <div class="card  text-white rounded-3" style="background-color: #1C1F37; border-radius:30px;  ">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                          <h5 class="mb-0">Card details</h5>
                          <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                            class="img-fluid rounded-3" style="width: 45px;" alt="Avatar">
                        </div>

                        <p class="small mb-2">Card type</p>
                        <a href="#!" type="submit" class="text-white"><i
                            class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                        <a href="#!" type="submit" class="text-white"><i
                            class="fab fa-cc-visa fa-2x me-2"></i></a>
                        <a href="#!" type="submit" class="text-white"><i
                            class="fab fa-cc-amex fa-2x me-2"></i></a>
                        <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>

                        <form class="mt-4">
                          <div data-mdb-input-init class="form-outline form-white mb-4">
                            <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                              placeholder="Cardholder's Name" />
                            <label class="form-label" for="typeName">Cardholder's Name</label>
                          </div>

                          <div data-mdb-input-init class="form-outline form-white mb-4">
                            <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                              placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                            <label class="form-label" for="typeText">Card Number</label>
                          </div>

                          <div class="row mb-4">
                            <div class="col-md-6">
                              <div data-mdb-input-init class="form-outline form-white">
                                <input type="text" id="typeExp" class="form-control form-control-lg"
                                  placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                                <label class="form-label" for="typeExp">Expiration</label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div data-mdb-input-init class="form-outline form-white">
                                <input type="password" id="typeText" class="form-control form-control-lg"
                                  placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                                <label class="form-label" for="typeText">Cvv</label>
                              </div>
                            </div>
                          </div>

                        </form>

                        <hr class="my-4">

                        <div class="d-flex justify-content-between">
                          <p class="mb-2">Subtotal</p>
                          <p class="mb-2"> <?= $totalPrice; ?></p>
                        </div>

                        <div class="d-flex justify-content-between">
                          <p class="mb-2">Tax</p>
                          <p class="mb-2">0.00 Tsz</p>
                        </div>

                        <div class="d-flex justify-content-between mb-4">
                          <p class="mb-2">Total(Incl. taxes)</p>
                          <p class="mb-2"><?=$totalPrice; ?></p>
                        </div>

                        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-block btn-lg">
                          <div class="d-flex justify-content-between">
                            <span>Tzs<?= $totalPrice; ?> </span>
                            <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                          </div>
                        </button>

                    </div>
                </div>

            </div>


            <div class="card" style="background-color: #1C1F37; color:white;border-radius:30px;" >
                <div class="card-body">
                        <h4 class="header-title mt-0 mb-3"  style="background-color: #1C1F37; color:white;">Booking Calender</h4>
                            <div class="span12">
                                <table class="table-condensed table-bordered table-striped">
                                    <thead>
                                        <tr>
                                          <th colspan="7">
                                            <span class="btn-group">
                                                <a class="btn"><i class="icon-chevron-left"></i></a>
                                                <a class="btn active">February 2025</a>
                                                <a class="btn"><i class="icon-chevron-right"></i></a>
                                            </span>
                                          </th>
                                        </tr>
                                        <tr>
                                            <th>Su</th>
                                            <th>Mo</th>
                                            <th>Tu</th>
                                            <th>We</th>
                                            <th>Th</th>
                                            <th>Fr</th>
                                            <th>Sa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="muted">29</td>
                                            <td class="muted">30</td>
                                            <td class="muted">31</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>6</td>
                                            <td>7</td>
                                            <td>8</td>
                                            <td>9</td>
                                            <td>10</td>
                                            <td>11</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>13</td>
                                            <td>14</td>
                                            <td>15</td>
                                            <td>16</td>
                                            <td>17</td>
                                            <td>18</td>
                                        </tr>
                                        <tr>
                                            <td>19</td>
                                            <td class=""><strong>20</strong></td>
                                            <td>21</td>
                                            <td>22</td>
                                            <td>23</td>
                                            <td>24</td>
                                            <td>25</td>
                                        </tr>
                                        <tr>
                                            <td>26</td>
                                            <td>27</td>
                                            <td>28</td>
                                            <td>29</td>
                                            <td class="muted">1</td>
                                            <td class="muted">2</td>
                                            <td class="muted">3</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                    </div>
                </div>

        </div> -->
    </div> <!-- end row --> 


</div> <!-- container-fluid -->

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

    

   

   









