// OCT 11, 2023

/*#include <iostream>
#define MAX 4
using namespace std;

int stack_arr[MAX];
int top = -1; // to get index 0

//validate id the stack is full
int isFull(){
    if(top == MAX-1) return 1;
    else return 0;
}

//inset element in stack
void push(int data){
    if(isFull()){
        cout<<"Stack overflow!"<<endl; 
		return;
    }
    top = top + 1;
    stack_arr[top]=data;
}

//validate if the stack is empty
int isEmpty(){
    if(top == -1) return 1;
    else return 0;
}

//use to retrieved element from stack
int pop(){
    int value;
    if(isEmpty()){
        cout<<"Stack underflow!"<<endl; 
		exit(1);
    }
    value=stack_arr[top];
    top = top - 1;
    return value;
}

//to view the top value
int peek(){
    if(isEmpty()){
        cout<<"Stack underflow!"<<endl; 
		exit(1);
    }
    return stack_arr[top];
}

//use to display elements of stack
void display(){
   
    if(isEmpty()){
        cout<<"Stack underflow!"<<endl; 
		exit(1);
    }
    
    cout<<"The value of stack: "<<endl;
    for(int i = top; i >=0; i--){
    	cout<<stack_arr[i] <<endl;
    }
}


int main() {
	
	push(22);
	push(2);
	push(20);
	push(5);
	pop();
	push(100);
	
	display();
	
	cout<<"top value is " <<peek();
   
}*/










// S T A C K    A R R A Y
/*#include <iostream>
#define MAX 4
using namespace std;

int stack_arr[MAX];
int top = -1;

int isFull(){
    if(top == MAX-1) return 1;
    else return 0;
}

void push(int data){
    if(isFull()){
        cout<<"Stack overflow!\n"<<endl; return;
    }
    top = top + 1;
    stack_arr[top]=data;
}

int isEmpty(){
    if(top == -1) return 1;
    else return 0;
}

int pop(){
    int value;
    if(isEmpty()){
        cout<<"Stack underflow!\n"<<endl; //exit(1);
       
    }
    value=stack_arr[top];
    top = top - 1;
    return value;
}

int peek(){
    if(isEmpty()){
        cout<<"Stack underflow!\n"<<endl; //exit(1);
    }
    return stack_arr[top];
}

void display(){
   
    if(isEmpty()){
          cout<<"Stack underflow!\n"<<endl; //exit(1);
      }
    cout<<"The value of stack: "<<endl;
    for(int i = top; i >=0; i--){
      cout<<stack_arr[i]<<endl;
    }
}

int main() {
//cout<<"top value is "<<peek();
while(1){
    int choice, data;
    cout<<"\nChoices: \n";
    cout<<"1. push element into stack \n";
    cout<<"2. pop element from stack \n";
    cout<<"3. peek top value of stack \n";
    cout<<"4. display elements of stack \n";
    cout<<"5. exit \n";
    cout<<"Enter your choice: ";
    cin>>choice;
    switch(choice){
        case 1: cout<<"\n Enter value to push in a stack: ";
                cin>>data;
                push(data);
                break;
        case 2: pop(); break;
        case 3: cout<<"\ntop value is "<<peek(); break;
        case 4: display(); break;
        case 5: exit(1);
    }
   
}
 
}*/









// S T A C K   L I N K L I S T
#include <iostream>
using namespace std;

struct node{
    int value;
    struct node* link;
} *top = NULL;

void push(int value){
    struct node* newNode;
    newNode = new node();
    //newNode = malloc(sizeof(newNode));
    if(newNode==NULL){
        cout<<"Stack Overflow";
        exit(1);
    }
    newNode->value=value;
    newNode->link=NULL;
    newNode->link=top;
    top=newNode;
}
int isEmpty(){
    if(top == NULL) return 1;
    else return 0;
}
int pop(){
    if(isEmpty()){
        cout<<"Stack Underflow!";
        exit(1);
    }
    int val = top->value;
    top=top->link;
    //free(top);
    //top=NULL;
    return val;
}
int peek(){
    if(isEmpty()){
        cout<<"Stack Underflow!";
        exit(1);
    }return top->value;
}

int main() {
	
	int val;
   	push(1);
   	push(112);
   	push(23);
	val = pop();
	val = pop(); //pop();pop();pop();pop();
   	cout<<"The topmost element of the stack is " <<peek() <<endl;
   	cout << "The last deleted: " << val << endl <<endl;
   	cout<<"The stack ELements are: \n";
   	while(top){
       	cout<<top->value<<endl;
       	top=top->link;
   	}
}



