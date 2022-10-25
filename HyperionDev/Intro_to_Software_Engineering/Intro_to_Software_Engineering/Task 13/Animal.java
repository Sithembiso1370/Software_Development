
public class Animal {
	private int numTeeth = 0;
	private boolean spots = false;
	private int weight = 0;
	
	public Animal(int numTeeth, boolean spots, int weight){
		this.setNumTeeth(numTeeth);
		this.setSpots(spots);
		this.setWeight(weight);
	}
	
	public int getNumTeeth(){
		return numTeeth;
	}

	public void setNumTeeth(int numTeeth) {
		this.numTeeth = numTeeth;
	}
	
	public boolean getSpots() {
		return spots;
	}

	public void setSpots(boolean spots) {
		this.spots = spots;
	}

	public int getWeight() {
		return weight;
	}

	public void setWeight(int weight) {
		this.weight = weight;
	}

	
}
