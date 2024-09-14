#include <iostream>
#include <fstream>
#include <string>

using namespace std;

// STRUCTURE
struct info {
    int accNum[10];
    string name[10];
    string address[10];
    int age[10];
    int balance[10];
    int pincode[10];
};

struct condi {
    bool open;
    bool select;
    bool adminSel;
    bool userSel;
    bool userPin;
    bool correctPin;
    bool adminDel;
};

struct selects {
    int mainSel;
    int userSel;
    int userPin;
    int userNum;
    int adminPass;
    int adminSel;
    char cont;
    int adminDel;
};

struct cntr {
    int accCntr;
    int start;
   
};

struct comp {
    int deposit;
    int withdraw;
};

// FUNCTION
int deposit(int a, int b) {
    return a + b;
}
int withdraw(int a, int b) {
	return a - b;
}

int main() {
    cout << "----------------------------------------------------------------\n";
    cout << "------------------- B A N K I N G   S Y S T E M ----------------\n";
    cout << "----------------------------------------------------------------\n\n";

    info d;
    selects s;
    condi b;
    cntr c;
    comp com;

    b.open = true;
    c.accCntr = 0;
    

    while (b.open) {
        b.select = true;
        
        cout << "-- LOG IN AS -- \n";
        cout << "  [1] ADMIN \n  [2] USER \n  [3] EXIT \n";
        cout << "Select a method of log in : ";
        cin >> s.mainSel;

        while (b.select) {
			b.adminSel = true;
			
            // ADMIN
            if (s.mainSel == 1) {				
				c.start = 0;
                cout << "Enter Password (to exit enter '0') : ";
                cin >> s.adminPass;

                while (b.adminSel) {
                    if (s.adminPass == 1234) {
                        cout << "\n-- WHAT TO DO? -- \n";
                        cout << " [1]ADD ACCOUNT\n [2]DELETE ACCOUNT\n [3]VIEW ALL ACCOUNT\n [4]EXIT\nChoose transaction : ";
                        cin >> s.adminSel;

                        // ADD ACCOUNT
                        if (s.adminSel == 1) {
                        	
						    for (int i = c.start; i < 10; i++) {
						        cout << "\n-- FILL UP --\n";
						        cout << "Account Number : ";
						        cin >> d.accNum[i];
						
						        // Check if account number already exists
						        bool accountExists = false;
						        for (int j = 0; j < i; j++) {
						            if (d.accNum[i] == d.accNum[j]) {
						                accountExists = true;
						                break;
						            }
						        }
						
						        if (accountExists) {
						            cout << "Account number already used. Please enter a different account number.\n";
						            continue;
						        }
						
						        cout << "Name : ";
						        cin.ignore();
						        getline(cin, d.name[i]);
						        cout << "Address : ";
						        getline(cin, d.address[i]);
						        cout << "Age : ";
						        cin >> d.age[i];
						        cout << "Balance : PhP ";
						        cin >> d.balance[i];
						        cout << "Pin Code : ";
						        cin >> d.pincode[i];
						
						        c.accCntr++;
						        c.start++;
						
						        ofstream myfile("userAccount.txt", ios::app);
						        myfile << "\n----------------- " << d.name[i] << " ACCOUNT ------------------\n";
						        myfile << d.accNum[i] << ", " << d.name[i] << ", " << d.address[i] << ", " << d.age[i] << ", " << d.balance[i] << ", " << d.pincode[i] << endl;
						        myfile << "--------------------------------------------------\n";
						        myfile.close();
						
						        if (c.accCntr == 10) {
						            break;
						        }
						
						        cout << "Continue to add account? [Y/N] : ";
						        cin >> s.cont;
						        if ((s.cont == 'N') || (s.cont == 'n')) {
						            break;
						        }
						    }
                        }
                        
                        // DELETE ACCOUNT
                        else if (s.adminSel == 2) {
                            
                            b.adminDel=true;
                            
                            while (b.adminDel) {
								cout << "\n\n------------------------ ALL ACCOUNT ------------------------\n";
	                            cout << "\tNUMBER\t\tNAME\t\tBALANCE \n";
	                            for (int x = 0; x < c.accCntr; x++) {
	                                cout <<"\t[" << x+1 << "]\t\t" << d.name[x] << "\t\t" << d.balance[x] << endl;
	                            }
	                            cout << "-------------------------------------------------------------\n";
	                            
							    cout << "Enter the number to be deleted (to exit enter '0'): ";
							    cin >> s.adminDel;
							
							    if (s.adminDel == 0) {
							        b.adminDel = false;
							        break;
							    }
							
							    if (s.adminDel <= c.accCntr && s.adminDel >= 1) {
							        for (int i = s.adminDel - 1; i < c.accCntr - 1; i++) {
							            d.accNum[i] = d.accNum[i + 1];
							            d.name[i] = d.name[i + 1];
							            d.address[i] = d.address[i + 1];
							            d.age[i] = d.age[i + 1];
							            d.balance[i] = d.balance[i + 1];
							            d.pincode[i] = d.pincode[i + 1];
							        }
							        c.accCntr--;
							        c.start--;
									cout << "-- DELETED ACCOUNT! --\n\n";
							    } else {
							        cout << "-- INVALID INPUT! --\n\n";
							    }
							}
							
							//RESET TEXT FILE
								for (int n = 0; n < 1; n++) {
									ofstream myfile("userAccount.txt",ios::ate);
									for (int a=0; a < c.accCntr; a++) {
										ofstream reset("userAccount.txt", ios::app);
										reset << "\n----------------- " << d.name[a] << " ACCOUNT ------------------\n";
		                                reset << d.accNum[a] << ", " << d.name[a] << ", " << d.address[a] << ", " << d.age[a] << ", " << d.balance[a] << ", " << d.pincode[a] << endl;
		                                reset << "--------------------------------------------------\n";
		                                reset.close();
									}
									myfile.close();	
								}
  
                        }
                        // VIEW ALL ACCOUNT
                        else if (s.adminSel == 3) {
                            cout << "\n\n------------------------ ALL ACCOUNT ------------------------\n";
                            cout << "Format (Account Number, Name, Address, Age, Balance, Pin Code)\n";
                            for (int x = 0; x < c.accCntr; x++) {
                                cout << "    [" << x+1 << "] " << d.accNum[x] << ", " << d.name[x] << ", " << d.address[x] << ", " << d.age[x] << ", " << d.balance[x] << ", " << d.pincode[x] << endl;
                            }
                            cout << "-------------------------------------------------------------";
                            cout << endl << endl;
                        }
                        
                        // EXIT
                        else if (s.adminSel == 4) {
                            b.adminSel = false;
                            b.select = false;
                            cout << "\n";
                        } else {
                            cout << "-- INVALID INPUT! --\n\n";
                        }
                    
                    //EXIT-0
                    } else if (s.adminPass == 0) {
                        cout << endl;
                        b.select = false;
                        break;
                       
					//INVALID 
                    } else {
                        cout << "-- INVALID PASSWORD! --\n\n";
                        b.adminSel=false;
                    }
                }
            }
            // USER
			else if (s.mainSel == 2) {
				
			    b.userSel = true;
			    
			    cout << "Account Number (to exit enter '0'): ";
			    cin >> s.userNum;
			    
			    if (s.userPin==0) {
			    	b.userSel = false;
			        b.select = false;
			        cout << endl;
			        break;
				}
			    
			    cout << "Pin Code (to exit enter '0') : ";
			    cin >> s.userPin;
			    
			    if (s.userNum == 0) {
			        b.userSel = false;
			        b.select = false;
			        cout << endl;
		            break;
		        } 
			
			    while (b.userSel) {
			        
			            bool accountFound = false;
			            int accountIndex = 0;
			            
			            for (int p = 0; p < c.accCntr; p++) {
			                if (s.userNum == d.accNum[p] && s.userPin == d.pincode[p]) {
			                    accountFound = true;
			                    accountIndex = p;
			                    break;
			                }
			            } 
			            
			            if (accountFound) {
			                cout << "\n---------------------- TRANSACTION ----------------------\n";
			                cout << "Hello " << d.name[accountIndex] << ", Welcome to our Banking System!\n";
			                cout << " [1]Balance\n [2]Deposit\n [3]Withdraw\n [4]Exit\n";
			                cout << "Choose a transaction: ";
			                cin >> s.userSel;

			                switch (s.userSel) {
			                	//BALANCE
			                    case 1:
			                        cout << "\n------------- YOUR BALANCE -------------\n";
			                        cout << "  Name : " << d.name[accountIndex] << endl;
			                        cout << "  Balance : Php " << d.balance[accountIndex] << endl;
			                        cout << "----------------------------------------\n";
			                        break;
								//DEPOSIT
			                    case 2:
			                        cout << "Your current balance: " << d.balance[accountIndex] << endl;
			                        cout << "How much to deposit: Php ";
			                        cin >> com.deposit;
			                        d.balance[accountIndex] += com.deposit;
			                        cout << "--------------------------------------\n";
			                        cout << "New Balance: PhP " << d.balance[accountIndex] << endl;
			                        cout << "--------------------------------------\n";
			                        break;
								//WITHDRAW
			                    case 3:
			                        cout << "Your current balance: " << d.balance[accountIndex] << endl;
			                        cout << "How much to withdraw: PhP ";
			                        cin >> com.withdraw;
			
			                        if (com.withdraw <= d.balance[accountIndex]) {
			                            d.balance[accountIndex] -= com.withdraw;
			                            cout << "--------------------------------------\n";
			                            cout << "New Balance: PhP " << d.balance[accountIndex] << endl;
			                            cout << "--------------------------------------\n";
			                        } else {
			                            cout << "-- INSUFFICIENT BALANCE! --\n";
			                        }
			                        break;
								//EXIT
			                    case 4:
			                        b.userSel = false;
			                        b.select = false;
			                        cout << endl;
			                        break;
								//INVALID
			                    default:
			                        cout << "-- INVALID INPUT --\n\n";
			                        break;
			                }
			
			                // Update the "userAccount.txt" text file
			                ofstream myfile("userAccount.txt", ios::ate);
			                for (int a = 0; a < c.accCntr; a++) {
			                    ofstream reset("userAccount.txt", ios::app);
			                    reset << "\n----------------- " << d.name[a] << " ACCOUNT ------------------\n";
			                    reset << d.accNum[a] << ", " << d.name[a] << ", " << d.address[a] << ", " << d.age[a] << ", " << d.balance[a] << ", " << d.pincode[a] << endl;
			                    reset << "--------------------------------------------------\n";
			                    reset.close();
			                }
			                myfile.close();
			            } else {
			                cout << "-- ACCOUNT NOT FOUND! --\n\n";
			                b.userSel=false;
						}
					
				}
			}				
            // EXIT
            else if (s.mainSel == 3) {
                cout << "\n----------------------------------------------------------------";
                cout << "\n--------------------THANK YOU FOR INQUIRING!---------------------";
                cout << "\n----------------------------------------------------------------\n\n";
                b.open = false;
                break;
            }
            // INVALID
            else {
                cout << "-- INVALID INPUT! --\n\n";
                break;
            }
        }
    }
    return 0;
}

