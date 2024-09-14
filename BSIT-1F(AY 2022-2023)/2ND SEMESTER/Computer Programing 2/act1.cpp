#include <iostream>
using namespace std;
int main () {
	int num[5]={1111,2222,3333,4444,5555};
	string name[5]={"judah","paulo","vinas", "pau", "yu"};
	float ave[5]={1.1,1.2,1.3,1.4,1.5};
	int search, cntr=0, c=0;
	
	
	cout << "Enter Student Number : ";
	cin >> search;

	for (int i=0; i<5; i++) {
		if (search==num[i]) {
			cntr=cntr+i;
			c=c+1;
		} 
	}
	
	if (c>0) {
		cout << "FOUND : " << name[cntr] << " - " << ave[cntr];
	} else {
		cout << "NOT FOUND!";
	}
	
/*	USING BOOL
	
	bool c;
	
	for (int i=0; i<5; i++) {
		if (search==num[i]) {
			c=true;
			cntr=cntr+i;
		} 
	}
	
	if (c) {
		cout << "FOUND : " << name[cntr] << " - " << ave[cntr];
	} else {
		cout << "NOT FOUND";
	}
*/	

	
	return 0;
} 
