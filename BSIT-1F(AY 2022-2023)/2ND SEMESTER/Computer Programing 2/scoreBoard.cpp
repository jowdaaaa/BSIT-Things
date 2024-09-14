#include <iostream>
using namespace std;

int main () {
	
	int team1=0, team2=0, score;
	char select;
	
	do {
		cout << "SCORE" <<endl;
		cout << "Team 1 : " << team1 <<endl;
		cout << "Team 2 : " << team2 << endl <<endl;
		
		cout << "Select Team to Score (1 or 2 | to end press x): ";
		cin >> select;
		if (select=='1') {
			cout << "How many point/s : ";
			cin >> score;
			team1=team1+score;
			cout <<endl;
		} else if (select=='2') {
			cout << "How many point/s : ";
			cin >> score;
			team2=team2+score;
			cout << endl;
		}
	} while (select!='x');
	
	cout << endl <<"--------------------------------" <<endl;
	cout << "FINAL SCORES" <<endl;
	cout << "Team 1 : " << team1 <<endl;
	cout << "Team 2 : " << team2 <<endl;
	
	return 0;
} 
