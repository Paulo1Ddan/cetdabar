<?php

    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Class\Model\Matricula\Matricula;
    use Class\Model\User\User;
    use Class\Model\Cursos\Cursos;
    use Class\Model\Turmas\Turmas;
    use Class\PageAdmin;

    //Get Matricula
    $app->get("/cetdabar/admin/matricula", function(Request $request, Response $response){
        if (isset($_SESSION['alert'])) {
            echo $_SESSION['alert'];
            unset($_SESSION['alert']);
        }
    
        if ($_SESSION['user']['admin'] != 1) {
            $_SESSION['alert'] = "<script>alert('Acesso negado');</script>";
            header("location: /cetdabar/");
            exit();
        }
        
        $data = Matricula::listAll();

        foreach($data as $key => &$value) {
            $value['datamatricula'] = date("d/m/Y", strtotime($value['datamatricula']));   
        }
        $page = new PageAdmin(array(
            "header" => false,
            "footer" => false,
            "data" => array(
                "user" => $_SESSION['user'],
                "matricula" => $data
            )
        ), "views/admin/matricula-admin");

        $page->setTpl("matricula");

        return $response;
    });

    //Matricula add
    $app->get("/cetdabar/admin/matricula/matricula-add", function(Request $request, Response $response){
        if(isset($_SESSION['alert'])) {
            echo $_SESSION['alert'];
            unset($_SESSION['alert']);
        }

        if ($_SESSION['user']['admin'] != 1) {
            $_SESSION['alert'] = "<script>alert('Acesso negado');</script>";
            header("location: /cetdabar/");
            exit();
        }

        $user = new User();
        $curso = new Cursos();
        $turma = new Turmas();

        $userdata = $user->getUsers();
        $cursodata = $curso->listCursosAdmin();
        $turmadata = $turma->listAll();
        $todaydate = date("Y-m-d");

        $page = new PageAdmin(array(
            "header" => false,
            "footer" => false,
            "data" => array(
                "user" => $_SESSION['user'],
                "datausers" => $userdata,
                "datacursos" => $cursodata,
                "dataturmas" => $turmadata,
                "todaydate" => $todaydate
            )
        ), "views/admin/matricula-admin");

        $page->setTpl("matricula-add");

        return $response;
    });
    $app->post("/cetdabar/admin/matricula/matricula-add", function (Request $request, Response $response){

        return $response;
    })
?>