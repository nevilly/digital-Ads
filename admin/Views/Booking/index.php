

    
 <div class="container-fluid">

        <div class="row">
            <div class="col-sm-8" style="background-color: #141627;">
                <div class="card mb-4">
                    <div class="card-body" style="background-color: #141627;">
                         <?=$booking;?>
                        <!-- Continue Shopping Button -->
                        <div class="text-start mb-4">
                            <a href="/admin/Hom/" class="btn btn-outline-primary" data-bs-toggle=\"modal\" data-bs-target=\"#addModalDelete$id\"  >
                                <i class="bi bi-arrow-left me-2"></i>Continue Booking
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <!----Left Sid----->  
            <div class="col-sm-4">
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

                </div>
            </div>
        </div>




