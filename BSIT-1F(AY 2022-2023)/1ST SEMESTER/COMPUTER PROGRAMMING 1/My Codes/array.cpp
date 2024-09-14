#include <iostream>

using namespace std;

int main ()
{
//Arrays
				//empty square bracket ([index]) means infinity
/*	string colors[]={"Green","Red","Blue","Black"};
					   //This is called index (it starts 0,1,2,...)
	cout << colors[0]<<endl;
	cout << colors[1]<<endl;
	cout << colors[2]<<endl;
	cout << colors[3]<<endl;
*/

/*
	cout << "GETTING AVERAGE"<<endl;
//float to have a decimal	
	float grade[4];
	int dec;
	
	cout << "  1st Grade : ";
	cin >> grade[0];
	
	cout << "  2nd Grade : ";
	cin >> grade[1];
	
	cout << "  3rd Grade : ";
	cin >> grade[2];
	
	cout << "  4th Grade : ";
	cin >> grade[3];
	
	cout << "  5th Grade : ";
	cin >> grade[4];
	
	cout << "-----------------"<<endl;	
	cin >> dec;
	cout << grade[dec];
*/	
	/*cout << "The total of your grades is " <<grade[0]+grade[1]+grade[2]+grade[3]+grade[4] <<"." <<endl;
	cout << "The average is " << (grade[0]+grade[1]+grade[2]+grade[3]+grade[4]) / 5 <<".";*/
	/*
	cout << grade[0] <<endl;
	cout << grade[1] <<endl;
	cout << grade[2] <<endl;
	cout << grade[3] <<endl;
	cout << grade[4] <<endl;
	*/
	

/*
	string phones[]= {"Realme","Apple","Samsung","Huawei","Nokia"};
	int sz=sizeof(phones) / sizeof (phones[0]);
	cout << sz;
*/		

	int myList[5]={67,57,45,32,22};
	int yourList[5];
	int i;
	
	yourList[0] = myList[0];
	yourList[1] = myList[1];
	yourList[2] = myList[2];
	yourList[3] = myList[3];
	yourList[4] = myList[4];
	
	cin >> i;
	cout << yourList[i];
	

	return 0;
}
