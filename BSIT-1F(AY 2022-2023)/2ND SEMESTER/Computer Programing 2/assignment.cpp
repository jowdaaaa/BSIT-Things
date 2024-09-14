/*write a program that allow a user to enter the names and pphone numbers up to 10 friends.
Continue to prompt the user for names and phone number until the user enter "zzz" or has entered 10 names, whichever comes first.
when the user is finished entering names, produce a count of how many names were entered.
then, display the names.
ask the user to enter one of the number and display the neme of the friend.*/

#include <iostream>
using namespace std;
int main () {
	
	string num[10],name[10], search; 
	string end="zzz";
	int list=0,cntr=0;
	bool l=false;
	
	for (int i=0; i<10; i++) {
		cout << "Enter Name : ";
		cin >> name[i];
		if (name[i]!=end) {
			cout << "Enter Phone Number : ";
			cin >> num[i];
			list=list+1;
		} else {
			break;
		}	
	} 
	cout << "YOU ENTER " <<list <<" CONTACTS" <<endl;
	for (int x=0; x<list; x++) {
		cout << name[x] << endl;
	}
	cout << endl;
	cout << "Search Phone # : ";
	cin >> search;
	for (int y=0; y<10; y++) {
		if (num[y]==search) {
			cntr=y;
			l=true;
		}
	}
	if (l) {
		cout << "It's " << name[cntr];
	} else {
		cout << "NOT FOUND!";
	}
	
	return 0;
}
