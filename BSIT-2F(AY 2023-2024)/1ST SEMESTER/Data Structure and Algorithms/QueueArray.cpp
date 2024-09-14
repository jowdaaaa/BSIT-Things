
// U S I N G   A R R A Y
/*#include <iostream>
#define MAX 4
using namespace std;

int q_arr[MAX];
int rear = -1;
int front=0;
int count=0;

int isFull(){
    return count == MAX;
}

void enqueue(int data){
    if(!isFull()){
        if(rear == MAX-1){
            rear =-1;
        }
        q_arr[++rear] = data;
        count++;
    }else
    cout<<"Queue Overflow"<<endl;
}
int isEmpty(){
    return count==0;
}

int dequeue(){
    if(isEmpty()){
        cout<<"Queue underflow!"<<endl; exit(1);
    }
    int value=q_arr[front++];
    if(front==MAX){
        front=0;
    }
    count--;
    return value;
}

int peek(){
    if(isEmpty()){
        cout<<"Queue underflow!"<<endl; exit(1);
    }
    return q_arr[front];
}


int main() {
	enqueue(22);
	enqueue(2);
	enqueue(233);
	enqueue(244); //enqueue(4355);
	dequeue();dequeue();//dequeue();dequeue();dequeue(); // - for removing the first input
	//cout<<"the first element is "<<peek()<<endl;
	cout<<"Queue: ";
	while(!isEmpty()){
	    int val = dequeue();
	    cout<<" "<<val;
	}
}*/







// U S I N G     L I N K L I S T
#include <iostream>
using namespace std;

struct node{
    int value;
    struct node* link;
}
*front = NULL,
*rear = NULL;

int isEmpty(){
    if(front == NULL) return 1;
    else return 0;}
   
void push(int data){
    node* newNode = new node();
    if (isEmpty()) {
            front = newNode;
            rear = newNode;
        }
    newNode->value=data;
    rear->link = newNode;
    rear = newNode;
}


int pop(){
    if(isEmpty()){
        cout<<"Stack Underflow!";
        exit(1);
    }
    int val = front->value;
    front=front->link;

    return val;

}
int peek(){
    if(isEmpty()){
        cout<<"Queue Underflow!";
        exit(1);
    }return front->value;
}

int main() {
	
   push(112);push(23);//pop();pop();pop();pop();
   push(53);push(63);pop();pop();pop();push(63);push(63);push(63);push(63);push(63);push(63);
   //cout<<"The topmost element of he stack is "<<peek()<<endl;
   
   cout<<"The stack Elements are: \n";
   while(front){
       cout<<front->value<< " ";
       front=front->link;
   }
}
