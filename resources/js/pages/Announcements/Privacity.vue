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
        title: 'Politica de privacidad',
        href: '/#',
    },
];


</script>

<template>

    <Head title="Politica de privacidad" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="mx-auto max-w-6xl px-4 py-6 space-y-8">

            <!-- TÍTULO -->
            <div class="space-y-2">
                <h1 class="text-3xl font-bold text-slate-900 dark:text-white">
                    Politica de privacidad
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
                    Donador Rapido <br><br>
                    Tabasco, Mexico <br><br>
                    Sitio web: donadorrapido.com.mx <br><br>

                    Correo electrónico info@donadorrapido.com.mx <br><br>

                    La empresa expuesta arriba, en adelante el “PROVEEDOR DE SERVICIOS”, es propietaria de este sitio
                    decontactos.com en adelante, el “SITIO WEB”. <br><br>

                    El PROVEEDOR DE SERVICIOS se compromete a asegurar que tus datos personales estén protegidos y no se
                    utilicen para finalidades distintas de las indicadas en la presente Política de Privacidad. Por esta
                    razón en este apartado informamos a los usuarios e interesados de todo lo concerniente al
                    tratamiento de sus datos personales dando así cumplimiento a la normativa de protección de datos
                    aplicable en nuestro país. <br> <br>

                    La presente Política de Privacidad es aplicable a los tratamientos de datos que el PROVEEDOR DE
                    SERVICIOS realiza a través del presente SITIO WEB y/o aquellos que se indiquen. Te recomendamos que
                    la leas con detenimiento antes de utilizar el presente Sitio Web o suministrar tus datos a través de
                    este. Puedes consultarnos cualquier duda al respecto a través del correo electrónico
                    info@dominio.com.mx <br><br>

                    Contenido de los anuncios y compensaciones. <br> 
                    El PROVEEDOR DE SERVICIOS no promueve, valida, supervisa ni participa en acuerdos, donaciones,
                    compensaciones económicas o de cualquier otra índole que puedan derivarse del contacto entre los
                    usuarios. <br>
                    Cualquier mención a gratificaciones, apoyos o compensaciones que figure en los anuncios publicados
                    es responsabilidad exclusiva del usuario que lo publica, realizándose cualquier interacción fuera de
                    la plataforma y bajo su propio riesgo. <br>
                    El PROVEEDOR DE SERVICIOS se reserva el derecho de eliminar anuncios que, a su criterio, puedan
                    vulnerar la legislación vigente o las normas del portal. <br>
                    El PROVEEDOR DE SERVICIOS actúa exclusivamente como una plataforma tecnológica de publicación y
                    contacto entre usuarios, sin intervenir, mediar ni participar en las relaciones que se generen entre
                    ellos, las cuales se realizan fuera del SITIO WEB y bajo la exclusiva responsabilidad de las partes
                    involucradas. <br><br>


                    ¿QUÉ REQUISITOS DEBES CUMPLIR PARA SUMINISTRARNOS TUS DATOS PERSONALES? <br>

                    Quedan prohibidas las ventas o comercio con la donacion. <br>

                    · Veracidad de datos: <br>

                    Cuando nos proporcionas tus datos para utilizar nuestros servicios, garantizas que los datos e
                    información facilitada es real, veraz, actualizada y además te pertenece a ti y no a terceras
                    personas. <br>

                    Además, deberás notificarnos cualquier modificación que se produzca en los datos facilitados,
                    respondiendo en cualquier caso de la veracidad y exactitud de los datos suministrados en cada
                    momento. <br>

                    El PROVEEDOR DE SERVICIOS se reserva el derecho de identificar mediante documento oficial a
                    cualquier USUARIO sobre el cual existiese sospechas sobre la veracidad de sus datos. <br><br>


                    TIPOLOGIA DE USUARIOS EN EL SITIO WEB <br>

                    Usuarios INVITADOS, los que acceden al SITIO WEB con el único fin de navegar y no rellenan ningún
                    formulario, en adelante USUARIOS INVITADOS. <br>

                    Usuarios que publican perfiles o una página web personal, con un fin contractual, en adelante
                    USUARIOS CONTRACTUALES. <br>

                    Usuarios que entran como INVITADOS, no publican perfiles, pero pueden usar un formulario de
                    contacto, en adelante OTROS USUARIOS. <br> <br>

                    ¿QUÉ TRATAMIENTOS DE DATOS REALIZAMOS A TRAVÉS DEL SITIO WEB Y CUÁLES SON SUS PRINCIPALES
                    CARACTERÍSTICAS? <br> 

                    Usuarios invitados <br>

                    En caso de que los datos correspondan a menores de edad, el PROVEEDOR DE SERVICIOS entiende que
                    dichos datos han sido proporcionados por el padre, madre o tutor legal, quien declara contar con la
                    patria potestad o representación legal suficiente y asume la total responsabilidad sobre el
                    consentimiento otorgado. <br>
                    El PROVEEDOR DE SERVICIOS no verifica la relación entre el menor y el tutor, limitándose a tratar
                    los datos conforme a la presente política. <br>
                    De los usuarios INVITADOS, no recabamos ningún dato de carácter personal, ni IP, ni hora de conexión
                    ni cualquier dato que le pudiera identificar. Pedimos autorización para poder utilizar Google
                    Analytics 4 y en caso de que se de no sea guardada por Google INC.<br><br>
                    
                    · Usuarios contractuales<br><br>

                    De los USUARIOS que publican perfiles o páginas web de carácter personal, recabamos varios datos
                    previo consentimiento explicito con un fin contractual, vamos a definir qué datos obtenemos y el fin
                    de ellos: <br> 

                    Al publicar una página web o perfil personal lo primero que se le pide es un email y un número de
                    teléfono, toda cuenta creada está relacionada con el email, a esta se puede asociar un número
                    telefónico para que le contacten. La finalidad es poder tener una cuenta de usuario. <br>

                    El email siempre va a ser un dato privado. <br>

                    Una vez hemos confirmado su email y su número de teléfono, podrá cambiar la contraseña en la opción
                    perfil, cambiar contraseña. <br>

                    Datos que serán públicos a la hora de publicar un perfil, provincia o estado, ciudad, barrio
                    distrito, categoría, los datos que ponga en los campos título y descripción,el número que registro,
                    será su número de contacto. <br>

                    En si todos estos datos públicos son la esencia por la que usa la web y por qué usted la usa, usted
                    usa esta web para crear un perfil o página web enfocada a una población, en la cual pone textos y
                    una forma de contacto para que le contacten. <br> 

                    Los datos que siempre serán privados, su IP, su hora de conexión, su cookie de usuario, su email,
                    las formas de contacto que no seleccione. <br>
                    La finalidad de estos datos es la gestión de la cuenta y poder la localización de la persona que
                    publica el perfil en caso de que hubiera obligación legal. <br>

                    Como USUARIO tiene la posibilidad de promocionar su perfil personal o página web, ello implica un
                    pago. En la web tenemos varias formas de pago desde bancarias o formas en efectivo. <br>

                    Si usa un medio de pago bancario, guardaremos su IP, su nombre, mascara de su tarjeta es decir los 6
                    primeros números y los últimos cuatro de esta forma 123456XXXXXX7890, no guardamos la fecha de
                    caducidad de la tarjeta ni el CVC. Estos datos se solicitan con la finalidad de promocionar con
                    tarjeta un perfil, estos datos siempre serán privados. <br>
                    En los pagos realizados mediante tarjeta bancaria, el PROVEEDOR DE SERVICIOS no tiene acceso a los
                    datos completos de la tarjeta, limitándose, en su caso, a recibir información parcial o anonimizada
                    proporcionada por la pasarela de pago (como una referencia o máscara), únicamente con fines de
                    comprobación contable.<br></br>
                    En ambos casos si el pago se entiende como realizado haremos una factura simplificada la cual
                    tenemos que guardar por el periodo que suficiente par cumplir la ley tributaria , estos datos
                    siempre serán privados. <br>

                    Como USUARIO, nos puede escribir mediante formulario de contacto o directamente al email, todo lo
                    que nos escriba al email será un dato privado.<br>

                    Usted puede borrar su cuenta desde su panel, al borrarla deja de ser usuario o si no tiene actividad
                    por 1 año la borraremos automáticamente.<br><br>

                    ¿Cuáles son las vías de recogida de los datos?<br>

                    Contratación de los Servicios del PROVEEDOR DE SERVICIOS: creación de una Cuenta para publicar
                    perfiles en el Sitio Web. <br><br>

                    ¿Qué datos recogemos? <br>

                    Información identificativa y de contacto: dirección de correo electrónico y número de teléfono
                    móvil. <br>

                    Información de facturación y pago: Podemos recoger información sobre los productos y servicios
                    contratados a través del Sitio Web y demás transacciones realizadas a través de este, y solicitarte
                    información para la facturación: nombre, DNI/NIF, dirección postal, dirección de correo electrónico.<br></br> <br>

                    Los pagos se podrán realizar de dos formas: por transferencia o mediante tarjeta bancaria. El
                    PROVEEDOR DE SERVICIOS no guardará los datos de pago obtenidos en los dos primeros casos más allá de
                    la finalidad de confirmar la recepción del pago. En el último caso, pago mediante tarjeta bancaria,
                    a través de una pasarela de pago proporcionada por nuestro proveedor de servicios de pago, no
                    tendremos información sobre tus tarjetas bancarias. <br><br>

                    Datos incorporados en tu Perfil publicado en el Sitio Web. Dentro del Perfil puedes incorporar toda
                    la información que creas conveniente. <br><br>

                    ¿Cuáles son las finalidades del tratamiento de tus datos personales?<br>
                    Ejecutar y mantener la relación contractual entre las Partes. La principal finalidad del tratamiento
                    de estos datos serán las acciones pertinentes para crear el la cuenta y garantizar la correcta
                    prestación de los servicios, que a título enunciativo son: acciones de creación de la cuenta,
                    acciones para el mantenimiento de la cuenta, acciones para la correcta ejecución del servicio del
                    Sitio Web, gestión de cobros, atención de consultas, etc. <br><br></br>

                    ¿Cuál es la base de legitimación que nos permite tratar tus datos? ¿Es obligatorio el suministro de
                    estos datos? <br>

                    Ejecución del contrato. El tratamiento de los datos es necesario para la creación de la cuenta en el
                    Sitio Web y la ejecución del contrato entre las partes.<br>

                    Todos los datos solicitados y tratados por EL PROVEEDOR DE SERVICIOS para las finalidades anteriores
                    serán necesarios para las finalidades indicadas. En caso de no suministrarlos, no se podría ejecutar
                    los servicios y realizar las tareas administrativas ligadas a estos.<br>

                    Interés legítimo: Los datos que recogemos para la prevención de actividades ilícitas y otras
                    relacionadas con la seguridad del Sitio Web se tratarán en base a nuestro interés legítimo para
                    garantizar la seguridad de la red y de la información para prevenir sucesos que puedan comprometer
                    la disponibilidad, autenticidad, integridad y confidencialidad de los datos personales o el propio
                    Sitio Web.<br><br>

                    ¿Cuánto tiempo conservamos tu información? <br>

                    Toda la información personal la trataremos durante el tiempo en el que dure la relación contractual
                    entre las partes. Una vez finalizado este periodo, El PROVEEDOR DE SERVICIOS conservará, bloqueada,
                    dicha información durante los plazos previstos en la legislación para atender eventuales
                    responsabilidades y para demostrar el cumplimiento de nuestras obligaciones.<br><br>

                    ¿A quién cedemos tu información personal?<br>
                    No realizamos ninguna cesión adicional para llevar a cabo este tratamiento que aquellas indicadas,
                    con carácter general, en el punto 4. ¿A quién cedemos tu información personal? En este sentido,
                    podemos acudir a proveedores de servicios para la prestación de determinados servicios auxiliares
                    (por ejemplo, hosting, gestoría)<br><br>

                    · Otros Usuarios<br>

                    La web tiene 2 tipos de formularios para estos tipos de usuario, contactar con la web, denunciar un
                    perfil. <br>

                    Para contactar con la web se pedirá un nombre para podernos dirigir a usted, un email para poderle
                    responder, un asunto y un comentario, al utilizar este formulario guardaremos también la IP de
                    conexión y la hora de conexión. Este formulario está a pie de página y tiene la función de ponerse
                    en contacto con el sitio web, estos datos siempre serán privados. <br>

                    Dentro de todos los anuncios hay un botón denunciar, depende el tipo de denuncia se le pedirá un
                    email o un email y la verificación de un teléfono, en estos formularios ser recogerán a parte de los
                    datos mencionados, un asunto, un comentario, estos datos siempre serán privados. <br><br> 


                    ¿Cuáles son las vías de recogida de los datos? <br>

                    · Formulario de contacto<br>

                    · Envío de correos electrónicos a la dirección del proveedor de servicios. <br><br></br>



                    ¿Qué datos recogemos? <br>

                    Información identificativa y de contacto. Recogemos tus datos identificativos (nombre) y la
                    dirección de correo electrónico, así como cualquier otra que incluyas de forma voluntaria en las
                    comunicaciones que nos remitas. <br>

                    Podremos solicitarte información adicional si es necesario para cumplir con tu solicitud o
                    requerimiento. <br> <br>

                    ¿Cuáles son las finalidades del tratamiento de tus datos personales? <br>

                    Contestar a tus solicitudes. La principal finalidad del tratamiento de estos datos será la de
                    contestar tus solicitudes, resolver tus dudas y/o suministrarte la información requerida, así como,
                    en su caso, hacer el seguimiento de tus peticiones. <br><br>

                    ¿Cuál es la base de legitimación que nos permite tratar tus datos? ¿Es obligatorio el suministro de
                    estos datos?<br>

                    Consentimiento. Los datos suministrados para las finalidades anteriores se tratarán en base a tu
                    consentimiento, otorgado cuando, de manera voluntaria, te pones en contacto con nosotros a través de
                    los medios puestos a tu disposición para solicitarnos información o realizarnos alguna petición. <br>

                    La información que deberás suministrar de manera obligatoria estará indicada con un asterisco o de
                    una forma similar. Sin dicha información no sería posible atender tus consultas o solicitudes. <br><br></br>

                    ­­¿Cuánto tiempo conservamos tu información?<br>

                    Toda tu información personal la trataremos durante el tiempo en el que se estén tramitando tus
                    solicitudes y, en caso necesario, para hacer el seguimiento de las mismas. Una vez finalizado este
                    periodo, EL PROVEEDOR DE SERVICIOS conservará, bloqueada, dicha información durante los plazos
                    previstos en la legislación para atender eventuales responsabilidades y para demostrar el
                    cumplimiento de nuestras obligaciones. <br><br>

                    ¿A quién cedemos tu información personal? <br>

                    No realizamos ninguna cesión adicional para llevar a cabo este tratamiento que aquellas indicadas,
                    con carácter general, en el punto. ¿A quién cedemos tu información personal?. <br>

 
                    · Navegación por el Sitio Web (cookies)<br>


                    En el presente Sitio Web utilizamos cookies u otras herramientas de seguimiento y rastreo para
                    recabar información acerca del uso que los usuarios realizan del Sitio Web. <br>

                    Para más información sobre el tratamiento que realizamos a través de dichas herramientas de
                    seguimiento, visita nuestra Política de Cookies.<br><br>

                    · Perfiles de en redes sociales del sitio web. <br>




                    El PROVEEDOR DE SERVICIOS cuenta con perfil en las principales redes sociales, tales como podrían
                    ser Facebook, Twitter, Instagram, Linkedin, YouTube o Whatsapp.
                    Cuando te haces seguidor de alguna de nuestras páginas en las redes sociales, el tratamiento de los
                    datos se regirá por las condiciones de uso, políticas de privacidad y normativas de acceso que
                    pertenezcan a la red social correspondiente y aceptadas previamente por el usuario. <br> <br>


                    El PROVEEDOR DE SERVICIOS, en este sentido, tratará tus datos con las finalidades de administrar
                    correctamente su presencia en la red social, informándote de actividades, productos o servicios, así
                    como para cualquier otra finalidad que las normativas de las redes sociales permitan. <br><br>


                    Ten en cuenta que nosotros no tenemos influencia sobre la información que la red social recoge o
                    cómo la procesa, por lo que te recomendamos que te mantengas informado del propósito y alcance de la
                    recogida de información que se realiza a través de dichas redes sociales. <br><br> 

                    ¿A QUIÉN CEDEMOS TU INFORMACIÓN PERSONAL? <br>

                    · Prestadores de servicios<br>

                    Como encargados de tratamiento para poder ejecutar el servicio correctamente, tenemos contratados a
                    los proveedores de servicios externos como empresas de cobro por TPV, empresas de gestión y
                    administración, programación, hosting, habiéndose comprometido al cumplimiento de las disposiciones
                    normativas, de aplicación en materia de protección de datos, en el momento de su contratación. Estas
                    entidades han firmado los correspondientes acuerdos de confidencialidad y solo tratarán tus datos
                    según nuestras instrucciones, no pudiendo utilizarlos para finalidades propias o aparte del servicio
                    que nos prestan.<br><br>

                    · Organismos Públicos.<br><br>

                    Podremos revelar a las autoridades públicas competentes los datos y cualquier otra información que
                    esté en nuestro poder o que sea accesible a través de nuestros sistemas cuando exista una obligación
                    legal para ello, así como cuando sea requerida, por ejemplo, cuando la finalidad sea la de prevenir
                    o perseguir abusos de los servicios o actividades fraudulentas a través de nuestro Sitio Web o
                    página web. En estos casos, los datos de carácter personal que nos facilites se conservarían y
                    pondrían a disposición de las autoridades administrativas o judiciales.<br>

                    Asimismo, te informamos de que esta Política de Privacidad sólo se refiere a la recogida,
                    tratamiento y uso de información (relativa a datos personales) por nuestra parte a través de la
                    interacción que realizas con nuestro Sitio Web. El acceso a páginas Web de terceros a las que puedas
                    acceder a través de enlaces desde el Sitio Web tienen sus propias políticas de privacidad sobre las
                    que no tenemos ningún control. Por ello, antes de facilitarles alguna información personal, te
                    recomendamos que te informes sobre sus Políticas de Privacidad.<br><br>

                    TRANSFERENCIA DE DATOS INTERNACIONALES <br><br>

                    Es posible que, con motivo de alojar la plataforma web para gestionar los anuncios, EL PROVEEDOR DE
                    SERVICIOS, utilice servidores o prestadores de servicios de cloud computing ubicados fuera del
                    espacio económico europeo, en particular, en EEUU. A este respecto, los proveedores seleccionados
                    cumplirán en todo momento, las máximas garantías en materia de tratamiento de datos personales. En
                    este sentido, los proveedores de servicios que se encuentran fuera del EEE han suscrito las
                    correspondientes cláusulas contractuales tipo aprobadas por la Comisión Europea (“CCT”), acuerdo
                    firmado entre ambas entidades por el cual la empresa extracomunitaria garantiza que aplica los
                    estándares europeos de protección de datos. <br><br>


                    CUÁLES SON LOS DERECHOS QUE PUEDES EJERCER COMO INTERESADO/A. <br>

                    Puedes ejercer los derechos que la ley te garantiza en relación con el tratamiento de tus datos
                    personales contactando con nosotros / nuestro Delegado de Protección de Datos a través del correo
                    electrónico. <br>

                    Cualquier petición de derechos que recibamos la resolveremos lo antes posible y, en cualquier caso,
                    dentro del plazo máximo establecido por la legislación desde que la recibamos. En algunos casos,
                    será necesario solicitarte una copia de tu documento de identidad u otro documento identificativo si
                    es necesario verificar tu identidad. <br>

                    Los derechos que te corresponden como interesado/a, son los siguientes: <br><br>

                    · Derecho a retirar el consentimiento otorgado  <br><br>

                    Puedes revocar tu consentimiento en relación con todos los procesamientos basados en él en cualquier
                    momento. No obstante, la retirada del consentimiento no afectará a la licitud del tratamiento basada
                    en el consentimiento previo a su retirada. <br><br>

                    · Derecho de acceso <br>

                    Tienes derecho a saber qué datos están siendo objeto de tratamiento, si procede y, si es así,
                    obtener una copia de estos, así como a obtener información relativa a:<br>

                    el origen y los destinatarios de los datos;<br>
                    las finalidades para las que se tratan;<br>
                    si existe un proceso de toma de decisiones automatizado, incluida la elaboración de perfiles;<br>
                    el período de retención de los datos;<br>
                    <br><br>
                    los derechos previstos por la normativa.<br>
                    · Derecho de rectificación <br>

                    Tienes derecho a obtener la rectificación de tus datos personales o a completarlos cuando están
                    incompletos<br></br> <br>

                    Derecho de supresión<br>

                    Tienes derecho a solicitar la supresión de tus datos personales si ya no son necesarios para el
                    propósito para el que fueron recopilados o, en su caso, si ya no estamos autorizados para tratarlos. <br> <br>

                    Derecho a la portabilidad de datos <br>

                    Tienes derecho a solicitar la portabilidad de los datos en el caso de los tratamientos de tus datos
                    que estén basados en tu consentimiento o en la ejecución de un contrato, siempre y cuando el
                    procesamiento se haya realizado por medios automatizados. En caso de ejercicio de este derecho,
                    recibirás tus datos personales en un formato estructurado, de uso común y legible por cualquier
                    dispositivo electrónico. No obstante, también puedes solicitar, cuando sea posible, que tus datos
                    sean transmitidos directamente a otra empresa. <br></br>  <br>

                    Derecho a la limitación del tratamiento de tus datos personales. <br>

                    Tienes derecho a la limitación del procesamiento de tus datos en los siguientes casos:<br>

                    Cuando hayas solicitado la rectificación de tus datos personales durante el período en el que
                    verifiquemos la exactitud de los mismos.<br>
                    Cuando consideres que no estamos autorizados a procesar tus datos. En ese caso, puedes solicitarnos
                    que limitemos su uso en vez de solicitar su supresión.<br>
                    Cuando consideres que la ya no es necesario que sigamos tratando tus datos y quieras que los
                    conservemos a los efectos del ejercicio o la defensa de reclamaciones.<br>
                    En los casos en los que exista un procesamiento basado en nuestro interés legítimo y hayas
                    ejercitado tu derecho de oposición al mismo, puedes pedirnos que limitemos el uso de tus datos
                    durante la verificación de la prevalencia de dichos intereses con respecto a los tuyos.<br>

                    <br>
                    · Derecho de oposición <br><br>

                    Tienes derecho a oponerte en cualquier momento al procesamiento de tus datos personales en función
                    de nuestro interés legítimo, incluida la elaboración de perfiles. <br><br>

                    Derecho a presentar una reclamación ante la Autoridad de Control<br>

                    En cualquier supuesto de vulneración de tu derecho a la protección de datos personales, puede
                    dirigiese a la Autoridad de Control nacional correspondiente en su Estado. <br> <br>



                    ¿CÓMO GARANTIZAMOS LA CONFIDENCIALIDAD DE TU INFORMACIÓN? <br>

                    La seguridad de tus datos personales es una prioridad para nosotros. Por ello, El PROVEEDOR DE
                    SERVICIOS ha implantado todas las medidas de seguridad necesarias para garantizar un uso y
                    tratamiento de los datos de carácter personal facilitados por el/la usuario eficaz, salvaguardando
                    la intimidad, privacidad, confidencialidad e integridad de los mismos y hace uso de los medios
                    técnicos necesarios para evitar la alteración, pérdida, acceso no autorizado o tratamiento de sus
                    datos, según el estado de la tecnología en cada momento. <br>

                    Consecuentemente, cumplimos con los estándares de seguridad recomendados para protegerlos. Sin
                    embargo, es imposible garantizar de un modo total su seguridad por la propia naturaleza de internet
                    y porque pueden existir actuaciones dolosas de terceros fuera de nuestro control. <br>

                    Nos comprometemos a actuar con rapidez y diligencia en caso de que la seguridad de los datos se vea
                    en peligro o comprometida, y a informarte sobre ello en caso de que sea relevante. <br><br>



                    CADUCIDAD DE DATOS <br>

                    Todo USUARIO tiene la posibilidad de borrar su cuenta desde su panel de usuario, una vez borrada los
                    datos no será públicos ni visibles al usuario, la ley nos obliga a guardar la información
                    imprescindible para identificar el origen de los datos alojados y el momento en que se inició la
                    prestación del servicio por periodo de 12 meses en caso de que haya una investigación, si en 12
                    meses no ha habido tal investigación el sistema automáticamente borrará todos los datos que
                    dispongamos de forma permanente.<br>

                    Si por cualquier causa el usuario no tiene acceso a su cuenta y nos escribe solicitando el borrado
                    atenderemos su petición siempre que sea desde el email de la creación, en caso de que no tenga 
                    acceso a este podemos usar otros sistemas de verificación como el teléfono para proceder al borrado.<br>

                    Si el usuario no borra su cuenta, pero permanece inactiva por dos años, es decir ni publican un
                    contenido nuevo ni realiza ninguna acción sobre contenido que ya tiene, el sistema automáticamente
                    procederá a borrar su cuenta, una vez borrada los datos no serán visibles públicamente ni para el
                    usuario, la ley nos obliga a guardar la información imprescindible para identificar el origen de los
                    datos alojados y el momento en que se inició la prestación del servicio por periodo de 12 meses en
                    caso de que haya una investigación, si en 12 meses no ha habido tal investigación el sistema
                    automáticamente borrará todos los datos que dispongamos de forma permanente. <br>

                    Para el resto de datos, automáticamente el sistema procede a borrar de forma permanente los datos
                    los a 12 meses de la creación a menos de que hayan sido marcados por una investigación. <br>

                    Es decir, todo dato de usuario que haya sido denunciado por estafa, fraude o por haber incumplido
                    las normas del portal no será borrado. <br><br></br>



                    COMUNICACIONES COMERCIALES<br>

                    El PROVEEDOR DE SERVICIOS no enviará comunicaciones publicitarias o promocionales por correo
                    electrónico u otro medio de comunicación electrónica equivalente que previamente no hubieran sido
                    solicitadas o expresamente autorizadas por los destinatarios de estas. <br>

                    Si hay algún cambio importante en la web podemos enviarte un email informativo, no comercial. <br>

                    En todo caso, el usuario podrá solicitar que no se le haga llegar más información a través de los
                    canales de Atención al Cliente. <br> <br>


                    DATOS PÚBLICOS RECOLECTADOS POR TERCEROS <br>

                    Tal y como hemos explicado a lo largo de este documento sobre todo en la creación de perfiles o
                    páginas web personales, tenemos datos públicos como privados. <br>

                    De los que son públicos es decir en abierto para todo el mundo o usuarios invitados, el PROVEEDOR DE
                    SERVICIOS no se hace responsable sin un tercero los incorpora en un fichero o los copia. <br>

                    Si el proveedor de servicios tiene conocimiento de este hecho, hará todo lo posible para que estos
                    sean dados de baja por ética profesional pero no será responsable de la mala intencionalidad de un
                    tercero sobre un dato público. El proveedor de servicio es completamente responsable de cualquier
                    dato privado. <br><br>



                    DERECHOS DE PROPIEDAD INTELECTUAL SOBRE EL SOFTWARE <br>

                    El PROVEEDOR DE SERVICIOS es titular de todos los derechos de autor, propiedad intelectual, a la
                    personal, ROBERTO ROMERO PEREZ y cuantos otros derechos guardan relación con los contenidos del
                    sitio web SITIO WEB y los servicios ofertados en el mismo, así como de los programas necesarios para
                    su implementación y la información relacionada. <br>

                    No se permite la reproducción, publicación y/o uso no estrictamente privado de los contenidos,
                    totales o parciales, del SITIO WEB sin el consentimiento previo y por escrito. <br>

                    El usuario debe respetar los programas de terceros puestos a su disposición por el PROVEEDOR DE
                    SERVICIOS, aun siendo gratuitos y/o de disposición pública. <br>

                    El PROVEEDOR DE SERVICIOS dispone de los derechos de explotación y propiedad intelectual necesarios
                    del software. <br>

                    El usuario no adquiere derecho alguno o licencia por el servicio contratado, sobre el software
                    necesario para la prestación del servicio, ni tampoco sobre la información técnica de seguimiento
                    del servicio, excepción hecha de los derechos y licencias necesarios para el cumplimiento de los
                    servicios contratados y únicamente durante la duración de estos. <br>

                    Para toda actuación que exceda del cumplimiento del contrato, el usuario necesitará autorización por
                    escrito por parte del PROVEEDOR DE SERVICIOS, quedando prohibido al usuario acceder, modificar,
                    visualizar la configuración, estructura y ficheros de los servidores propiedad del PROVEEDOR DE
                    SERVICIOS, asumiendo la responsabilidad civil y penal derivada de cualquier incidencia que se
                    pudiera producir en los servidores y sistemas de seguridad como consecuencia directa de una
                    actuación negligente o maliciosa por su parte.<br><br>

                    PROPIEDAD INTELECTUAL SOBRE LOS CONTENIDOS ALOJADOS DE TERCEROS<br>

                    El usuario concede al PROVEEDOR DE SERVICIOS una licencia no exclusiva, limitada y revocable,
                    únicamente para la correcta prestación del servicio y para la defensa de dichos contenidos frente a
                    usos indebidos por terceros. <br>

                    Se prohíbe el uso contrario a la legislación sobre propiedad intelectual de los servicios prestados
                    por PROVEEDOR DE SERVICIOS y, en particular de: <br>

                    La utilización que resulte contraria que infrinja los derechos de terceros.<br>

                    La publicación o la transmisión de cualquier contenido que, a juicio de PROVEEDOR DE SERVICIOS,
                    resulte violento, obsceno, abusivo, ilegal, racial, xenófobo o difamatorio.<br>

                    Los cracks, números de serie de programas o cualquier otro contenido que vulnere derechos de la
                    propiedad intelectual de terceros.<br><br>


                    MODIFICACIONES DE LA PRESENTE POLÍTICA <br>

                    El PROVEEDOR DE SERVICIOS puede modificar el contenido de la política de privacidad en cualquier
                    momento, especialmente cuando se produzcan modificaciones legislativas, jurisprudenciales que
                    afecten al presente Sitio Web. Cualquier nueva versión de esta Política de Privacidad entrará en
                    vigor en la fecha de entrada en vigor publicada. <br>

                    Si la versión revisada incluye un cambio sustancial que afecte al tratamiento de tus datos, te lo
                    notificaremos con, al menos, 30 días de antelación publicando un aviso en nuestro sitio web o
                    comunicándotelo a través del correo electrónico. De todas maneras, te recomendamos que revises
                    periódicamente esta Política de Privacidad para estar informada de cómo se tratan y protegen tus
                    datos personales, así como de los derechos que te asisten.<br><br>



                    La presente Política de Privacidad ha sido actualizada en fecha 13 de enero de 2026



                </p>
            </div>

        </div>



    </AppLayout>
</template>
