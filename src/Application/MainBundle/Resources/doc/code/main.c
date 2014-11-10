#include <stdio.h>
#include <stdlib.h>

#define MESSAGE "Hello World!"

/* displayMessage */
void displayMessage(char* msg) {

    printf("%s\n", msg);
}
/* end displayMessage */

int main(int argc, char** argv) {

    displayMessage(MESSAGE);

    return EXIT_SUCCESS;
}
