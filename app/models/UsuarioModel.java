package models;


import enums.EnumTipoUsuario;
import play.db.jpa.GenericModel;

import javax.persistence.*;
import javax.validation.constraints.NotNull;
import java.util.List;


/**
 * Models utilizadas dentro desta framework dispensa contrutores e geters e seters
 */
@Entity
@Table(name = "USUARIO")
public class UsuarioModel extends GenericModel {

	@Id
	@Column(name = "id")
	@GeneratedValue(strategy= GenerationType.IDENTITY)
	public Long id;

	@Column(name = "nome")
	public String nome;

	@Column(name = "email")
	public String email;

	@Column(name = "fone")
	public String fone;

	@Column(name = "senha")
	public String senha;

	@Column(name="tipoUsuario")
	@Enumerated
	@NotNull
	public EnumTipoUsuario tipoUsuario;


	public static List<UsuarioModel> listarPagiando(String nome, Integer pagina){

		if( pagina == null || pagina<1)
		{
			pagina = 1;
		}

		List<UsuarioModel> lista =
				UsuarioModel.find("nome like ?", "%" + nome + "%")
						.fetch(pagina, 15);


		return lista;
	}
}
