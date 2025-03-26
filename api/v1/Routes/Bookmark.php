<?php

include_once __DIR__."/../Controller/BookmarkController.php";
include_once __DIR__ . "/../Controller/UsersController.php";
include_once __DIR__."/../Util/Util.php";


class Bookmark extends BookmarkController
{
    private $data;
    private $clean;
    private $key;

    /**
     * Bookmark constructor.
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

        if($this->clean->Method() !== "POST" && !(array) $this->data && !Util::tokenValidate())
            return array('status'=>403,'payload'=>"Unauthorized Access");

        $status = 403;
        $data = $this->data;

        $post = isset($data->post) ? $this->clean->clean_input($data->post) : '';


        $user = new UsersController();
        $user_id = ($user->get(Util::$token))->id;

        $data = "Sorry something went wrong!";
        if(!empty($post) && !parent::exist($post, $user_id)){
            $sql = parent::addFavorite($this->encode(['bid'=>$post, 'user'=>$user_id]));
            if($sql){
                $status = 200;
                $data = "Bookmark was added successful!";
            }
        }

        return array('status'=>$status, 'payload'=>$data);
    }

    /**
     * @return array
     * @throws Exception
     */
    public function remove(){

        if($this->clean->Method() !== "POST" && !Util::tokenValidate())
            return array('status'=>403,'payload'=>"Unauthorized Access");

        $status = 403;
        $data = 'Unauthorized Access';
        if(!empty($user_id) && !empty($this->data->post)) {
            $sql = parent::deleteMark($this->data->post, $user_id);

            if($sql){
                $status = 200;
                $data = "";
            }
        }
        return array('status'=>$status, 'payload'=>$data);
    }

    /**
     * @return array
     * @throws Exception
     */
    public function get(){

        if($this->clean->Method() !== "GET" || !Util::tokenValidate())
            return array('status'=>403,'payload'=>"Unauthorized Access");

        $status = 403;
        $data = 'Unauthorized Access';

        // controllers
        include_once __DIR__."/../Controller/PostController.php";

        $user_id = Util::$token;
        if(!empty($user_id)) {
            $sql = parent::getFavorite($user_id); // TODO: Change the autogenerated stub

            if($sql){
                $status = 200;
                $data = [];
                $post = new PostController();

                $userd = new UsersController();

                foreach ($sql as $item) {
                   $pid = $item['bid'];
                    $ps = $post->getPost($pid);

                    if($ps) {
                        $ps = (Array) $ps;
                        $status = 200;
;
                        $user = ($userd->get($user_id));
                        $username = $user->username;
                        $avatar = $user->avatar;
                        $ps['username'] = $username;
                        $ps['avatar'] = Util::staticUrl()."/uploads/".strtolower($username)."/data/".$avatar;
                        $ps['title'] = nl2br($ps['title']);
                        $ps['description'] = nl2br($ps['description']);
                        $ps['created_at'] = Util::ago($ps['created_at']);
                        $ps['deadline'] = date("M, d Y", strtotime($ps['deadline']));
                        $ps['salary_min'] = Util::short_number((int) $ps['salary_min']);
                        $ps['salary_max'] = Util::short_number((int) $ps['salary_max']);
                        $ps['logo'] = Util::staticUrl()."/uploads/".strtolower($username)."/data/".$ps['logo'];
                        $ps['responsibilities'] = nl2br($ps['responsibilities']);
                        $ps['featured'] = (int) $ps['featured'] > 0;

                    }
                    $data[] = $ps;
               }
            }
        }

        return array('status'=>$status, 'payload'=>$data);
    }
}

//$class = new Bookmarks();