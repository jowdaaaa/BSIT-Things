#include <iostream>

using namespace std;

int main () {
	
	int input, mult=1;
	
	cout<< "Enter a number: ";
	cin >> input;
	
	while (mult<=10) {
		cout << input*mult<<endl;
		mult++;	
	} 
	
	return 0;
}
