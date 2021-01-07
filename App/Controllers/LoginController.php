<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Libraries\MySql;

class LoginController
{

    public function __construct($function = null)
    {
        if (!empty($function)) {
            if (method_exists(get_class(), $function)) {
                $this->$function();
            }
        }
    }

    /**
     * Return the login view or,
     * when there's already a login session (user), then
     * redirect to he home page
     */
    public function index()
    {
        return View::render('login');
    }

    /**
     * Check user credentials
     * This is a Ajax POST
     */
    public function login()
    {
        if (isset($_REQUEST['email']) && isset($_REQUEST['password'])) {
            $sql = "SELECT * FROM `users` WHERE `email`='" . $_REQUEST['email'] . "'";
            $res = MySql::query($sql)->fetch();

            if ($res !== false) {
                if (password_verify($_REQUEST['password'], $res['password'])) {
                    $this->setUserSession($res);

                    return json_encode([
                        'success'  => true,
                        'message'  => "Je bent ingelogd, welkom!",
                        'redirect' =>  "moi",
                    ]);
                } else {
                    return json_encode([
                        'success' => false,
                        'message' => "De gebruikersnaam en/of het wachtwoord kloppen niet."
                    ]);
                }
            } else {
                return json_encode([
                    'success' => false,
                    'message' => "De gebruikersnaam en/of het wachtwoord kloppen niet."
                ]);
            }
        }
    }

    public function logout()
    {
        session_destroy();

        return View::redirect("/");
    }

    /**
     * Write user data to SESSION
     */
    private function setUserSession($user): void
    {
        $_SESSION['user'] = [
            'uid'        => $user['id'],
            'first_name' => $user['first_name'],
            'last_name'  => $user['last_name'],
            'full_name'  => $user['first_name'] . " " . $user['last_name'],
        ];
    }
}
