//Bitwise operators

#include <stdio.h>
int a=2,b=4;
int main()
{
    printf("Bitwise and: %d", a&b);
    printf("\nBitwise or: %d", a|b);
    printf("\nBitwise xor: %d", a^b);

    //left and right shifts

    printf("\nLeft shift: %d", a<<2);
    printf("\nRight shift: %d", b>>2);
}

