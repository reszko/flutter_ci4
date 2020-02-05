<?php

namespace App\Controllers;

use App\Models\UsuariosModel;
use Exception;

class Usuarios extends BaseController
{
	protected $usuariosModel;
		
	public function __construct(){	

		$this->usuariosModel = new UsuariosModel();
		helper(['html', 'form']);
	}

	/**	
	 * Carrega a view principal
	 */
	public function index()
	{				
		
		$dados = [
			'usuarios' => $this->usuariosModel->findAll()		
		];
		return view('usuarios', $dados);
	}

	/**
	 * Carrega a view de edição do usuário
	 */
	public function editar($id = null){
	
		$usuario = $this->usuariosModel->find($id);
		if (is_array($usuario) && count($usuario) > 0) {
			$dados = [
				'usuario' => $usuario
			];
			echo view('usuarios_editar', $dados);
		}

	}
	/**	
	 * Salva os dados alterados.
	 */
	public function store(){
		
		$dados = $this->request->getPost();

		if ($this->usuariosModel->save($dados)) {
			return redirect()->to('/flutter/index.php/usuarios'); 
		} else {
			throw new Exception("Erro ao atualizar os dados");
		}
		
	}


	//--------------------------------------------------------------------

}
