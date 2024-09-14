#include <iostream>
using namespace std;
int main () {
	
	int num[7];	
	int sum=0;
	int avg=0;
	
	for (int i=0; i<7; i++) {
		cin >> num[i];
	}
	
	int largest=num[0];
	for (int j=0; j<7; j++) {
		if (num[j]>largest) {
			largest=num[j];
		}
	}
	cout << "Largest : " <<largest <<endl;
	
	int smallest=num[0];2
	for (int k=0; k<7; k++) {
		if (num[k]<smallest) {
			smallest=num[k];
		}
	}
	cout << "Smallest : " <<smallest <<endl;
	
	for (int l=0; l<7; l++) {
		sum=sum+num[l];
	}
	
	avg=sum/7;
	cout << "Average : " << avg;
	
	return 0;
}
