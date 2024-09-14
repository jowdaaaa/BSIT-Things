#include <iostream>

using namespace std;

int main () {
/*	
	int l,w;
	
	cout << "Enter a Value of Length: ";
	cin >> l;
	cout << "Enter a Value of Width: ";
	cin >> w;
	cout << "The area is: " <<l*w <<"."<<endl;
	cout << "The perimeter is: " <<(l+w)*2 <<".";
*/
//if else
/*
	int x;
	cout << "Age: ";
	cin >> x;
	if (x >= 18) 
		cout << "You are an eligible voter.";
	else 
		cout << "You're not an eligible voter.";
*/ 
/*
	char sex;
	cout << "Sex: ";
	cin >> sex;
	if (sex=='m'||sex=='M'){
		cout << "Male";}
	else if (sex=='f'||sex=='F') {	
		cout << "Female";}
	else 
		cout << "Invalid Input";
*/
/*
	int num;
	cout << "Enter a num: ";
	cin >> num;
	
	if (num>0) {
		cout << "Positive";}
	else if (num<0) {
		cout << "Negative";}
	else 
		cout << "ZERO";
*/
//for
/*
	int num;
	cout << "Enter value: ";
	cin >> num;
      // (Initialization-Condition-increment)	
	for (int n=1; n<=num; n++) {	
		cout << "Hello!" <<endl;	
	} 
*/
//while
/*
	int n;
	cout << "Enter the starting number: ";
	cin >> n;
	
	while (n>0) {
		cout << n << ", ";--n;
	}
	cout << "FIRE!";		
*/
/*	int i=0;
	
	while (i<5){
		cout << i <<", "; 
		++i;
	}
*/	
//Do while
/*
	int x=1;
	
	do {
		cout << x <<endl;
		++x;
	} while (x<=5);
*/	
/*
	int x=6;
	
	do {
		cout << "Hello";
	} while (x<5);
*/

	int lives=3;
	string answer;
	
	while (lives!=0) {
		cout <<"Lives: " <<lives<<endl;
		cout << "Who is my crush?"<<endl;
		cout << "Answer: ";
		cin >> answer;
		
		if (answer=="Lyrica") {
			cout <<"You Answered Correctly!"<<endl;
			break;
		} else {
			lives-- ; //decrement lives -1
		}
		
		if (lives==0) {
			cout << "You Lost! Bleee"<<endl;
		}
	}

//FOR
/*	
	int  num;
	cout << "Enter a Value: ";
	cin >> num;
	//kapag increasing, yung count naman ang gagamitan ng increment at ididisplay	
	for (int count=1; count <=num; count++ ) {
		cout << count<<", ";
	} 
	cout << "OKIEEEE";
*/
/*
	int num;
	cout << "Value: ";
	cin >> num;
	//kapag decreasing, yung variable ang gagamitan ng increment at ididisplay
	for (int count=1; count<=num; num--) {
		cout << num<<", ";
	}
	cout << "OKIEEE";
*/
/*
	string phones[] = {"Apple","Nokia","Huawei","Samsung","MyPhone"};
	int sz=sizeof(phones) / sizeof(phones[0]);
	
	for (int i=0; i<sz; i++) {
		cout << phones[i]<<endl; 
	}	
*/

		
	
	return 0;
}
