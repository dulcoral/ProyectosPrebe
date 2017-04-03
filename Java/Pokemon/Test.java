public class Test{

	public static void main(String[] args) {
		Pikachu p = new Pikachu();
		Totodile t = new Totodile();
		combat(p, t);
	}
	public static void combat(Pikachu p,Totodile t){
		while(p.getLife()  > 0 && t.getLife() > 0)
			{  

				if(t.getHit() > p.getLife()){
				   System.out.println("Turno de Totodile ataca...");
				   System.out.println("Pikachu vida: 0.0");
				   System.out.println("Fin del combate gana Totodile");
				   break;
				}
				else if(p.getHit() > t.getLife()){
					System.out.println("Turno de Pikachu ataca...");
                    System.out.println("Totodile vida: 0.0 ");
					System.out.println("Fin del combate gana Pikachu");
					break;
				}
			  p.attack(t,(t.defend()));
			  t.attack(p,(p.defend()));

			}

		}//end combat
}