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
    <?php

    for ($num = 2; $num <= 50; $num++) {
        $primo = true;
        $divisor = 2;

        while ($divisor * $divisor <= $num && $primo) {
            if ($num % $divisor == 0) {
                $primo = false;
            }
            $divisor++;
        }

        if ($primo) {
            echo "$num ";
        }
    }

    echo "\n";

    ?>>
    ```

12. **Fibonacci**  
    Genera los primeros 20 términos de la secuencia de Fibonacci.

    ```php
    <?php
    $prev = 0;
    $current = 1;

    for($i = 1; $i <= 20; $i++) {
        if ($i == 1) {
            echo "$prev ";
        }elseif ($i == 2) {
            echo "$current ";
        }else {
            $next = $prev + $current;
            echo "$next ";
            $prev = $current;
            $current = $next;
        }
    }

    echo "\n";
    ?>
    ```
13. **Múltiplos de un número**  
    Pide un número `n` y muestra sus múltiplos hasta 100.  

    ```php
    <?php

    $num = readline("Escribe un numero ");

    for ($i = 0; $i *$num <= 100; $i++) {
        $multiplo = $i* $num;
        echo "$multiplo ";
    }

    echo "\n";
    ?>
    ```

14. **Suma de pares e impares**  
    Calcula la suma de los números pares e impares entre 1 y 100 por separado.  

    ```php
    <?php

    $sumPar = 0;
    $sumImpr = 0;

    for($i = 0; $i <= 100; $i++) {
        if($i % 2 == 0) {
            $sumPar = $sumPar + $i;
        }else {
            $sumImpr = $sumImpr + $i;
        }
    }
    echo "La suma de los numeros pares es $sumPar\n";
    echo "La suma de los numeros inpares es $sumImpr\n";
    ?>
    ```
15. **Adivinar número**  
    Genera un número aleatorio entre 1 y 20.  
    Pide al usuario que lo adivine y usa un bucle con condicionales para dar pistas: `"Mayor"` o `"Menor"`.  

    ```php
    <?php
    $numRand = rand(1, 20);

    do {
        $intento = readline("Introduce tu número: ");

        if ($intento < $numRand) {
            echo "Mayor\n";
        } elseif ($intento > $numRand) {
            echo "Menor\n";
        } else {
            echo "¡Correcto! El número era $numRand\n";
        }

    } while ($intento != $numRand);
    ?>
    ```

---

### Construcción de Algorítmicos

16. **Número perfecto**  
    Comprueba si un número es perfecto (la suma de sus divisores propios es igual al número).  

    ```php
    <?php

    $num = readline("Introduce un numero: ");

    $sum = 0;
    for ($i = 1; $i < $num; $i++) {
        if ($num % $i == 0) {
            $sum += $i;
        }
    }

    if ($sum == $num) {
        echo "El $num es un numero perfecto\n";
    } else {
        echo "El $num no es un numero perfecto\n";
    }
    ?>
    ```

17. **Invertir número**  
    Escribe un algoritmo que invierta los dígitos de un número (ejemplo: `123 → 321`).

    ```php
    <?php

    $num = readline("Introduce un numero: ");
    $invertido = 0;

    while ($num > 0) {
        $digito = $num % 10;
        $invertido = $invertido * 10 + $digito;
        $num = (int) ($num / 10);
    }

    echo "Numero invertido: $invertido\n";
    ?>
    ```

18. **Palíndromo**  
    Comprueba si una palabra almacenada en una variable es palíndroma.  

    ```php
    <?php

    $palabra = readline("Introduce una palabra: ");
    $longitud = strlen($palabra) - 1;
    $esPalindromo = true;

    for ($i = 0; $i < $longitud / 2; $i++) {
        if ($palabra[$i] != $palabra[$longitud - $i]) {
            $esPalindromo = false;
            break;
        }
    }

    if ($esPalindromo) {
        echo "La palabra '$palabra' es un palindromo\n";
    } else {
        echo "La palabra '$palabra' no es un palindromo\n";
    }
    ?>
    ```
19. **Máximo común divisor (MCD)**  
    Escribe un algoritmo que calcule el MCD de dos números.  

    ```php
    <?php

    $num1 = readline("Escribe un numero ");
    $num2 = readline("Escribe un numero ");

    $menor = min($num1, $num2);
    $mcd = 1;

    for($i = 1; $i <= $menor; $i++) {
        if($num1 % $i == 0 && $num2 % $i == 0) {
            $mcd = $i;
        }
    }

    echo "El MCD de $num1 y $num2 es $mcd\n";
    ?>
    ```

20. **Triángulo de asteriscos**  
    Muestra en pantalla un triángulo de altura `n` usando `*`.  
    Ejemplo con `n = 5`:  

    ```bash
    *
    **
    ***
    ****
    *****
    ```

    ```php
    <?php

    $n = readline("Introduce la altura del triangulo: ");

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "\n";
    }
    ?>
    ```

---
