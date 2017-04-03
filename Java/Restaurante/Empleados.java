import java.util.Date;

abstract class Empleados{
	String nombre, ocupacion;
	int identificador;
	double sueldo;
	Date hora_Entrada;
	Date hora_Salida;

	public Empleados(String nombre, String ocupacion, int identificador, double sueldo){
		this.nombre=nombre;
		this.ocupacion=ocupacion;
		this.identificador=identificador;
		this.sueldo=sueldo;
		//this.hora_Entrada=new Date();
		//this.hora_Salida=new Date();
	}

	abstract public void info();
	//abstract public void entrada();
	//abstract public void salida();

}