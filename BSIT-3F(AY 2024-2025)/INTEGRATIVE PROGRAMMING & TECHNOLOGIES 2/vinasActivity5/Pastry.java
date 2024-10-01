import java.util.Scanner;

class Pastry implements Baked {
    Scanner scan = new Scanner(System.in);

    @Override
    public void bake() {
        System.out.println("Here is our Menu for today :");
        System.out.println("- Pie");
        System.out.println("Price: 20.00 pesos");
        System.out.print("How many pieces would you like to buy? : ");
        int pcs = scan.nextInt();
        double total = 20 * pcs;
        System.out.println("Total Price for " + pcs + " pieces Pie: " + total);
    }
}