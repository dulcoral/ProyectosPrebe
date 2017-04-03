#include <stdio.h>

int main (){
    int (*apunta_funcion)();
    apunta_funcion = &main;
    printf("hola");
    apunta_funcion ();

}
