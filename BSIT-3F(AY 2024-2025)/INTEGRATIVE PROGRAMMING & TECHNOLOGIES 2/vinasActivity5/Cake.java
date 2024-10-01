import java.util.Scanner;

class Cake implements Baked {
    Scanner scan = new Scanner(System.in);

    @Override
    public void bake() {
        System.out.println("Here is our Menu for today :");
        System.out.println("- Banana Cake");
        System.out.println("Price: 100.00 pesos");
        System.out.print("How many pieces would you like to buy? : ");
        int pcs = scan.nextInt();
        double total = 100 * pcs;
        System.out.println("Total Price for " + pcs + " pieces Banana Cake: " + total);
    }
}