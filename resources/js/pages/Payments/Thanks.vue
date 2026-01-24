<script setup>
import { onMounted } from 'vue';
import { Head, usePage } from '@inertiajs/vue3';
import { Card, CardContent, CardHeader, CardTitle, CardDescription } from '@/components/ui/card';
import { CheckCircle } from 'lucide-vue-next'; // Usando Lucide Icons para el checkmark

// Asumiendo que esta prop viene de la función de Inertia en el backend (route('pago.gracias'))
const { props } = usePage();
const redirectUrl = props.redirectUrl || '/mis-anuncios'; // Fallback a /anuncios si no se pasa la URL

onMounted(() => {
    // Redirección automática después de 5 segundos (5000 ms)
    setTimeout(() => {
        window.location.href = redirectUrl;
    }, 5000);
});
</script>

<template>
    <Head title="¡Gracias por tu compra!" />

    <div
        class="
            flex min-h-screen items-center justify-center 
            bg-gray-50 p-4 sm:p-6
            dark:bg-gray-950
        "
    >
        <Card
            class="
                w-full max-w-lg 
                shadow-2xl transition duration-500 hover:shadow-3xl
                dark:bg-gray-900 dark:border-gray-800
            "
        >
            <CardHeader class="flex flex-col items-center space-y-3 pt-8 pb-4">
                <div class="mb-2 text-green-500 dark:text-green-400">
                    <CheckCircle class="h-16 w-16" />
                </div>

                <CardTitle class="text-3xl font-extrabold text-gray-900 dark:text-gray-100">
                    ¡Pago Exitoso!
                </CardTitle>

                <CardDescription class="text-center text-gray-600 dark:text-gray-400">
                    Tu compra se ha procesado correctamente y tu anuncio ya es
                    <span class="font-semibold text-green-600 dark:text-green-400">
                        Premium
                    </span>.
                </CardDescription>
            </CardHeader>

            <CardContent class="pb-8">
                <div class="space-y-4 text-center">
                    <p class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                        Gracias por tu confianza.
                    </p>

                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        Serás redirigido automáticamente a la lista de anuncios en 5 segundos.
                    </p>

                    <!-- Barra de progreso -->
                    <div class="relative pt-1">
                        <div
                            class="flex h-2 overflow-hidden rounded 
                                   bg-green-200 dark:bg-green-900"
                        >
                            <div
                                class="w-full bg-green-500 dark:bg-green-400"
                                style="animation: progress-fill 5s linear forwards;"
                            ></div>
                        </div>
                    </div>

                    <a
                        :href="redirectUrl"
                        class="
                            text-sm font-medium 
                            text-blue-600 hover:text-blue-800 hover:underline
                            dark:text-blue-400 dark:hover:text-blue-300
                        "
                    >
                        Haz clic aquí si no quieres esperar.
                    </a>
                </div>
            </CardContent>
        </Card>
    </div>
</template>

<style>
/* Estilo para la animación de la barra de progreso */
@keyframes progress-fill {
    0% { width: 0%; }
    100% { width: 100%; }
}
.shadow-3xl {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}
</style>