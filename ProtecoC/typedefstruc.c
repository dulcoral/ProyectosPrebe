#include <stdio.h>

typedef struct persona {
   char nombre[20];
   int edad;
 }P;
 
 int main(){
    struct persona persona1 = {"Erick",20};
    P persona2 = {"Erick",22};
    
    printf("Su nombre es: %s", persona1.nombre);
    printf("Su nombre es: %i", persona1.edad);
    
 }   
