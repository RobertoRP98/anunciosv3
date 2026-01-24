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
        title: 'Perfiles personales',
        href: '/#',
    },
];


</script>

<template>

    <Head title="Perfiles personales" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="mx-auto max-w-6xl px-4 py-6 space-y-8">

            <!-- TÍTULO -->
            <div class="space-y-2">
                <h1 class="text-3xl font-bold text-slate-900 dark:text-white">
                    Perfiles personales
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
                    DonadorRapido es un proveedor de servicios digitales que ofrece hospedaje y conexión segura en la
                    nube para que los usuarios puedan crear páginas personales como solicitantes. <br> <br>
                    Los perfiles solicitantes pueden corresponder tanto a personas mayores como menores de edad, siempre
                    que el contenido publicado tenga un carácter meramente informativo, descriptivo y no implique la
                    oferta directa de bienes, servicios o actividades de carácter comercial. En el caso de perfiles
                    creados en nombre de personas menores de edad, el usuario que publique el contenido declara contar
                    con la autorización del padre, madre o tutor legal, siendo este el único responsable del contenido
                    publicado. <br> <br>
                    DonadorRapido no conoce a ninguno de sus usuarios, ni participa en la creación, validación o
                    revisión del contenido publicado. La plataforma se limita exclusivamente a proporcionar la
                    infraestructura técnica necesaria para la publicación de los perfiles. <br><br>
                    DonadorRapido no intermedia, promueve ni participa en acuerdos, donaciones, compensaciones o
                    interacciones que puedan derivarse del contacto entre usuarios, siendo estas realizadas fuera de la
                    plataforma y bajo la exclusiva responsabilidad de las partes involucradas. <br> <br>
                    DonadorRapido se reserva el derecho de solicitar información adicional o suspender perfiles cuando
                    existan indicios de incumplimiento de estas condiciones.

                </p>
            </div>

        </div>



    </AppLayout>
</template>
