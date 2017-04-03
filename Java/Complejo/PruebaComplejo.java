public class PruebaComplejo{
	public static void main(String[] args) {
		Complejo n= new Complejo(5,3);
		Complejo c= new Complejo(2,1);
		n.conjugado(n);
		n.suma(n,c);
		n.resta(n,c);
		n.producto(n,c);
		n.division(n,c);
	}
}