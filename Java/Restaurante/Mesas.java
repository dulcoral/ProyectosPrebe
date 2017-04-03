import java.util.ArrayList;

class Mesas{
	int personas, numero_Mesa;
	ArrayList <String> pedidos=new ArrayList <String>();

	public Mesas(int numero_Mesa){
		this.numero_Mesa=numero_Mesa;
	}

	public void setPersonas(int personas){
		this.personas=personas;
	}
}