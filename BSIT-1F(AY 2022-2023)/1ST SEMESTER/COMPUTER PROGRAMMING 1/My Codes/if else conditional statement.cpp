#include <iostream>

using namespace std;

/*
  COMPARISON OPERATORS
	== (Equal to)
	!= (Not equal to)
	> (Greater than)
	< (Less than)
	>= (Greater than or equal to)
	>= (Less than or equal to)
  LOGICAL OPERATORS
  	&& (AND)
  	|| (OR)
*/

int main () {
//if-else	
/*	bool crushKaNya=true;
	bool diKaCrush=false;
	
	if (diKaCrush) {
		cout << "Edi Happy Ka!";
	} else {
		cout << "Edi Iyak Ka!";
	}
*/
//string-equal to
/*
	string password = "helloworld";
	string in;
	
	cout << "What is the password?" <<endl;
	cin >> in;
	
	if (password == in) {
		cout << "Your In!";
	} else {
		cout << "Invalid Password";
	}
*/
//integer-less than
/*
	int num1=5;
	int num2=9;
	
	if (num1<num2){
		cout<< "True";
	} else {
		cout<< "False";
	}
*/
//less than with cin
/*	
	int num1;
	int num2;
	
	cout << "Value 1 < Value 2"<<endl;
	cout << "Value 1: ";
	cin >> num1;
	cout << "Value 2: ";
	cin >> num2;
	
	if (num1<num2){
		cout<< "True";
	} else {
		cout<< "False";
	}
*/
//not equal to
/*
	int num1,num2;
	
	cout << "Value 1: ";
	cin >> num1;
	cout << "Value 2: ";
	cin >> num2;
	
	if (num1!=num2) {
		cout << "DI PAREHO";
	} else {
		cout << "PAREHO";
	}
*/
//three option/two if-else
/*
	bool hasCoke=false;
	bool hasRoyal=true;
	
	if (hasCoke) {
		cout << "You bought Coke!";
	} else if (hasRoyal) {
		cout << "You bought Royal!";
	} else {
		cout << "Don't buy!";
	}
*/
//all false
/*	
	bool hasCoke=false;
	bool hasRoyal=false;
	bool hasSprite=false;
	
	if (hasCoke) {
		cout << "You bought Coke!";
	} else if (hasRoyal) {
		cout << "You bought Royal!";
	} else if (hasSprite) {
		cout << "You bought Sprite!";
	} else {
		 cout << "Umuwi ka na lang!";
	}
*/	
//&&(AND)
/*
	bool hasCoke=false;
	bool hasRoyal=true;
	bool hasSprite=true;
	
	if (hasCoke&&hasRoyal) {
		cout << "Bumili ng Coke at Royal";
	} else if (hasSprite) {
		cout << "Bumili ng Sprite";
	} else {
		cout << "Wag ka na bumili";
	}
*/ 
//||(OR)
/*	
	bool hasCoke=false;
	bool hasRoyal=true;
	bool hasSprite=true;
	
	if (hasCoke||hasRoyal) {
		cout << "Bumili ng Coke/Royale";
	} else if (hasSprite) {
		cout << "Bumili ng Sprite";
	} else {
		cout << "Wag na bumili!";
	}
*/
/*
	bool hasCoke=false;
	bool hasRoyal=false;
	bool hasSprite=true;
	
	if (hasCoke||hasRoyal) {
		cout << "Bumili ng Coke/Royale";
	} else if (hasSprite) {
		cout << "Bumili ng Sprite";
	} else {
		cout << "Wag na bumili!";
	}
*/
//Simple Quiz Math
/*
	int num1=7,num2=10;
	int ans;
	ans=num1+num2;
	int input;
	
	cout << num1 <<" + " <<num2 <<" = ? " <<endl;
	cout << "What is the answer? ";
	cin >> input;
	
	if (ans==input) {
		cout << "CORRECT!";
	} else {
		cout << "WRONG!";
	}
*/
	
	float generalAvg;
	cout << "Grades: ";
	cin >> generalAvg;
	
	if (generalAvg>=98) {
		cout << "You are with Highest Honors.";
	} else if (generalAvg>=95 && generalAvg<98) {
		cout << "You are with High Honors.";
	} else if (generalAvg>=90 && generalAvg>98) {
		cout << "You are with Honors.";
	} else if (generalAvg>90 && generalAvg>=75) {
		cout << "You are Passing Mark.";
	} else {
		cout << "You are Fail.";
	}
	
	
	
	
	
	
	
	return 0;
}
