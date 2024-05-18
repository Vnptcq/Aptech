#include <stdio.h>
 
int main() {
	
	int n;
	int arr[n];
	printf("Please enter positive number of elements in the array: ");
	
	scanf("%d", &n);
	
	printf("Enter %d elements of the array: \n",n);
	
	for(int i = 0; i < n; i++) {
		scanf("%d", &arr[i]);
		
    }
    
 
	int smallest = arr[0];
    
	//The smallest positive number in the array
	for(int i = 1; i < n; i++) {
    	if(arr[i] < smallest ) 
        smallest = arr[i];
	}
	if (smallest>0){
    
	printf("The smallest positive number in the array is: %d", smallest);   
	
	}else{
		printf("Please enter positive number");
	}
	
    
	return 0;
}


