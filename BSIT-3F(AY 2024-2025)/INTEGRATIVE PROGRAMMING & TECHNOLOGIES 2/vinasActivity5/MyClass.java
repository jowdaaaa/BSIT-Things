import java.util.Scanner;

public class MyClass {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);
        BakedFactory bakedFactory = new BakedFactory();

        System.out.print("Enter your Choice Menu (Bread, Cake, Pastry) : ");
        String choice = scan.nextLine();

        Baked baked = bakedFactory.getBaked(choice);
        
        if (baked != null) {
            baked.bake();
        } else {
            System.out.println("Invalid choice!");
        }
        scan.close();
    }
}