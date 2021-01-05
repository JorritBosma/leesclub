<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Models\UserModel;

class RegisterController
{
    public function index()
    {
        return View::render('register');
    }

    public function store()
    {
        if (UserModel::exists($_REQUEST['email']) === true) {
            return json_encode([
                'success' => false,
                'message' => "Deze gebruikersnaam is al in gebruik. Kies een andere naam.",
            ]);
        }

        // check if passwords are equal
        if ($_REQUEST['password'] != $_REQUEST['password_2']) {
            return json_encode([
                'success' => false,
                'message' => "De wachtwoorden zijn niet gelijk. Probeer het nog een keer."
            ]);
        } else {
            // create password hash and set required fields
            $data = [
                'first_name' => $_REQUEST['first_name'],
                'last_name'  => $_REQUEST['last_name'],
                'email'      => $_REQUEST['email'],
                'password'   => password_hash($_REQUEST['password'], PASSWORD_DEFAULT),
                'city'       => $_REQUEST['city'],
                'birthday'   => $_REQUEST['birthday'],
                'bio'        => $_REQUEST['bio'],
                'role'       => $_REQUEST['role'] = 2,
                'created_by' => $_REQUEST['created_by'] = 2,
                'created'    => $_REQUEST['created'] = date('Y-m-d H:i:s'),
            ];

            $data['id'] = UserModel::store($data);

            UserModel::setUserSession($data);

            $msg = new \Plasticbrain\FlashMessages\FlashMessages();
            $msg->info('Welkom lezer <strong>' . $data['first_name'] . '</strong>!');

            return json_encode([
                'success'  => true,
                'message'  => "Ok :-)",
                'redirect' => "home"
            ]);
        }
    }
}
