#include <stdio.h>

int main(){
    int *ptr, a;
    a = 10;
    ptr = &a;

    printf("%p", ptr);
}