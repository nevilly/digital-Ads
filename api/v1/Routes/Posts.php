<?php
include_once __DIR__ . "/../Controller/PostController.php";
include_once __DIR__ . "/../Controller/UsersController.php";
include_once __DIR__."/../Util/Util.php";
//use PostController\PostController;

class Posts extends PostController
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
    public function add(){
        if($this->clean->Method() !== "POST" || !(array) $this->data || !Util::tokenValidate())
            return array('status'=>403,'payload'=>"Unauthorized Access");

        $data = $this->data;
        $title = isset($data->title) ? $this->clean->clean_input($data->title) :'';
        $desc = isset($data->description) ? $this->clean->clean_input($data->description) :'';
        $company = isset($data->company) ? $this->clean->clean_input($data->company) :'';
        $responsibilities = isset($data->responsibilities) ? Util::transformData($this->clean->clean_input($data->responsibilities)) :'';
        $pos = isset($data->position) ? $this->clean->clean_input($data->position) :'';
        $address = isset($data->address) ? $this->clean->clean_input($data->address) :'';
        $type = isset($data->type) ? $this->clean->clean_input($data->type) :'';
        $min = isset($data->min) ? $this->clean->clean_input($data->min) :'';
        $max = isset($data->max) ? $this->clean->clean_input($data->max) :'';
        $featured = isset($data->featured) ? $this->clean->clean_input($data->featured) :'0';
        $deadline = isset($data->deadline) && !empty($data->deadline) ? date("Y-m-d", strtotime(str_replace("/", '-',$this->clean->clean_input($data->deadline))))  :'';

        $status = 401;
        $data = 'All fields are required!';

        // Validate user
        if(!empty($title)
            && !empty($address) && !empty($desc) && count($_FILES["media"]['name']) > 0){
            $status = 401;
            $data = 'Sorry something went wrong, Please try again!';

            $user = new UsersController();
            $users = $user->get(Util::$token);

            if($users){
                $username = $users->username;
                $user_id = $users->id;

                $data = "Please choose another title. This one already exists!";
                if(!$this->checkPost($title)) {
                    $files = Util::Uploader("media", "/public/uploads/$username/data/")['file'];
                    if (!empty($files))
                        $featured = $files;

                    if (!empty($files)) {
                        $sql = parent::addPost(parent::encode(array("title" => $title,"featured" => $featured, "description" => $desc, "type" => $type, "company" => $company, "responsibilities" => $responsibilities, 'logo' => $featured, "position" => $pos, 'address' => $address, 'salary_max' => $max, "salary_min" => $min, "user" => $user_id, "deadline" => $deadline)));

                        $data = 'Sorry something went wrong, Please try again!';
                        if ($sql) {
                            $status = 200;
                            $data = 'Post added successful!';
                        }
                    }
                }
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
        $title = isset($data->title) ? $this->clean->clean_input($data->title) :'';
        $desc = isset($data->description) ? $this->clean->clean_input($data->description) :'';
        $company = isset($data->company) ? $this->clean->clean_input($data->company) :'';
        $responsibilities = isset($data->responsibilities) ? Util::transformData($this->clean->clean_input($data->responsibilities)) :'';
        $pos = isset($data->position) ? $this->clean->clean_input($data->position) :'';
        $address = isset($data->address) ? $this->clean->clean_input($data->address) :'';
        $type = isset($data->type) ? $this->clean->clean_input($data->type) :'';
        $logo = isset($data->logo) ? $this->clean->clean_input($data->logo) :'';
        $min = isset($data->min) ? $this->clean->clean_input($data->min) :'';
        $max = isset($data->max) ? $this->clean->clean_input($data->max) :'';
        $featured = isset($data->featured) ? $this->clean->clean_input($data->featured) :'0';
        $deadline = isset($data->deadline) && !empty($data->deadline) ? date("Y-m-d", strtotime(str_replace("/", '-',$this->clean->clean_input($data->deadline))))  :'';


        $user = new UsersController();
        $users = $user->get(Util::$token);
        $user_id = $users->id;

        $status = 401;
        $data = 'All fields are required!';

        if(!empty($title) && !empty($category)
            && !empty($address) && !empty($desc) && !empty($media) && !empty($id)){

            $sql = parent::update_post(parent::encode(array("title"=>$title,"featured"=>$featured,"position"=>$pos,"description"=>$desc,
                "company"=>$company, "responsibilities"=>$responsibilities,"type"=>$type,'address'=>$address,'user_id'=>$user_id,'id'=>$id,'salary_min'=>$min,"salary_max"=>$max,"deadline"=>$deadline)));

            $data = 'Sorry something went wrong, Please try again!';
            if($sql){
                $status = 200;
                $data = 'Post was update successful!';
            }
        }

        return array('status'=>$status, 'payload'=>$data);
    }

    /**
     * @param $params
     * @return array
     */
    public function posts($params){

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

        // get category id
        include_once __DIR__."/../Controller/UsersController.php";

        $data = 'No content';
        $status = 401;

        $sql = parent::getPost($id,$limit);
        if($sql) {

            $status = 200;
            $userd = new UsersController();
            foreach ($sql as $key=>$value){
                $user = $userd->get($sql[$key]['user']); 
                $username = $user->username;
                $avatar = $user->avatar;
                $sql[$key]['username'] = $username;
                $sql[$key]['avatar'] = $avatar;
                $sql[$key]['description'] = nl2br($value['description']);
                $sql[$key]['responsibilities'] = nl2br($value['responsibilities']);
                $sql[$key]['created_at'] = Util::ago($value['created_at']);
                $sql[$key]['deadline'] = date("M, d Y", strtotime($value['deadline']));
                $sql[$key]['salary_min'] = Util::short_number((int) $value['salary_min']);
                $sql[$key]['type'] = ucfirst($sql[$key]['type']);
                $sql[$key]['featured'] = (int) $sql[$key]['featured'] > 0;
                $sql[$key]['salary_max'] = Util::short_number((int) $value['salary_max']);
                $sql[$key]['logo'] = "public/uploads/".strtolower($username)."/data/".$value['logo'];
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
        if($this->clean->Method() !== "POST"  && !Util::tokenValidate())
            return array('status'=>403,'payload'=>"Unauthorized Access");

        $status = 403;
        $data = 'Unauthorized Access';

        $userd = new UsersController();
        $user_id = ($userd->getUserIdByToken(Util::$token))->id;

        if(!empty($user_id) && !empty($this->data->id)) {
            if(parent::deletePost($this->data->id, $user_id)){
                $status = 200;
                $data = "Post was successful deleted!";
            }
        }
        return array('status'=>$status, 'payload'=>$data);
    }

    /**
     * @param $params
     */
    public function my_post($params){

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

        // get category id
        include_once __DIR__."/../Controller/UsersController.php";
        $limit ="$page,$num";
        $userd = new UsersController();
        $user_id = ($userd->getUserIdByToken(Util::$token))->id;
        $sql = parent::get_post_by_user($user_id, $limit);

        $data = "No content!";
        if($sql) {
            $status = 200;
            $userd = new UsersController();
            foreach ($sql as $key=>$value){
                $user = ($userd->get($sql[$key]['user']));
                $username = $user->username;
                $avatar = $user->avatar;
                $sql[$key]['username'] = $username;
                $sql[$key]['avatar'] = $avatar;
                $sql[$key]['description'] = nl2br($sql[$key]['description']);
                $sql[$key]['responsibilities'] = nl2br($sql[$key]['responsibilities']);
                $sql[$key]['created_at'] = Util::ago($sql[$key]['created_at']);
                $sql[$key]['deadline'] = date("M, d Y", strtotime($sql[$key]['deadline']));
                $sql[$key]['salary_min'] = Util::short_number((int) $sql[$key]['salary_min']);
                $sql[$key]['salary_max'] = Util::short_number((int) $sql[$key]['salary_max']);
                $sql[$key]['featured'] = (int) $sql[$key]['featured'] > 0;
                $sql[$key]['logo'] = "public/uploads/$username/data/".$sql[$key]['logo'];
            }

            $data = $sql;
        }

        return array('status'=>$status, 'payload'=>$data);
    }
}

//$class = new Posts();