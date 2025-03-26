<?php

include_once __DIR__."/../Module/Database.php";

class EmployModule extends Database
{

    private $table = "employee";

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param $data
     * @return false
     */
    public function addEmploy($data){
        $data = (array) parent::decode($data);
        $status = false;
        $d = '';

        if(count($data) > 0){

            foreach ($data as $key=>$value) {
                if(!empty($value))
                    $d .= "$key='$value',";
            }

            $d = chop($d,',');

            $status = parent::insert(parent::encode(array("table"=>$this->table,"data"=>"$d,createdDate=NOW()")));
        }

        return $status;
    }

    /**
     * @param $title
     * @return mixed
     */
    public function checkEmploy($title){
        return parent::select(parent::encode(array("table"=>$this->table,'cols'=>"id",'where'=>"title Like '%$title'", 'limit'=>1)));
    }

    /**
     * @param string $id
     * @param string $limit
     * @return mixed
     */
    public function get($id = '',$limit =''){
        $date  =  date("Y-m-d");
        $where = !empty($id)? "where user_id='$id'" :'';

        return parent::query(parent::encode(['query'=>"Select u.first_name,u.last_name,u.avatar,p.* from $this->table as p left join users as u ON(p.user_id = u.id) where ddate='$date' $limit"]));
    }   

    /**
     * @param string $id
     * @param string $limit
     * @return mixed
     */
    public function get_attendency_by_today($id = '',$limit =''){
        $date  =  date("Y-m-d");
        $where = !empty($id)? "where user_id='$id'" :'';

        return parent::query(parent::encode(['query'=>"Select p.*,p.id as pId, u.*,u.id as uId,u.user_id as uUserId from employee as p left join emplyeeattendence as u ON(p.id = u.user_id) AND u.ddate='$date' $limit"]));
    }

    /**
     * @param string $id
     * @param string $limit
     * @return mixed
     */
    public function get_attendency_by_groupMonth($id = '',$limit =''){
        $where = !empty($id)? "where user_id='$id'" :'';

        return parent::query(parent::encode(['query'=>"SELECT *, monthname(createDate) as mon FROM $this->table $where GROUP BY createDate ORDER BY createDate"]));
    }

   
         /**
     * @param string $id
     * @param string $limit
     * @return mixed
     */
    public function get_inEmploy($id = '',$limit =''){
        $date = date('Y-m-d');
        $where = !empty($id)? "where user_id='$id'" :'';

        // return parent::query(parent::encode(['query'=>"SELECT * FROM `employee` as e Left join emplyeeattendence as m on(e.id = m.user_id) AND m.ddate = $date $limit"]));

     return parent::query(parent::encode(['query'=>"Select u.first_name,u.last_name,u.avatar,p.* from employee as p left join users as u ON(p.user_id = u.id) $where $limit"]));
    }



    /**
     * @param string $id
     * @param string $limit
     * @return mixed
     */
    public function get_Employ_profile($id = '',$limit =''){
        $date = date('Y-m-d');
        $where = !empty($id)? "where id='$id'" :'';

        // return parent::query(parent::encode(['query'=>"SELECT * FROM `employee` as e Left join emplyeeattendence as m on(e.id = m.user_id) AND m.ddate = $date $limit"]));

     return parent::query(parent::encode(['query'=>"Select u.first_name,u.last_name,u.avatar,p.* from employee as p left join users as u ON(p.user_id = u.id) $where $limit"]));
    }


    public function getx($user, $limit =''){
        $where = !empty($user)? "user_id='$user'" :'';

        $sql = ['table'=>$this->table,'where'=>$where,'limit'=>chop($limit,',')];
//        print_r($sql);
        return parent::select(parent::encode($sql));
    }

    public function get_by_Employ($user, $limit =''){
        $where = !empty($user)? "user='$user'" :'';

        $sql = ['table'=>$this->table,'where'=>$where,'limit'=>chop($limit,',')];
//        print_r($sql);
        return parent::select(parent::encode($sql));
    }

    /**
     * @param $data
     * @return false|mixed
     */
    public function update($data)
    {
        $data = (array) parent::decode($data);
        $status = false;
        $d = '';

        if(count($data) > 0){

            foreach ($data as $key=>$value) {
                if(!empty($value) && $key != 'id' ||  !empty($value) && $key != 'user_id')
                    $d .= "$key='$value',";
            }

            $d = chop($d,',');
            $id = $data['id'];
            $userid = $data['user_id'];

            $status = parent::update(parent::encode(array("table"=>$this->table,"data"=>"$d",'where'=>"id='$id' AND user='$userid'")));
        }

        return $status;
    }

    public function deleteEmploy($id, $user)
    {
        $where = !empty($id)  ? "id='$id'" :'';

        return parent::delete(parent::encode(['table'=>$this->table,'where'=>$where]));
    }
}