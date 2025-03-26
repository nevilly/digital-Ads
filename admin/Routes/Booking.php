<?php

include_once $_SERVER["DOCUMENT_ROOT"]."/api/v1/Controller/CartController.php";

include_once $_SERVER["DOCUMENT_ROOT"]."/api/v1/Controller/EdepartmentController.php";

class Booking extends CartController
{
    static $APP;
    static $page;
    static $view;

    public function __construct(){  
        parent::__construct();
        self::$APP = getenv("App");
    }

    public function render($params = ''){
        $p = json_decode($params);
        //print_r($p);
        $data = [];
        $dept = [];
        if(!empty($p->page))
            $data = self::user($p->token);
        else{
            $data = self::all_employee();
           // $dept = self::all_department();
        }


        //print_r($data);
           $totalPrice = 0;
           $booking = '';
          if($data !== null && is_array($data))
            foreach ($data as $datum) {
                # code...

               $id =  $datum['id'];
               $user_id =  $datum['pId'];
               $userID =  $datum['userID'];
               $ad_type =  $datum['ad_type'];
               $tablename =  $datum['tablename'];
               $selectPlatform =  $datum['selectPlatform'];
               $device =  $datum['device'];
               $ad_unit =  $datum['ad_unit'];
               $qty =  $datum['qty'];
               $rate =  $datum['rate'];
               $payed =  $datum['payed'];
               $bookDate =  $datum['bookDate'];
               $dimension =  $datum['dimension'];
               $img =  $datum['img'];
               $price =  $datum['price'];

               if($price !== 0 )
                  $totalPrice = $totalPrice + $price;


                $avatar = !empty($img) && $img !== ''? Util::Url()."/public/uploads/mwananchiAds/$img" : Util::Url()."/public/uploads/mwananchiAds/Banner_300x250.png";

               


               $booking .="
                    <div class=\"row cart-item mb-3\">
                        <div class=\"col-md-3\">
                            <img src=\"$avatar\"  alt=\"$ad_type\" class=\"img-fluid rounded\">


                        </div>
                        <div class=\"col-md-5\">
                            <h5 class=\"card-title\">$ad_type</h5>
                            <p class=\"text-muted\">Platform: $selectPlatform</p>
                            <p class=\"text-muted\">Dimension: $dimension</p>
                            <p class=\"text-muted\">Rate: $rate</p>
                        </div>
                        <div class=\"col-md-2\">
                            <div class=\"input-group\">
                                <h4 class=\"btn-sm\" type=\"button\">Booking</h4>
                                
                                <button class=\"btn btn-outline-secondary btn-sm\" type=\"button\">$bookDate</button>
                            </div>
                        </div>
                        <div class=\"col-md-2 text-end\">
                            <p class=\"fw-bold\">$price</p>
                            <button class=\"btn btn-sm btn-outline-danger\">
                                    <i class=\"bi bi-trash\" ></i>
                                </button>
                        </div>
                    </div>
                    <hr>

";
            } 



        if(file_exists(__DIR__."/../Views/$p->view.php")) {
          return  include_once __DIR__ . "/../Views/$p->view.php";
        }elseif (file_exists(__DIR__."/../Views/$p->view/$p->page.php"))
           return include_once (__DIR__."/../Views/$p->view/$p->page.php");
        elseif (file_exists(__DIR__."/../Views/$p->view/$p->view.php"))
           return include_once (__DIR__."/../Views/$p->view/$p->view.php");
        elseif(file_exists(__DIR__."/../Views/$p->view/index.php"))
           return include_once (__DIR__."/../Views/$p->view/index.php");
        return;
    }

    public function all_employee(){
      return parent::get_by_cart();
    }

    public function all_department(){
     
      $edepartment = new EdepartmentController(); 
      return $edepartment->get(); ;
    }
    
    //public function user($token){
      //  return parent::users($token);
    //}

}