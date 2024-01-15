#include <stdio.h>
int main(){
    int i;
    char a[5];

    for(i = 0; i<5; i++){
        scanf("%c", a);
    }

    for(i = 0; i<5; i++){
        printf("%s", &a[i]);
    }
}