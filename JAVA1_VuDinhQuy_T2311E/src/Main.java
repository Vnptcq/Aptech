import java.util.ArrayList;
import java.util.Scanner;
import java.util.List;


public class Main {
    public static void main(String[] args) {
        List<FootballPlayer> team = createTeam();
        displayTeam(team);
    }
    public static List<FootballPlayer> createTeam(){
        Scanner scanner = new Scanner(System.in);
        List<FootballPlayer> newArrayList;
        List<FootballPlayer> team = new ArrayList<>();

        for (int i = 0; i < 11; i++) {
            System.out.println("-----Creating player " + (i + 1) + "-----");
            System.out.print("Enter name: ");
            String name = scanner.nextLine();
            System.out.print("Enter shirt number: ");
            int numberOfShirt = scanner.nextInt();
            scanner.nextLine(); // consume the newline
            System.out.print("Enter position of player: ");
            String position = scanner.nextLine();
            System.out.print("Enter height (in cm): ");
            int height = scanner.nextInt();
            System.out.print("Enter weight (in kg): ");
            double weight = scanner.nextDouble();
            System.out.print("Enter age: ");
            int age = scanner.nextInt();
            scanner.nextLine(); // consume the newline

            FootballPlayer player = new FootballPlayer(name, numberOfShirt,  height,position, weight, age);
            team.add(player);
        }

        return team;
    }
    public static void displayTeam(List<FootballPlayer> team) {
        System.out.println("----------Team Players:----------");
        for (FootballPlayer player : team) {
            player.displayInfo();
        }
    }

}

