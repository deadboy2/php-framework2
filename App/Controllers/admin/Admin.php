<?php

namespace App\Controllers\admin;

use App\Models\User;
use App\TController;

class Admin
{
    use TController;

    protected function actionIndex()
    {
        $adminMail = '';
        $adminPass = '';

        $admin = \App\Models\admin\Admin::findAll();
        $users = User::findAll();

        foreach ($admin as $item) {
            $adminMail = $item->email;
            $adminPass = $item->password;
        }

        if (!isset($_SESSION['admin'])) {
            if (isset($_POST['email_admin'])) {
                $email = $_POST['email_admin'];
                $password = $_POST['password_admin'];

                $hash1 = hash('sha512', $password, false);

                if ($hash1 === $adminPass) {
                    $_SESSION['admin'] = $adminMail;
                    header('Location: /admin');
                    exit;
                } else {
                    $this->view->error = "error";
                }
            }

            $this->view->display(__DIR__ . '/../../templates/admin/index.php');


        } else {
            if (isset($_POST['status_rename'])) {
                //$us = User::findById($_POST['status_rename']); 
                header('Location: /admin');
                exit;
            }

            $this->view->users = $users;
            $this->view->display(__DIR__ . '/../../templates/admin/index.php');
        }

    }
}