#include <stdio.h>
int main(){
int a = 10;
int *ptr;
int ptr = &a;
printf("The address of a = %d is %p", a,ptr);
return 0;
}
