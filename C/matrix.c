#include <stdio.h>
int main(){
    int matrix[3][3];
    int i,j;

    for(i = 0; i<3; i++){
        for (j = 0; j<3; j++){
            printf("Enter the 3x3 matrix values: ");
            scanf("%d", &matrix[i][j]);
        }
    }

    // Original matrix

    printf("Original Matrix: \n\n");

    for(i = 0; i<3; i++){
        for(j = 0; j<3; j++){
            printf("%d\t", matrix[i][j]);
        }
        printf("\n\n");
    }

    // Transposed matrix

    printf("Transposed matrix: \n\n");

    for(i = 0; i<3; i++){
        for(j = 0; j<3; j++){
              printf("%d\t", matrix[j][i]);
        }
        printf("\n\n");
    }
}