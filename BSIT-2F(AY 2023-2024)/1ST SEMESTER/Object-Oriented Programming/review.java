import java.util.Scanner;

public class review {
	public static void main(String[] args) {
		Scanner scan = new Scanner(System.in);
		char choice;
		boolean l=true;
		double total=0;
		
		while (l) {
			System.out.print("Do you want to buy (Y/N)? : ");
			choice = scan.next().charAt(0);
			
			if (choice == 'Y') {
				System.out.print("Input the price: ");
				double price = scan.nextDouble();
				total = total + price;
			} else if (choice == 'N') {
				l = false;
			} else { 
				System.out.println("Invalid input!");
			}
		}
		
		System.out.println("The Total Price is: " + total);
		
		boolean bill=true;
		int cash;
		
		if (total == 0) {
			bill = false;
		}
		
		while (bill) {
			System.out.print("Input Cash_Rendered: ");
			cash = scan.nextInt();
			
			if ( cash >= total) {
				System.out.println("Change: " + (cash-total));
				bill=false;
			} else {
				System.out.println("Warning! Please input a valid amount!");
			}
		}
		
		scan.close();
	}
}