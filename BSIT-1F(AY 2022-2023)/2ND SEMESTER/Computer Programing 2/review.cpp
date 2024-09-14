//IF-ELSE STATEMENT
/*
#include <iostream>
using namespace std;

int main (){


/* 1.
	//A student will not be allowed to sit in exam if his/her attendence is less than 75%.Take following input from user:Number of classes held,Number of classes attended.And print percentage of class attended. Is student is allowed to sit in exam or not.
	
	int held, attended,percentage;
	
	cout << "Number of classes held: ";
	cin >> held;
	cout << "Number of classes attended: ";
	cin >> attended;
	percentage=(attended*100)/held;
	cout << "Percentage of class attended: " << percentage << "%" <<endl;
	
	if (percentage>=75) {
		cout << "YOU WILL TAKE THE EXAM!";
	} else {
		cout << "LABAS!";
	}
*/

/* 2.
	//Take values of length and breadth of a rectangle from user and check if it is square or not.
	
	int length, width;
	
	cout << "Enter length: ";
	cin >> length;
	cout << "Enter width: ";
	cin >> width;
	if (length==width) {
		cout << "IT'S SQUARE!";
	} else {
		cout << "IT'S NOT SQUARE!";
	}
*/

/* 3.
	//A shop will give discount of 10% if the cost of purchased quantity is more than 1000. Ask user for quantity.Suppose, one unit will cost 100.Judge and print total cost for user.
	
	int quantity,total=0;
	
	cout << "Enter Quantity: ";
	cin >> quantity;
	total= quantity*100;
	if (total>1000){
		cout << "Total cost is " << total-(total*.1);
	} 
*/

/* 4.
	//A company decided to give bonus of 5% to employee if his/her year of service is more than 5 years.Ask user for their salary and year of service and print the net bonus amount.	
	
	int salary,year;
	
	cout << "Enter salary: ";
	cin >> salary;
	cout << "Enter year: ";
	cin >> year;
	if (year>5) {
		cout << "Net bonus amount: " << salary+(salary*.05);
	} else {
		cout << "NO BONUS!";
	}
*/	

/* 5.	
	// A school has following rules for grading system: a. Below 25 - F; b. 25 to 45 - E; c. 45 to 50 - D; d. 50 to 60 - C; e. 60 to 80 - B; f. Above 80 - A. Ask user to enter marks and print the corresponding grade.
	
	int grade;
	
	cout << "Enter grade: ";
	cin >> grade;
	if (grade<25) {
		cout << "REMARK : F";
	} else if ((grade>=25)&&(grade<=45)) {
		cout << "REMARK : E";
	} else if ((grade>=45)&&(grade<=50)) {
		cout << "REMARK : D";
	} else if ((grade>=50)&&(grade<=60)) {
		cout << "REMARK : C";
	} else if ((grade>=60)&&(grade<=80)) {
		cout << "REMARK : B";
	} else {
		cout << "REMARK : A";
	} 
*/










//LOOP
/*#include <iostream>
using namespace std;
int main() {
	


/* 1.
	//Print multiplication table of 24, 50 and 29 using loop.
	
	cout << "Multiplication Table of 24, 50 and 29" <<endl;
	for (int i=1; i<10; i++) {
		cout << i << " * " << 24 << " = " << i*24 << endl;
	}
	cout << endl;
	for (int i=1; i<10; i++) {
		cout << i << " * " << 50 << " = " << i*50 << endl;
	}
	cout << endl;
	for (int i=1; i<10; i++) {
		cout << i << " * " << 29 << " = " << i*29 << endl;
	}
*/

/* 2.
	/*Factorial of any number n is represented by n! and is equal to 1*2*3*....*(n-1)*n. E.g.-
	4! = 1*2*3*4 = 24
	3! = 3*2*1 = 6
	2! = 2*1 = 2
	Also,
	1! = 1
	0! = 0
	Write a C++ program to calculate factorial of a number.	
	
	int num,fractal=1;
	
	cout << "Enter Number : ";
	cin >> num;
	
	for (int i=1; i<=num; i++) {
		 fractal=fractal*i;
	}
	cout << num << "! = " << fractal;
*/		

/* 3. 
	int n, previous = 0, final = 1, total;

   cout << "Enter the number of terms of the Fibonacci sequence: ";
   cin >> n;

   cout << "Fibonacci Series: ";

   for (int i = 0; i < n; ++i) {
      if (i <= 1)
         total = i;
      else {
         total = previous + final;
         previous = final;
         final = total;
      }
      cout << total << " ";
   }
*/

//FUNCTION
/*	
#include <iostream>
using namespace std;

/* 1.
//Write a program to print the sum of two numbers entered by user by defining your own function.

int sum(int a, int b) {
	return a+b;
}

int main () {
	int num1,num2;
	cout << "Enter Num1 : ";
	cin >> num1;
	cout << "Enter Num2 : ";
	cin >> num2;
	
	cout << "TOTAL = " << sum(num1,num2);
*/

/* 2.
//Define a program to find out whether a given number is even or odd.

void evenOdd(int a) {
	if (a%2==0) {
		cout << "EVEN";
	} else {
		cout << "ODD";
	}
}

int main () {
	int num;
	cout << "Enter Number : ";
	cin >> num;
	evenOdd(num);
*/

/* 3.
//Define a function named 'perfect' that determines if parameter number is a perfect number. Use this function in a program that determines and prints all the perfect numbers between 1 and 1000.
bool perfect(int num) {
   int sum = 0;
   for (int i = 1; i < num; i++) {
      if (num % i == 0)
         sum += i;
   }
   return sum == num;
}

int main() {
   cout << "The perfect numbers between 1 and 1000 are:" << endl;
   for (int i = 1; i <= 1000; i++) {
      if (perfect(i))
         cout << i << endl;
   }
*/

//STRUCTURE
#include <iostream>
using namespace std;

/* 1.
//Write a program to store and print the name, address and age of a student using structures.
struct info{
	string address, name;
	int age;
};

int main() {

	info i;
	
	cout << "Enter Name : ";
	getline(cin,i.name);
	cout << "Enter Address : ";
	getline(cin,i.address);
	cout << "Enter Age : ";
	cin >> i.age;
	cout << endl;
	cout << i.name << " " << i.address << " " << i.age;
*/

/* 2.
//Write a program to store and print the name of 3 students using structure.
struct student{
	string name;
};

int main() {
	student s[3];
	
	for (int i=0; i<3; i++) {
		cout << "Enter Name : ";
		getline(cin,s[i].name);
	}
	
	cout << "STUDENTS LIST" <<endl;
	for (int x=0; x<3; x++){
		cout << s[x].name <<endl;
	}
*/

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	return 0;
}

