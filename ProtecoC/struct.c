#include <stdio.h>
struct persona {
  char nombre[20];
  int edad;
}personas[5];

/*
struct persona{
  char nombre[20];
  int edad;
}persona1,persona2;
gets(persona1.nombre);
printf(" su nombre es: %s", persona1.nombre);

*/

int main (){
   int i;
   for (i=0; i<5 ; i++){
     getchar();
     printf("Persona %i. Ingresa tu nombre: ", i+1);
     gets(personas[i+1].nombre);
     printf("Persona %i. Digita tu edad: ", i+1);
     scanf ("%i", &personas[i+1].edad);
     printf("\n");
   }
   
for (i=0; i<5 ; i++){
     printf("El nombre de la persona %i es: %s ", i+1,personas[i+1].nombre);
     printf("La edad de la persona %i es: %i", i+1,personas[i+1].edad);
     printf("\n\n");
   
   }   

return 0;
}
