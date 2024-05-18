#include <stdio.h>
 double crystalTienDien(int soKWh) {
 	double pay;
 	if (soKWh<=50){
 		pay = soKWh *500 ;
	 }
	 else if(soKWh<=100){
	 	pay = 50 * 500 + (soKWh-50) * 700;
	 }
	 else{
	 	pay = 50 * 500 + 50 *700 + (soKWh-100) * 900;
	 }
	 return pay;
 }
 int main(){
 	int KWhA=30,KWhB=80,KWhC=120;
 	printf("Electricity bill for %d kWh: %.2f VND\n", KWhA, crystalTienDien(KWhA));
    printf("Electricity bill for %d kWh: %.2f VND\n", KWhB, crystalTienDien(KWhB));
    printf("Electricity bill for %d kWh: %.2f VND\n", KWhC, crystalTienDien(KWhC));

    return 0;
 }
