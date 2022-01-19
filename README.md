## Notas e consideracións

* Vaise realizar unha aplicación web de xestión de proxectos usando phpGrid seguindo o titorial seguinte: https://www.freecodecamp.org/news/build-a-simple-project-management-application-from-scratch-in-php-5c0f886d8560/

* Primeiro, creamos o cartafol do proxecto ao que chamamos *management-app-php*. 

* Creamos a BBDD dende phpMyadmin manualmente. Abrimos o menú SQL e copiamos o código deste repositorio: https://github.com/phpcontrols/phpgrid-project-management/tree/master/db

* Para cambiar os estilos das táboas, hai que modificar o arquivo ui.jqgrid.css dentro de phpGrid.

* Para o arquivo index.php utilizouse un CDN de Bootstrap para o estilo e para as demáis páxinas, o arquivo styles.css por defecto.

* O head, o menú e o footer incorpóranse ás páxinas como compoñentes php co obxectivo de aforrar código.

* A aplicación permite acceder como xestor ou como empregado, e a información que mostra (organizada en táboas) é diferente nos dous apartados.

  * **Inicio de sesión como xestor**: Mostra unha táboa de clientes e outra de proxectos que permite cambiar o estado de cada un.
  * **Inicio de sesión como empregado**: Mostra unha táboa coas tareas pendentes e o estado de cada unha, xunto con outra información ao respecto como a distribución de horas.

  

  