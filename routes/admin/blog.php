<?php 

    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Class\Model\Blog\Blog;
    use Class\PageAdmin;

    $app->get("/cetdabar/admin/blog", function(Request $request, Response $response){

        if(isset($_SESSION['alert'])){
            echo $_SESSION['alert'];
            unset($_SESSION['alert']);
        }

        if($_SESSION['user']['admin'] != 1){
            $_SESSION['alert'] = "<script>alert('Acesso negado');</script>";
            header("location: /cetdabar/");
            exit();
        }

        $data = Blog::listAllAdmin();

        for ($i = 0; $i < count($data); $i++){
            $dataArtigo = explode("-",$data[$i]['dataartigo']);
            $data[$i]['dataartigo'] = "$dataArtigo[2]/$dataArtigo[1]/$dataArtigo[0]";
        }

        $page = new PageAdmin(array(
            "header" => false,
            "footer" => false,
            "data" => array(
                "dataArtigo" => $data
            )
        ));

        $page->setTpl("");
    });
?>