<?php

include_once $_SERVER["DOCUMENT_ROOT"]."/api/v1/Module/CartModule.php";
include_once  $_SERVER["DOCUMENT_ROOT"]. "/api/v1/Controller/EmployeeController.php";

class CartController extends CartModule
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param $data
     * @return false
     */
    public function addCart($data){
        return parent::addCart($data);
    }

    /**
     * @param $title
     * @return bool
     */
    public function checkApplication($title){
         $sql = parent::checkApplication($title);

        return ($sql) && $sql->num_rows > 0;
    }

    /**
     * @param string $id
     * @param string $category
     * @param bool $not
     * @param string $limit
     * @return array
     */
    public function get($id = '',$limit = ''){
        $user = parent::get($id,$limit);
        $data = false;

        if($user->num_rows > 0)
            $data = $user->fetch_all(MYSQLI_ASSOC);

        return $data;
    }

    /**
     * @param $user
     * @param string $limit
     * @return mixed
     */
    public function get_by_cart($user='',$limit = '')
    {
        $sql = parent::get_c($user, $limit); // TODO: Change the autogenerated stub

        $data = false;

        if($sql->num_rows > 0){
            $data = $sql->fetch_all(MYSQLI_ASSOC);
             $table = array();
          foreach ($data as $datum) {
                # code...
            $tableGet = new EmployeeController();
           

               $id =  $datum['id'];
               $pId =  $datum['pId'];
               $userID =  $datum['userID'];
               $tablename =  $datum['tablename'];
               $qty =  $datum['qty'];
               $total_price =  $datum['total_price'];

               if ($pId != '') {
                   # code...
                $table = $tableGet->get_displayRate_by_pid($pId,$tablename);
               }

            

            $data['t'] = $table;
           // echo $table;


            } 
        }

        return $data;
    }


    /**
     * @param $user
     * @param string $limit
     * @return mixed
     */
    public function get_by_post($user,$limit = '')
    {
        $sql = parent::get_by_post($user, $limit); // TODO: Change the autogenerated stub

        $data = false;

        if($sql->num_rows > 0)
            $data = $sql->fetch_all(MYSQLI_ASSOC);

        return $data;
    }

    /**
     * @param $data
     * @return false|mixed
     */
    public function update($data)
    {
        return parent::update($data);
    }

    /**
     * @param $id
     * @param $user_id
     * @return bool
     */
    public function deleteApplication($id, $user_id)
    {
        return (parent::deleteApplication($id,$user_id)->num_rows > 0);
    }

}