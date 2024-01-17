#include <stdio.h>
#include <stdlib.h>

int main(){
    char str[1];
    int x;

    printf("Enter the value of x: ");
    scanf("%d", &x);
    printf("%d\n", x);
    sprintf(str, "%d", x);

    printf("The value of x (in string) is: %s", str);
}