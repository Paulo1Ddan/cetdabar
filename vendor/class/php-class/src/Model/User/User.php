<?php 
    namespace Class\Model\User;

    use Class\Model;
    use Class\DB\Sql;
    use Class\Mailer;

     class User extends Model{
        public static function login($login, $pass)
        {
            $sql = new Sql();
            $result = $sql->select("SELECT * FROM user WHERE emailuser = :login", array(
                ":login" => $login
            ));

            if(count($result) === 0){
                $_SESSION['alert'] = "<script>alert('Usuario ou senha inválida'), history.back()</script>";
                return false;
            }else{
                $data = $result[0];
                if(password_verify($pass, $data['passuser'])){
                    $user = new User();
                    $user->setData($data);
                    $_SESSION['user'] = $user->getData();
                    $_SESSION['logado'] = true;
                    $_SESSION['alert'] = "<script>alert('Seja bem vindo ".$data['nomeuser']."')</script>";
                    return true;
                }else{
                    $_SESSION['alert'] = "<script>alert('Usuario ou senha inválida'), history.back()</script>";
                    return false;
                }

            }
        }

        public static function logout()
        {
            session_destroy();
            return true;
        }

        public function getForgot($email)
        {
            $sql = new Sql();

            $results = $sql->select("SELECT * FROM user WHERE emailuser = :email", array(
                ":email" => $email
            ));

            if(count($results) > 0){
                $data = $results[0];

                $sql->insert("INSERT INTO userrecoverypass (iduser, userip) VALUES (:iduser, :userip)", array(
                    ":iduser" => $data['iduser'],
                    ":userip" => $_SERVER['REMOTE_ADDR']
                )); 
                $resultrecovery = $sql->select("SELECT * FROM userrecoverypass WHERE idrecovery = LAST_INSERT_ID()");

                if($resultrecovery > 0){
                    $dataRecovery = $resultrecovery[0];

                    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length("aes-256-cbc"));
                    $code = openssl_encrypt($dataRecovery['idrecovery'], "aes-256-cbc", User::KEY, 0, $iv);
                    $result = base64_encode($iv.$code);

                    $link = "http://localhost/cetdabar/login/reset?code=$result";

                    $message = "Olá, $data[nomeuser]. \n\n <br><br> Para alterar sua senha, acesse o link a seguir dentro de uma hora: $link";

                    $mailer = new Mailer($data['emailuser'], $data['nomeuser'], "Redefinição de senha", $message);

                    $mailer->send();

                    $_SESSION['alert'] = "<script>alert('Verifique sua caixa de email com as informações de alteração de senha');</script>";
                    return true;
                }else{
                    $_SESSION['alert'] = "<script>alert('Não foi possível recuperar a senha');</script>";
                    return false;
                }

                return true;
            }else{
                $_SESSION['alert'] = "<script>alert('Não foi possível recuperar a senha');</script>";
                return false;
            }
        }

        public function validForgotDecrypt($result)
        {
            $result = base64_decode($result);

            $code = mb_substr($result, openssl_cipher_iv_length("aes-256-cbc"), null, '8bit');
            $iv = mb_substr($result, 0, openssl_cipher_iv_length("aes-256-cbc"), '8bit');

            $idrecovery = openssl_decrypt($code, "aes-256-cbc", User::KEY, 0, $iv);

            $sql = new Sql();

            $resultdecrypt = $sql->select("SELECT * FROM userrecoverypass a INNER JOIN user b USING(iduser) WHERE a.idrecovery = :code AND a.dtrecovery IS NULL AND DATE_ADD(a.dtregister, INTERVAL 1 HOUR) >= NOW();", array(
                ":code" => $idrecovery
            ));

            if(count($resultdecrypt) > 0){
                return $resultdecrypt[0];
            }else{
                $_SESSION['alert'] = "<script>alert('Não foi possível recuperar a senha');</script>";
                return false;
            }
        }

        public function setForgot($idrecovery)
        {
            $sql = new Sql();

            $sql->query("UPDATE userrecoverypass SET dtrecovery = NOW() WHERE idrecovery = :id", array(
                ":id" => $idrecovery
            ));
        }

        public function setPassword($pass, $iduser)
        {
            $sql = new SQL();

            $result = $sql->query("UPDATE user SET passuser = :pass WHERE iduser = :iduser", array(
                ":pass" => $pass,
                ":iduser" => $iduser
            ));

            if($result){
                $_SESSION['alert'] = "<script>alert('Senha atualizada com sucesso');</script>";
                return true;
            }else{
                $_SESSION['alert'] = "<script>alert('Não foi possível atualizar a senha');</script>";
                return false;
            }
        }

        public function getUsers()
        {
            $sql = new Sql();

            $result = $sql->select("SELECT * FROM user");

            return $result;
        }

        public function get($iduser)
        {
            $sql = new Sql();

            $result = $sql->select("SELECT * FROM user WHERE iduser = :iduser", array(
                ":iduser" => $iduser
            ));

            return $result[0];
        }

        public function createUserAdmin()
        {

        }

        public function validateDataUserAdmin($data = array())
        {
            //Validate Nome
            if(empty($data['nomeuser'])){
        
                $_SESSION['alert'] = "<script>alert('Preencha o campo nome'); history.back()</script>";
                return false;

            //Validate Email
            }else if(empty($data['emailuser'])){

                $_SESSION['alert'] = "<script>alert('Preencha o campo E-mail'); history.back()</script>";
                return false;

            }else if(!filter_var($data["emailuser"], FILTER_VALIDATE_EMAIL)){

                $_SESSION['alert'] = "<script>alert('Insira um formato de email válido'); history.back()</script>";
                return false;

            //Validate Senha
            }else if(empty($data["passuser"])){

                $_SESSION['alert'] = "<script>alert('Insira um formato de email válido'); history.back()</script>";
                return false;

            }else if(!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[a-zA-Z\d].\S{8,36}$/', $data['passuser'])){

                $_SESSION['alert'] = "<script>alert('Insira uma senha válida'); history.back()</script>";
                return false;

            //Validade Cel
            }else if(empty($data["celuser"])){
                
                $_SESSION['alert'] = "<script>alert('Preencha o campo celular'); history.back()</script>";
                return false;

            }else if(!preg_match('^\(+[0-9]{2,3}\) [0-9]{5}-[0-9]{4}$^', $data['celuser'])){
                
                $_SESSION['alert'] = "<script>alert('Celular inválido'); history.back()</script>";
                return false;

            //Validade Tel
            }else if(!empty($data['telfixo']) && !preg_match('^\(+[0-9]{2,3}\) [0-9]{4}-[0-9]{4}$^', $data['telfixo'])){
                
                $_SESSION['alert'] = "<script>alert('Tel. Fixo inválido'); history.back()</script>";
                return false;

            //Validate Data Nasc
            }else if(empty($data['datanasc'])){

                $_SESSION['alert'] = "<script>alert('Preencha o campo Data Nasc'); history.back()</script>";
                return false;

            }else if(!preg_match('/^\d{4}\-\d{1,2}\-\d{1,2}$/', $data['datanasc'])){

                $_SESSION['alert'] = "<script>alert('Insira um formato de data valido'); history.back()</script>";
                return false;

            //Validate CatUser
            }else if($data['catuser'] > 2 || $data['catuser'] < 1){

                $_SESSION['alert'] = "<script>alert('Categoria de usuario inválido'); history.back()</script>";
                return false;

            //Validate Admin
            }else if(!empty($data['admin']) && $data['admin'] != 1){
                
                $_SESSION['alert'] = "<script>alert('Valor de administrador inválido'); history.back()</script>";
                return false;

            }else{
                return true;
            }
        }
     }
?>