package enums;

/**
 *  enums para tipar o tipo de usuario
 */
public enum EnumTipoUsuario {
	VENDEDOR("0", "VENDEDOR"),
	COMPRADOR("1", "COMPRADOR"),
	ADM("2", "ADM");

	private String id;
	private String name;

	private EnumTipoUsuario(final String id, final String name) {
		this.id = id;
		this.name = name;
	}

}
