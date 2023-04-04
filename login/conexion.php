<?php
    session_start();
    require_once 'config.php';

    if(isset($_POST['email']) && isset($_POST['password']))
    {

        $email = htmlspecialchars($_POST['email']); 
        $password = htmlspecialchars($_POST['password']);

        $check = $bdd->prepare('SELECT pseudo, email, password FROM utilisateur WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $rowCount();

        if($row == 0)
        {
            if(strlen($pseudo) <= 100)
            {
                if(strlen($email) <= 100)
                {
                    if(filter_var($email, FILTER_VALIDATE_EMAIL))
                    {
                        if($password == $password_retype)
                        {
                            $password = hash('sha256', $password);
                            $ip = $_SERVER['REMOTE_ADDR'];


                            $insert = $bdd->prepare('INSERT INTO utilisateurs(pseudo, email, password, ip)VALUES(:pseudo, :email, :password, :ip)');
                            $insert->execute(array(
                                'pseudo' => $pseudo,
                                'email' => $email,
                                'password' => $password,
                                'ip' => $ip

                            ));
                            header('location:inscription.php?reg_err=success');
                        }else header('location:index.php?reg_err=password');
                    }else header('location:index.php?reg_err=email');
                }else header('location:index.php?reg_err=rmail_length');
            }else header('location:index.php?reg_err=pseudo_lenght');
        }else header('location:index.php?reg_err=already');

    }else header('location:index.php');