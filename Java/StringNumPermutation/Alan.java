import java.lang.String;
import java.util.ArrayList;

public class Alan{
	public void find(int begin,String stringNumber, int target,
	int resultActual,ArrayList<ArrayList<Integer>> result,ArrayList<Integer> tmpResult)
	{   
	if(begin==stringNumber.length()){		
		if(resultActual==target) {
			ArrayList<Integer> tmp=new ArrayList<Integer>(tmpResult);
			result.add(tmp);
		}
		return;
	}
	for(int ini = begin;ini<stringNumber.length();ini++)
		for(int fin=ini+1;fin<=stringNumber.length();fin++){
			int actual=Integer.parseInt(stringNumber.substring(ini,fin));;
				tmpResult.add(actual);
				find(fin,stringNumber,target,resultActual+actual,result,tmpResult);
				tmpResult.remove((tmpResult.size())-1);
				tmpResult.add(-actual);
				find(fin,stringNumber,target,resultActual-actual,result,tmpResult);
				tmpResult.remove((tmpResult.size())-1);
		}
}//end find

}