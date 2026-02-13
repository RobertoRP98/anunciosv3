<script setup>
import { ref, computed } from 'vue';
import { Button } from '@/components/ui/button';
import { Card, CardContent } from '@/components/ui/card';
import { Badge } from '@/components/ui/badge';
import { Separator } from '@/components/ui/separator';
import AppLayout from '@/layouts/app/AppHeaderLayout.vue';
import Report from '../Reports/Report.vue';
import { Head, Link } from '@inertiajs/vue3';
import {
    Phone, MessageCircle, Copy, Check, ChevronLeft,
    MapPin, Tag, Eye, ShieldCheck, Share2, Info
} from 'lucide-vue-next';

const props = defineProps({
    post: Object,
    backUrl: String,
});

const copied = ref(false);

const openReport = ref(false);

const breadcrumbs = computed(() => [
    { title: 'Anuncios', href: props.backUrl },
    { title: props.post.data.title, href: null },
]);

const copyToClipboard = () => {
    navigator.clipboard.writeText(props.post.data.contact.phone);
    copied.value = true;
    setTimeout(() => copied.value = false, 2000);
};

const whatsappUrl = computed(() => {
    return `https://api.whatsapp.com/send?phone=${props.post.data.contact.phone}&text=${encodeURIComponent('Hola, vi tu anuncio "' + props.post.data.title + '" en la plataforma.')}`;
});
</script>

