#include <iostream>

using namespace std;

int main () {
	
	double prices[20]={12.50, 50.21, 34.56, 32.4, 45.0, 67.0, 78.98, 35.9, 85.56, 58.8, 48.23, 23.56, 45.7, 58.9, 78.5, 69.4, 11.56, 5.68, 12.34, 30.6};
	double sum, less, high, avg;
	
	cout << "PRICES : ";
	for (int p=0; p<20; p++) {
		cout << prices[p] << " ";
	}
	cout << endl << endl;
	
	for (int i=0; i<20; i++) {
		sum = sum + prices[i];
	} 
	cout << "a.sum of all the prices : " << sum << endl;
	
	cout << "b.display all values less than 20.00 : ";
	for (int l=0; l<20; l++) {
		if (20>prices[l]) {
			cout << prices[l] << " ";
		}
	}
	cout << endl;
	
	avg=sum/20;
	cout << "c.display all values that are higher than the calculated average value.(avg=" << avg << ") : ";
	
	for (int h=0; h<20; h++) {
		if (avg<prices[h]) {
			cout << prices[h] << " ";
		}
	}
	
	
	return 0;
}
