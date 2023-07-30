#include <stdio.h>
int main()
{
    char name[100];
    int i,n;
    printf("Enter your name (Don't use space): ");
    scanf("%s", name);
    printf("How many times you want me to print hello?: ");
    scanf("%d", &n);

    for (i=1; i<=n; i++)
    {
        printf("Hello %s\n", name);
    }


}