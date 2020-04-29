<?php
namespace Douglas\Cursos\Entity;
/**
 * @Entity
 * @Table(name="usuarios")
 */
class Usuario
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;
    /**
     * @email
     * @Column(type="string")
     */
    private $email;
    /**
     * @senha
     * @Column(type="string")
     */
    private $senha;

    public function senhaEstaCorreta(string $senhaPura): bool
    {
        return password_verify($senhaPura, $this->senha);
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setEmail($email)
    {
        return $this->email = $email;
    }

    public function setSenha($senha)
    {
        return $this->senha = $senha;
    }
}
