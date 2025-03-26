<?php
require __DIR__.'/Module/Database.php';

class Table extends  Database
{
    /**
     * Table constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->install();
    }

    public function install(){

        // user table
        parent::createTable($this->encode(array(
            'name'=>'users',
            'value'=>"
             id int(11) not null auto_increment,
             first_name varchar(25) not null,
             last_name varchar(25) not null,
             username varchar(100) not null,
             email varchar(100) not null,
             gender enum('male', 'female', 'notspecified') default 'notspecified' not null,
             avatar text null,
             bio text null,
             position varchar(255) null,
             birth date null,
             password text not null,        
             experience text null,        
             qualifications text null,        
             industry text null,        
             address text null,        
             country text null,        
             phone_number int(11) not null,
             fb text null,
             google text null,
             apple text null,
             created_at datetime not null,
             last_login datetime not null,
             privilege enum('0','1','2') default '0' not null,
             type enum('company','individual') default 'individual' not null,
             status enum('0','1') not null default '0',
             notified enum('0','1') not null default '0',
             token text not null,
             primary key(id)
             "
        )));

        // categories
        parent::createTable($this->encode(array(
            'name'=>'categories',
            'value'=>"
            id int(11) not null auto_increment,
            name varchar(255) not null,
            icon text,
            image text,
            created_at datetime not null default current_timestamp,
            primary key(id)"
        )));

        // post
        parent::createTable($this->encode(array(
            'name'=>'posts',
            'value'=>"
            id int(11) not null auto_increment,
            title varchar(255) not null,
            position varchar(255) null,
            address text,
            logo text,
            company text not null,
            responsibilities text not null,
            description text not null,
            salary_min int(11) null,
            salary_max int(11) null,
            type enum('part-time','full-time','freelance') not null default 'part-time',
            user int(11) not null,
            featured enum('0','1') not null default '0',
            created_at datetime not null default current_timestamp,
            deadline datetime not null default current_timestamp,
            primary key(id),
            foreign key(user) references users(id)"
        )));

        // favorite
        parent::createTable($this->encode(array(
            'name'=>'bookmarks',
            'value'=>"
            id int(11) not null auto_increment,
            bid int(11) not null,
            user int(11) not null,
            created_at datetime not null default current_timestamp,
            primary key(id),
            foreign key(user) references users(id)
            "
        )));

        // favorite
        parent::createTable($this->encode(array(
            'name'=>'tips',
            'value'=>"
            id int(11) not null auto_increment,
            title varchar(255) not null,
            description text,
            media text not null,
            tags text not null,
            featured text not null,
            status enum('draft','publish','private') not null default 'draft',
            user int(11) not null,
            category int(11) null,
            created_at datetime not null default current_timestamp,
            updated_at datetime not null default current_timestamp,
            primary key(id), 
            foreign key(user) references users(id)
            ")));

        parent::createTable($this->encode(array(
            'name'=>'podcast',
            'value'=>"
            id int(11) not null auto_increment,
            title varchar(255) not null,
            description text,
            image text not null,
            user int(11) not null,
            created_at datetime not null default current_timestamp,
            primary key(id), 
            foreign key(user) references users(id)
            ")));

        parent::createTable($this->encode(array(
            'name'=>'podcasts',
            'value'=>"
            id int(11) not null auto_increment,
            title varchar(255) not null,
            description text,
            file text not null,
            user int(11) not null,
            pod int(11) not null,
            created_at datetime not null default current_timestamp,
            primary key(id), 
            foreign key(pod) references podcast(id),
            foreign key(user) references users(id)
            ")));

       // favorite
        parent::createTable($this->encode(array(
            'name'=>'application',
            'value'=>"
            id int(11) not null auto_increment,
            user int(11) not null,
            pid int(11) not null,
            created_at datetime not null default current_timestamp,
            primary key(id),
            foreign key(pid) references posts(id),
            foreign key(user) references users(id)
            "
        )));

        parent::createTable($this->encode(array(
            'name'=>'videos',
            'value'=>"
            id int(11) not null auto_increment,
            title varchar(255) not null,
            media text not null,
            type enum('free', 'premium') not null default 'free',
            caption text,
            user int(11) not null,
            created_at datetime not null default current_timestamp,
            primary key(id),
            foreign key(user) references users(id)
            "
        )));

        parent::createTable($this->encode(array(
            'name'=>'gallery',
            'value'=>"
            id int(11) not null auto_increment,
            media text not null,
            caption text,
            user int(11) not null,
            created_at datetime not null default current_timestamp,
            primary key(id),
            foreign key(user) references users(id)
            "
        )));

        parent::createTable($this->encode(array(
            'name'=>'CVservices',
            'value'=>"
            id int(11) not null auto_increment,
            title varchar(255) not null,
            file text not null,
            cover text not null,
            type enum('free', 'premium') not null default 'free',
            summary text,
            user int(11) not null,
            created_at datetime not null default current_timestamp,
            primary key(id),
            foreign key(user) references users(id)
            "
        )));
        parent::createTable($this->encode(array(
            'name'=>'cvs',
            'value'=>"
            id int(11) not null auto_increment,
            user int(11) not null,
            cv text not null,
            name text not null,
            created_at datetime not null default current_timestamp,
            primary key(id),
            foreign key(user) references users(id)
            "
        )));

        // roles
        parent::createTable($this->encode(array(
            'name'=>'roles',
            'value'=>"
            id int(11) not null auto_increment,
            name varchar(255) not null,
            date datetime not null default current_timestamp,
            primary key(id)
            "
        )));

        // notifications
        parent::createTable($this->encode(array(
            'name'=>'notifications',
            'value'=>"
            id int(11) not null auto_increment,
            type varchar(255) not null,
            sender int(11) not null,
            receiver int(11) not null,
            title varchar(255) not null,
            content text,
            status enum('0','1') not null default '0',
            date datetime not null default current_timestamp,
            foreign key(sender) references users(id),
            foreign key(receiver) references users(id),
            primary key(id)
            "
        )));

        // payments
        parent::createTable($this->encode(array(
            'name'=>'payments',
            'value'=>"
            id int(11) not null auto_increment,
            mno varchar(255) not null,
            amount varchar(255) not null,
            phone varchar(255) not null,
            token text  null,
            description text  null,
            subscription_type text null,
            user int(11) not null,
            status enum('0','1') not null default '0',
            paid_at datetime null default current_timestamp,
            created_at datetime not null default current_timestamp,
            foreign key(user) references users(id),
            primary key(id)
            "
        )));

        $token = "SWh4TnJCOEp5UVVPQWxrM3ZkWWowS0pnYU50aTZodzVoalN5enJoZithWmM5aUN5T2FTOW9xL2t6Q04rWHpYNnk5NXNjRHBPM1BkbGdhMTVEeVhOaUNGOGg5REhBby9yeGZxNVdlM1pjTDBVYlFqRm1YZEE3U0FBcWR0eXI1ZVcxK0dRWkk0ckh1YVRTSGYzTURTVUpxTDFqelM2Zkg5RnNMR2F5R2pjS1F1NWRPVkpKdkpBRGtiWE5pSVQ3VVpnTUtCemphSFdKZ0wzU1FnRGh2MWY0RkkwcGxoYnFrMHg0NDUyUFBYVVhtNE1TTFBMTUlHTExVbVRhVi9xUTRDaXg0djFhUmJPdjFrQUdmODVpVW1TY1E9PQ==";
        // adding an admin
        $status = false;
        if(parent::select(parent::encode(array(
            "table"=>"users",
            "where"=>"username='reddeath' AND email='frankslayer1@gmail.com'"
        )))->num_rows < 1){
            $sql= parent::insert(parent::encode(array(
                "table"=>"users",
                "data"=>"first_name='Frank', last_name='Galos',
            username='reddeath', email='frankslayer1@gmail.com'
            ,password='d20d3ce6dd8b2a24e26efd84a', phone_number='255743500123',
            status='1',privilege='2',type='individual',
             address='Dar es salaam', created_at=now(), last_login=now(), token='$token'"
            )));

            $status = ($sql);
        }

        if($status)
            echo "\n Installation was completed successful!\n";
        else
            print_r($this->con->error);
    }

}

new Table();