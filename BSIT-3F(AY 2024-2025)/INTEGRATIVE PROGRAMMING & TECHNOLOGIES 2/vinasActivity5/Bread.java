import java.util.Scanner;

class Bread implements Baked {
    Scanner scan = new Scanner(System.in);

    @Override
    public void bake() {
        System.out.println("Here is our Menu for today :");
        System.out.println("- Pandesal");
        System.out.println("Price: 5.00 pesos");
        System.out.print("How many pieces would you like to buy? : ");
        int pcs = scan.nextInt();
        double total = 5 * pcs;
        System.out.println("Total Price for " + pcs + " pieces Pandesal: " + total);
    }
}