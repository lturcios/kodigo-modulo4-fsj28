# ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white) Ejercicios Módulo 4 (PHP) - Bootcamp FSJ28

Este repositorio contiene una colección de ejercicios desarrollados en PHP como parte del Bootcamp.
Cada script resuelve un problema específico mediante estructuras de control, algoritmos y buenas prácticas de programación.
El objetivo principal es reforzar el uso de algoritmos de ordenamiento, búsqueda, funciones y resolución de problemas lógicos mediante estos ejercicios prácticos.

---

### 01 - Height Checker

Script en PHP que compara la estatura actual de un grupo de estudiantes con un arreglo ordenado de referencia, con el objetivo de determinar cuántos no están en la posición que les corresponde según su altura.

**Flujo del script:**

1. Define un arreglo de entrada con varias sublistas, cada una representando una lista de alturas en desorden.
2. Recorre cada una de estas sublistas (casos de prueba).
3. Para cada caso:
   - Crea una copia ordenada del arreglo original.
   - Compara cada elemento de la lista original con la lista ordenada.
   - Cuenta cuántas alturas están en una posición diferente respecto al arreglo ordenado.
4. Imprime el resultado para cada caso, indicando la cantidad de estudiantes que no están en la posición que les corresponde por su estatura.

**Archivo fuente:** [`01-height-checker.php`](./01-height-checker.php)

---

### 02 - Sorting Insertion

Script en PHP que implementa el algoritmo de ordenamiento **por inserción** sobre diferentes casos de prueba.

**Flujo del script:**

1. Define un arreglo de entrada con varias sublistas, cada una representando una lista de números desordenados.
2. Recorre cada sublista y aplica el algoritmo de ordenamiento por inserción:
   - Compara el elemento actual con los anteriores.
   - Desplaza los elementos mayores hacia la derecha.
   - Inserta el elemento actual en su posición correcta.
3. Imprime en consola el arreglo ordenado correspondiente a cada caso de prueba.

**Archivo fuente:** [`02-sorting-insertion.php`](./02-sorting-insertion.php)

---

### 03 - Binary Search

Script en PHP que implementa el algoritmo de **búsqueda binaria** para encontrar la posición de un número objetivo dentro de un arreglo ordenado.

**Flujo del script:**

1. Define un arreglo con varios conjuntos de prueba, cada uno conteniendo:
   - Un arreglo ordenado de números.
   - Un número objetivo a buscar.
2. Recorre cada conjunto de prueba.
3. Para cada uno:
   - Aplica el algoritmo de búsqueda binaria:
     - Establece índices de inicio y fin.
     - Calcula el punto medio del arreglo.
     - Compara el número del punto medio con el objetivo.
     - Ajusta los índices según el resultado de la comparación.
   - Repite hasta encontrar el número o agotar las posiciones.
4. Imprime el índice donde se encontró el número, o `-1` si no existe en el arreglo.

**Archivo fuente:** [`03-binary-search.php`](./03-binary-search.php)

---

### 04 - Happy Number

Script en PHP que determina si un número es un **número feliz** según la secuencia de la suma de los cuadrados de sus dígitos.

**Flujo del script:**

1. Define una función auxiliar que:
   - Convierte un número en una cadena de dígitos.
   - Eleva al cuadrado cada dígito y suma los resultados.
2. Define la función principal `isHappyNumber($n)` que:
   - Utiliza un arreglo para registrar números previamente vistos.
   - Repite el cálculo de la suma de cuadrados hasta que:
     - El número sea 1 (caso feliz), o
     - Se detecte un ciclo (número no feliz).
3. Declara una lista de números a evaluar.
4. Recorre cada número de la lista y:
   - Muestra si el número es feliz o no, con un mensaje personalizado.

**Archivo fuente:** [`04-happy-number.php`](./04-happy-number.php)

---

### 05 - Birthday Cake Candles

Script en PHP que analiza la altura de las velas en un pastel de cumpleaños y determina cuántas velas tienen la mayor altura.

