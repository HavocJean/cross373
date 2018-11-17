<?php
include_once("ClassConexao.php");

class Clientes extends Conexao{	


    public function inserirCliente(){

        $query = $this->db->prepare('INSERT INTO clientes(nomeClientes, sobrenomeClientes, cpf_cnpjClientes, dataNascClientes, telefoneClientes, emailClientes, senha)
			VALUES(:nomeClientes, :sobrenomeClientes, :cpf_cnpjClientes, :dataNascClientes, :telefoneClientes, :emailClientes, :senha)');

		// idcliente(auto), nome, sobrenome, email, senha, data nasc, cpf, cel
		// falta pegar o rgClientes, idEnderecos (chave estrangeira), sexoClientes, statusClientes, datas?

		$query->execute([
			':nomeClientes'=>$_POST['cadastro_nome'],
			':sobrenomeClientes'=>$_POST['cadastro_sobrenome'],
			':cpf_cnpjClientes'=>$_POST['cpf_cnpj'],
			':dataNascClientes'=>$_POST['data_nasc'],
			':telefoneClientes'=>$_POST['telefone'],
			':emailClientes'=>$_POST['cadastro_email'],
			':senha'=>$_POST['cadastro_senha']
		]);
    }


    public function inserirEnderecos(){

        $query = $this->db->prepare('INSERT INTO enderecos(ruaEnderecos, numeroEnderecos, complementoEnderecos, bairroEnderecos, cidadeEnderecos, estadoEnderecos, cepEnderecos)
			VALUES(:ruaEnderecos, :numeroEnderecos, :complementoEnderecos, :bairroEnderecos, :cidadeEnderecos, :estadoEnderecos, :cepEnderecos)');

		// idEnderecos(auto), ruaEnderecos, numeroEnderecos, complementoEnderecos, bairroEnderecos, cidadeEnderecos, estadoEnderecos, cepEnderecos

		$query->execute([
			':ruaEnderecos'=>$_POST['rua'],
			':numeroEnderecos'=>$_POST['numero'],
			':complementoEnderecos'=>$_POST['complemento'],
			':bairroEnderecos'=>$_POST['bairro'],
			':cidadeEnderecos'=>$_POST['cidade'],
			':estadoEnderecos'=>$_POST['estado'],
			':cepEnderecos'=>$_POST['cep']
		]);
	}


	public function atualizarCliente(){		
		$query = $this->db->prepare('UPDATE clientes SET rgClientes = :rgClientes, sexoClientes = :sexoClientes WHERE idClientes = :id');

		$query->execute([':rgClientes'=>$_POST['rg'],
						':sexoClientes'=>$_POST['sexo'],
						':idClientes'=> $id	
			]);
	}
}
