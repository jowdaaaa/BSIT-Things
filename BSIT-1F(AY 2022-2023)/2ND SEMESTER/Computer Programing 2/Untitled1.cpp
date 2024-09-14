#include <iostream>
using namespace std;

int main() {
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
   return 0;
}





