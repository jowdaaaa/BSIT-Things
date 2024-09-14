#include <iostream>
using namespace std;

int main() {
	
	int num[5];
	int sum=0;
	
	cout << "Enter five numbers:" << endl;
	for (int i=0; i<5; i++) {
		cout << "Num[" << i << "]: ";
		cin >> num[i];
		sum=sum+num[i];
	}
	cout << "Total: " << sum;
	
	return 0;
}
