#include <stdio.h>

int func(int a){
    if(a < 0){
        return 1;
    } else {
        return a*func(a - 2);
    }
}

int main(){
    printf("%d\n", func(5));
}