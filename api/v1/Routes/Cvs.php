<?php
include_once __DIR__ . "/../Controller/CVsController.php";
include_once __DIR__ . "/../Controller/UsersController.php";
include_once __DIR__."/../Util/Util.php";
//use PostController\PostController;

class Cvs extends CVsController
{
    private $data;
    private $clean;
    private $key;

    /**
     * Posts constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->clean = new Util();
        $this->data = isset($_POST) && count($_POST) > 0 ? parent::decode(parent::encode($_POST)) : parent::decode(file_get_contents("php://input"));

        $this->key = getenv("SECRET");
    }

    /**
     * @return array
     * @throws Exception
     */
    public function add($data =''){

        if($this->clean->Method() !== "POST" && !(array) $this->data || !Util::tokenValidate())
            return array('status'=>403,'payload'=>"Unauthorized Access");

        $data = $this->data;
        $title = isset($data->title) && !empty($data->title) ? $data->title : '';
        $summary = isset($data->caption) && !empty($data->caption) ? $data->caption : '';
        $doc = isset($data->doc) && !empty($data->doc) ? $data->doc : '';
        $cover = isset($data->cover) && !empty($data->cover) ? $data->cover : '';
        $type = isset($data->type) && !empty($data->type) ? $data->type : '';

        $status = 401;
        $data = 'All fields are required!';


        if(!empty($doc) && !empty($title) && !empty($cover)){

            $user = new UsersController();
            $users = $user->get(Util::$token);
            $user_id = $users->id;
            $sql = false;

            if(!parent::check($title))
                $sql = parent::add(parent::encode(array('user'=>$user_id,'title'=>$title,'type'=>$type,'summary'=>$summary,'file'=>$doc,"cover"=>$cover)));

            $data = 'Sorry something went wrong, Please try again!';
            if($sql){
                $status = 200;
                $data = 'Your file was submitted successful.';
            }
        }

        return array('status'=>$status, 'payload'=>$data);
    }

    /**
     * @param string $a
     * @return array
     * @throws Exception
     */
    public function update($a ='')
    {
        if($this->clean->Method() !== "POST" && !(array) $this->data  && !Util::tokenValidate())
            return array('status'=>403,'payload'=>"Unauthorized Access");


        $data = $this->data;
        $title = isset($data->title) && !empty($data->title) ? $data->title : '';
        $summary = isset($data->summary) && !empty($data->summary) ? $data->summary : '';
        $type = isset($data->type) && !empty($data->type) ? $data->type : '';
        $id = isset($data->id) && !empty($data->id) ? $data->id : '';

        $user = new UsersController();
        $users = $user->get(Util::$token);
        $user_id = $users->id;

        $status = 401;
        $data = 'All fields are required!';

        if(!empty($title) &&  !empty($id)){

            $sql = parent::update(parent::encode(array("id"=>$id,"user"=>$user_id,'summary'=>$summary, 'type'=>$type)));

            $data = 'Sorry something went wrong, Please try again!';
            if($sql){
                $status = 200;
                $data = 'Application was update successful!';
            }
        }

        return array('status'=>$status, 'payload'=>$data);
    }

    /**
     * @param $params
     * @return array
     */
    public function cv($params){

        if($this->clean->Method() !== "GET")
            return array('status'=>403,'payload'=>"Unauthorized Access");

        $data = parent::decode($params);

        $id = '';
        if(!empty($data->page) && !empty($data->page1) && empty($data->page2) && empty($data->page3) && empty($data->page4))
            $limit = "$data->page,$data->page1";
        else{
            $id = isset($data->page) && !empty($data->page) ? $data->page :'';
            $page = isset($data->page2) && !empty($data->page2) ? $data->page1 :'';
            $limit = isset($data->page3) && !empty($data->page3) ? "$page,$data->page2" :'';
        }

        $data = 'No content';
        $status = 401;

        $sql = parent::get($id,$limit);
        if($sql) {
            $status = 200;
            foreach ($sql as $key=>$value){
                $sql[$key]['caption'] = nl2br(urldecode($value['caption']));
                $sql[$key]['author'] = $value['username'];
                $sql[$key]['created_at'] = Util::ago($value['created_at']);
                $sql[$key]['file'] = Util::staticUrl()."uploads/".strtolower($value['username'])."/data/".$value['file'];
                $sql[$key]['cover'] = Util::staticUrl()."uploads/".strtolower($value['username'])."/data/".$value['cover'];
            }
            $data = $sql;

        }

        return array('status'=>$status, 'payload'=>$data);
    }

    /**
     * @param $params
     * @return array
     * @throws Exception
     */
    public function remove($params){
        if($this->clean->Method() !== "POST"  && Util::tokenValidate())
            return array('status'=>403,'payload'=>"Unauthorized Access");

        $status = 403;
        $data = 'Unauthorized Access';

        $userd = new UsersController();
        $user_id = ($userd->getUserIdByToken(Util::$token))->id;

        if(!empty($user_id) && !empty($this->data->id)) {
            if(parent::deleteCV($this->data->id, $user_id)){
                $status = 200;
                $data = "Application was successful deleted!";
            }
        }
        return array('status'=>$status, 'payload'=>$data);
    }

    /**
     * @param $params
     */
    public function my_cv($params){
        if($this->clean->Method() !== "GET" || !Util::tokenValidate())
            return array('status'=>403,'payload'=>"Unauthorized Access");

        $num = '';
        $page ='';
        $category ='';
        if(is_array((array) $this->data)){
            $data = parent::decode($params);

            $category = isset($data->page) && !empty($data->page) ? $data->page :'';
            $num = isset($data->page1) && !empty($data->page1) ? $data->page1 :'';
            $page = isset($data->page2) && $data->page2 !== '' ? $data->page2 :'';
        }


        include_once __DIR__."/../Controller/UsersController.php";
        $limit ="$page,$num";
        $userd = new UsersController();
        $user_id = ($userd->getUserIdByToken(Util::$token))->id;
        $sql = parent::get_by_user($user_id, $limit);

        $data = "No content!";
        if($sql) {
            $status = 200;
            $userd = new UsersController();
            foreach ($sql as $key=>$value){
                $sql[$key]['created_at'] = Util::ago($sql[$key]['created_at']);
            }

            $data = $sql;
        }

        return array('status'=>$status, 'payload'=>$data);
    }
}

//$class = new Posts();