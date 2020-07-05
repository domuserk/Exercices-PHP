<?php


namespace Source\Models;

use Source\Core\Model;


/**
 * Class User
 * @package Source\Models
 */
class User extends Model
{
//** @var array $safe no update or create */
    /**
     * @var array
     */
    protected static $safe = ["id", "created_at", "updated_at"];

//** @var string $entity database table */

    /**
     * @var string
     */
    protected static $entity = "users";

    /**
     * @var array $required table fileds
     */
    protected static $required = ["first_name", "last_name", "email", "password"];


    /**
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string|null $document
     * @return User|null
     */
    public function bootstrap(string $firstName, string $lastName, string $email, string $password, string $document = null): ?User
    {
        $this->first_name = $firstName;
        $this->last_name = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->document = $document;
        return $this;

    }

    /**
     * @param string $terms
     * @param string $params
     * @param string $columns
     * @return User|null
     */
    public function find(string $terms, string $params, string $columns = "*"): ?User
    {
        $find = $this->read("SELECT {$columns} FROM " . self::$entity . " WHERE{$terms}", "id={$id}");
        if ($this->fail() || !$find->rowCount()) {

            return null;
        }
        return $find->fetchObject(__CLASS__);
    }

    /**
     * @param int $id
     * @param string $columns
     * @return User|null
     */
    public function load(int $id, string $columns = "*"): ?User
    {
        $load = $this->read("SELECT {$columns} FROM " . self::$entity . " WHERE id = :id", "id={$id}");
        if ($this->fail() || !$load->rowCount()) {
            $this->message = "Usuário não encontrado para o id informado";
            return null;
        }
        return $load->fetchObject(__CLASS__);
    }

    /**
     * @param $email
     * @param $id
     * @param string $columns
     * @return User|null
     */
    public function findById($email, int $id, string $columns = "*"): ?User
    {
        return $this->find("id = :id", "id= {$id}", $columns);
    }

    /**
     * @param $email
     * @param string $columns
     * @return User|null
     */
    public function findByEmail($email, string $columns = "*"): ?User
    {
        return $this->find("id = :id", "id= {$email}", $columns);
    }

    /**
     * @param int $limit
     * @param int $offset
     * @param string $columns
     * @return array|null
     */
    public function all(int $limit = 30, int $offset = 0, string $columns = "*"): ?array
    {
        $all = $this->read("SELECT {$columns} FROM " . self::$entity . "LIMIT :l OFFSET :o ", "l={$limit}&o={$offset}");
        if ($this->fail() || !$all->rowCount()) {

            return null;
        }
        return $all->fetchall(PDO::FETCH_CLASS, __CLASS__);

    }

    /**
     * @return User|null
     */
    public function save(): ?User
    {
        if (!$this->required()) {
            $this->message->warning("Nome,Sobrenome,Email e Senha são obrigatorios");
            return null;

        }
        /** User Update */
        if (!empty($this->id)) {
            $userId = $this->id;
            $email = $this->read("SELECT id FROM users WHERE email = :email AND id  != :id", "email={$this->email}&id={$userId}");

            if ($this->find("email = :e AND id != :i", "e={$this->email}&i={$userId}"))
                $this->message->warning(" O email informado já está cadastrado!");
            return null;
        }
        $this->update(self::$entity, $this->safe(), "id = :id", "id={$userId}");
        if ($this->fail()) {
            $this->message->error("Erro ao Atualizar,verifique os dados ");
            return null;
        }

    }
}

        /** User Create */
        if (empty($this->id)) {
            if ($this->findByEmail($this->email)) {
                $this->message->warning("O email informado já está cadastrado");
                return null;
            }
            $userId = $this->create(self::$entity, $this->safe());
            if ($this->fail()) {
                $this->message->error("Erro ao Cadastrar , verifique os dados");
                return null;
            }


            $this->data = ($this->findById($userId))->data();
            return $this;
        }






    /**
     * @return User|null
     */
    public function destroy(): ?User
    {
if(!empty($this->id)){
    $this->delete(self::$entity,"id = :id","id={$this->id}");


}
if($this->fail()){
    $this->message="Não foi possível remover o usuário";
    return null;
}
$this->message="Usuário removido com sucesso";
$this->data=null;
return $this;
    }


}


