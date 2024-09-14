#include <bits/stdc++.h>
using namespace std;

class Graph {
public:
    map<int, bool> visited;
    map<int, list<int>> adj;
    int vertices; 

  
    Graph(int V) : vertices(V) {}

 
    void addEdge(int v, int w);


    void DFS(int v);

    void BFS(int s);
};

void Graph::addEdge(int v, int w) {

    adj[v].push_back(w);
}

void Graph::DFS(int v) {

    visited[v] = true;
    cout << v << " ";


    list<int>::iterator i;
    for (i = adj[v].begin(); i != adj[v].end(); ++i)
        if (!visited[*i])
            DFS(*i);
}

void Graph::BFS(int s) {

    vector<bool> visited(vertices, false);


    deque<int> queue;


    visited[s] = true;
    queue.push_back(s);

    while (!queue.empty()) {

        s = queue.front();
        cout << s << " ";
        queue.pop_front();


        for (auto adjacent : adj[s]) {
            if (!visited[adjacent]) {
                visited[adjacent] = true;
                queue.push_back(adjacent);
            }
        }
    }
}

int main() {

    Graph gDFS(4);
    gDFS.addEdge(0, 1);
    gDFS.addEdge(0, 2);
    gDFS.addEdge(1, 2);
    gDFS.addEdge(2, 0);
    gDFS.addEdge(2, 3);
    gDFS.addEdge(3, 3);

    cout << "Depth First Traversal (starting from vertex 2): ";
    gDFS.DFS(2);
    cout << endl;

    Graph gBFS(4);
    gBFS.addEdge(0, 1);
    gBFS.addEdge(0, 2);
    gBFS.addEdge(1, 2);
    gBFS.addEdge(2, 0);
    gBFS.addEdge(2, 3);
    gBFS.addEdge(3, 3);

    cout << "Breadth First Traversal (starting from vertex 2): ";
    gBFS.BFS(2);
    cout << endl;

    return 0;
}

