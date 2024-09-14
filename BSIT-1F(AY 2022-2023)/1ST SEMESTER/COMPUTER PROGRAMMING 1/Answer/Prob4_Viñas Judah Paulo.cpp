// JUDAH PAULO LL. VIÑAS | BSIT-1F 

#include <iostream> 

using namespace std;

void swapNum(int num1, int num2) {
	cout << "num1 = " << num2 << ", num2 = " << num1;
}

void swapChar(char let1, char let2) {
	cout << "char1 = " << let2 << ", char2 = " << let1;
}

int main () {
	int num1, num2;
	char let1, let2;
	
	cout << "Enter 1st Number: ";
	cin >> num1;
	cout << "Enter 2nd Number: ";
	cin >> num2;
	cout << "Enter 1st character: ";
	cin >> let1;
	cout << "Enter 2nd character: ";
	cin >> let2;
	cout << "Value before swapping:" <<endl;
	cout << "num1 = " << num1 << ", num2 = " << num2 <<endl;
	cout << "char1 = " << let1 << ", num2 = " << let2 <<endl <<endl;
	
	cout << "Values after swapping:" <<endl;
	swapNum(num1,num2);
	cout << endl;
	swapChar(let1,let2);
	
	return 0;
}
