class Cocineros extends Empleados{

	public Cocineros(String nombre, String ocupacion, int identificador, double sueldo){
		super(nombre,ocupacion,identificador,sueldo);
	}

	public void prepararComida(){
		System.out.println("Preparando orden...");
		System.out.println("Orden Lista");
	}

	@Override
	public void info(){
		System.out.println("Nombre: "+this.nombre);
		System.out.println("Ocupacion: "+this.ocupacion);
		System.out.println("Identificador: "+this.identificador);
		System.out.println("Sueldo: "+this.sueldo);
	}
}