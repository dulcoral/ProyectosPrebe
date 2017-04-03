import java.util.ArrayList;
import java.util.Random;
import java.util.Scanner;

class Restaurante{
	public static void main(String[] args) {
		int personas, i, aux, j, cant=0, i1, j1, cant1=0;
		String elec;
		Random rnd=new Random();
		Scanner scan=new Scanner(System.in);
		ArrayList <String> menu=new ArrayList <String>();
		ArrayList <String> pedido=new ArrayList <String>();
		ArrayList <Meseros> mese=new ArrayList <Meseros>();
		ArrayList <Cocineros> coci=new ArrayList <Cocineros>();
		ArrayList <Mesas> mes=new ArrayList <Mesas>();
		Gerente gere=new Gerente("Alejandro", "Gerente", 1, 30000);
		mese.add(new Meseros("Luis", "Mesero", 2, 3500));
		coci.add(new Cocineros("Paco", "Cocinero", 3, 15000));

		for(i=0; i<2; i++){
			mes.add(new Mesas(i+1));
		}
		menu.add("Alitas");
		menu.add("Spaggeti");
		menu.add("Pizza");	
		menu.add("Ensalada de poshito");
		menu.add("Tortitas");
		menu.add("Aguachile");
		limpiar();
		System.out.println("A trabajar!");
		System.out.println("\nBienvenido Gerente "+gere.nombre);
		System.out.println("\nBienvenido cocinero "+coci.get(0).nombre);
		System.out.println("\nBuen dia mesero "+mese.get(0).nombre);
		System.out.println("\nGerente contrata mas personal.");
		gere.contratarMesero(mese);
		gere.contratarCocinero(coci);
		System.out.println("Enter para continua...");
		new java.util.Scanner(System.in).nextLine();
		limpiar();
		System.out.println("\nNuevos empleados:\n");
		for (Meseros m:mese) {
			System.out.println("\n");
			m.info();
		}
		System.out.println("Enter para continua...");
		new java.util.Scanner(System.in).nextLine();
		limpiar();
		personas=rnd.nextInt(8-1+1)+1;
		j=-1;
		for (Mesas m:mes) {
			if(!ocupada(m)){
				j++;
				break;
			}
			j++;	
		}
		mes.get(j).personas=personas;
		System.out.println("Mesa para "+personas);
		i=-1;
		for ( Meseros m: mese) {
			if(!tieneMesa(m)){
				m.mesa=mes.get(j).numero_Mesa;
				i++;
				break;
			}
			i++;
		}
		mese.get(i).mesas(mes.get(j));
		System.out.println("Se le ha asignado al mesero "+mese.get(i).nombre+" la mesa "+mes.get(j).numero_Mesa);
		System.out.println("\nEl menu es el siguiente: ");
		System.out.println("");
		for (String a:menu) {
			System.out.println(a);
		}
		System.out.println("\nProducto: ");
		pedido.add(scan.nextLine());
		System.out.print("Cantidad: ");
		cant+=scan.nextInt();
		scan.nextLine();
		do{
			System.out.println("Desea agregar algo mas?(s/n)");
			elec=scan.nextLine();
			if(elec.compareTo("s")==0){
				System.out.print("Producto: ");
				pedido.add(scan.nextLine());
				System.out.print("Cantidad: ");
				cant+=scan.nextInt();
				scan.nextLine();
			}
		}while(elec.compareTo("n")!=0);
		mese.get(i).pedidos();
		System.out.println("");
		coci.get(0).prepararComida();
		System.out.println("");
		mese.get(0).servirMesas();
		System.out.println("");
		j1=-1;
		for (Mesas m:mes) {
			if(!ocupada(m)){
				j1++;
				break;
			}
			j1++;	
		}
		mes.get(j1).personas=personas;
		i1=-1;
		for ( Meseros m: mese) {
			if(!tieneMesa(m)){
				i1++;
				break;
			}
			i1++;
		}
		mese.get(i1).mesas(mes.get(j1));
		System.out.println("Enter para continua...");
		new java.util.Scanner(System.in).nextLine();
		limpiar();
		System.out.println("Han llegado mas clientes es el turno de "+mese.get(i1).nombre+" atenderlos.");
		personas=rnd.nextInt(8-1+1)+1;
		mes.get(j1).setPersonas(personas);
		System.out.println("Necesitamos mesa para "+personas);
		System.out.println("Se les ha asignado la mesa numero "+mes.get(j1).numero_Mesa);
		System.out.println("\nEl menu es el siguiente: ");
		System.out.println("");
		for (String a:menu) {
			System.out.println(a);
		}
		
		System.out.println("\n\nProducto: ");
		pedido.add(scan.nextLine());
		System.out.print("Cantidad: ");
		cant1+=scan.nextInt();
		scan.nextLine();
		do{
			System.out.println("Desea agregar algo mas?(s/n)");
			elec=scan.nextLine();
			if(elec.compareTo("s")==0){
				System.out.print("Producto: ");
				pedido.add(scan.nextLine());
				System.out.print("Cantidad: ");
				cant1+=scan.nextInt();
				scan.nextLine();
			}
		}while(elec.compareTo("n")!=0);
		mese.get(i).pedidos();
		System.out.println("");
		coci.get(0).prepararComida();
		System.out.println("");
		mese.get(0).servirMesas();
		System.out.println("");
		System.out.println("Enter para continua...");
		new java.util.Scanner(System.in).nextLine();
		limpiar();
		aux=(rnd.nextInt(1-0+1)+0)+1;
		System.out.println("La mesa "+aux+" esta teniendo muchos problemas!!");
		System.out.println("Los comensales de la mesa "+aux+" se han ido sin pagar!!");
		mes.get(aux-1).personas=0;
	    gere.despedirMesero(mese.get(aux-1));
	    System.out.println("\n\n");
	    System.out.println("Los cemenzales de la mesa "+mes.get(j).numero_Mesa+" desean pagar");
	    mese.get(i).cobrar(cant);
	    System.out.println("\n\n");
	    System.out.println("Despues de una larga jornada el restaurante ha cerrado!");

	}

	public static boolean tieneMesa(Meseros mese){
			if (mese.mesa==0)
				return true;
			else 
				return false;
	}

	public static boolean ocupada(Mesas m){
		if (m.personas!=0)
				return true;
			else 
				return false;
	}

	public static void limpiar(){
		int i;
		for (i=0;i<15;i++) {
			System.out.println("\n\n");			
		}
	}
}