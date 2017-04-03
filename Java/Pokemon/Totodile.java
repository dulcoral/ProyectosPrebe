 import java.util.Random;
public class Totodile{
	private double life=100;
	private double hit=35;

	public double getLife(){
		return this.life;
	}
	public double getHit(){
		return this.hit;
	}

	public void setLife(double newLife){
		if (newLife>=0)
		    this.life=newLife;
	    else{
	    	this.life=0;
	    	//System.out.println("Totodile Perdio");
	    }
	}
    
    public void attack(Pikachu p, boolean shield){

        if(shield==false){
        p.setLife(p.getLife()-this.hit);
        System.out.println("Turno de Totodile ataca... ");
        System.out.println("Pikachu vida: "+(p.getLife()));
	      }
	    else{
	    	System.out.println("Turno de Totodile ataca...");
	    	System.out.println("Pikachu se defiende");
	    }

	}//end attack

	public boolean defend(){
		boolean shield=false;
	    Random rnd = new Random();
        int numRandom = 1+rnd.nextInt(100);
		if(numRandom<=20){
		    shield=true;
		}
		return shield;
    }//end defend

}