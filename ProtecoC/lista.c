#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <stdbool.h>

typedef struct Node {
    void *data;
    struct Node *next;
}node_t;

typedef struct Head {
   int32_t size;
   node_t *begin;
   node_t *tail;
}head_t;

int main(void){
    head_t *init = (head_t*)calloc(1,sizeof(head_t));
    node_t *first =(node_t*)calloc(1,sizeof(node_t));
    node_t *second =(node_t*)calloc(1,sizeof(node_t));
    
    
    init->begin = first;
    init->begin->data = (char*)calloc(20,sizeof(char));
    scanf("%s",(char*)init->begin->data);
    init->size++;
    init->begin->next = second;
    init->begin->next->data = (char*)calloc(20,sizeof(char));
    scanf("%s",(char*)init->begin->next->data);
    
    printf("La cadena en el nodo 2: %s\n",(char*)init->begin->next->data);
    
    printf("La cadena en el nodo 1: %s\n",(char*)init->begin->data);
    
    free (init->begin->next->data);
    free (second); //free(init->begin->next);
    free (init->begin->data);
    free (first);  //free(init->begin);
    free (init); //free(init);


}


