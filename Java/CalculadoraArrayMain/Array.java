public class Array{
	public static void main(String[] args) {
		int [] var = new int[6];
		int [] var2 = {1,2,3,4,5,6,1,2,3,4,5,6};

		var[5] = 1;

		System.out.println(var2.length);

		System.out.println(args[0]);

		for(int a : var){
			System.out.println(a);
		}
		


	}
}