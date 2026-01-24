<script setup>
import { Button } from '@/components/ui/button';
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card';
import AppLayout from '@/layouts/app/AppHeaderLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { computed } from 'vue';


const breadcrumbs = [
    {
        title: 'Solicitantes',
        href: '/solicitantes',
    },

    {
        title: 'Politica de pagos',
        href: '/#',
    },
];


</script>

<template>

    <Head title="Politica de pagos" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="mx-auto max-w-6xl px-4 py-6 space-y-8">

            <!-- TÍTULO -->
            <div class="space-y-2">
                <h1 class="text-3xl font-bold text-slate-900 dark:text-white">
                    Politica de pagos
                </h1>

            </div>

            <!-- DESCRIPCIÓN -->
            <div class="border-t pt-8 flex justify-center">
                <p class="
            whitespace-pre-line
            text-base
            sm:text-lg
            leading-7
            sm:leading-8
            text-slate-700
            dark:text-slate-200
            max-w-4xl
            tracking-wide
            text-justify
        ">
                    1.- Titularidad del sitio web. <br><br>

                    Tabasco, Mexico. <br><br>

                    Correo electrónico info@donadorrapido.com.mx  <br><br>

                    DonadorRapido es un portal de hosting de páginas web gratuitas, dejamos publicar 3 perfiles o
                    páginas por cuenta o teléfono, los usuarios tienen la posibilidad de hacer pagos para promocionar tu
                    perfil. <br>

                    Dentro de las posibilidades de pago tenemos productos diferenciados, por nivel de urgencia:
                    prioridad, urgente y muy urgente. <br>

                    Tanto un producto como otro lo que hace es subir su página web al top en diferentes espacios de
                    minutos / horas y días. <br><br>

                    ¿Qué es el “muy urgente” en donador rápido? <br>

                    Es un grupo de páginas web de carácter personal que rota por encima de las páginas web de carácter
                    personal gratis, rotan cada segundo dentro de un estado o municipio unidos a su categoría. <br>

                    Un página web de carácter personal puede entrar en top por diferentes intervalos de tiempo por
                    periodos de 8, 12, 16 o 24 horas por 7, 15 o 30 días en los muy urgentes. <br> <br>

                    La activación de perfiles<br>

                    En el sitio puede publicar 3 perfiles o páginas personales por cuenta (teléfono / email ) de forma
                    gratuita, si quiere crear otras puede hacerlo pero tiene un costo según tabla, con ello a parte de
                    activar su perfil subirá el top por 15 minutos<br>


                    México<br>
                    150 créditos<br>
                    150 MXN<br> <br>


                    Posiciones Prioritarias<br>

                    Los paquetes “Muy urgente” suben tu página web de carácter personal al top por unas horas
                    determinadas en unos días determinados. <br> <br>

                    TOP <br>

                    Los hay 8, 12, 16 y 24 horas por 7, 15 y 30 días, si el TOP no es 24 horas el sistema le pedirá una
                    hora de inicio, es decir si contrata un top 8 horas por 7 días y marca como inicio las 10 de la
                    mañana , su página web subirá por 7 días de 10 de la mañana a 6 de la tarde. <br><br>

                    DESTACADOS <br><br>

                    Las páginas web destacados no son top ni suben, solo cambian el fondo de su página web en los
                    listados para que se vean en amarillo, si usted no va a subir su página web destacado manualmente o
                    convertirlo en top, no contrate esta opción. <br> <br>

                    Tarifas PREMIUM <br>


                    MÉXICO
                    TOP 7 DÍAS
                    8 HORAS
                    310 MXN

                    12 HORAS
                    400 MXN

                    16 HORAS
                    470 MXN

                    24 HORAS
                    540 MXN
                    TOP 15 DÍAS
                    8 HORAS
                    510 MXN

                    12 HORAS
                    640 MXN

                    16 HORAS
                    810 MXN

                    24 HORAS
                    960 MXN
                    TOP 30 DÍAS
                    8 HORAS
                    790 MXN

                    12 HORAS
                    1030 MXN

                    16 HORAS
                    1260 MXN

                    24 HORAS
                    1570 MXN
                    DESTACADO
                    15 DÍAS
                    150 MXN

                    30 DÍAS
                    220 MXN <br><br>

                    Impuesto Indirecto Añadido<br>
                    Todos los precios tienen el impuesto añadido indirecto incluido, el mismo será aplicado según el
                    territorio de méxico donde sea contratado el perfil.<br><br>
                    Entrega y envío <br>
                    En donador rápido las opciones prioritarias pagadas por tarjeta se activan de inmediato, no tienen
                    envío.<br>
                    En los pagos en efectivo o por transferencia, una vez abonado el importe tiene que responder al
                    email de pago con la foto de su pago. Una vez lo recibamos, podemos tardar de 30 minutos a 2 horas
                    en procesar su pago siempre que lo envíe en horario de atención a pagos, de 9 am a 11 PM, hora de
                    ciudad de méxico. <br>
                    Si usted ha efectuado un pago con su tarjeta y no se ha activado de inmediato, contacte a través del
                    formulario de la web, clicando en la opción contactar y en el desplegable, eligiendo la opción
                    "Problemas con mi pago." <br>
                    No es común, pero a veces la conexión entre servidores puede fallar, una vez verifiquemos que
                    efectivamente ha realizado el pago pondremos de forma manual su página web.<br><br>
                    Pagos recurrentes
                    No tenemos pagos recurrentes, no almacenamos su tarjeta de crédito, usamos una empresa externa para
                    procesar los pagos, cada vez que usted quiera pagar tendrá que poner los datos de su tarjeta. <br><br>

                    Política de devoluciones<br>

                    Una vez contratado una opción de pago prémium, tiene un perdido de 24 horas para solicitar la
                    devolución de su dinero íntegro. Excepción a esta cláusula, se permite una devolución por usuario,
                    no es posible contratar de forma habitual servicios de pago y devolverlos pasadas unas horas.
                    Pasadas 24 h como producto digital no aceptamos devolución alguna. <br>
                    Si aceptamos su devolución, se devolverá en la misma tarjeta donde efectuó el pago, una vez
                    procesada tardará entre 7 y 30 días hábiles dependiendo de la entidad bancaria y el proveedor de
                    pagos, la devolución será notificada por email enviando captura de la misma, el plazo de verla en
                    cuenta no depende de nosotros. <br>

                    Si usted es expulsado por extorsión, estafa o por publicar datos de un tercero o incumplir cualquier
                    norma del portal, no será reintegrado.<br>


                    Si usted es bloqueado por no entregar el documento que acredite su mayoría de edad, no será
                    reintegrado, ya que tiene 3 anuncios de prueba para poder hacer buen uso del portal, habiendo
                    publicado 3 anuncios correctamente, ya conoce las normas de edad y verificación de perfiles.<br>

                    Si usted publica una página y nosotros la borramos por qué no cumple las políticas de uso del
                    portal, a excepción fotos robadas, estafa y extorsión, se le devolverá íntegramente el precio
                    abonado o la parte proporcional no disfrutada si han pasado 24h. <br> <br>

                    Política de fraude en pagos <br> <br>

                    Si detectamos fraude en pagos, tanto sea en transferencia como con tarjeta bancaria de débito o
                    crédito, será expulsado del portal de forma indefinida. <br> <br>

                    Disputas o problemas en pagos<br> 
                    Para cualquier problema, disputa u otro en pagos tiene un botón en el footer de toda la web con el
                    nombre contactar, dentro de este una opción que pone problemas con mi pago.
                    Última modificación 13 de enero de 2026. <br><br>

                    Protección de datos <br><br>

                    Puede leer nuestra política de protección de datos que es igual para toda la web en este link


                </p>
            </div>

        </div>



    </AppLayout>
</template>
