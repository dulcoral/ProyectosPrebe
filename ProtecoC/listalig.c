#include <stdio.h>
#include <stdint.h>
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

typedef struct List {
    void (*listWorking)();
    void (*createList)();
    void (*destroyList)();
    void (*addNode)();
}list_t;

//funcion
bool listWorking ();
static inline head_t *createList();
void addNode (head_t **head);
void destroyList (head_t *head);
list_t *constructor();

int32_t main(void){
   list_t *objeto = constructor ();
   objeto->listWorking();
   
   free (objeto);
   return (!listWorking()) ? EXIT_SUCCESS : EXIT_FAILURE;

}

list_t *constructor(){
   list_t *newObject = (list_t*)calloc(1,sizeof(list_t));
   
   newObject->listWorking= listWorking;
   newObject->addNode= addNode;
   newObject->destroyList = destroyList;
   newObject->createList = createList;

}
bool listWorking () {
   head_t *head = createList();
   for(int_fast32_t i = 0; i < 10; i++)
     addNode(&head);
     
   printf("La lista tiene %d nodos \n\n", head->size);
}

static inline head_t *createList(){
   return (head_t*) calloc (1,sizeof(head_t));
}

void addNode(head_t **head){
   node_t *newNode = (node_t*)calloc(1,sizeof(node_t));
   (*head)->size++;
   
   if (!(*head)->begin){
       (*head)->tail = newNode;
       (*head)->begin = (*head)->tail;
   } else{
     (*head)->tail->next = newNode;
     (*head)->tail = (*head)->tail->next;
   
   }
}

void destroyList (head_t *head){
   node_t *aux = head->begin, *tmp;
   
 while (aux){  //for(;(aux);) 
     tmp = aux;
     aux = aux->next;
     free(tmp);
   }
  free(head);
}
