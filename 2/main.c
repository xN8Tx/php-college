#include <stdio.h>
#include <locale.h>

void go_south_east(int *lat, int *lon) {
    *lat = *lat - 1;
    *lon = *lon - 1;
}

int main(int argc, char *argv[]) {
    setlocale(LC_ALL, "Rus");
    
    int latitude = 32;
    int longitude = -64;

    go_south_east(&latitude, &longitude);

    printf("Стоп теперь наши кординаты: [%i, %i]\n", latitude, longitude);
    return 0;
}