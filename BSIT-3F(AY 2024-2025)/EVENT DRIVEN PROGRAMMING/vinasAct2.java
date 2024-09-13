import java.util.Scanner;

public class vinasAct2 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        
        System.out.println("Enter two numbers: ");
        int num1 = sc.nextInt();
        int num2 = sc.nextInt();
        
        System.out.println("Choose operation: 1. Add  2. Subtract  3. Multiply  4. Divide");
        int choice = sc.nextInt();

        // Pass num1 and num2 as arguments to Operation class
        Operation.oper(choice, num1, num2);
    }

    static class Operation {
        // Accept num1 and num2 as arguments
        public static void oper(int ope, int num1, int num2) {
            if (ope == 1) {
                Addition.add(num1, num2);
            } else if (ope == 2) {
                Subtraction.sub(num1,num2);
            } else if (ope == 3) {
                Multiplication.mul(num1, num2);
            } else if (ope == 4) {
                Division.div(num1, num2);
            } else {
                System.out.println("Invalid choice.");
            }
        }
    }

    static class Addition {
        public static void add(int num1, int num2) {
            System.out.println("Sum : " + (num1 + num2));
        }
    }

    static class Subtraction {
        public static void sub(int num1, int num2) {
            System.out.println("Difference : " + (num1 - num2));
        }
    }

    static class Multiplication {
        public static void mul(int num1, int num2) {
            System.out.println("Product : " + (num1 * num2));
        }
    }

    static class Division {
        public static void div(int num1, int num2) {
            if (num2 != 0) {
                System.out.println("Quotient : " + (num1 / num2));
            } else {
                System.out.println("Cannot divide by zero.");
            }
        }
    }
}
