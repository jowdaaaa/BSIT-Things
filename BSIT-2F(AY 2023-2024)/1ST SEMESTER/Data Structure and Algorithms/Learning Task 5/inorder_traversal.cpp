#include<bits/stdc++.h>

using namespace std;

/* Structure for a node */
struct node {
    int data;
    struct node * left;
    struct node * right;
};

/* Function to create a new node */
struct node * newNode(int data) {
    struct node * temp = (struct node * ) malloc(sizeof(struct node));
    temp -> data = data;
    temp -> left = NULL;
    temp -> right = NULL;
    return temp;
};

/* Function to insert a node in the tree */
void insert_node(struct node * root, int n1, int n2, char lr) {
    if (root == NULL)
        return;
    if (root -> data == n1) {
        switch (lr) {
            case 'l':
                root -> left = newNode(n2);
                break;
            case 'r':
                root -> right = newNode(n2);
                break;
        }
    } else {
        insert_node(root -> left, n1, n2, lr);
        insert_node(root -> right, n1, n2, lr);
    }
}

/* Function to print the inorder traversal of the tree */
void inorder(struct node * root) {
    if (root == NULL)
        return;
    inorder(root -> left);
    cout << root -> data << " ";
    inorder(root -> right);
}

/* Main Function */
int main() {
    struct node * root = NULL;
    int n;
    cout << "\nEnter the number of edges : ";
    cin >> n;
    cout << "\nInput the nodes of the binary tree in order \n\nparent-child-left(or)right-\n\n";
    while (n--) {
        char lr;
        int n1, n2;
        cin >> n1 >> n2;
        cin >> lr;
        if (root == NULL) {
            root = newNode(n1);
            switch (lr) {
                case 'l':
                    root -> left = newNode(n2);
                    break;
                case 'r':
                    root -> right = newNode(n2);
                    break;
            }
        } else {
            insert_node(root, n1, n2, lr);
        }
    }
    cout << "\nInorder Traversal : ";
    inorder(root);
    cout << endl;
    return 0;
}
