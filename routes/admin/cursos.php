<?php 

    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Class\Model\Cursos\Cursos;
    use Class\PageAdmin;

    //Get Cursos
    $app->get("/cetdabar/admin/cursos", function(Request $request, Response $response){
        if (isset($_SESSION['alert'])) {
            echo $_SESSION['alert'];
            unset($_SESSION['alert']);
        }
    
        if ($_SESSION['user']['admin'] != 1) {
            $_SESSION['alert'] = "<script>alert('Acesso negado');</script>";
            header("location: /cetdabar/");
            exit();
        }

        $cursos = Cursos::listCursosAdmin();

        $page = new PageAdmin(array(
            "header" => false,
            "footer" => false,
            "data" => array(
                "user" => $_SESSION['user'],
                "cursos" => $cursos
            )
        ), "views/admin/curso-admin");

        $page->setTpl("cursos");

        return $response;
    });

    //Create curso
    $app->get("/cetdabar/admin/cursos/curso-add", function(Request $request, Response $response){
        if (isset($_SESSION['alert'])) {
            echo $_SESSION['alert'];
            unset($_SESSION['alert']);
        }
    
        if ($_SESSION['user']['admin'] != 1) {
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
        ), "views/admin/curso-admin");

        $page->setTpl("curso-create");

        return $response;
    });
    $app->post("/cetdabar/admin/cursos/curso-add", function (Request $request, Response $response){

        $curso = new Cursos();

        $nameimg = $curso->validateImgCurso($_FILES['imgcurso']);
        if(Cursos::validateCurso($_POST)){
            if($nameimg){
                $_POST['imgcurso'] = "assets/cursos/$nameimg";

                if($curso->createCurso($_POST)){
                    header("location: /cetdabar/admin/cursos");
                    exit(); 
                }else{
                    header("location: /cetdabar/admin/cursos/curso-add");
                    exit(); 
                }
            }else{
                header("location: /cetdabar/admin/cursos/curso-add");
                exit(); 
            }
        }else{
            header("location: /cetdabar/admin/cursos/curso-add");
            exit();
        }

        return $response;
    });

    //Update curso
    $app->get('/cetdabar/admin/cursos/{idcurso}', function(Request $request, Response $response, $args){
        if (isset($_SESSION['alert'])) {
            echo $_SESSION['alert'];
            unset($_SESSION['alert']);
        }
    
        if ($_SESSION['user']['admin'] != 1) {
            $_SESSION['alert'] = "<script>alert('Acesso negado');</script>";
            header("location: /cetdabar/");
            exit();
        }

        $idcurso = $args['idcurso'];

        $curso = new Cursos();

        $data = $curso->getCurso($idcurso);

        $page = new PageAdmin(array(
            "header" => false,
            "footer" => false,
            "data" => array(
                "user" => $_SESSION['user'],
                "cursodata" => $data
            )
        ), "views/admin/curso-admin");

        $page->setTpl("curso-update");

        return $response;
    });
    $app->post('/cetdabar/admin/cursos/{idcurso}', function(Request $request, Response $response, $args){
        $idcurso = $args['idcurso'];

        $curso = new Cursos();

        if($curso->validateCursoUpdate($_POST)){
            $_POST['idcurso'] = $idcurso;
            $curso->setData($_POST);

            if($curso->updateCurso()){
                header("Location: /cetdabar/admin/cursos");
                exit();
            }else{
                header("Location: /cetdabar/admin/cursos/$idcurso");
                exit();
            }
        }else{
            header("Location: /cetdabar/admin/cursos/$idcurso");
            exit();
        }

        return $response;
    });
    $app->post('/cetdabar/admin/cursos/{idcurso}/update-img', function(Request $request, Response $response, $args){

        $idcurso = $args['idcurso'];

        $curso = new Cursos();

        $nameimg = $curso->validateImgCurso($_FILES['imgcurso']);
        if($nameimg){
            $_POST['imgcurso'] = "assets/cursos/$nameimg";
            $_POST['idcurso'] = $idcurso;
            $curso->setData($_POST);
            if($curso->updateImgCurso()){
                header("Location: /cetdabar/admin/cursos");
                exit();
            }else{
                header("Location: /cetdabar/admin/cursos/$idcurso");
                exit();
            }
        }else{
            header("Location: /cetdabar/admin/cursos/$idcurso");
            exit();
        }
    });
    
    //Delete
    $app->get("/cetdabar/admin/cursos/{idcurso}/delete", function(Request $request, Response $response, $args){
        if ($_SESSION['user']['admin'] != 1) {
            $_SESSION['alert'] = "<script>alert('Acesso negado');</script>";
            header("location: /cetdabar/");
            exit();
        }

        $idcurso = $args['idcurso'];

        $curso = new Cursos();

        $curso->setData($curso->getCurso($idcurso));

        if($curso->delete()){
            header("location: /cetdabar/admin/cursos");
            exit();
        }else{
            header("location: /cetdabar/admin/cursos");
            exit();
        }
        return $response;
    });
?>