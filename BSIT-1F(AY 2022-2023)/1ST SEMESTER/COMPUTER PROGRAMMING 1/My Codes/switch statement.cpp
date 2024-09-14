#include <iostream>

using namespace std;

int main () {
/*	
	int num;
	
	cout << "Enter a number: ";
	cin >> num;
	
	switch (num) {
		case 1:
			cout << "It's January";
			break;
		case 2:
			cout << "It's Febuary";
			break;
		case 3:
			cout << "It's March";
			break;
		case 4:
			cout << "It's April";
			break;
		case 5:
			cout << "It's May";
			break;
		case 6:
			cout << "It's June";
			break;
		case 7:
			cout << "It's July";
			break;
		case 8:
			cout << "It's August";
			break;
		case 9:
			cout << "It's September";
			break;
		case 10:
			cout << "It's October";
			break;
		case 11:
			cout << "It's November";
			break;
		case 12: 
			cout << "It's December";
			break;
		default:
			cout <<"Invalid";
			break;
	}
*/

	float num1,num2;
	char operation;
	
	cout << "Enter Value 1: ";
	cin >> num1;
	cout << "Enter Value 2: ";
	cin >> num2;
	cout << "What operation? a.Addition b.Subtraction c.Multiplication d.Division "<<endl;
	cin >> operation;
	
	switch (operation) {
		case 'a':
			cout << num1 <<" + " << num2 <<" = " <<num1+num2;
			break;
		case 'b':
			cout << num1 <<" - " << num2 <<" = " <<num1-num2;
			break;
		case 'c':
			cout << num1 <<" * " << num2 <<" = " <<num1*num2;
			break;
		case 'd':
			cout << num1 <<" / " << num2 <<" = " <<num1/num2;
			break;
		default:
			cout << "Invalid Input";
			break;		
	} 

	
	
	return 0;
}


