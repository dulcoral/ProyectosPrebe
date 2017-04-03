import java.util.ArrayList;

public class PruebaAlan{
	public static void main(String[] args) {
		Alan test = new Alan();
		ArrayList<ArrayList<Integer>> result=new ArrayList<ArrayList<Integer>>();
		
		test.find(0,"123",15,0,result,new ArrayList<Integer>());
		
		for(ArrayList<Integer> arr : result){
			System.out.print("[");
			for(Integer num : arr){
				System.out.print(num+ ",");
			//if(num<arr.size())
				//System.out.print(",");
						}
			System.out.print("]");
		}

	}//end main
}