**Flujo del script:**

1. Declara una función `cakeCandles($candelas)` que:
   - Calcula la vela más alta utilizando `max()`.
   - Recorre todas las velas y cuenta cuántas tienen esa altura.
   - Muestra la cantidad total de velas, sus alturas, la altura máxima y cuántas veces se repite.
2. Define un conjunto de pasteles, representados como arreglos de alturas de velas.
3. Recorre cada arreglo y:
   - Muestra las velas del pastel.
   - Llama a la función para mostrar los datos de análisis de cada pastel.

**Archivo fuente:** [`05-birthday-cake-candles.php`](./05-birthday-cake-candles.php)

---

### 06 - Strong Password

Script en PHP que evalúa la fortaleza de una contraseña y calcula cuántos caracteres adicionales se necesitan para que cumpla con los criterios mínimos de seguridad.

**Flujo del script:**

1. Declara una función `strongPasswordChecker($password)` que:
   - Verifica si la contraseña contiene al menos una minúscula, una mayúscula, un número y un carácter especial (`!@#$%^&*()-+`).
   - Calcula cuántos de estos tipos faltan.
   - Verifica si la longitud es menor a 6 caracteres.
   - Devuelve el número máximo entre tipos faltantes y caracteres necesarios por longitud.
2. Define una lista de contraseñas a evaluar.
3. Recorre cada una, muestra la contraseña y cuántos caracteres faltan para considerarla segura.

**Archivo fuente:** [`06-strong-password.php`](./06-strong-password.php)

---

### 07 - Mars Exploration

Script en PHP que analiza mensajes de una señal interplanetaria codificada en secuencias repetidas de `'SOS'`, y determina cuántos caracteres han sido alterados durante la transmisión.

**Flujo del script:**

1. Declara la función `marsExploration($sos)` que:
   - Recorre el mensaje carácter por carácter.
   - Verifica cada grupo de 3 caracteres contra el patrón `'SOS'`:
     - Espera `'S'` en posiciones índice 0 y 2 de cada trío.
     - Espera `'O'` en la posición índice 1.
   - Incrementa un contador cada vez que un carácter no coincide con el esperado.
2. Define una lista de señales de prueba.
3. Recorre cada señal y:
   - Muestra la cantidad de errores detectados en el mensaje.

**Archivo fuente:** [`07-mars-exploration.php`](./07-mars-exploration.php)

---

### 08 - Merge Sort

Script en PHP que implementa el algoritmo de **ordenamiento por mezcla (Merge Sort)**, utilizando recursividad y combinación ordenada de subarreglos.

**Flujo del script:**

1. Declara la función `mergeSort($arr)` que:
   - Verifica si el arreglo tiene un solo elemento (caso base).
   - Divide el arreglo en dos mitades.
   - Llama recursivamente a `mergeSort` sobre ambas mitades.
   - Combina ambas mitades ordenadas usando la función `combinar()`.
2. La función `combinar($izquierda, $derecha)`:
   - Recorre los dos subarreglos comparando elementos.
   - Inserta el menor en el arreglo resultado.
   - Añade los elementos restantes de cada mitad si los hay.
3. Define varios arreglos de prueba.
4. Recorre cada arreglo y:
   - Muestra el arreglo original.
   - Muestra el resultado ordenado.

**Archivo fuente:** [`08-merge-sort.php`](./08-merge-sort.php)

---

### 09 - Very Big Sum

Script en PHP que realiza la suma de números enteros muy grandes dentro de un arreglo, asegurando precisión en el resultado.

**Flujo del script:**

1. Declara una función `veryBigSum($ar)` que:
   - Inicializa una variable de suma en cero.
   - Recorre el arreglo sumando cada número a la variable acumuladora.
   - Devuelve el total.
2. Define varios arreglos con números grandes.
3. Recorre cada arreglo y:
   - Muestra los elementos del arreglo.
   - Muestra la suma total de sus elementos.

**Archivo fuente:** [`09-very-big-sum.php`](./09-very-big-sum.php)
