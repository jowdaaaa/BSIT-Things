#include <iostream>
using namespace std;

int IterativeBS(int array[], int x, int low, int high) {
  while (low <= high) {
    int mid = low + (high - low) / 2;

    if (array[mid] == x)
      return mid;
    if (array[mid] < x)
      low = mid + 1;
    else
      high = mid - 1;
  }
  return -1;
}

int main(void) {
  int array[] = {3, 4, 5, 6, 7, 8, 9};
  int n = sizeof(array) / sizeof(array[0]);

  cout << "Enter the number to search: ";
  int x;
  cin >> x;

  int result = IterativeBS(array, x, 0, n - 1);

  if (result == -1)
    cout << "Not found";
  else
    cout << "Element is found at index " << result;

  return 0;
}

