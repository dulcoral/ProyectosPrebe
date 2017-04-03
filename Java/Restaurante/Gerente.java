import java.util.ArrayList;

class Gerente extends Empleados{

	public Gerente(String nombre, String ocupacion, int identificador, double sueldo){
		super(nombre,ocupacion,identificador,sueldo);
	}

	public void contratarMesero(ArrayList <Meseros> mese){
		mese.add(new Meseros("Juan", "Mesero", 4, 1000));
	}

	public void contratarCocinero(ArrayList <Cocineros> coci){
		coci.add(new Cocineros("Lupe", "Cocinera", 5, 35000));
	}

	public int despedirMesero(Meseros m){
		System.out.println("El mesero "+m.nombre+" he tenido muchas quejas, lo siento pero tienes que marcharte!");
		return m.identificador;
	}

	@Override
	public void info(){
		System.out.println("Nombre: "+this.nombre);
		System.out.println("Ocupacion: "+this.ocupacion);
		System.out.println("Identificador: "+this.identificador);
		System.out.println("Sueldo: "+this.sueldo);
		System.out.println("Hora entrada: "+hora_Entrada);
		System.out.println("Hora salida: "+hora_Salida);
	}

}