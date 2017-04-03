import java.util.Scanner;

public class NumeroPrimo{

    public int pedirNumero(){
    	int n;
    	System.out.println("Ingrese el numero limite a calcular");
        Scanner sc = new Scanner (System.in);
        n = sc.nextInt();
        return n;
    }//pedirNumero

	public void calcular(int n){
		int c=0;
		boolean esPrimo;
         for(int i=1;i<=n;i++){
         	esPrimo=true;
         	for(int j=2;j<i;j++){
                if (i%j == 0)
                	esPrimo = false;
            }
                if(esPrimo && i>1)
                	System.out.println("Numero primo: " + i);
                	
         	
        }
    }//fin calcular
}
