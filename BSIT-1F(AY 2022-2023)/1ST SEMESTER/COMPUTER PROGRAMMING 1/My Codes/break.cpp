#include <iostream>

using namespace std;

int main () {
	// for (init; cond; incr)
/*	for (int i=0; i<10; i++) {
		if (i==4) {
			break;
		} 
		cout << i << endl;
	}
	// control is here after the break
*/

	int input, sum=0;
	
	//while(true)=infinite loop
	while (true) {
		//take input from the user
		cout << "Enter a number: ";
		cin >> input;
		
		if (input==0) {
			break;
		}
		
		sum+=input; // or sum=sum+input
		cout << "The total is: "<<sum<<endl;		
	}	
	cout << "END."; 
	
		
	return 0;
}
