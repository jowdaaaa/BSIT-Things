import javax.swing.JOptionPane;

public class VINAS_ASSIGNMENT2 {
	public static void main (String[] args) {
		
		try {
			//input number
			String input1 = JOptionPane.showInputDialog("Enter the first number:");
			double num1 = Double.parseDouble(input1);
			String input2 = JOptionPane.showInputDialog("Enter the second number:");
			double num2 = Double.parseDouble(input2);
			
			//calculate
			double sum = num1 + num2;
			double difference = num1 - num2;
			double product = num1 * num2;
			double quotient = num1 / num2;
			double remainder = num1 % num2;

			//display
			String message = "SUM: " + num1 + " + " + num2 + " = " + sum + "\nDIFFERENCE: " + num1 + " - " + num2 + " = " + difference + "\nPRODUCT: " + num1 + " * " + num2 + " = " + product + "\nQUOTIENT: " + num1 + " / " + num2 + " = " + quotient + "\nMODULO: " + num1 + " % " + num2 + " = " + remainder;
			JOptionPane.showMessageDialog(null,message);
			
		} catch (NumberFormatException e){
			System.err.println("Error: Invalid input. Please enter valid numbers. ");
		} catch (ArithmeticException e){
			System.err.println("Error : " + e.getMessage());
		}
			
	}
}



