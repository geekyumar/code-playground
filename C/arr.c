#include <stdio.h>
#include <stdlib.h>

int main(){
    int i,j;
    int nums[] = {2,5,7,9};
    int target = 7;
    for (i=0; i<sizeof(nums)/sizeof(nums[0]); i++)
    {
        for (j=0;j<sizeof(nums)/sizeof(nums[0]);j++)
        {
            if(nums[i] + nums[j] == target)
            {
                printf("[%d,%d]",i,j);
                exit(0);
            }
        }
    } 
}