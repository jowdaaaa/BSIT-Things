public class ASSIGN4_EX3 {
	public static void main(String[] args) {
		int[][] matrix = {
			{1, 2, 3},
			{4, 5, 6},
			{7, 8, 9}
		};
		
		int sum = 0;
		for (int[ ] row : matrix) { // Iterate over each row (array) in the matrix
			for (int element : row) { // Iterate over each element in the row
				sum += element; // Calculate the sum
			}
		}
		
		System.out.println ("Sum of all elements in the matrix: " + sum);
	}
}