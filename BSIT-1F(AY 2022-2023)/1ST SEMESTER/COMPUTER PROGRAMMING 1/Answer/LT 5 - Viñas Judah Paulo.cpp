//VIÑAS, JUDAH PAULO LL. | BSIT-1F 

#include <iostream>

using namespace std;

//VOID 
    void addNum(int num1, int num2) {
		cout << "The sum is : " << num1 + num2;
	}
	
	void subNum(int num1, int num2) {
		cout << "The difference is : " << num1 - num2;
	}
	
	void multNum(int num1, int num2) {
		cout << "The product is : " << num1 * num2;
	}
	
	void divNum(int num1, int num2) {
		cout << "The quotient is : " << num1 / num2;
	}
	
//MAIN
	int num1, num2;
	char ope;
	
	int main () {
		
		cout << "Enter first number: ";
		cin >> num1;
		cout << "Enter second number: ";
		cin >> num2;
		cout << "Choose an operator (+, -, *, /): ";
		cin >> ope;
		
		switch (ope) {
			case '+' :
				addNum(num1, num2);
				break;
				
			case '-' :
				subNum(num1, num2);
				break;
			
			case '*' :
				multNum(num1, num2);
				break;
				
			case '/' :
				divNum(num1, num2);
				break;
				
			default :
				cout << "Invalid";
		}
	}

