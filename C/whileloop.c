#include <stdio.h>
int main()
{
    char name[100];
    int i = 1;
    int n;
    printf("Enter your name (Don't use space): ");
    scanf("%s", name);
    printf("Enter how many times you want to print hello?: ");
    scanf("%d", &n);

    while(i<=n)
    {
        printf("Hello %s\n", name);
        i++;
    }
}