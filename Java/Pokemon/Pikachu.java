 import java.util.Random;
public class Pikachu{
	private double life=100;
	private double hit=40;

	public double getHit(){
		return this.hit;
	}

	public double getLife(){
		return this.life;
	}

	public void setLife(double newLife){
		if(newLife>=0)
		this.life=newLife;
	    else{
	    	this.life=0;
	    	//System.out.println("Pikachu Perdio");
	    }
	}

	public void attack(Totodile t,boolean shield){
	   
		if(shield==false){
        t.setLife(t.getLife()-this.hit);
        System.out.println("Turno de Pikachu ataca...");
        System.out.println("Totodile vida: "+(t.getLife()));
		}
		else{
			System.out.println("Turno de Pikachu ataca...");
			System.out.println("Totodile se defiende");
		}
		
   }//end attack

	public boolean defend(){
		boolean shield=false;
	    Random rnd = new Random();
        int numRandom = 1+rnd.nextInt(100);
		if(numRandom<=20){
		    shield= true;
		}
		return shield;

	}//end defend
}