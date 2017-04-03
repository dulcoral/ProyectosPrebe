#include <stdio.h>
#include <stdlib.h>
#include <string.h>

//creamos una union 
union frases { //se guardan en el mismo espacio de memoria
    char frases [50];
    char ayudas [50];
    char lineas [50];
}palabra;

//creamos una estructura

struct comparte{
   char mensaje [50];
   char ayudas [50];
   char lineas [50];
  }Sistema;
  
int main(){
strcpy (palabra.frases,"Primer Mensaje");
sprcpy (palabra.ayudas,"Una ayuda");

printf("\n1- %s",palabra.frases);
printf("\n2- %s",palabra.ayudas);

strcpy(Sistema.mensaje, "Primer mensaje");
strcpy(Sistema.ayudas, "Una Ayuda");

printf("\n\n Frases en Struct");
printf("\n1- %s",Sistema.mensaje);
printf("\n2- %s",Sistema.ayudas);

return 0;
}
