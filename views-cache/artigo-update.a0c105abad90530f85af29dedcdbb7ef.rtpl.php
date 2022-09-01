<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Dabar</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/a9f506c8dd.js" crossorigin="anonymous"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="/cetdabar/res/admin/dist/css/adminlte.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/cetdabar/res/admin/plugins/summernote/summernote-bs4.min.css">

    <link rel="stylesheet" href="/cetdabar/res/admin/css/blog-admin.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/cetdabar/" class="nav-link">Inicio</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="/cetdabar/res/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/cetdabar/res/site/assets/user/<?php echo htmlspecialchars( $user["imguser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo htmlspecialchars( $user["nomeuser"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Início -->
                        <li class="nav-item">
                            <a href="/cetdabar/admin" class="nav-link">
                                <i class="fa-solid fa-home"></i>
                                <p>Início</p>
                            </a>
                        </li>
                        <!-- Users -->
                        <li class="nav-item">
                            <a href="/cetdabar/admin/users" class="nav-link">
                                <i class="fa-solid fa-user"></i>
                                <p>Usuarios</p>
                            </a>
                        </li>
                        <!-- Cursos -->
                        <li class="nav-item">
                            <a href="/cetdabar/admin/cursos" class="nav-link">
                                <i class="fa-solid fa-pencil"></i>
                                <p>Cursos</p>
                            </a>
                        </li>
                        <!-- Atigos -->
                        <li class="nav-item">
                            <a href="/cetdabar/admin/blog" class="nav-link">
                                <i class="fa-solid fa-table-cells-large"></i>
                                <p>Artigos</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Artigos</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/cetdabar/">Home</a></li>
                                <li class="breadcrumb-item active"><a href="/cetdabar/admin">Painel</a></li>
                                <li class="breadcrumb-item active">Artigos</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Blog Data -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Atualizar artigo</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="POST" action="/cetdabar/admin/blog/<?php echo htmlspecialchars( $blogdata["idartigo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"
                                    enctype="multipart/form-data">
                                    <div class="card-body">

                                        <!-- Titulo -->
                                        <label for="tituloartigo" class="form-label lblTittleBlog">Título do
                                            Artigo</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa-solid fa-pencil"></i></span>
                                            </div>
                                            <input type="text" required name="tituloartigo" id="tituloartigo"
                                                class="form-control" value="<?php echo htmlspecialchars( $blogdata["tituloartigo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"
                                                placeholder="Titulo Artigo">
                                        </div>

                                        <!-- Artigo -->
                                        <label for="artigo">Artigo</label>
                                        <div class="mb-3">
                                            <textarea required name="artigo" id="artigo">
                                                <?php echo htmlspecialchars( $blogdata["artigo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                            </textarea>
                                        </div>

                                        <!-- Status -->
                                        <label>Status</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa-solid fa-globe"></i></span>
                                            </div>
                                            <select class="form-control" name="statusblog" id="inputGroupSelect01">
                                                <?php if( $blogdata["statusblog"] == 1 ){ ?>
                                                <option value="1">Ativo</option>
                                                <option value="0">Inativo</option>
                                                <?php }else{ ?>
                                                <option value="0">Inativo</option>
                                                <option value="1">Ativo</option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <!-- Autor -->
                                        <label for="autor" class="form-label">Autor</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                            </div>
                                            <input type="text" required name="autor" id="autor" class="form-control"
                                                disabled value="<?php echo htmlspecialchars( $nameuserblog, ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Titulo Artigo">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" id="btnSubmit" class="btn btn-primary">Atualizar</button>
                                    </div>
                                </form>
                            </div>

                            <!-- Blog Capa -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Atualizar Capa</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="POST" action="/cetdabar/admin/blog/<?php echo htmlspecialchars( $blogdata["idartigo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/update-capa"
                                    enctype="multipart/form-data">
                                    <div class="card-body">

                                        <!-- Img Capa -->
                                        <label for="imgcapa">Imagem da Capa</label>
                                        <div class="custom-file">
                                            <input type="file" name="imgcapa" class="custom-file-input" id="imgcapa">
                                            <label class="custom-file-label" for="customFile">Escolher arquivo</label>
                                            <div class="boxImgPreview">
                                                <img src="/cetdabar/res/site/assets/blog/capa/<?php echo htmlspecialchars( $blogdata["imgcapa"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"
                                                    alt="" class="imgPreviewCapa">
                                                <input type="hidden" value="<?php echo htmlspecialchars( $blogdata["imgcapa"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="oldImgCapa">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" id="btnSubmit" class="btn btn-primary">Atualizar</button>
                                    </div>
                                </form>
                            </div>

                            <!-- Blog Banner -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Atualizar Banner</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="POST" action="/cetdabar/admin/blog/<?php echo htmlspecialchars( $blogdata["idartigo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/update-banner"
                                    enctype="multipart/form-data">
                                    <div class="card-body">
                                        <!-- Img Banner -->
                                        <label for="imgbanner">Imagem do Banner</label>
                                        <div class="custom-file">
                                            <input type="file" name="imgbanner" class="custom-file-input"
                                                id="imgbanner">
                                            <label class="custom-file-label" for="customFile">Escolher arquivo</label>
                                            <div class="boxImgPreview">
                                                <img src="/cetdabar/res/site/assets/blog/banner/<?php echo htmlspecialchars( $blogdata["imgbanner"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"
                                                    alt="" class="imgPreviewBanner">
                                                <input type="hidden" value="<?php echo htmlspecialchars( $blogdata["imgbanner"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="oldImgBanner">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" id="btnSubmit" class="btn btn-primary">Atualizar</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/cetdabar/res/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/cetdabar/res/admin/dist/js/adminlte.min.js"></script>
    <!-- Summernote -->
    <script src="/cetdabar/res/admin/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="/cetdabar/res/admin/plugins/summernote/lang/summernote-pt-BR.min.js"></script>
    <script src="/cetdabar/lib/Inputmask/dist/jquery.inputmask.min.js"></script>
    <script src="/cetdabar/res/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script>
        $(document).ready(function () {
            // Summernote
            $('#artigo').summernote({
                lang: "pt-BR"
            })
        });
        document.querySelector('#imgcapa').addEventListener('change', function () {

            var file = new FileReader();

            file.onload = function () {

                document.querySelector('.imgPreviewCapa').src = file.result;

            }

            file.readAsDataURL(this.files[0]);

        });
        document.querySelector('#imgbanner').addEventListener('change', function () {

            var file = new FileReader();

            file.onload = function () {

                document.querySelector('.imgPreviewBanner').src = file.result;

            }

            file.readAsDataURL(this.files[0]);

        });
        bsCustomFileInput.init();
    </script>
</body>

</html>