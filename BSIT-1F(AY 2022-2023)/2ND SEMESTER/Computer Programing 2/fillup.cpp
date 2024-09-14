#include <iostream>
#include <fstream>
#include <string>

using namespace std;

int main(){
	
	string name[10];
	int exit, enter, age[10], pincode[10];
	bool i=true;
	
	cout << "FILL UP \n";
	while(i){
		for (int x=0; x<10; x++){
			cout << "Name : ";
			cin >> name[x];
			cout << "Age : ";
			cin >> age[x];
			cout << "Pin Code : ";
			cin >> pincode[x];
			cout << "DONE!!!\n\n";
			
			ofstream myfile("asd.txt", ios::app);
			myfile << name[x] << ", " << age[x] << ", " << pincode[x] <<endl;
			myfile.close();
			
			cout << "[1]Add another    [2]Exit\n";
			cin >> exit;
			
			if(exit==2){
				i=false;
				break;
			}
		} 
	}
	
	return 0;
}
