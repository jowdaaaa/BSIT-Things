#include <iostream>

using namespace std;

int main() {
	
	int dividend, divisor;
	
	do {
		cout << "Enter dividend: ";
		cin >> dividend;
		cout << "Enter divisor: ";
		cin >> divisor;
		
		if (divisor!=0) {
			cout <<"The quotient is " << dividend/divisor << "." << endl << endl;
		} else {
			cout << "You cannot divide a number by zero.";
		}
			
	} while (divisor!=0);
	
	
	
	
	
	
	

	
	
		
	
	
	
	
	return 0;
}
