#include <stdio.h>
union var{
    int x,y;
};

int main(){
    union var variable;
    variable.x = 100;
    variable.y = 1;

    printf("%d\n", variable.x);
    printf("%lu", sizeof(variable));
}