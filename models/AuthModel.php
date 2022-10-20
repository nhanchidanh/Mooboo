<?php
namespace app\models;

use app\core\db\Database;

class AuthModel extends Database{
    public function validate($data = []) {
        $error = [];
        if(count($data) > 0) {
            if(empty($data['fullname'])) {         
                $error['fullname'] ='Khong duoc bo trong';
            }
            if(empty($data['username'])) {
                
                $error['username'] = 'Khong duoc bo trong';
                
            }
            if(empty($data['email'])) {
                
                $error['email'] = 'Khong duoc bo trong';              
            }
            if(empty($data['password'])) {
                
                $error['password'] = 'Khong duoc bo trong';
            }
        }
        return [
            'errors' => $error
        ];
    }
}