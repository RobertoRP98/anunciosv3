<script setup>
import AppLayout from '@/layouts/app/AppHeaderLayout.vue';
import { Head, router } from '@inertiajs/vue3';
import { onMounted, ref, watch } from 'vue';
import { route } from 'ziggy-js';
import { Link } from '@inertiajs/vue3'
import { Button } from '@/components/ui/button';
//IMPORTS PARA LAS TARJERTAS DE ANUNCIOS
import {
    Card,
    CardContent,
} from '@/components/ui/card';

import { Input } from '@/components/ui/input';
import {
    Select,
    SelectContent,
    SelectItem,
    SelectTrigger,
} from '@/components/ui/select';
import SelectValue from '@/components/ui/select/SelectValue.vue';

const props = defineProps({
    stateSearch: Array,
    categoriesSearch: Array,
    state: String,
    municipio: String,
    category: String,
    searchquery: String,
    anuncios: Object,
});

const cardClass = (priority) => {
    switch (priority) {
        // 🔥 URGENTE / DESTACADO
        case 1:
            return `
relative
border-2 border-yellow-400/70
bg-yellow-100/90


dark:border-yellow-400/40
dark:bg-yellow-100/90
dark:shadow-[0_0_12px_rgba(234,179,8,0.25)]


hover:bg-red-400/90
dark:hover:bg-red-400/90


transition
`



        // 🔵 PRIORITARIO
        case 2:
            return `
border border-blue-400/60
hover:bg-blue-50
bg-blue-50/60
dark:shadow-[0_0_10px_rgba(59,130,246,0.2)]

dark:bg-blue-300/100
dark:hover:bg-blue-200/100
transition
`


        // ⚪ GRATIS
        default:
            return `
bg-white
dark:bg-white-900/10
`
    }
}

// sentinel para placeholder de municipio (no debe coincidir con ningún slug real)
const MUNICIPIO_NULL = '__all__';

// Función que nunca deja valores vacíos para estado/categoría
const normalize = (val) => {
    if (!val || val === '') return '_';
    return val;
};

// Valores iniciales seguros
const selectedState = ref(props.state || '');
/** municipio usa placeholder diferente: si no viene por prop usamos el sentinel */
const selectedMunicipio = ref(props.municipio || null);
const selectedCategory = ref(normalize(props.category));
const searchquery = ref(props.searchquery || '');

// Municipios dinámicos
const municipios = ref([]);

// Cargar municipios cuando cambia estado
watch(selectedState, async (value) => {
    value = normalize(value);

    if (value === '_') {
        municipios.value = [];
        // Si no hay estado seleccionado, dejamos el placeholder de municipio
        selectedMunicipio.value = MUNICIPIO_NULL;
        return;
    }

    const res = await fetch(`/api/municipiosSelect/${value}`);
    municipios.value = await res.json();

    // Si el municipio actual no existe en la lista (o es placeholder), dejar placeholder
    const exists = municipios.value.some(
        (m) => m.slug === selectedMunicipio.value,
    );
    if (!exists) selectedMunicipio.value = MUNICIPIO_NULL;
});

// Botón buscar
//  let urlParams = [selectedState.value];

const buscar = () => {
    let urlParams = [];

    // 1) Estado solo si existe
    if (selectedState.value) {
        urlParams.push(selectedState.value);
    }

    // 2) Categoría (usa '_' para todas)
    if (selectedCategory.value && selectedCategory.value !== '_') {
        urlParams.push(selectedCategory.value);
    }

    // 3) Municipio: null = todos → NO se agrega
    if (selectedMunicipio.value !== '__all__') {
        urlParams.push(selectedMunicipio.value);
    }

    const currentSearchQuery = searchquery.value || '';

    router.get(
        // Primer argumento: URL/Ruta con parámetros de ruta
        route('index.public', urlParams),

        // Segundo argumento: Objeto de datos (query parameters)
        {
            searchquery: currentSearchQuery,
        },

        // Tercer argumento: Opciones de Inertia (aquí va onFinish)
        {
            replace: true,
            preserveState: true, // Para mantener el estado de Vue (e.g., scroll)
            onFinish: () => {
                // Limpiamos el valor del input *después* de que Inertia termina la visita
                searchquery.value = '';
            },
        },
    );
};

// Cargar municipios si ya había estado seleccionado (on mount)
onMounted(async () => {
    if (selectedState.value && selectedState.value !== '_') {
        const res = await fetch(`/api/municipiosSelect/${selectedState.value}`);
        const data = await res.json();
        municipios.value = data
            .filter((m) => m.slug && m.slug !== '') // <-- evita valores vacíos
            .map((m) => ({
                ...m,
                slug: String(m.slug), // <-- asegura que siempre sea string
            }));

        const exists = municipios.value.some(
            (m) => m.slug === selectedMunicipio.value,
        );
        if (!exists) selectedMunicipio.value = MUNICIPIO_NULL;
    } else {
        // sin estado seleccionado -> placeholder
        selectedMunicipio.value = MUNICIPIO_NULL;
    }
});
</script>

