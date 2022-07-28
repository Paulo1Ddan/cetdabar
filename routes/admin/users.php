<?php 

    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Class\Model\User\User;
    use Class\PageAdmin;

    //Admin users
    $app->get("/cetdabar/admin/users", function(Request $request, Response $response){
        if(isset($_SESSION['alert'])){
            echo $_SESSION['alert'];
            unset($_SESSION['alert']);
        }

        if($_SESSION['user']['admin'] != 1){
            $_SESSION['alert'] = "<script>alert('Acesso negado');</script>";
            header("location: /cetdabar/");
            exit();
        }

        $users = new User();

        $data = $users->getUsers();

        for($i = 0; $i < count($data); $i++) {
            if($data[$i]['status'] == 1){
                $data[$i]['status'] = "Ativo";
            }else{
                $data[$i]['status'] = "Inativo";
            }

            if($data[$i]['admin'] == 1){
                $data[$i]['admin'] = "Sim";
            }else{
                $data[$i]['admin'] = "Não";
            }
        }

        $page = new PageAdmin(array(
            "header" => false,
            "footer" => false,
            "data" => array(
                "user" => $_SESSION['user'],
                "users" => $data
            )
        ), "views/admin/users-admin");

        $page->setTpl("users");

        return $response;
    });
    
    //Create
    $app->get("/cetdabar/admin/users/user-add", function (Request $request, Response $response){
        if(isset($_SESSION['alert'])){
            echo $_SESSION['alert'];
            unset($_SESSION['alert']);
        }

        if($_SESSION['user']['admin'] != 1){
            $_SESSION['alert'] = "<script>alert('Acesso negado');</script>";
            header("location: /cetdabar/");
            exit();
        }

        $page = new PageAdmin(array(
            "header" => false,
            "footer" => false,
            "data" => array(
                "user" => $_SESSION['user']
            )
        ), "views/admin/users-admin");

        $page->setTpl("user-create");

        return $response;

    });
    $app->post("/cetdabar/admin/users/user-add", function(Request $request, Response $response){

        $user = new User();

        if($user->validateDataUserAdmin($_POST)){
            if($user->createUserAdmin()){

            }else{
                header("Location: /cetdabar/admin/users/user-add");
                exit();
            }
        }else{
            header("Location: /cetdabar/admin/users/user-add");
            exit();
        }

        return $response;
    });

    //Update
    $app->get("/cetdabar/admin/users/{iduser}", function(Request $request, Response $response, $args){
        $iduser = $args['iduser'];

        if(isset($_SESSION['alert'])){
            echo $_SESSION['alert'];
            unset($_SESSION['alert']);
        }

        if($_SESSION['user']['admin'] != 1){
            $_SESSION['alert'] = "<script>alert('Acesso negado');</script>";
            header("location: /cetdabar/");
            exit();
        }

        $user = new User();

        $data = $user->get($iduser);

        $page = new PageAdmin(array(
            "header" => false,
            "footer" => false,
            "data" => [
                "user" => $_SESSION['user'],
                "userdata" => $data
            ]
        ), "views/admin/users-admin");

        $page->setTpl("user-update");

        return $response;
    });
    $app->post("/cetdabar/admin/users/{iduser}", function(Request $request, Response $response, $args){
        $iduser = $args['iduser'];

        echo "OK";

        return $response;
    });


?>