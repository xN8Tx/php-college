#include <stdio.h>
#include <locale.h>
#include "fish.h"

int main() 
{
    setlocale(LC_ALL, "Russian");
    struct fish snappy = {
        "Зубастик",
        "пиранья",
        69,
        5
    };
    catalog(snappy);
    return 0;
}

