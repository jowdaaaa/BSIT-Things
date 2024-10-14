import java.util.Scanner;

public class PizzaShop {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        Pizza pizza = null;

        System.out.println("Welcome to the Pizza Shop!");
        
        // Choose base pizza
        System.out.println("Please choose your pizza base:");
        System.out.println("1. Plain Pizza ($8.00)");
        System.out.println("2. Veggie Pizza ($10.00)");
        System.out.print("Enter your choice: ");
        
        int baseChoice = scanner.nextInt();

        switch (baseChoice) {
            case 1:
                pizza = new PlainPizza();
                System.out.println("Plain pizza selected.");
                break;
            case 2:
                pizza = new VeggiePizza();
                System.out.println("Veggie pizza selected.");
                break;
            default:
                System.out.println("Invalid choice. Defaulting to Plain Pizza.");
                pizza = new PlainPizza();
        }

        boolean ordering = true;

        // Loop for adding toppings
        while (ordering) {
            System.out.println("\nCurrent pizza: " + pizza.getDescription() + " | Cost: $" + pizza.cost());
            System.out.println("Please select a topping to add:");
            System.out.println("1. Cheese ($1.50)");
            System.out.println("2. Pepperoni ($2.00)");
            System.out.println("3. Mushrooms ($1.00)");
            System.out.println("4. Olives ($0.75)");
            System.out.println("5. Finish order");
            System.out.print("Enter your choice: ");
            
            int choice = scanner.nextInt();

            switch (choice) {
                case 1:
                    pizza = new CheeseDecorator(pizza);
                    System.out.println("Cheese added.");
                    break;
                case 2:
                    pizza = new PepperoniDecorator(pizza);
                    System.out.println("Pepperoni added.");
                    break;
                case 3:
                    pizza = new MushroomDecorator(pizza);
                    System.out.println("Mushrooms added.");
                    break;
                case 4:
                    pizza = new OliveDecorator(pizza);
                    System.out.println("Olives added.");
                    break;
                case 5:
                    ordering = false;
                    System.out.println("\nOrder finalized!");
                    System.out.println("Final pizza: " + pizza.getDescription());
                    System.out.println("Total cost: $" + pizza.cost());
                    break;
                default:
                    System.out.println("Invalid choice. Please try again.");
            }
        }

        scanner.close();
        System.out.println("Thank you for ordering from the Pizza Shop!");
    }
}
