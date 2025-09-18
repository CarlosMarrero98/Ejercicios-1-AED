# Creación y uso de elementos básicos en php

## Bloque 1: Conceptos básicos (introducción a php)

### Variables y Condicionales

1. **Mayor de dos números**  
   Pide dos números y muestra cuál es mayor o si son iguales.  

    ```php
    <?php
    $num1 = readline("Introduce el primer número: ");
    $num2 = readline("Introduce el segundo número: ");

    $resultTxt = "Los numeros $num1 y $num2 son iguales\n";

    if ($num1 < $num2) {
        $resultTxt = "El numero mayor es $num2\n";
    } elseif ($num1 > $num2) {
        $resultTxt = "El numero mayor es $num1\n";
    }

    echo $resultTxt

    ?>
    ```

2. **Edad permitida**  
   Pide la edad de una persona y muestra:  
   - `"Eres menor de edad"` si es < 18.  
   - `"Eres mayor de edad"` si es ≥ 18.

    ```php
    <?php
    $age = readline("Cuantos años tienes? ");

    if ($age < 18) {
        echo "Eres menor de edad\n";
    } else {
        echo "Eres mayor de edad\n";
    }

    ?>
    ```

3. **Positivo, negativo o cero**  
   Comprueba si un número almacenado en una variable es positivo, negativo o cero.  

    ```php
    <?php

    $num = 12;

    $resultTxt = "El numero es cero\n";

    if ($num < 0) {
        $resultTxt = "El numero $num es negativo\n";
    }elseif ($num > 0) {
        $resultTxt = "El numero $num es positivo\n";
    }

    echo $resultTxt;

    ?>
    ```

4. **Nota final**  
   Pide la nota de un alumno y muestra:  
   - `"Suspenso"` (< 5), `"Aprobado"` (5–6), `"Notable"` (7–8), `"Sobresaliente"` (9–10).  

    ```php
    <?php

    $grade = readline("Cual fue su nota? ");

    if ($grade >= 9) {
        echo "Sobresaliente\n";
    } elseif ($grade >= 7) {
        echo "Notable\n";
    } elseif ($grade >= 5) {
        echo "Aprobado\n";
    } else {
        echo "Suspenso\n";
    }

    ?>
    ```

---

### Bucles (for, while, foreach)

5. **Contar del 1 al 100**  
   Muestra los números del 1 al 100 en pantalla.  

    ```php
    <?php

    for ($i = 1; $i <= 100; $i++) {
        echo "$i ";
    }

    echo "\n";

    ?>
    ```

6. **Suma acumulada**  
   Calcula la suma de los números del 1 al 50 usando un bucle.

   ```php
    <?php

    $sum = 0;

    for($i = 1; $i <= 50; $i++) {
        $sum += $i;
    }

    echo "$sum\n";

    ?>
    ```

7. **Tabla de multiplicar**  
   Pide un número y genera su tabla de multiplicar del 1 al 10.

    ```php
    <?php

    $num = readline("Pon un numero ");

    for($i = 1; $i <= 10; $i++) {
        $mult = $i * $num;
        echo "$i X $num = $mult\n";
    }

    ?>
    ```

8. **Números pares**  
   Muestra todos los números pares entre 1 y 50.  

    ```php
    <?php

    for($i = 0; $i <= 50; $i+=2) {
        echo "$i ";
    }

    echo "\n";

    ?>
    ```

9. **Cuenta atrás**  
   Haz un bucle que cuente de 10 a 1 y luego muestre `"¡Fin!"`.

   ```php
   <?php

    for($i = 10; $i > 0; $i--) {
        echo "$i\n";
    }

    echo "¡Fin!\n";

    ?>
    ```

10. **Factorial**  
    Calcula el factorial de un número introducido (ejemplo: `5! = 120`).  

    ```php
    <?php

    $num = readline("Escribe un numero ");
    $factorial = 1;

    for($i = $num; $i > 0; $i--) {
        $factorial *= $i;
    }

    echo "El factorial de $num es $factorial\n";
    ?>
    ```

---

### 3️⃣ Combinando Condicionales y Bucles

11. **Números primos**  
    Escribe un algoritmo que muestre los números primos entre 1 y 50.  

    ```php
