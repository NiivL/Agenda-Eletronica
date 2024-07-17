<?php

namespace Classes;

use Models\ModelConect;

class ClassEvents extends ModelConect
{
    #Trazer dados de eventos de banco
    public function getEvents()
    {
        session_start();
        $id_usuario = $_SESSION['id_user'];
        $b = $this->conectDB()->prepare("select * from events where id_atividade=$id_usuario");
        $b->execute();
        $f = $b->fetchAll(\PDO::FETCH_ASSOC);
    
        return json_encode($f, true);

    }

    #Criação da consulta no banco
    public function createEvent($id = 0, $title, $description, $color = 'black', $start, $end, $id_atividade = 0)
    {
        $b = $this->conectDB()->prepare("insert into events values (?,?,?,?,?,?,?)");
        $b->bindParam(1, $id, \PDO::PARAM_INT);
        $b->bindParam(2, $title, \PDO::PARAM_STR);
        $b->bindParam(3, $description, \PDO::PARAM_STR);
        $b->bindParam(4, $color, \PDO::PARAM_STR);
        $b->bindParam(5, $start, \PDO::PARAM_STR);
        $b->bindParam(6, $end, \PDO::PARAM_STR);
        $b->bindParam(7, $id_atividade, \PDO::PARAM_INT);
        $b->execute();
        
    }

    #Buscar eventos pelo Id
    public function getEventsById($id)
    {
        $b = $this->conectDB()->prepare("select * from events where id=?");
        $b->bindParam(1, $id, \PDO::PARAM_INT);

        $b->execute();
        return $f = $b->fetch(\PDO::FETCH_ASSOC);
    }

    #Update no banco de dados

    public function updateEvent($id, $title, $description, $start)
    {
        $b = $this->conectDB()->prepare("update events set title=?, description=?, start=? where id=?");
        $b->bindParam(1, $title, \PDO::PARAM_STR);
        $b->bindParam(2, $description, \PDO::PARAM_STR);
        $b->bindParam(3, $start, \PDO::PARAM_STR);
        $b->bindParam(4, $id, \PDO::PARAM_INT);
        $b->execute();

        header("Location: /Calendario/views/user/index.php");
    }

    #Deletar do banco de dados

    public function deleteEvent($id)
    {
        $b = $this->conectDB()->prepare("delete from events where id=?");
        $b->bindParam(1, $id, \PDO::PARAM_INT);
        $b->execute();

        header("Location: /Calendario/views/user/index.php");
    }

    // Atualização de data e hora pelo arraste
    public function updateDropEvent($id, $start, $end)
    {
        $b = $this->conectDB()->prepare("update events set start=?,end=? where id=?");
        $b->bindParam(1, $start, \PDO::PARAM_STR);
        $b->bindParam(2, $end, \PDO::PARAM_STR);
        $b->bindParam(3, $id, \PDO::PARAM_INT);
        $b->execute();
    }


    // Novo código

    // Criando usuário de Login
    public function createUser($id_user, $name_user, $name, $password)
    {
        $b = $this->conectDB()->prepare("insert into user values (?,?,?,?)");
        $b->bindParam(1, $id_user, \PDO::PARAM_STR);
        $b->bindParam(2, $name_user, \PDO::PARAM_STR);
        $b->bindParam(3, $name, \PDO::PARAM_STR);
        $b->bindParam(4, $password, \PDO::PARAM_INT);
        $b->execute();



        header('Location: /Calendario/views/user/index.php');
    }

    #Buscar eventos pelo Id
    public function getUserByIdPasswod()
    {

        session_start();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name_user = $_POST['name_user'];
            $password = $_POST['password'];

            $b = $this->conectDB()->prepare('SELECT id_user,name_user, name,password FROM user WHERE name_user=?');
            $b->bindParam(1, $name_user, \PDO::PARAM_STR);
            $b->execute();
            $user = $b->fetch(\PDO::FETCH_ASSOC);



            if ($password === $user['password']) {
                $_SESSION['id_user'] = $user['id_user'];
                $_SESSION['name_user'] = $user['name_user'];

                header('Location: /Calendario/views/user/index.php');

                exit;
            } else {

                echo 'Usuário ou senha inválidos';
            }
        }
    }

    // public function getEventsByIdAtividade()
    // {
    //     session_start();
    //     $id_atividade = $_SESSION['id_atividade'];
    //     $b = $this->conectDB()->prepare("delete from events where id_atividade=$id_atividade");
    //     $b->execute();
    //     $f = $b->fetchAll(\PDO::FETCH_ASSOC);


    
    //     return json_encode($f, true);
        
    // }
    
    
}

// $b = $this->conectDB()->prepare("delete from events where id_atividade=$id_atividade");
// $b->bindParam(1, $id, \PDO::PARAM_INT);
// $b->execute();