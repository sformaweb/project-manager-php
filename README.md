## Notas e consideracións

* Vaise realizar unha aplicación web de xestión de proxectos usando phpGrid seguindo o titorial seguinte: https://www.freecodecamp.org/news/build-a-simple-project-management-application-from-scratch-in-php-5c0f886d8560/
* Primeiro, creamos o cartafol do proxecto ao que chamamos *management-app-php*. 
* Creamos a BBDD dende phpMyadmin manualmente. Abrimos o menú SQL e copiamos o código deste repositorio para crear as táboas: https://github.com/phpcontrols/phpgrid-project-management/tree/master/db
* Para cambiar os estilos das táboas, hai que modificar o arquivo ui.jqgrid.css dentro de phpGrid.
* Para o arquivo index.php utilizouse un CDN de Bootstrap para o estilo e para as demáis páxinas, o arquivo styles.css por defecto.
* O head, o menú e o footer incorpóranse ás páxinas como compoñentes php co obxectivo de aforrar código.
* A aplicación permite acceder como xestor ou como empregado, e a información que mostra (organizada en táboas) é diferente nos dous apartados.

  * **Inicio de sesión como xestor**: Mostra unha táboa de clientes e outra de proxectos que permite cambiar o estado de cada un.
  * **Inicio de sesión como empregado**: Mostra unha táboa coas tareas pendentes e o estado de cada unha, xunto con outra información ao respecto como a distribución de horas.




### Implementación dun _login_

* Creamos unha pola chamada "login" en github para traballar sobre unha bifurcación do proxecto.

* Creamos un arquivos php para cada caso (para o inicio de sesión como manager e como empregado) e outro para o logout.

* No arquivo index.php enlázase aos distintos inicios de sesión como manager e empregado respectivamente. Nestes arquivos de login asignase usuario e contrasinal para cada un:

  * Manager: manager, 1234
  * Empregado: employee, 1234

  Tamén se debe enlazar a respectiva páxina á que debe redirixir cada unha cando se inicia sesión (clients.php e tasks.php).

* Engádese na parte superior das páxinas de clients.php e tasks.php o código que usamos en sesiones1-principal.php no proxecto inicio-sesion e engádese unha ligazón na palabra "salir" ao arquivo de sesiones1-logout.php.

* No arquivo de logout engádese a ligazón ao index.php.