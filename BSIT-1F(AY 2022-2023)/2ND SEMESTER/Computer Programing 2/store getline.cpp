#include <iostream>
#include <string>

using namespace std;

int main() {
    string arr[3];
    
    for(int i=0; i<3; i++) {
        cout << "Enter string " << i+1 << ": ";
        getline(cin, arr[i]);
    }
    
    cout << "Strings entered are: " << endl;
    for(int i=0; i<3; i++) {
        cout << arr[i] << endl;
    }
    
    return 0;
}







