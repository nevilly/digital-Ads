<?php

include_once __DIR__."/../Module/Database.php";

class CVsModule extends Database
{

    private $table = "CVservices";

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param $data
     * @return false
     */
    public function add($data){
        $data = (array) parent::decode($data);
        $status = false;
        $d = '';

        if(count($data) > 0){

            foreach ($data as $key=>$value) {
                if(!empty($value))
                    $d .= "$key='$value',";
            }

            $d = chop($d,',');

            $status = parent::insert(parent::encode(array("table"=>$this->table,"data"=>"$d,created_at=NOW()")));
        }

        return $status;
    }

    /**
     * @param $title
     * @return mixed
     */
    public function check($title){
        return parent::select(parent::encode(array("table"=>$this->table,'cols'=>"id",'where'=>"title Like '%$title'", 'limit'=>1)));
    }

    /**
     * @param string $id
     * @param string $limit
     * @return mixed
     */
    public function get($id = '',$limit =''){
        $where = !empty($id)? "where c.id='$id'" :'';
        $limit = !empty($limit) ? "LIMIT $limit" : '';

        return parent::query(parent::encode(['query'=>"SELECT CONCAT_WS(' ',u.first_name, u.last_name) as fullname,u.username, c.* from $this->table as c left join users as u on(c.user = u.id) $where $limit"]));
    }

    /**
     * @param $user
     * @param string $limit
     * @return mixed
     */
    public function get_by_user($user, $limit =''){
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

    public function deleteCV($id, $user)
    {
        $where = !empty($id) && !empty($user) ? "id='$id' AND user='$user'" :'';

        return parent::delete(parent::encode(['table'=>$this->table,'where'=>$where]));
    }
}