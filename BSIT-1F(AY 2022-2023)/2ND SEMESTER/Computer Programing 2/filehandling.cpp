#include <iostream>
#include <fstream>
using namespace std;

int main() {
	
	/*
	ofstream mine("filehandling.txt");
	mine << "BSIT - 1F";
	mine.close();
	*/
	
	/*
	string mytext;
	
	ofstream mine("filehandling.txt");
	mine << "BSIT - 1F";
	mine.close();
	
	ifstream read("filehandling.txt");
	while (getline(read,mytext)) {
		cout << mytext;
	}
	
	read.close();
	*/
	
	/*
	int month, day, year;
	cout << "BIRTHDATE(mm/dd/yy) : " <<endl;
	cout << "Month : ";
	cin >> month;
	cout << "Day : ";
	cin >> day;
	cout << "Year : ";
	cin >>year;
	
	ofstream birthdate("filehandling.txt", ios::app);
	birthdate << "BIRTHDATE" << endl;
	birthdate << month << " ";
	birthdate << day << " ";
	birthdate << year << endl;
	birthdate.close();
	
	cout << "Successfully Write!";
	*/
	
	/*
	string name;
	int age;
	
	cout << "Enter your full name and age : " <<endl;
	cout << "Name : ";
	getline(cin,name);
	cout << "Age : ";
	cin >> age;
	
	ofstream details("filehandling.txt", ios::app);
	details << "-----DETAILS-----" << endl;
	details << "Name : " << name <<endl;
	details << "Age : " << age << endl;
	details.close();
	
	cout << "SUCCESS!!";
	*/
	
	char name[100];
	cout << "ENTER YOUR NAME : ";
	cin.getline(name,100);
	
	ofstream names("filehandling.txt",ios::app);
	names << name << " || ";
	names.close();
	
	char get[100];
	ifstream reveal("filehandling.txt");
	reveal.getline(get,100);
	cout << endl << endl << "----RESULT----" <<endl << "Name : " << get << endl;
	cout << "That's all!";
	reveal.close();
	
	
	
	
	
	
		
	return 0;
}
