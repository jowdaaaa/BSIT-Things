import java.util.Scanner;

public class VINAS_ASSIGNMENT3 {
	public static void main (String[] args) {
		Scanner scan = new Scanner(System.in);
		
		System.out.print ("Enter Main Number: ");
		int  main = scan.nextInt();
		System.out.print ("Enter the number of Loop: ");
		int loop = scan.nextInt();
		scan.close();
		
		for (int i=1; i<=loop; i++) {
			System.out.println(main + " * " + i + " = " + main*i);
		}
	}
}