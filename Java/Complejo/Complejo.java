public class Complejo{
	private double real;
	private double imag;
public Complejo(double real,double imag){
   this.real = real;
   this.imag = imag;
}
public static Complejo conjugado(Complejo c){
	System.out.println(c.real+"+"+(-c.imag)+"i");
	return new Complejo(c.real,-c.imag);
}//fin constructor
public static Complejo suma(Complejo c1, Complejo c2){
	double x = c1.real+c2.real;
	double y = c1.imag+c2.imag;
	System.out.println(x+"+"+y+"i");
	return new Complejo(x,y);
}//fin suma
public static Complejo resta(Complejo c1, Complejo c2){
	double x = c1.real-c2.real;
	double y = c1.imag-c2.imag;
	System.out.println(x+"+"+y+"i");
	return new Complejo(x,y);
}// fin resta
public static Complejo producto(Complejo c1, Complejo c2){
	double x = (c1.real*c2.real)-(c1.imag*c2.imag);
	double y = (c1.real*c2.imag)+(c1.imag*c2.real);
	System.out.println(x+"+"+y+"i");
	return new Complejo(x,y);
}// fin producto
public static Complejo division(Complejo c1, Complejo c2){
	double aux, x, y;
          aux=c2.real*c2.real+c2.imag*c2.imag;
          x=(c1.real*c2.real+c1.imag*c2.imag)/aux;
          y=(c1.imag*c2.real-c1.real*c2.imag)/aux;
          System.out.println(x+"+"+y+"i");
     return new Complejo(x, y);
}// fin division
}