import java.util.Scanner;

public class ASSIGN4_EX1 {
	public static void main (String[] args) {
		Scanner scanner = new Scanner(System.in);
		
		System.out.print("Enter the number of students: "); // Ask the user for the number of students
		int numStudents = scanner.nextInt();
		scanner.nextLine(); // Consume the new line character
		
		String[] studentNames = new String[numStudents]; // Create an array to store student names
		
		// Use a loop to read and store names into the array
		for (int i = 0; i < numStudents; i++) {
			System.out.print("Enter the name of student " + (i + 1) + ": ");
			studentNames[i] = scanner.nextLine();
		}
		scanner.close();
		
		System.out.println ("Student Names:");
		for (int i = 0; i < studentNames.length; i++) {
			System.out.println (studentNames[i]);
		}
	}
}