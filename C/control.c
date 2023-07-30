#include <stdio.h>
int main()
{
    int a;
    printf("Enter a number:");
    scanf("%d", &a);

    if(a>10)
    {
        printf("Value is greater than 10");
    }
    else if(a == 10)
    {
        printf("The value entered is 10");
    }
    else{
        printf("Value is smaller than 10");
    }
}