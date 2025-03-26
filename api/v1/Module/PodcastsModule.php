<?php

include_once __DIR__."/../Module/Database.php";

class PodcastsModule extends Database
{

    private $table = "podcasts";

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param $data
     * @return false
     */
    public function addPodcast($data){
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
    public function checkPodcast($title){
        return parent::select(parent::encode(array("table"=>$this->table,'cols'=>"id",'where'=>"title Like '%$title'", 'limit'=>1)));
    }

    /**
     * @param string $id
     * @param string $limit
     * @return mixed
     */
    public function get($id = '',$limit =''){
        $where = !empty($id)? "id='$id'" :'';

        return parent::select(parent::encode(['table'=>$this->table,'where'=>$where,'limit'=>$limit]));
    }

    public function get_by_user($user, $limit =''){
        $where = !empty($user)? "user='$user'" :'';

        $sql = ['table'=>$this->table,'where'=>$where,'limit'=>chop($limit,',')];
//        print_r($sql);
        return parent::select(parent::encode($sql));
    }

    public function get_by_pod($pod, $limit =''){
        $where = !empty($user)? "where e.pod='$pod'" :'';
        $limit = !empty($limit) ? "LIMIT $limit" : '';

        $b = $this->table;
        $sql = ['query'=>"SELECT p.image, p.title as heading, p.description as caption,e.*,u.username FROM $b as e left join podcast as p on(e.pod = p.id) left join users as u on(p.user = u.id) $where $limit"];
        return parent::query(parent::encode($sql));
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

    public function deletePodcast($id, $user)
    {
        $where = !empty($id) && !empty($user) ? "id='$id' AND user='$user'" :'';

        return parent::delete(parent::encode(['table'=>$this->table,'where'=>$where]));
    }
}