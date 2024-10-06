


#include <iostream>
using namespace std;

void center(int n) {
    for (int i = 1; i <= n; i++) {
        for (int j = 1; j <= n - i; j++) {
            cout << " ";
        }

     
        for (int j = 1; j <= 2 * i - 1; j++) {
            cout << "*";
        }

        cout << "\n";
    }
}

int main() {
    int n = 5; 
    center(n);
    return 0;
}
