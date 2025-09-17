# <img src=../../../../images/computer.png width="40"> Code, Learn & Practice(Programación de Servicios y Procesos: "Concurrencia, procesos e hilos")

## Bloque 1: Conceptos básicos (introducción a php)

### Variables y Condicionales

1. **Mayor de dos números**  
   Pide dos números y muestra cuál es mayor o si son iguales.  

    ```php
    <?php
    $num1 = readline("Introduce el primer número: ");
    $num2 = readline("Introduce el segundo número: ");

    $resutTxt = "Los numeros $num1 y $num2 son iguales\n";

    if ($num1 < $num2) {
        $resutTxt = "El numero mayor es $num2\n";
    } elseif ($num1 > $num2) {
        $resutTxt = "El numero mayor es $num1\n";
    }

    echo $resutTxt

    ?>
    ```

2. **Edad permitida**  
   Pide la edad de una persona y muestra:  
   - `"Eres menor de edad"` si es < 18.  
   - `"Eres mayor de edad"` si es ≥ 18.

    ```php
    <?php
    $edad = readline("Cuantos años tienes? ");

    if ($edad < 18) {
        echo "Eres menor de edad\n";
    } else {
        echo "Eres mayor de edad\n";
    }
    ?>
    ```
