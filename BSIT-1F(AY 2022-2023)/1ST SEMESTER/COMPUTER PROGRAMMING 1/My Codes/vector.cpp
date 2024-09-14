#include <iostream>
#include <vector>

using namespace std;

int main () {
/*	
	vector <int> v;
	
	for (int i=1; i <= 10; i++) {
		v.push_back(i);
	}
	
	cout << "Size: " << v.size() <<endl;
	
	v.resize(7);
	
	cout << "After resizing it becomes : " << v.size() <<endl;
	
	if (v.empty()==false ) {
		cout << "Not Empty" <<endl;
	} else {
		cout << "\nVector is empty";
	}
	
	cout << "The elements are: " <<endl;
	for (int i=0; i<v.size(); i++) {
		cout << v[i] <<endl;
	}
	
	cout << "Element 3 is: " << v[3];
*/	

	vector <int> vector1;
	int x;
	
	cout << "Vector 1" <<endl;
	
	
	for (int i=0; i < 5; i++) {
		cout << "Enter Element " << i+1 <<": ";
		cin >> x;
		vector1.push_back(x);
	} 
	
	cout << "The elements are: " <<endl;
	for (int i=0; i<5; i++) {
		cout << vector1[i] <<endl;
	} 


//pop.back	
/*	
	int x;
	vector <int> vector1;
	
	for (int i=0; i < 5; i++) {
		cout << "Enter Element " << i+1 <<": ";
		cin >> x;
		vector1.push_back(x);
	} 
	
	vector1.pop_back();
	vector1.pop_back();
	
	cout << "After pop_back() : " <<endl;
	
	for (int i=0; i < vector1.size(); i++) {
		cout << vector1[i] <<endl;
	} 
*/	

//clear
/*
	int x;
	vector <int> vector1;
	
	for (int i=0; i < 5; i++) {
		cout << "Enter Element " << i+1 <<": ";
		cin >> x;
		vector1.push_back(x);
	} 
	
	vector1.clear();
	
	cout << "After clear() : " <<endl;
	
	for (int i=0; i < vector1.size(); i++) {
		cout << vector1[i] <<endl;
	} 
*/ 
/*
//swap
	int i=7;
	int j=10;
	
	cout << "Value of i : " << i <<endl;
	cout << "Value of j : " << j <<endl;
	
	swap(i,j);
	
	cout << "---AFTER SWAP---" <<endl;
	cout << "Value of i : " << i <<endl;
	cout << "Value of j : " << j <<endl;
*/		
	
	return 0;
}
