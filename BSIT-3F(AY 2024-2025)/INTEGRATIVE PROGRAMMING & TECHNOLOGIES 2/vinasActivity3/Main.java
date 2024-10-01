import java.util.Scanner;

public class Main {
    public static void main(String args[]){
        Computation comp = Computation.getInstance();
        Scanner scan = new Scanner(System.in);

        System.out.print("Enter the grades for prelims: ");
        double prelim = scan.nextDouble();
        System.out.print("Enter the grades for midterm: ");
        double midterm = scan.nextDouble();
        System.out.print("Enter the grades for prefinal: ");
        double prefinal = scan.nextDouble();
        System.out.print("Enter the grades for final: ");
        double finals = scan.nextDouble();

        System.out.println("Average Grade: " + comp.computation(prelim, midterm, prefinal, finals));
    }
}