#include <iostream>

using namespace std;

int main () {
	
	int num1, num2;
	
	cout << "Enter first number: ";
	cin >> num1;
	cout << "Enter second number: ";
	cin >> num2;
	
	if (num1>num2) {
		cout << num1 << " is greater than " << num2 << ".";
	} else if (num1<num2) {
		cout << num1 << " is less than " << num2 << ".";
	} else {
		cout << num1 << " is equal to " << num2 << ".";
	} 
	
	return 0;
}