<template>

    <Head :title="post.data.title" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="min-h-screen bg-slate-50/50 dark:bg-zinc-950 px-4 py-6 md:py-8 pb-32 md:pb-8">
            <div class="mx-auto max-w-6xl">

                <div class="mb-4 md:mb-6">
                    <Link :href="backUrl"
                        class="group inline-flex items-center text-xs md:text-sm font-medium text-slate-500 transition-colors hover:text-blue-600 dark:text-slate-400">
                        <ChevronLeft class="mr-1 h-4 w-4 transition-transform group-hover:-translate-x-1" />
                        Volver
                    </Link>
                </div>

                <div class="grid grid-cols-1 gap-6 lg:grid-cols-12">

                    <div class="lg:col-span-8 space-y-4 md:space-y-6">
                        <Card class="overflow-hidden border-none shadow-sm dark:bg-zinc-900/50">
                            <CardContent class="p-4 md:p-8">
                                <div class="space-y-4 md:space-y-6">
                                    <div class="flex flex-wrap items-center justify-between gap-3">
                                        <div class="flex flex-wrap gap-2">
                                            <Badge variant="outline"
                                                class="bg-blue-50/50 text-blue-700 dark:bg-blue-500/10 dark:text-blue-400 border-blue-100 dark:border-blue-500/20 px-2 py-0.5 text-[10px] md:text-xs">
                                                <Tag class="mr-1 h-3 w-3" />
                                                {{ post.data.category.name }}
                                            </Badge>
                                            <Badge variant="outline"
                                                class="dark:border-zinc-700 px-2 py-0.5 text-[10px] md:text-xs">
                                                <MapPin class="mr-1 h-3 w-3" />
                                                {{ post.data.municipio.name }}
                                            </Badge>
                                        </div>
                                        <div
                                            class="flex items-center text-[10px] md:text-xs font-medium text-slate-400">
                                            <Eye class="mr-1 h-3.5 w-3.5" />
                                            {{ post.data.views }} vistas
                                        </div>
                                    </div>

                                    <h1
                                        class="text-xl md:text-4xl font-extrabold leading-tight text-slate-900 dark:text-zinc-50">
                                        {{ post.data.title }}
                                    </h1>

                                    <div
                                        class="flex items-center gap-2 text-xs md:text-sm text-slate-500 dark:text-zinc-400">
                                        <MapPin class="h-4 w-4 text-slate-400" />
                                        <span>{{ post.data.municipio.name }}, {{ post.data.state.name }}</span>
                                    </div>

                                    <Separator class="dark:bg-zinc-800" />

                                    <div class="space-y-3">
                                        <h3
                                            class="flex items-center gap-2 text-base md:text-lg font-bold text-slate-900 dark:text-zinc-100">
                                            <Info class="h-4 w-4 md:h-5 md:w-5 text-blue-500" />
                                            Detalles
                                        </h3>
                                        <p
                                            class="whitespace-pre-line text-base md:text-lg leading-relaxed text-slate-600 dark:text-zinc-400">
                                            {{ post.data.description }}
                                        </p>
                                    </div>
                                </div>
                            </CardContent>
                        </Card>

                        <div
                            class="flex items-start gap-3 rounded-xl border border-amber-100 bg-amber-50/50 p-4 dark:border-amber-900/30 dark:bg-amber-900/10">
                            <ShieldCheck class="h-5 w-5 shrink-0 text-amber-600 dark:text-amber-500" />
                            <p class="text-xs md:text-sm text-amber-800 dark:text-amber-400">
                                <span class="font-bold">Seguridad:</span> No realices depósitos o pagos por adelantado.
                            </p>
                        </div>

                        <Button variant="outline" class="mt-4 w-full text-red-600 border-red-200 hover:bg-red-50"
                            @click="openReport = true">
                            Reportar anuncio
                        </Button>


                    </div>

                    <div class="lg:col-span-4">
                        <Card
                            class="hidden lg:block sticky top-6 border-none bg-white shadow-xl dark:bg-zinc-900 ring-1 ring-slate-200 dark:ring-zinc-800">
                            <div class="h-2 w-full bg-gradient-to-r from-blue-600 to-indigo-600"></div>
                            <CardContent class="p-8">
                                <div class="mb-6 space-y-1">
                                    <h3 class="text-xl font-bold dark:text-zinc-50">Contacto</h3>
                                    <p class="text-sm text-slate-500 dark:text-zinc-400">Responde directamente</p>
                                </div>

                                <div class="space-y-4">
                                    <div class="rounded-2xl bg-slate-50 dark:bg-zinc-800/50 p-6 text-center">
                                        <p class="mb-1 text-xs font-bold uppercase tracking-widest text-slate-400">
                                            Teléfono</p>
                                        <span class="text-2xl font-black text-slate-900 dark:text-white">{{
                                            post.data.contact.phone }}</span>
                                    </div>

                                    <div class="grid gap-3">
                                        <Button asChild
                                            class="h-14 w-full rounded-xl bg-green-600 text-lg font-bold hover:bg-green-700">
                                            <a :href="whatsappUrl" target="_blank">
                                                <MessageCircle class="mr-2 h-5 w-5 fill-current" /> WhatsApp
                                            </a>
                                        </Button>
                                        <div class="flex gap-2">
                                            <Button variant="outline" class="h-12 flex-1 rounded-xl"
                                                @click="copyToClipboard">
                                                <component :is="copied ? Check : Copy" class="mr-2 h-4 w-4" />
                                                {{ copied ? 'Copiado' : 'Copiar' }}
                                            </Button>
                                        </div>
                                    </div>
                                </div>
                            </CardContent>
                        </Card>
                    </div>
                </div>
            </div>
        </div>

        <div class="fixed bottom-0 left-0 right-0 z-50 lg:hidden">
            <div
                class="bg-white/95 dark:bg-zinc-900/95 backdrop-blur-md border-t border-slate-200 dark:border-zinc-800 p-4 shadow-[0_-10px_30px_rgba(0,0,0,0.1)]">

                <div class="mb-3 flex items-center justify-center gap-2">
                    <span class="h-1 w-1 rounded-full bg-blue-500"></span>
                    <span class="text-[11px] font-bold uppercase tracking-[0.2em] text-slate-400 dark:text-zinc-500">
                        Contacto:
                        <span class="text-slate-900 dark:text-zinc-100 font-mono">{{ post.data.contact.phone }}</span>
                    </span>
                    <span class="h-1 w-1 rounded-full bg-blue-500"></span>
                </div>

                <div class="fixed bottom-0 left-0 right-0 z-50 lg:hidden">
                    <div
                        class="bg-white/95 dark:bg-zinc-900/95 backdrop-blur-md border-t border-slate-200 dark:border-zinc-800 px-3 py-3 shadow-[0_-10px_30px_rgba(0,0,0,0.15)]">
                        <div class="flex items-center justify-between gap-2">

                            <a :href="`tel:${post.data.contact.phone}`"
                                class="flex flex-1 flex-col items-start pl-1 group">
                                <span
                                    class="text-[9px] font-bold uppercase tracking-wider text-slate-400 dark:text-zinc-500">Teléfono</span>
                                <span
                                    class="text-[13px] font-black leading-none text-slate-900 dark:text-zinc-100 group-active:text-blue-600 transition-colors">
                                    {{ post.data.contact.phone }}
                                </span>
                            </a>

                            <Button asChild variant="outline"
                                class="h-11 flex-1 gap-1.5 rounded-xl border-slate-200 px-2 dark:border-zinc-700 dark:bg-zinc-800">
                                <a :href="`tel:${post.data.contact.phone}`" class="flex items-center justify-center">
                                    <Phone class="h-3.5 w-3.5 text-blue-600 dark:text-blue-400" />
                                    <span class="text-[11px] font-bold uppercase tracking-tight">Llamar</span>
                                </a>
                            </Button>

                            <Button asChild
                                class="h-11 flex-[1.5] gap-1.5 rounded-xl bg-[#25D366] px-2 text-white hover:bg-[#20ba5a] active:scale-95 transition-all">
                                <a :href="whatsappUrl" target="_blank" class="flex items-center justify-center">
                                    <MessageCircle class="h-4 w-4 fill-current" />
                                    <span class="text-[11px] font-bold uppercase tracking-tight">WhatsApp</span>
                                </a>
                            </Button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>


    <Report :open="openReport" :post-id="Number(post.data.id)" @close="openReport = false" />


</template>
<style scoped>
/* Efecto de suavizado para el modo oscuro */
.dark Card {
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.4);
}
</style>