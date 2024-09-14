//Inserting
/*#include <iostream>
using namespace std;
int main(){
   int LA[3]={12,13,16};
   int i;
   cout << "Array Before Insertion:" << endl;
   for(i = 0; i < 3; i++)
      cout << "LA[" << i <<"] = " << LA[i] << endl;  // prints original array values
     
   cout << "Inserting elements.." <<endl;
   cout << "Array After Insertion:" << endl; // prints array values
   for(i = 0; i < 3; i++) {
      LA[i] = i + 2;
      cout << "LA[" << i <<"] = " << LA[i] << endl;
   }
   
   cout << "-------------------------------------------------------------------------------" << endl;
   return 0;
}*/

//deletion
/*#include <iostream>
using namespace std;
int main(){
    int i, j, n = 3, elem=1;
    int LA[n] = {1,3,5};
   
    cout << "The original array elements are :"<<endl;
    for(i = 0; i<n; i++) {
    cout << "LA[" << i << "] = " << LA[i] << endl;
             
    }
       for(i = 0; i<n; i++) {
         if(LA[i]==elem)
            {
                for(j=i; j<(n-1); j++)
                    LA[j] = LA[j+1];
                i--;
                n--;
            }
       }
       
       cout << "The array elements after deletion :"<<endl;
       for(i = 0; i<n; i++) {
          cout << "LA[" << i << "] = " << LA[i] <<endl;
       }
	   cout << "-------------------------------------------------------------------------------" << endl;
    }*/
    


//Seaching
/*#include <iostream>
using namespace std;
int main(){
   int LA[] = {1,3,5,7,8};
   int item = 10, n = 5;
   int i = 0;
   cout << "The original array elements are : " <<endl;
   for(i = 0; i<n; i++) {
      cout << "LA[" << i << "] = " << LA[i] << endl;
   }
   
   for(i = 0; i<n; i++) {
      	if( LA[i] == item ) {
         	cout << "Found element " << item << " at position " << i+1 <<endl;
		}	
   }
   if (LA[i]!=item) {
		cout << "Item not found!" <<endl;
	}
   
   
   cout << "-------------------------------------------------------------------------------" << endl;
   return 0;
}*/


//traversal
/*#include <iostream>
using namespace std;
int main(){
   int LA[] = {1,3,5,7,8};
   int n = 5, i;
   
   cout << "The original array elements are:\n";
   for(i = 0; i<n; i++)
      cout << "LA[" << i << "] = " << LA[i] << endl;
      
      cout << "-------------------------------------------------------------------------------" << endl;
   return 0;
}*/
 


//updating
/*#include <iostream>
using namespace std;
int main(){
   int LA[] = {1,3,5,7,8};
   int item = 10, n = 5;
   int i ;
   cout << "The original array elements are :\n";
   for(i = 0; i<n; i++)
      cout << "LA[" << i << "] = " << LA[i] << endl;
   LA[2] = item;
   cout << "The array elements after updation are :\n";
   for(i = 0; i<n; i++)
      cout << "LA[" << i << "] = " << LA[i] << endl;
      
      cout << "-------------------------------------------------------------------------------" << endl;
   return 0;
}*/



//merging two char arrays 
/*#include <iostream>
using namespace std;
    int main()
    {
        char arr1[] = {'I', 'J', 'K', 'L', 'M'};
        char arr2[] = {'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'};
        char arr3[13];

        for (int i=0; i< 5; i++) {
            arr3[i] = arr1[i];
        }

        for (int i=5; i< 13; i++) {
            arr3[i] = arr2[i-5];
        }

        for (int i=0; i< 13; i++) {
        cout<< arr3[i] << ' ';
        }
        cout<<endl;

		cout << "-------------------------------------------------------------------------------" << endl;
        return 0;
    }
*/

//merging two int arrays 
#include <iostream>
 using namespace std;

    int main()
    {
        int arr1[] = {9, 10, 11, 12, 13};
        int arr2[] = {1, 2, 3};
        int arr3[] = {3, 4, 5, 9};

        int arr4[12];
        int sizeArr1=5, sizeArr2=3, sizeArr3=4, sizeArr4=12;

        for (int i=0; i< sizeArr1; i++) {
            arr4[i] = arr1[i];
        }

        for (int i=sizeArr1; i< sizeArr3; i++) {
            arr4[i] = arr2[i-sizeArr1];
        } 
        
        for (int i= sizeArr3; i < sizeArr2; i++) {
        	arr4[i] = arr3[i-sizeArr2];
		}
        
        for (int i=0; i< sizeArr4; i++) {
        	cout << arr4[i] <<endl;
		}
        

        cout<<endl;
		
		cout << "-------------------------------------------------------------------------------" << endl;
        return 0;
    }
