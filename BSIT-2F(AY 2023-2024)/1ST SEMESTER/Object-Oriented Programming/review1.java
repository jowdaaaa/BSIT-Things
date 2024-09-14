import java.util.Scanner;

public class review1 {
	public static void main (String[] args) {
		Scanner scan = new Scanner(System.in);
		String[] names = new String[5];
		
		for (int i=0; i < names.length; i++) {
			System.out.print ("Enter name [" + (i+1) + "]: ");
			names[i] = scan.nextLine();
		}
		
		System.out.println ("----- ALL NAMES -----");
		for (int i = 0; i < names.length; i++) {
			System.out.println ("- " + names[i]);
		}
		
	}
}