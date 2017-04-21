<?php

namespace App\Controllers;

use App\Models\User;
use App\TController;

class Main
{
    use TController;

    protected function actionIndex()
    {

        if (isset($_POST['initials'])) {
            $isUser = User::findAll();

            foreach ($isUser as $user) {
                if ($user->email == $_POST['email']) {
                    $this->view->error = "error";
                    $this->view->display(__DIR__ . '/../templates/index.php');
                    exit;
                }
            }

            $user = new User();
            $date_reg = date('Y-m-d H:i:s');

            $user->initials = $_POST['initials'];
            $user->doljnost = $_POST['doljnost'];
            $user->phone = $_POST['phone'];
            $user->email = $_POST['email'];
            $user->company = $_POST['company'];
            $user->date = $_POST['date'];
            $user->date_reg = $date_reg;
            $user->question = $_POST['question'];
            $user->accept = $_POST['accept'];
            $user->save();
            $success = "success";
        }

        if (isset($success)) {
            $this->view->success = "success";
        }
        $this->view->display(__DIR__ . '/../templates/index.php');
    }
}