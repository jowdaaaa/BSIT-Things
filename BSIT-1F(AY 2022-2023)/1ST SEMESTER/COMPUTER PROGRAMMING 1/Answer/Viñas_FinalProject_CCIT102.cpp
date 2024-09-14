//VIÑAS, JUDAH PAULO LL. | BSIT-1F 

#include <iostream>

using namespace std;

int main () {
	
	// This is the Menu of CSPC Cafe using "cout" to display
	cout << "                                      WELCOME TO CSPC CAFE!" <<endl <<endl;
	cout << "********************************************** MENU *************************************************" <<endl;
	cout << "ITEM CODE       DESCRIPTION                  SIZE                           PRICE" <<endl;
	cout << "  [1]           Burger                       Regular | Large                130.00 | 180.00" <<endl;
	cout << "  [2]           Pizza                        Solo | Party                   100.00 | 350.00" <<endl;
	cout << "  [3]           Fried Chicken                1 | 4 | 10 pcs.                50.00 | 175.00 | 450.00" <<endl;
	cout << "  [4]           Grilled Chicken              Quarter | Half | Whole         70.00 | 140.00 | 250.00" <<endl;
	cout << "  [5]           Spaghetti                    Solo | Party                   120.00 | 550.00" <<endl;
	cout << "  [6]           Strawberry Shake             16oz.                          70.00" << endl;
	cout << "  [7]           Chocolate Shake              16oz.                          80.00" << endl;
	cout << "  [8]           Milk Tea                     16oz.                          65.00" << endl;
	cout << "  [9]           Softdrink                    8 | 12 oz.                     15.00 | 20.00" << endl;
	cout << "  [10]          Cheesecake                   Slice | Whole                  100.00 | 975.00" << endl;
	cout << "  [0]           END ORDER" << endl;
	cout << "*****************************************************************************************************" <<endl <<endl;
	
	int code, size, quantity, totalBill;  // This is the variable that we use to get the Item Code, Size, and Quantity of the items you want to buy, and also the Total Bill.
	int itemCount = 0; // This "itemCount" variable is connected to the "for loop."
	int subtotalArray[10]={0}; // I created an array variable to store elements from the result of totalBill.
	int quantityArray[10]={0}; // I created an array variable to store elements from the result of quantity.
	
	do {    // To create this program, I used the "do-while loop" method.
		cout << "Enter ITEM CODE > "; // let's start at displaying 
		cin >> code;                  // and getting the code of the items
	
		switch (code) { // I choose the switch statement for the "code" variable
	//CASE 1	
			case 1 : // If you enters 1, the program will proceed to this case.
				cout << "Enter size of BURGER: [1] Regular [2] Large > "; // As a result of choosing case 1, this will be displayed 
				cin >> size;                                              // and get the size of the item you want.
				if (size==1) { // If you enter 1 in the variable size, the program will proceed to this "if else statement"
					cout << "Enter quantity > "; // As a result of entering 1 size, this will be displayed
					cin >> quantity;             // then decide how many you want to buy.
					totalBill = 130 * quantity;  // this is the formula of getting the totalBill (130 multiplied by the number you enter in quantity variable)
					cout << "Subtotal: Php" << totalBill << ".00" <<endl; // Displaying the totalBill using the given formula above
					itemCount++; // itemCount incriment
					subtotalArray[itemCount] = totalBill; // This array will collect the totalBill. 
					for (int i = 0; i < itemCount; i++){ // This "for loop" adds all of the subtotals that were collected in the "subtotalArray" array.
		        		totalBill += subtotalArray[i]; 
		    		}
		    		quantityArray[itemCount] = quantity; // This array will collect the quantity.
					for (int i = 0; i < itemCount; i++){ // This "for loop" adds all of the quantity that were collected in the "quantityArray" array.
						quantity += quantityArray[i];
					}					
					cout << endl; //end line
				} else if (size==2) { // If you enters 2, the program will proceed to this case.
					cout << "Enter quantity > "; // As a result of entering 2 size, this will be displayed
					cin >> quantity;			 // then decide how many you want to buy.
					totalBill = 180 * quantity;  // this is the formula of getting the totalBill (180 multiplied by the number you enter in quantity variable)
					cout << "Subtotal: Php" << totalBill << ".00" <<endl; // Displaying the totalBill using the given formula above
					itemCount++; // itemCount incriment
					subtotalArray[itemCount] = totalBill; // This array will collect the totalBill. 
					for (int i = 0; i < itemCount; i++){  // This "for loop" adds all of the subtotals that were collected in the "subtotalyArray" array.
		        		totalBill += subtotalArray[i];
		    		}
					quantityArray[itemCount] = quantity; // This array will collect the quantity.					
		    		for (int i = 0; i < itemCount; i++){ // This "for loop" adds all of the quantity that were collected in the "quantityArray" array.
						quantity += quantityArray[i];
					}					
					cout << endl; //end line
				} else { // else you enter not matched to the 1 and 2, the program will proceed to this "if else statements"
					cout << "INVALID! TRY AGAIN." << endl <<endl; // displaying that you entered is incorrect/invalid
				}
				break; // after the "if else statements" or the functions, it will be out from the case and it will start from getting the code item 
	
	//CASE 2			
			case 2 : // If you enters 2, the program will proceed to this case.
				cout << "Enter size of PIZZA: [1] Solo [2] Party > "; // As a result of choosing case 1, this will be displayed 
				cin >> size;										  // and get the size of the item you want.
				if (size==1) { // THE EXPLANATION FOR THIS IF-ELSE STATEMENT FUNCTION IS EXACTLY THE SAME AS FOR THE OTHER CASE.
					cout << "Enter quantity > ";							
					cin >> quantity;										
					totalBill = 100 * quantity;
					cout << "Subtotal: Php" << totalBill << ".00" <<endl;
					itemCount++;
					subtotalArray[itemCount] = totalBill;
					for (int i = 0; i < itemCount; i++){
		        		totalBill += subtotalArray[i];
		    		}
					quantityArray[itemCount] = quantity;					
		    		for (int i = 0; i < itemCount; i++){
						quantity += quantityArray[i];
					}					
					cout << endl;
				} else if (size==2) { // THE EXPLANATION FOR THIS IF-ELSE STATEMENT FUNCTION IS EXACTLY THE SAME AS FOR THE OTHER CASE.
					cout << "Enter quantity > ";
					cin >> quantity;
					totalBill = 350 * quantity;
					cout << "Subtotal: Php" << totalBill << ".00" <<endl;
					itemCount++;
					subtotalArray[itemCount] = totalBill;
					for (int i = 0; i < itemCount; i++){
		        		totalBill += subtotalArray[i];
		    		}
					quantityArray[itemCount] = quantity;
		    		for (int i = 0; i < itemCount; i++){
						quantity += quantityArray[i];
					}					
					cout << endl;
				} else { //THE EXPLANATION FOR THIS IF-ELSE STATEMENT FUNCTION IS EXACTLY THE SAME AS FOR THE OTHER CASE.
					cout << "INVALID! TRY AGAIN." << endl <<endl;
				}
				break; // after the "if else statements" or the functions, it will be out from the case and it will start from getting the code item
	
	//CASE 3			
			case 3 :  //THE EXPLANATION FOR THIS IF-ELSE STATEMENT FUNCTION IS EXACTLY THE SAME AS FOR THE OTHER CASE.
				cout << "Enter size of FIRED CHICKEN: [1] 1pcs. [2] 4pcs. [3] 10pcs. > "; // As a result of choosing case 3, this will be displayed
				cin >> size; 															  // and get the size of the item you want.
				if (size==1) {  //THE EXPLANATION FOR THIS IF-ELSE STATEMENT FUNCTION IS EXACTLY THE SAME AS FOR THE OTHER CASE.
					cout << "Enter quantity > ";
					cin >> quantity;
					totalBill = 50 * quantity;
					cout << "Subtotal: Php" << totalBill << ".00" <<endl;
					itemCount++;
					subtotalArray[itemCount] = totalBill;
					for (int i = 0; i < itemCount; i++){
		        		totalBill += subtotalArray[i];
		    		}
					quantityArray[itemCount] = quantity;
							    		for (int i = 0; i < itemCount; i++){
						quantity += quantityArray[i];
					}					
					cout << endl;
				} else if (size==2) { //THE EXPLANATION FOR THIS IF-ELSE STATEMENT FUNCTION IS EXACTLY THE SAME AS FOR THE OTHER CASE.
					cout << "Enter quantity > ";
					cin >> quantity;
					totalBill = 175 * quantity;
					cout << "Subtotal: Php" << totalBill << ".00" <<endl;
					itemCount++;
					subtotalArray[itemCount] = totalBill;
					for (int i = 0; i < itemCount; i++){
		        		totalBill += subtotalArray[i];
		    		}
					quantityArray[itemCount] = quantity;					
		    		for (int i = 0; i < itemCount; i++){
						quantity += quantityArray[i];
					}					
					cout << endl;
				} else if (size==3) { //THE EXPLANATION FOR THIS IF-ELSE STATEMENT FUNCTION IS EXACTLY THE SAME AS FOR THE OTHER CASE.
					cout << "Enter quantity > ";
					cin >> quantity;
					totalBill = 450 * quantity;
					cout << "Subtotal: Php" << totalBill << ".00" <<endl;
					itemCount++;
					subtotalArray[itemCount] = totalBill;
					for (int i = 0; i < itemCount; i++){
		        		totalBill += subtotalArray[i];
		    		}
					quantityArray[itemCount] = quantity;					
		    		for (int i = 0; i < itemCount; i++){
						quantity += quantityArray[i];
					}					
					cout << endl;
				} else { //THE EXPLANATION FOR THIS IF-ELSE STATEMENT FUNCTION IS EXACTLY THE SAME AS FOR THE OTHER CASE.
					cout << "INVALID! TRY AGAIN." << endl <<endl;
				}
				break; // after the "if else statements" or the functions, it will be out from the case and it will start from getting the code item
	
	//CASE 4			
			case 4 : // If you enters 4, the program will proceed to this case.
				cout << "Enter size of GRILLED CHICKEN: [1] Quarter [2] Half [3] Whole > "; // As a result of choosing case 4, this will be displayed 
				cin >> size;																// and get the size of the item you want.
				if (size==1) { //THE EXPLANATION FOR THIS IF-ELSE STATEMENT FUNCTION IS EXACTLY THE SAME AS FOR THE OTHER CASE.
					cout << "Enter quantity > ";
					cin >> quantity;
					totalBill = 70 * quantity;
					cout << "Subtotal: Php" << totalBill << ".00" <<endl;
					itemCount++;
					subtotalArray[itemCount] = totalBill;
					for (int i = 0; i < itemCount; i++){
		        		totalBill += subtotalArray[i];
		    		}
					quantityArray[itemCount] = quantity;					
		    		for (int i = 0; i < itemCount; i++){
						quantity += quantityArray[i];
					}					
					cout << endl;
				} else if (size==2) { //THE EXPLANATION FOR THIS IF-ELSE STATEMENT FUNCTION IS EXACTLY THE SAME AS FOR THE OTHER CASE.
					cout << "Enter quantity > ";
					cin >> quantity;
					totalBill = 140 * quantity;
					cout << "Subtotal: Php" << totalBill << ".00" <<endl;
					itemCount++;
					subtotalArray[itemCount] = totalBill;
					for (int i = 0; i < itemCount; i++){
		        		totalBill += subtotalArray[i];
		    		}
					quantityArray[itemCount] = quantity;					
		    		for (int i = 0; i < itemCount; i++){
						quantity += quantityArray[i];
					}					
					cout << endl;
				} else if (size==3) { //THE EXPLANATION FOR THIS IF-ELSE STATEMENT FUNCTION IS EXACTLY THE SAME AS FOR THE OTHER CASE.
					cout << "Enter quantity > ";
					cin >> quantity;
					totalBill = 250 * quantity;
					cout << "Subtotal: Php" << totalBill << ".00" <<endl;
					itemCount++;
					subtotalArray[itemCount] = totalBill;
					for (int i = 0; i < itemCount; i++){
		        		totalBill += subtotalArray[i];
		    		}
					quantityArray[itemCount] = quantity;					
		    		for (int i = 0; i < itemCount; i++){
						quantity += quantityArray[i];
					}					
					cout << endl;
				} else { //THE EXPLANATION FOR THIS IF-ELSE STATEMENT FUNCTION IS EXACTLY THE SAME AS FOR THE OTHER CASE.
					cout << "INVALID! TRY AGAIN." << endl <<endl;
				}
				break; // after the "if else statements" or the functions, it will be out from the case and it will start from getting the code item

	//CASE 5			
			case 5 : // If you enters 5, the program will proceed to this case.
				cout << "Enter size of SPAGHETTI: [1] Solo [2] Party > "; // As a result of choosing case 5, this will be displayed 
				cin >> size;											  // and get the size of the item you want.
				if (size==1) { //THE EXPLANATION FOR THIS IF-ELSE STATEMENT FUNCTION IS EXACTLY THE SAME AS FOR THE OTHER CASE.
					cout << "Enter quantity > ";
					cin >> quantity;
					totalBill = 120 * quantity;
					cout << "Subtotal: Php" << totalBill << ".00" <<endl;
					itemCount++;
					subtotalArray[itemCount] = totalBill;
					for (int i = 0; i < itemCount; i++){
		        		totalBill += subtotalArray[i];
		    		}
					quantityArray[itemCount] = quantity;					
		    		for (int i = 0; i < itemCount; i++){
						quantity += quantityArray[i];
					}					
					cout << endl;
				} else if (size==2) { //THE EXPLANATION FOR THIS IF-ELSE STATEMENT FUNCTION IS EXACTLY THE SAME AS FOR THE OTHER CASE.
					cout << "Enter quantity > ";
					cin >> quantity;
					totalBill = 550 * quantity;
					cout << "Subtotal: Php" << totalBill << ".00" <<endl;
					itemCount++;
					subtotalArray[itemCount] = totalBill;
					for (int i = 0; i < itemCount; i++){
		        		totalBill += subtotalArray[i];
		    		}
					quantityArray[itemCount] = quantity;					
		    		for (int i = 0; i < itemCount; i++){
						quantity += quantityArray[i];
					}					
					cout << endl; 
				} else { //THE EXPLANATION FOR THIS IF-ELSE STATEMENT FUNCTION IS EXACTLY THE SAME AS FOR THE OTHER CASE.
					cout << "INVALID! TRY AGAIN." << endl <<endl;
				}
				break; // after the "if else statements" or the functions, it will be out from the case and it will start from getting the code item
			
	//CASE 6			
			case 6 : // If you enters 6, the program will proceed to this case.
				cout << "STRAWBERRY SHAKE: 16oz." << endl; // As a result of choosing case 6, this will be displayed 
				cout << "Enter quantity > ";			   
				cin >> quantity;						  // and get the quantity of the item you want.
				totalBill = 70 * quantity; // this is the formula of getting the totalBill (70 multiplied by the number you enter in quantity variable)
				cout << "Subtotal: Php" << totalBill << ".00" <<endl; // Displaying the totalBill using the given formula above
				itemCount++; // itemCount incriment
				subtotalArray[itemCount] = totalBill; // This array will collect the totalBill. 
				for (int i = 0; i < itemCount; i++){ // This "for loop" adds all of the subtotals that were collected in the "subtotalyArray" array.
		       		totalBill += subtotalArray[i];
		    	}
				quantityArray[itemCount] = quantity; // This array will collect the quantity. 		
		    	for (int i = 0; i < itemCount; i++){ // This "for loop" adds all of the quantity that were collected in the "quantityArray" array.
					quantity += quantityArray[i];
				}				
				cout << endl; // End Line
				break; // after the "if else statements" or the functions, it will be out from the case and it will start from getting the code item
	
	//CASE 7			 
			case 7 : 
				cout << "CHOCOLATE SHAKE: 16oz." << endl; //THE EXPLANATION FOR THIS IF-ELSE STATEMENT FUNCTION IS EXACTLY THE SAME AS FOR THE OTHER CASE.
				cout << "Enter quantity > ";
				cin >> quantity;
				totalBill = 80 * quantity;
				cout << "Subtotal: Php" << totalBill << ".00" <<endl;
				itemCount++;
				subtotalArray[itemCount] = totalBill;
				for (int i = 0; i < itemCount; i++){
		       		totalBill += subtotalArray[i];
		    	}
				quantityArray[itemCount] = quantity;				
		    	for (int i = 0; i < itemCount; i++){
					quantity += quantityArray[i];
				}				
				cout << endl;
				break; // after the "if else statements" or the functions, it will be out from the case and it will start from getting the code item
	
	//CASE 8			
			case 8 : 
				cout << "MILK TEA: 16oz." << endl; //THE EXPLANATION FOR THIS IF-ELSE STATEMENT FUNCTION IS EXACTLY THE SAME AS FOR THE OTHER CASE.
				cout << "Enter quantity > ";
				cin >> quantity;
				totalBill = 65 * quantity;
				cout << "Subtotal: Php" << totalBill << ".00" <<endl;
				itemCount++;
				subtotalArray[itemCount] = totalBill;
				for (int i = 0; i < itemCount; i++){
		       		totalBill += subtotalArray[i];
		    	}
				quantityArray[itemCount] = quantity;				
		    	for (int i = 0; i < itemCount; i++){
					quantity += quantityArray[i];
				}				
				cout << endl;
				break; // after the "if else statements" or the functions, it will be out from the case and it will start from getting the code item
		
	//CASE 9			
			case 9 : // If you enters 9, the program will proceed to this case.
				cout << "Enter size of SOFTDRINK: [1] 8oz. [2] 12oz. > ";  // As a result of choosing case 9, this will be displayed 
				cin >> size;											   // and get the size of the item you want.
				if (size==1) { //THE EXPLANATION FOR THIS IF-ELSE STATEMENT FUNCTION IS EXACTLY THE SAME AS FOR THE OTHER CASE.
					cout << "Enter quantity > ";
					cin >> quantity;
					totalBill = 15 * quantity;
					cout << "Subtotal: Php" << totalBill << ".00" <<endl;
					itemCount++;
					subtotalArray[itemCount] = totalBill;
					for (int i = 0; i < itemCount; i++){
		        		totalBill += subtotalArray[i];
		    		}
					quantityArray[itemCount] = quantity;					
		    		for (int i = 0; i < itemCount; i++){
						quantity += quantityArray[i];
					}					
					cout << endl;
				} else if (size==2) { //THE EXPLANATION FOR THIS IF-ELSE STATEMENT FUNCTION IS EXACTLY THE SAME AS FOR THE OTHER CASE.
					cout << "Enter quantity > ";
					cin >> quantity;
					totalBill = 20 * quantity;
					cout << "Subtotal: Php" << totalBill << ".00" <<endl;
					itemCount++;
					subtotalArray[itemCount] = totalBill;
					for (int i = 0; i < itemCount; i++){
		        		totalBill += subtotalArray[i];
		    		}
					quantityArray[itemCount] = quantity;					
		    		for (int i = 0; i < itemCount; i++){
						quantity += quantityArray[i];
					}					
					cout << endl;
				} else { //THE EXPLANATION FOR THIS IF-ELSE STATEMENT FUNCTION IS EXACTLY THE SAME AS FOR THE OTHER CASE.
					cout << "INVALID! TRY AGAIN." << endl <<endl;
				}
				break; // after the "if else statements" or the functions, it will be out from the case and it will start from getting the code item
	
	//CASE 10			
			case 10 : // If you enters 10, the program will proceed to this case.
				cout << "Enter size of CHEESECAKE: [1] Slice [2] Whole > "; // As a result of choosing case 10, this will be displayed 
				cin >> size;												// and get the size of the item you want.
				if (size==1) { //THE EXPLANATION FOR THIS IF-ELSE STATEMENT FUNCTION IS EXACTLY THE SAME AS FOR THE OTHER CASE.
					cout << "Enter quantity > ";
					cin >> quantity;
					totalBill = 100 * quantity;
					cout << "Subtotal: Php" << totalBill << ".00" <<endl;
					itemCount++;
					subtotalArray[itemCount] = totalBill;
					for (int i = 0; i < itemCount; i++){
		        		totalBill += subtotalArray[i];
		    		}
					quantityArray[itemCount] = quantity;					
		    		for (int i = 0; i < itemCount; i++){
						quantity += quantityArray[i];
					}					
					cout << endl;
				} else if (size==2) { //THE EXPLANATION FOR THIS IF-ELSE STATEMENT FUNCTION IS EXACTLY THE SAME AS FOR THE OTHER CASE.
					cout << "Enter quantity > ";
					cin >> quantity;
					totalBill = 975 * quantity;
					cout << "Subtotal: Php" << totalBill << ".00" <<endl;
					itemCount++;
					subtotalArray[itemCount] = totalBill;
					for (int i = 0; i < itemCount; i++){
		        		totalBill += subtotalArray[i];
		    		} 
					quantityArray[itemCount] = quantity;					
		    		for (int i = 0; i < itemCount; i++){
						quantity += quantityArray[i];
					}					
					cout << endl;
				} else { //THE EXPLANATION FOR THIS IF-ELSE STATEMENT FUNCTION IS EXACTLY THE SAME AS FOR THE OTHER CASE.
					cout << "INVALID! TRY AGAIN." << endl <<endl;
				}
				break; // after the "if else statements" or the functions, it will be out from the case and it will start from getting the code item
			
	//DEFAULT		
			default : // If you enter something that does not match any of the cases (1-10), the program will default to this function.
				cout << "INVALID! TRY AGAIN." << endl << endl; // will display that the number you entered did not match/was invalid
				break; 
		}
	} while (code!=0); // the "do statement" will not end until you enter a number "0"

	// After the program above or the "do-while statement", the program will proceed to this function. 
	cout << endl; // end line
	cout << "*************** ORDER SUMMARY ***************" << endl;  // will display the summary or order
	cout << "Thankyou for your order!" << endl;
	cout << "* Total items ordered: " << quantity << endl; // display the total items ordered or the total quantity that we enter a while ago and this is connected to the function of "for loop"
	cout << "* Total bill:  Php" << totalBill <<".00" << endl; // display the totalBill of all subtotals computed and this is connected to the "for loop" function
	cout << "Please wait while we prepare your food." << endl;
	cout << "*********************************************" <<endl;

	return 0;
}
