<?php 

    namespace Class\Model\Matricula;

    use Class\DB\Sql;
    use Class\Model;

    class Matricula extends Model{

        public static function listAll()
        {
            $sql = new Sql();
            $result = $sql->select("SELECT idmatricula, iduser, idcurso, idturma, vencimentoboleto, datamatricula, statusmatricula, nomeuser, nometurma, nomecurso FROM matricula a INNER JOIN user USING (iduser) INNER JOIN curso USING (idcurso) INNER JOIN turma USING (idturma)");

            if($result){
                return $result;
            }else{
                $_SESSION['alert'] = "<script>alert('Não foi possível carregar dados de matrícula');history.back();</script>";
                return false;
            }

        }

    }

?>