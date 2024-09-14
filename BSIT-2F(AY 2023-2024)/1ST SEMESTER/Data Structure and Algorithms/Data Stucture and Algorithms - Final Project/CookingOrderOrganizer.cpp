#include <iostream>
#define MAX 4
using namespace std;

struct Order {
    string dishName;
    int quantity;
};

Order orderQueue[MAX];
int rear = -1;
int front = 0;
int count = 0;

int isFull() {
    return count == MAX;
}

void enqueue(Order newOrder) {
    if (!isFull()) {
        if (rear == MAX - 1) {
            rear = -1;
        }
        orderQueue[++rear] = newOrder;
        count++;
        cout << "\n=========== ORDER ADDED ===========" << endl;
        cout << " Name : " << newOrder.dishName << endl;
		cout << " Good for " << newOrder.quantity << " person. " << endl;
		cout << "===================================" << endl << endl;
    } else {
    	cout << "\n===================================" << endl;
    	cout << "      ORDER QUEUE IS FULL." << endl;
    	cout << "===================================" << endl << endl;
	}
}


int isEmpty() {
    return count == 0;
}

Order dequeue() {
    Order completedOrder = orderQueue[front++];
    if (front == MAX) {
        front = 0;
    }
    count--;
    cout << "\n========= ORDER COMPLETED =========" << endl;
    cout << " Name: " << completedOrder.dishName <<endl;
	cout << " Good for " << completedOrder.quantity << " person." << endl;
	cout << "===================================" << endl << endl;
    return completedOrder;
}

// this is for displaying order queue
void displayOrders() {
    if (isEmpty()) {
    	cout << "\n===================================" << endl;
        cout << "      ORDER QUEUE IS EMPTY." << endl;
        cout << "===================================" << endl << endl;
        return;
    }

    int i = front;
	cout << "\n=========== ORDER LIST ============" << endl;
    for (int j = 0; j < count; ++j) {
        cout << " [" << j+1 << "] " << orderQueue[i].dishName << endl;
		cout << "     Good for " << orderQueue[i].quantity << " person." << endl;
        i = (i + 1) % MAX;
    }
	cout << "===================================" << endl << endl;
}

int main() {
    int choice;
    Order newOrder;

    do {
    	cout << "+---------------------------------+\n";
        cout << "|     COOKING ORDER ORGANIZER     |\n";
        cout << "+---------------------------------+\n";
        cout << "| [1] Add Cooking Order           |\n";
        cout << "| [2] Serve Cooking Orden         |\n";
        cout << "| [3] Display Cooking Orders      |\n";
        cout << "| [4] Exit                        |\n"; 
        cout << "+---------------------------------+\n";
        cout << "Enter your choice (1-4): ";
        cin >> choice;

        switch (choice) {
            case 1:
            	// this is for adding dish to cook
                cout << "Enter dish name: ";
                cin >> newOrder.dishName;
                cout << "For how many person?: ";
                cin >> newOrder.quantity;
                enqueue(newOrder);
                break;
            case 2:
            	// this is for removing dish
                if (!isEmpty()) {
                    dequeue();
                } else {
                	cout << "\n===================================" << endl;
                    cout << "      ORDER QUEUE IS EMPTY.\n";
                    cout << "===================================" << endl << endl;
                }
                break;
            case 3:
                displayOrders();
                break;
            case 4:
            	cout << "\n===================================" << endl;
                cout << "       EXITING THE PROGRAM \n";
                cout << "===================================" << endl << endl;
                break;
            default:
            	cout << "\n===================================" << endl;
                cout << "    INVALID INPUT. TRY AGAIN!\n";
                cout << "===================================" << endl << endl;
        }

    } while (choice != 4);

    return 0;
}

