#include <stdio.h>
#pragma pack(1)
union Var{
    int x;
    char a[10];
};
#pragma pack()
int main(){
    union Var var;
    var.x = 12;
    var.a[0] = 10;
    printf("%d\n", var.x);
    printf("%d\n", var.a[0]);
    printf("memory size of union is: %lu", sizeof(union Var));
}