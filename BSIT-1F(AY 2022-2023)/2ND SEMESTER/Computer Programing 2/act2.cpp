#include <iostream>
using namespace std;
int main () {
	
	string name, address;
	char sex;
	int age;
	
	getline (cin,name);
	getline (cin,address);
	cin >> sex;
	cin >> age;
	
	cout << "Name : " << name << endl;
	cout << "Address : " << address << endl;
	cout << "Sex : " <<sex <<endl;
	cout << "Age : " << age;
	
	return 0;
}
