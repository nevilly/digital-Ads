<?php

include_once __DIR__."/../Module/PodcastModule.php";

class PodcastController extends PodcastModule
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param $data
     * @return false
     */
    public function addPodcast($data){
        return parent::addPodcast($data);
    }

    /**
     * @param $title
     * @return bool
     */
    public function checkPodcast($title){
         $sql = parent::checkPodcast($title);

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
        $sql = parent::get($id,$limit);
        $data = false;

        if($sql->num_rows > 0)
            if(!empty($id))
                $data = $sql->fetch_object();
            else
                $data = $sql->fetch_all(MYSQLI_ASSOC);

        return $data;
    }

    /**
     * @param $user
     * @param string $limit
     * @return mixed
     */
    public function get_by_user($user,$limit = '')
    {
        $sql = parent::get_by_user($user, $limit); // TODO: Change the autogenerated stub

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
    public function deletePodcast($id, $user_id)
    {
        return (parent::deletePodcast($id,$user_id)->num_rows > 0);
    }

}