<template>

    <Head title="Solicitantes" />

    <AppLayout>
        <div class="s: grid grid-cols-1 grid-cols-2 items-end gap-4 md:grid-cols-2 lg:grid-cols-5 mt-1">
            <!-- SELECT ESTADO -->
            <div>
                <Select v-model="selectedState">
                    <SelectTrigger>
                        <SelectValue placeholder="Selecciona un Estado" />
                    </SelectTrigger>

                    <SelectContent>
                        <SelectItem v-for="estado in stateSearch" :key="estado.slug" :value="estado.slug">
                            {{ estado.name }}
                        </SelectItem>
                    </SelectContent>
                </Select>
            </div>

            <!-- SELECT MUNICIPIO -->
            <div>
                <Select v-model="selectedMunicipio">
                    <SelectTrigger>
                        <SelectValue placeholder="Selecciona Municipio" />
                    </SelectTrigger>

                    <SelectContent>
                        <SelectItem :value="MUNICIPIO_NULL">
                            Todos los municipios
                        </SelectItem>

                        <SelectItem v-for="m in municipios" :key="m.slug" :value="m.slug">
                            {{ m.name }}
                        </SelectItem>
                    </SelectContent>
                </Select>
            </div>

            <!-- SELECT CATEGORÍA -->
            <div>
                <Select v-model="selectedCategory">
                    <SelectTrigger>
                        <SelectValue placeholder="Seleccione una categoría" />
                    </SelectTrigger>

                    <SelectContent>
                        <SelectItem value="_">Todas las categorías</SelectItem>

                        <SelectItem v-for="c in categoriesSearch" :key="c.slug" :value="c.slug">
                            {{ c.name }}
                        </SelectItem>
                    </SelectContent>
                </Select>
            </div>

            <!-- INPUT BUSCADOR -->
            <div>
                <Input id="searchquery" v-model="searchquery" type="text" placeholder="Buscar. 'se necesita sangre'"
                    class="w-full" />
            </div>

            <!-- BOTÓN -->
            <div class="col-span-full md:col-span-2 lg:col-span-1">
                <Button @click="buscar"
                    class="text-bg-white w-full text-black bg-white hover:bg-red-500 hover:shadow-md border border-black">
                    Buscar
                </Button>
            </div>
        </div>


        <!-- INICIAN CARDS -->

        <div class="my-1 flex flex-col gap-4">
            <Link v-for="anuncio in props.anuncios.data" :key="anuncio.slug"
                :href="route('solicitante.public', anuncio.slug)" class="block">
                <Card :class="cardClass(anuncio.plan?.priority)" class="relative rounded-xl transition hover:shadow-md">
                    <!-- ⭐ BADGE DESTACADO -->
                    <div v-if="anuncio.plan?.priority === 1" class="absolute left-3 top-3 z-10 rounded-full
bg-yellow-400 px-3 py-1 text-xs font-bold
text-white shadow">
                        🚨​ SE SOLICITA MUY URGENTE
                    </div>


                    <!-- ⭐ BADGE DESTACADO -->
                    <div v-if="anuncio.plan?.priority === 2" class="absolute left-3 top-3 z-10 rounded-full
bg-blue-400 px-3 py-1 text-xs font-bold
text-white shadow">
                        URGENTE
                    </div>


                    <CardContent class="p-4">
                        <!-- MUNICIPIO -->
                        <div class="mb-2 flex justify-end">
                            <span class="rounded-full bg-slate-200 px-3 py-1
text-xs font-medium text-slate-700">
                                {{ anuncio.municipio?.name }}
                            </span>
                        </div>


                        <div class="flex gap-4">
                            <!-- CATEGORÍA -->
                            <div class="min-w-[110px] self-start rounded-md
bg-blue-100 px-3 py-2 text-center
text-xs font-semibold uppercase
text-blue-700">
                                {{ anuncio.category?.name }}
                            </div>


                            <!-- TEXTO -->
                            <div class="flex-1">
                                <h3 class="text-sm font-semibold text-slate-900">
                                    {{ anuncio.title }}
                                </h3>


                                <p class="mt-1 line-clamp-2 text-sm text-slate-600">
                                    {{ anuncio.description }}
                                </p>
                            </div>
                        </div>
                    </CardContent>
                </Card>
            </Link>
        </div>


        <div v-if="props.anuncios.links.length > 3" class="mt-6 flex justify-center">
            <nav class="flex gap-1">
                <button v-for="link in props.anuncios.links" :key="link.label" v-html="link.label" :disabled="!link.url"
                    @click="link.url && router.get(link.url, {}, { preserveScroll: false })"
                    class="rounded px-3 py-1 text-sm" :class="[
                        link.active
                            ? 'bg-red-500 text-white'
                            : 'bg-white border text-slate-700 hover:bg-slate-300',
                        !link.url && 'opacity-50 cursor-not-allowed',
                    ]" />
            </nav>
        </div>


    </AppLayout>
</template>
