package enums;

/**
 *  enums para tipar o tipo de produto
 */
public enum EnumTipoProduto {

	DOCE("0", "DOCE"),
	SALGADO("1", "SALGADO");

	private String id;
	private String name;

	private EnumTipoProduto(final String id, final String name) {
		this.id = id;
		this.name = name;
	}

}
