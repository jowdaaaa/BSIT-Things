// JUDAH PAULO LL. VIÑAS | BSIT-1F 

#include <iostream>

using namespace std;

int getFactorial(int num, int mul) {
	
	while(num>1) {
	mul*=num;
	--num;
	}
}

int main () {

	int num,mul=1,ans; 
	
	cout << "Enter a Number: ";
	cin >> num;
	
	ans=getFactorial(num,mul);
	cout << num << "! is " << ans;
	
	return 0;
}
