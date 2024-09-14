#include <iostream>

using namespace std;

int main () {
	
	int lives=3;
	string answer;
	
	cout << "===== GUESS MY BIRTHMONTH ====" <<endl;
	cout << "Format : Month<space>Date,Year" <<endl <<endl;
	
	while (lives!=0) {
		cout << "Lives : " << lives <<endl;
		cout << "Your Answer : ";
		cin >> answer;
		
		if (answer=="December") {
			cout << "You're Correct!" <<endl;
			break;
		} else {
			lives--;
		} 
		
		if (lives==0) {
			cout << "Sorry but you're out of lives.";
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	return 0;
	
}
