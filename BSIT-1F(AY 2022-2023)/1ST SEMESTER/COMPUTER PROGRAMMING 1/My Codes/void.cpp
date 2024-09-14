#include <iostream>

using namespace std; 
/*
	void greet () {
		cout << "Hello there!";
	}
	
	int main () {
		
		//calling the function
		greet();
		
		return 0;
} 
*/
/*
	void addNum(int num1, int num2) {
		cout << num1 + num2;
	}
	
	int main () {
		
		addNum(10, 2);
		
		return 0;
	}
*/
/*
	void subNum(int num1, int num2) {
		cout << num1 - num2;
	}
	
	
	int main () {
		
		subNum(10, 2);
		
		return 0;
		
	}
*/
/*	
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
*/

int addNum(int, int);
int subNum(int, int);
int multNum(int, int);
int divNum(int, int);

int main () {
		
	int x=3;
	int y=5;	
	int sum, dif, pro, quo;
	
	sum=addNum(x,y);
	dif=subNum(x,y);
	pro=multNum(x,y);
	quo=divNum(x,y);
	
	cout<<x<<"+"<<y<<"="<<sum<<endl;
	cout<<x<<"-"<<y<<"="<<dif<<endl;
	cout<<x<<"*"<<y<<"="<<pro<<endl;
	cout<<x<<"/"<<y<<"="<<quo<<endl;

}

int addNum (int num1, int num2) {
	return (num1 + num2);
}

int subNum (int num1, int num2) {
	return (num1 - num2);
}

int multNum (int num1, int num2) {
	return (num1 * num2);
}

int divNum (int num1, int num2) {
	return (num1 / num2);
}

/*
int add(int a, int b) {
	return (a+b);
}

int main () {
	 int x=3, y=5, sum;
	 
	 sum = add(x,y);
	 cout << x <<" + " << y <<" = " <<sum;
*/	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	

	
	


