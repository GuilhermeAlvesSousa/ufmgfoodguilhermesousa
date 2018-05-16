package controllers;

import models.UsuarioModel;
import util.ControllerUtil;



/**
 *
 */
public class UsuarioCotroller extends ControllerUtil {


	public static void logar(String login, String senha){
		try{

			if(login==null)
				renderJSONError("Usuario em Branco");
			if(senha==null)
				renderJSONError("Senha em Branco");

			UsuarioModel usuario = UsuarioModel.find("senha = :senha and email = :login")
					.setParameter("login", login)
					.setParameter("senha", senha)
					.first();

			if(usuario!=null){
				session.put("usuario",usuario.id);
				usuario.senha = null;
				renderJSONSucesso(usuario,"Logado com Sucesso",0);
			}

			if(usuario==null)
				renderJSONError("Usuario ou senha digitados nao existem");
		}
		catch (Exception e){

		}
	}

	public static void deslogar(){
		try{

			session.clear();
			renderJSONSucesso("Usuario Deslogado");
		}
		catch (Exception e){

		}
	}

	public static void getSessao(){

		try{

			if(session.get("usuario")==null)
				renderJSONError("Nao Existe usuario Logado");


			UsuarioModel usuario = UsuarioModel.findById(Long.parseLong(session.get("usuario")));

			if(usuario!=null){
				renderJSONSucesso(usuario, "Consulta realizada com sucesso!",0);

			}
		}
		catch (Exception e){

		}

	}

	public static void salvar(UsuarioModel usuario){
		try{

			renderJSONSucesso(usuario.save(), "Salvo Com Sucesso", 0);
		}
		catch (Exception e){
			renderJSONError("Erro ao Salvar");
		}

	}

	public static void get(Long id){
		try{

			renderJSONSucesso(UsuarioModel.findById(id), "Consultado com Sucesso !", 0);
		}
		catch (Exception e){
			renderJSONError("Erro ao Buscar");
		}

	}

	public static void listar(String nome, Integer pagina){
		try{

			renderJSONSucesso(UsuarioModel.listarPagiando(nome,pagina),"Lista consultada com sucesso !", 0);
		}
		catch (Exception e){
			renderJSONError("Erro ao Listar");
		}

	}

	public static void delete(UsuarioModel usuario){
		try{

			renderJSONSucesso(usuario.delete(), "Deletado com Sucesso", 0);
		}
		catch (Exception e){
			renderJSONError("Erro ao Deltar");
		}

	}

}
