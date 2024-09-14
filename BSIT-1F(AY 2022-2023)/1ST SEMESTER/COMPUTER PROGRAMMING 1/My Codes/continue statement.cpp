#include <iostream>

using namespace std;

int main () {
/*	
	for (int i=1; i<=5; i++) {
		if (i==3) {
			continue;
		}
		cout << i <<endl;
	}
  		
	return 0;
*/

	int day;
	
	cout << "Enter Number (1-7) : ";
	cin >> day;
	
	switch (day) {
		case 1 :
			cout << "Sunday" ;
			break;
		
		case 2 : 
			cout << "Monday" ;
			break;
			
		case 3 : 
			cout << "Tuesday" ;
			break;
			
		case 4 : 
			cout << "Wednesday" ;
			break;
			
		case 5 : 
			cout << "Thursday" ;
			break;
			
		case 6 : 
			cout << "Friday" ;
			break;
			
		case 7 : 
			cout << "Saturday" ;
			break;
			
		default :
			cout << "Invalid" ;
	}
			
}

