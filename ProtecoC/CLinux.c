#include <stdio.h>
#include <stdint.h>
#include <stdlib.h>
#include <signal.h> 


_Noreturn void except ();
void violacion(int sig);



int main(void){
  int32_t *apuntador = NULL;
  signal(SIGSEGV,violacion);
  printf("%d\n" ,*apuntador); //No desreferenciar a null
  
  return 0x1;
}

int violacion(int sig){
       except();
}
_Noreturn void except(){
     printf(" Me voy a morir" );
     exit(0);

}
