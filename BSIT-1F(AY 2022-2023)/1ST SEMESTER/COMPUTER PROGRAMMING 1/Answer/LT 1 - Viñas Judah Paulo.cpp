#include <iostream>

using namespace std;

int main () {
	
	float celsius;
	
	cout << "Enter a temperature in Celsius: ";
	cin >> celsius;
	cout << "The temperature in Fahrenheit is: " << (celsius*1.8)+32;
	
	return 0;
} 
