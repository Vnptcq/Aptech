public class FootballPlayer extends HomoSapien{
    int numberOfShirt;
    String position;
    public FootballPlayer(String position, int numberOfShirt, int height,String name, double weight, int age){
        super(name, height, weight, age);
        this.numberOfShirt = numberOfShirt;
        this.position = position;
    }

    public FootballPlayer(String name, int height, double weight, int age) {
            super(name, height, weight, age);
    }

    @Override
    public void speak() {
        System.out.println(this.name + " is speaking.");
    }

    @Override
    public void run() {
        System.out.println(this.name + " is running.");
    }

    public void shoot(){
        System.out.println(this.name + " is shooting a ball.");
    }

    public void passBall(String teammate) {
        System.out.println(this.name + " is passing to " + teammate + ".");
    }
    @Override
    public void displayInfo(){
        System.out.println("Name: " +this.name +", Shirt No: " + numberOfShirt + ", Position: " + position +
                ", Height " + height + ", Weight: " +weight+ ", Age: " +age);
    }
}
