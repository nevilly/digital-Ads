<?php

include_once __DIR__."/../Module/BookmarkModal.php";
class BookmarkController extends BookmarkModal
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getFavorite($user_id = '')
    {
        $sql= parent::getFavorite($user_id); // TODO: Change the autogenerated stub
        $status = false;

        if($sql->num_rows > 0){
            $status = $sql->fetch_all(MYSQLI_ASSOC);
        }

        return $status;
    }

    public function deleteMark($post ='', $user = ''){

        return (parent::deleteMark($post, $user)->num_rows > 0);
    }

    public function exist($id, $user)
    {
        return parent::exist($id, $user)->num_rows > 0; // TODO: Change the autogenerated stub
    }

    public function addFavorite($data)
    {
        return parent::addFavorite($data); // TODO: Change the autogenerated stub
    }
}