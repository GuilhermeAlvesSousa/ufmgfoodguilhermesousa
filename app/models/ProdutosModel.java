package models;


import enums.EnumTipoProduto;
import play.db.jpa.Blob;
import play.db.jpa.GenericModel;
import play.libs.MimeTypes;

import javax.persistence.*;
import javax.validation.constraints.NotNull;
import java.io.File;
import java.io.FileInputStream;
import java.util.Date;
import java.util.List;


/**
 * Models utilizadas dentro desta framework dispensa contrutores e geters e seters
 */
@Entity
@Table(name = "PRODUTOS")
public class ProdutosModel extends GenericModel {

	@Id
	@Column(name = "id")
	@GeneratedValue(strategy= GenerationType.IDENTITY)
	public Long id;

	@Column(name = "nome")
	public String nome;

	@Column(name="tipo")
	@Enumerated
	@NotNull
	public EnumTipoProduto tipoProduto;

	@Column(name = "preco")
	public Float preco;

	@Column(name = "inicio")
	public String inicio;

	@Column(name = "termino")
	public String termino;

	@Column(name = "dias")
	public String dias;

	@Column(name = "local")
	public String local;

	@Column(name = "comentario")
	public String comentario;

	@Column(name = "nome_arquivo")
	public String nomeArquivo;

	@Column(name = "arquivo_file")
	@NotNull
	public Blob arquivo;

	public static void salvarProduto(ProdutosModel produto,File arquivo) throws Exception{

		Boolean altera = false;

		if(produto.id!=null)
			altera = true;

		if(arquivo!=null){
			Blob blobArquivo = new Blob();
			blobArquivo.set(new FileInputStream(arquivo), MimeTypes.getContentType(arquivo.getName()));
			produto.arquivo = blobArquivo;
			produto.nomeArquivo = arquivo.getName();
		}

		produto.save();
	}

	public static List<ProdutosModel> listarPagiando(String nome, Integer pagina){

		if( pagina == null || pagina<1)
		{
			pagina = 1;
		}

		List<ProdutosModel> lista =
				ProdutosModel.find("nome like ?", "%" + nome + "%")
						.fetch(pagina, 15);


		return lista;
	}
}
