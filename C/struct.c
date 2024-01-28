#include <stdio.h>
struct Var{
    int x,y;
};

int main(){
    struct Var var;
    var.x = 12;
    var.y = 13;

    printf("var.x is: %d\n", var.x);
    printf("var.y is: %d\n", var.y);

    printf("%lu", sizeof(var));
}