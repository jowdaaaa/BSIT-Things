#include <iostream>
using namespace std;
int main () {
	
	string choose;
	
	cout << "Loan Calculator" <<endl;
	cout << "Please choose the type of loan you are applying for : " <<endl;
	cout << "1.[Personal Loans]    2.[Auto Loans]    3.[Small Business Loans]    4.[Student Loans]    5.[Pawnshop Loans]" <<endl;
	cout << "Enter the name of the loan you are applying for (choose only one loan) : ";
	getline(cin,choose);
	
	if (choose=="Personal Loans") {
		//sadi mo na ibutang su process kadi loan
	} else if (choose=="Auto Loans") {
		//sadi mo na ibutang su process kadi loan
	} else if (choose=="Small Business Loans") {
		//sadi mo na ibutang su process kadi loan
	} else if (choose=="Personal Loans") {
		//sadi mo na ibutang su process kadi loan
	} else if (choose=="Pawnshop Loans") {
		//sadi mo na ibutang su process kadi loan
	} else {
		cout << "Invalid Input!";
	}
	
	return 0;
}
