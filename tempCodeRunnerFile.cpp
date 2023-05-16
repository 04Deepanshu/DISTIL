#include <iostream>
#include <vector>

using namespace std;

int n, m; // size of the game board
vector<vector<int>> board; // the game board

// function to check if a cell is safe or not
bool isSafe(int x, int y) {
    for (int i = -1; i <= 1; i++) {
        for (int j = -1; j <= 1; j++) {
            if (x+i >= 0 && x+i < n && y+j >= 0 && y+j < m) {
                if (board[x+i][y+j] != 0) {
                    return false;
                }
            }
        }
    }
    return true;
}

// function to count the number of safe zones
int countSafeZones() {
    int count = 0;
    for (int i = 0; i < n; i++) {
        for (int j = 0; j < m; j++) {
            if (board[i][j] == 1 && isSafe(i, j)) {
                count++;
            }
        }
    }
    return count;
}

int main() {
    cin >> n >> m;
    board.resize(n, vector<int>(m));
    for (int i = 0; i < n; i++) {
        for (int j = 0; j < m; j++) {
            cin >> board[i][j];
        }
    }
    cout << countSafeZones() << endl;
    return 0;
}
