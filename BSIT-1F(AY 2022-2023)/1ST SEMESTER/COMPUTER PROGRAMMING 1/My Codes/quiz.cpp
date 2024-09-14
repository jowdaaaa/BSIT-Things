#include <iostream>

using namespace std;

int main () {
/*	
	int i;
	int password = 1234;
	int lives = 3;
	
	while (i!=password) {
		cout << "What is the password? ";
		cin >> i;
		
		if (i==1234) {
			cout << "You Answered Correctly!";
			break;
		} else {
			lives-- ;
		}
		
		if (lives==0) {
			cout << "You lost! Stop now!";
			break;
		}
	}
*/
	int num[5];
	int i, total;
	
	cout << "1st Number : ";
	cin >> num[0];
	
	cout << "2nd Number : ";
	cin >> num[1];
	
	cout << "3rd Number : ";
	cin >> num[2];
	
	cout << "4th Number : ";
	cin >> num[3];
	
	cout << "5th Number : ";
	cin >> num[4];
	
	total = num[0] + num[1] + num[2] + num[3] + num[4];

	cout << "The average divided by 5 is "  << total/5 <<endl;
	cout << "The average divided by 10 is "  << total/10;
	
	return 0;
}
