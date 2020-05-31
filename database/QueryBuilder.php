<?php
require_once __DIR__ . '/../exceptions/QueryBuilderException.php';

class QueryBuilder{
    /**
     * @var PDO
     */
    private $connection;
    /**
     * @var string
     */
    private $tabla;
    /**
     * @var string
     */
    private $classEntity;

    public function __construct(PDO $connection,string $tabla, string $classEntity){
        $this->connection=$connection;
        $this->tabla=$tabla;
        $this->classEntity=$classEntity;
    }

    /**
     * @return array
     * @throws QueryBuilderException
     */
    public function findAll():array{
        $sql="SELECT * FROM $this->tabla";
        $pdoStatement=$this->connection->prepare($sql);
        if($pdoStatement->execute()===false){
            throw new QueryBuilderException("No se ha podido ejecutar la Query");
        }
        return $pdoStatement->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,
            $this->classEntity);

    }

    /**
     * @param $entity
     * @throws QueryException
     */
    public function save($entity){
        try{
            echo $this->tabla;

            $parameters=$entity->toArray();
            $sql=sprintf(
                'INSERT INTO %s (%s) VALUES (%s)',
            $this->tabla,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
            );

            $pdoStatement=$this->connection->prepare($sql);

            $pdoStatement->execute($parameters);

        }catch(PDOException $exception){
            throw new QueryBuilderException('Error al insertar ' . $sql);
        }
    }

    /**
     * @param $entity
     * @throws QueryBuilderException
     */
    public function update($entity){
        try{
            $parameters=$entity->toArray();
            $update=[];
            foreach ($parameters as $key=>$valor){
                $update[] = "$key = :$key";
            }
            $sql=sprintf(
                'UPDATE %s SET %s WHERE IdClient=%s',
                $this->tabla,
                implode(',', $update),
                $entity->getIdClient()
            );
            $pdoStatement=$this->connection->prepare($sql);
            $pdoStatement->execute($parameters);
        }catch(PDOException $exception){
            throw new QueryBuilderException('Error al modificar ' . $sql);
        }
    }

    /**
     * @param $entity
     * @throws QueryBuilderException
     */
    public function delete($entity){
        try{
            //$parameters=$entity->toArray();
            $sql=sprintf(
                'DELETE FROM %s WHERE IdClient=%s',
                $this->tabla, $entity->getIdClient()
            );
            $pdoStatement=$this->connection->prepare($sql);
            $pdoStatement->execute(/*$parameters*/);
        }catch(PDOException $exception){
            throw new QueryBuilderException('Error al borrar ' . $sql);
        }
    }

    /**
     * @param $id
     * @return array
     * @throws QueryBuilderException
     */


    public function findById($id){
        try{
        $sql="SELECT * FROM $this->tabla WHERE idClient=$id";
        $pdoStatement=$this->connection->prepare($sql);
        $pdoStatement->execute();
        var_dump($sql);
//        if ($pdoStatement->execute()===false)
//            throw new QueryBuilderException("No se ha podido ejecutar la query");
        return $pdoStatement->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, $this->classEntity)[0];
        }catch(PDOException $exception){
            throw new QueryBuilderException($exception->getMessage() . $sql);
        }
    }

    public function getUser($usuario):array{
        $sql="SELECT * FROM $this->tabla WHERE email='$usuario'";
        $pdoStatement=$this->connection->prepare($sql);
        if($pdoStatement->execute()===false){
            throw new QueryBuilderException("No se ha podido ejecutar la Query");
        }
        return $pdoStatement->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, $this->classEntity);

    }



}

