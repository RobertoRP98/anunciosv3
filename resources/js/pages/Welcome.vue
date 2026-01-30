<script setup lang="ts">
import { Button } from '@/components/ui/button';
import { Card, CardContent, CardHeader, CardTitle, CardDescription, CardFooter } from '@/components/ui/card';
import { login, register } from '@/routes';
import { Head, Link } from '@inertiajs/vue3';
import { logout } from '@/routes';
import NavFooter from '@/layouts/app/NavFooter.vue';

import { 
    Heart, 
    UserPlus, 
    Zap, 
    ShieldCheck, 
    ArrowRight, 
    CheckCircle2, 
    MessageCircle,
    Clock, Target, Eye,
} from 'lucide-vue-next';

withDefaults(
    defineProps<{
        canRegister: boolean;
    }>(),
    {
        canRegister: true,
    },
);
</script>

<template>
    <Head title="DonadorRapido.mx - Conectando Donadores" />

    <header class="sticky top-0 z-50 w-full border-b border-rose-100 bg-white/80 backdrop-blur-md dark:border-zinc-800 dark:bg-black/80">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">
            <div class="flex items-center gap-2">
                <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-rose-500 text-white">
                    <Heart class="h-5 w-5 fill-current" />
                </div>
                <Link href="/solicitantes" class="text-xl font-black tracking-tight text-slate-900 dark:text-white">
                    DonadorRapido<span class="text-rose-500">.mx</span>
                </Link>
            </div>

            <nav class="hidden items-center gap-6 text-sm font-medium md:flex">
                <Link href="/" class="text-slate-600 transition hover:text-rose-500 dark:text-slate-400">Inicio</Link>
                <Link href="/nosotros" class="text-slate-600 transition hover:text-rose-500 dark:text-slate-400">Nosotros</Link>
                <Link href="/solicitantes" class="text-slate-600 transition hover:text-rose-500 dark:text-slate-400">Ver Solicitudes</Link>
            </nav>

            <div class="flex items-center gap-3">
                <template v-if="$page.props.auth.user">
                    <Link href="/mis-anuncios">
                        <Button variant="ghost" size="sm">Mis Anuncios</Button>
                    </Link>
                    <Link :href="logout()" method="post" as="button">
                        <Button variant="outline" size="sm" class="border-rose-200 text-rose-600 hover:bg-rose-50">Cerrar Sesión</Button>
                    </Link>
                </template>
                <template v-else>
                    <Link :href="login()" class="hidden text-sm font-medium md:block">Iniciar Sesión</Link>
                    <Link v-if="canRegister" :href="register()">
                        <Button size="sm" class="bg-rose-500 hover:bg-rose-600">Registrarse</Button>
                    </Link>
                </template>
            </div>
        </div>
    </header>

    <main class="bg-white dark:bg-zinc-950">
        
        <section class="relative overflow-hidden px-6 pt-24 pb-20 text-center md:pt-32 md:pb-32">
            <div class="absolute top-0 left-1/2 -z-10 h-[600px] w-[600px] -translate-x-1/2 rounded-full bg-rose-50/50 blur-3xl dark:bg-rose-900/10"></div>
            
            <div class="mx-auto max-w-4xl">
                <span variant="outline" class="mb-4 border-rose-200 bg-rose-50 text-rose-600 dark:bg-rose-950 dark:text-rose-400">
                    ❤ Salvando vidas hoy
                </span>
                <h1 class="animate-fadeIn mb-6 text-5xl font-black tracking-tight text-slate-900 md:text-7xl dark:text-white leading-[1.1]">
                    Conectamos esperanza <br />
                    <span class="bg-gradient-to-r from-rose-500 to-orange-500 bg-clip-text text-transparent">con solidaridad.</span>
                </h1>
                <p class="animate-fadeIn mb-10 text-lg text-slate-600 delay-150 md:text-xl dark:text-slate-400 max-w-2xl mx-auto">
                    La plataforma más rápida para encontrar donadores de sangre y publicar solicitudes urgentes en México.
                </p>
                <div class="animate-fadeIn flex flex-col justify-center gap-4 delay-300 sm:flex-row">
                    <Link href="/solicitantes">
                        <Button size="xl" class="h-14 w-full px-8 text-lg bg-rose-500 hover:bg-rose-600 shadow-lg shadow-rose-200 dark:shadow-none sm:w-auto">
                            Necesito Donadores
                            <ArrowRight class="ml-2 h-5 w-5" />
                        </Button>
                    </Link>
                    <Link href="/register">
                        <Button size="xl" variant="outline" class="h-14 w-full px-8 text-lg border-2 sm:w-auto">
                            Quiero ser Donador
                        </Button>
                    </Link>
                </div>
            </div>
        </section>


        <section class="py-24 px-6 overflow-hidden relative">
    <div class="absolute right-0 top-1/2 -z-10 h-64 w-64 translate-x-1/2 -translate-y-1/2 rounded-full bg-blue-50/50 blur-3xl dark:bg-blue-900/10"></div>

    <div class="mx-auto max-w-6xl">
        <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
            
            <div class="group p-8 rounded-3xl border border-slate-100 bg-white shadow-sm transition-all hover:shadow-md dark:border-zinc-800 dark:bg-zinc-900/50">
                <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-rose-500 text-white shadow-lg shadow-rose-200 dark:shadow-none">
                    <Target class="h-7 w-7" />
                </div>
                <h2 class="mb-4 text-3xl font-bold text-slate-900 dark:text-white">Nuestra Misión</h2>
                <p class="text-lg leading-relaxed text-slate-600 dark:text-slate-400">
                    Transformar la angustia de buscar donadores en una experiencia de **conexión rápida y efectiva**. 
                    Nacimos para que ninguna familia en México tenga que enfrentar sola la urgencia de conseguir sangre, 
                    utilizando la tecnología como un puente de solidaridad humana.
                </p>
            </div>

            <div class="group p-8 rounded-3xl border border-slate-100 bg-white shadow-sm transition-all hover:shadow-md dark:border-zinc-800 dark:bg-zinc-900/50">
                <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-500 text-white shadow-lg shadow-blue-200 dark:shadow-none">
                    <Eye class="h-7 w-7" />
                </div>
                <h2 class="mb-4 text-3xl font-bold text-slate-900 dark:text-white">Nuestra Visión</h2>
                <p class="text-lg leading-relaxed text-slate-600 dark:text-slate-400">
                    Convertirnos en la **red de apoyo vital más grande del país**, donde la donación de sangre no sea 
                    un reto logístico, sino un acto natural y digitalizado. Aspiramos a reducir el tiempo de respuesta 
                    en emergencias de días a solo minutos, salvando vidas en cada rincón de la república.
                </p>
            </div>

        </div>

        <div class="mt-16 text-center">
            <blockquote class="text-xl italic font-medium text-slate-400 dark:text-zinc-500">
                "Donar sangre es regalar tiempo a quien más lo necesita."
            </blockquote>
        </div>
    </div>
