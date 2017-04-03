import java.util.ArrayList;

class Meseros extends Empleados{

	//ArrayList <Mesas> mesa=new ArrayList <Mesas>();
	int mesa;

	public Meseros(String nombre, String ocupacion, int identificador, double sueldo){
		super(nombre,ocupacion,identificador,sueldo);
	}

	public void pedidos(){
		System.out.println("Orden tomada...");
	}

	public void mesas(Mesas m){
		this.mesa=m.numero_Mesa;
	}

	public void servirMesas(){
		System.out.println("Sirviendo...");
	}

	public void cobrar(int cant){
		System.out.println("Cantidad total a pagar: "+(cant*15));
	}

	@Override
	public void info(){
		System.out.println("Nombre: "+this.nombre);
		System.out.println("Ocupacion: "+this.ocupacion);
		System.out.println("Identificador: "+this.identificador);
		System.out.println("Sueldo: "+this.sueldo);
		System.out.println("Mesa asignada: "+this.mesa);
	}
}