import java.util.Scanner;

public class Factorial{

public int pedirNumero(){
    	int n;
    	System.out.println("Ingrese el numero a calcular");
        Scanner sc = new Scanner (System.in);
        n = sc.nextInt();
        return n;
    }//pedirNumero

public int factorial (int n){
  if(n == 0)
     return 1;
  return n*(factorial(n-1));
   }
}//Factorial