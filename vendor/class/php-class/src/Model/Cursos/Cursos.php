<?php 

    namespace Class\Model\Cursos;

    use Class\Model;
    use Class\DB\Sql;

    class Cursos extends Model{
        public static function listAll()
        {
            $sql = new Sql;
            return $sql->select('SELECT * FROM curso WHERE statuscurso = 1 ORDER BY nomecurso LIMIT 2');
        }

        public function getCurso($idCurso)
        {
            $sql = new Sql();

            $result = $sql->select('SELECT * FROM curso WHERE idcurso = :ID', array('ID' => $idCurso));

            return $result[0];
        }
    }

?>