</section>

        <section class="py-24 px-6">
            <div class="mx-auto max-w-6xl">
                <div class="mb-16 text-center">
                    <h2 class="text-3xl font-bold md:text-4xl">¿Cómo funciona?</h2>
                    <p class="mt-4 text-slate-500">Tres pasos sencillos para marcar la diferencia.</p>
                </div>

                <div class="grid gap-12 md:grid-cols-3">
                    <div class="relative text-center">
                        <div class="mx-auto mb-6 flex h-16 w-16 items-center justify-center rounded-2xl bg-rose-100 text-rose-600 dark:bg-rose-900/30">
                            <UserPlus class="h-8 w-8" />
                        </div>
                        <h3 class="mb-3 text-xl font-bold">1. Crea tu cuenta</h3>
                        <p class="text-slate-600 dark:text-slate-400">Regístrate en menos de un minuto para tener acceso a la red de donadores.</p>
                    </div>

                    <div class="relative text-center">
                        <div class="mx-auto mb-6 flex h-16 w-16 items-center justify-center rounded-2xl bg-blue-100 text-blue-600 dark:bg-blue-900/30">
                            <Zap class="h-8 w-8" />
                        </div>
                        <h3 class="mb-3 text-xl font-bold">2. Publica tu solicitud</h3>
                        <p class="text-slate-600 dark:text-slate-400">Indica tipo de sangre, hospital y ubicación. Es rápido y sencillo.</p>
                    </div>

                    <div class="relative text-center">
                        <div class="mx-auto mb-6 flex h-16 w-16 items-center justify-center rounded-2xl bg-green-100 text-green-600 dark:bg-green-900/30">
                            <ShieldCheck class="h-8 w-8" />
                        </div>
                        <h3 class="mb-3 text-xl font-bold">3. Recibe ayuda</h3>
                        <p class="text-slate-600 dark:text-slate-400">Tu anuncio llegará a las personas indicadas para coordinar la donación.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 px-6 bg-slate-50 dark:bg-zinc-900/50">
            <div class="mx-auto max-w-6xl">
                <div class="mb-16 text-center">
                    <h2 class="text-3xl font-bold md:text-4xl text-slate-900 dark:text-white">Aumenta la visibilidad</h2>
                    <p class="mt-4 text-slate-500">Elige cómo quieres que tu anuncio llegue a la comunidad.</p>
                </div>

                <div class="grid gap-8 lg:grid-cols-3">
                    <Card class="border-none shadow-md transition-transform hover:scale-[1.02] dark:bg-zinc-900">
                        <CardHeader>
                            <CardTitle class="text-xl">Gratis</CardTitle>
                            <CardDescription>Para necesidades estándar</CardDescription>
                            <div class="mt-4 text-4xl font-black">$0</div>
                        </CardHeader>
                        <CardContent class="space-y-4">
                            <div class="flex items-center gap-2 text-sm text-slate-600 dark:text-slate-400">
                                <CheckCircle2 class="h-4 w-4 text-green-500" /> Publicación básica
                            </div>
                            <div class="flex items-center gap-2 text-sm text-slate-600 dark:text-slate-400">
                                <CheckCircle2 class="h-4 w-4 text-green-500" /> Visible en listado general
                            </div>
                            <div class="flex items-center gap-2 text-sm text-slate-600 dark:text-slate-400">
                                <CheckCircle2 class="h-4 w-4 text-green-500" /> 3 días de vigencia
                            </div>
                        </CardContent>
                        <CardFooter>
                            <Button variant="outline" class="w-full">Comenzar gratis</Button>
                        </CardFooter>
                    </Card>

                    <Card class="relative border-2 border-rose-500 shadow-xl transition-transform hover:scale-[1.02] dark:bg-zinc-900">
                        <div class="absolute -top-4 left-1/2 -translate-x-1/2 rounded-full bg-rose-500 px-4 py-1 text-xs font-bold text-white uppercase">Recomendado</div>
                        <CardHeader>
                            <CardTitle class="text-xl">Prioritario</CardTitle>
                            <CardDescription>Mayor alcance y tiempo</CardDescription>
                            <div class="mt-4 text-4xl font-black">$199<span class="text-sm font-normal text-slate-400">/anuncio</span></div>
                        </CardHeader>
                        <CardContent class="space-y-4">
                            <div class="flex items-center gap-2 text-sm text-slate-600 dark:text-slate-400">
                                <CheckCircle2 class="h-4 w-4 text-rose-500" /> Destacado en búsquedas
                            </div>
                            <div class="flex items-center gap-2 text-sm text-slate-600 dark:text-slate-400">
                                <CheckCircle2 class="h-4 w-4 text-rose-500" /> 7 días de vigencia
                            </div>
                            <div class="flex items-center gap-2 text-sm text-slate-600 dark:text-slate-400">
                                <CheckCircle2 class="h-4 w-4 text-rose-500" /> Soporte prioritario
                            </div>
                        </CardContent>
                        <CardFooter>
                            <Button class="w-full bg-rose-500 hover:bg-rose-600">Elegir Prioritario</Button>
                        </CardFooter>
                    </Card>

                    <Card class="border-none shadow-md transition-transform hover:scale-[1.02] dark:bg-zinc-900 bg-zinc-900 text-white dark:ring-1 dark:ring-zinc-800">
                        <CardHeader>
                            <CardTitle class="text-xl text-white">Muy Prioritario</CardTitle>
                            <CardDescription class="text-zinc-400">Urgencia máxima inmediata</CardDescription>
                            <div class="mt-4 text-4xl font-black text-white">$349<span class="text-sm font-normal text-zinc-500">/anuncio</span></div>
                        </CardHeader>
                        <CardContent class="space-y-4 text-zinc-300">
                            <div class="flex items-center gap-2 text-sm">
                                <Zap class="h-4 w-4 text-yellow-400 fill-current" /> Máxima prioridad (Top)
                            </div>
                            <div class="flex items-center gap-2 text-sm">
                                <Clock class="h-4 w-4 text-yellow-400" /> 15 días de vigencia
                            </div>
                            <div class="flex items-center gap-2 text-sm">
                                <MessageCircle class="h-4 w-4 text-yellow-400" /> Difusión en Redes Sociales
                            </div>
                        </CardContent>
                        <CardFooter>
                            <Button variant="secondary" class="w-full bg-white text-black hover:bg-zinc-200">Elegir Muy Prioritario</Button>
                        </CardFooter>
                    </Card>
                </div>
            </div>
        </section>
    </main>

        <NavFooter></NavFooter>

</template>

<style>
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
.animate-fadeIn {
    animation: fadeIn 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
}
.delay-150 {
    animation-delay: 0.15s;
}
.delay-300 {
    animation-delay: 0.3s;
}
</style>