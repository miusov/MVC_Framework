<?php

class Login
{
    public static function register($name,$last_name,$email,$created_at)
    {
        $db = Db::getConnection();

        $ins = $db->prepare('INSERT INTO users(name, last_name, email, created_at) VALUES(:name, :last_name, :email, :created_at)');
        $data = array(
            'name'=>$name,
            'last_name' => $last_name,
            'email' => $email,
            'created_at' => $created_at);
        $ins->execute($data);
    }

}