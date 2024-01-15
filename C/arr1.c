#include <stdio.h>
int main(){
    int a[] = {1,2,3,4,43434,{4,6,7}};
    int arr_len = sizeof(a) / sizeof(a[0]);
    for(int i = 0; i < arr_len; i++){
         printf("Array: %d\n", a[i]);
    }
   
}