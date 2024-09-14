import java.util.Scanner;

public class ASSIGN4_EX2 {
	public static void main (String[] args) {
		Scanner scanner = new Scanner(System.in);
		System.out.print("Enter the number of rows: ");
		int numRows = scanner.nextInt();
		System.out.print("Enter the number of columns: ");
		int numCols = scanner.nextInt();
		scanner.nextLine(); // Consume the new line character
		
		String[][] studentNames = new String[numRows][numCols]; // Create a 2D array to store studen t n am es
		
		for (int i = 0; i < numRows; i++) { // Use n ested loops to read an d store n am es in to the array
			for (int j = 0; j < numCols; j++) {
				System.out.print("Enter the name of student at row " + (i + 1) + ", column " + (j + 1) + ": ");
				studentNames[i][j] = scanner.nextLine();
			}
		}
		scanner.close();
		
		System.out.println ("Student Names:");
		for (int i = 0; i < numRows; i++) {
			for (int j = 0; j < numCols; j++) {
				System.out.println ("Row " + (i + 1) + ", Column " + (j + 1) + ": " + studentNames[i][j]);
			}
		}
	}
}