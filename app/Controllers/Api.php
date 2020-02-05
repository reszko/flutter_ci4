<?php

namespace App\Controllers;

use App\Models\UsuariosModel;


class Api extends BaseController
{
	
	public function getDados($id = null)
	{
		if (empty($id)) {
			$dados = [
				'erro' => true,
				'mensagem' => 'Informe o Código do usuário antes de continuar.'
			];
		} else {
			$usuariosModel = new UsuariosModel();		
			$usuarios = $usuariosModel->find($id);							
			if (is_array($usuarios) && count($usuarios) > 0) {
				$dados = [
					'erro' => false,
					'nome' => $usuarios['nome'],
					'status' => $usuarios['status']
				];
			} else {
				$dados = [
					'erro' => true,
					'mensagem' => "Usuário não encontrado."
				];
			}
		}
		header('Content-Type: application/json;charset=utf-8');
		echo json_encode($dados);
	}

	//--------------------------------------------------------------------

}
