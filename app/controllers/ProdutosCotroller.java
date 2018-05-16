package controllers;

import models.ProdutosModel;
import util.ControllerUtil;

import java.io.File;


/**
 *
 */
public class ProdutosCotroller extends ControllerUtil {



	public static void salvar(ProdutosModel produto,File arq){
		try{

			ProdutosModel.salvarProduto(produto,arq);

			renderJSONSucesso(null, "Salvo Com Sucesso", 0);
		}
		catch (Exception e){
			renderJSONError("Erro ao Salvar");
		}

	}

	public static void get(Long id){
		try{

			renderJSONSucesso(ProdutosModel.findById(id), "Consultado com Sucesso !", 0);
		}
		catch (Exception e){
			renderJSONError("Erro ao Buscar");
		}

	}

	public static void listar(String nome, Integer pagina){
		try{

			renderJSONSucesso(ProdutosModel.listarPagiando(nome,pagina),"Lista consultada com sucesso !", 0);
		}
		catch (Exception e){
			renderJSONError("Erro ao Listar");
		}

	}

	public static void delete(ProdutosModel produto){
		try{

			renderJSONSucesso(produto.delete(), "Deletado com Sucesso", 0);
		}
		catch (Exception e){
			renderJSONError("Erro ao Deltar");
		}

	}

}
