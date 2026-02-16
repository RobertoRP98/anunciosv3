<script setup>
import { Button, buttonVariants } from '@/components/ui/button';
import {
    Table,
    TableBody,
    TableCell,
    TableHead,
    TableHeader,
    TableRow,
} from '@/components/ui/table';
import AppLayout from '@/layouts/app/AppHeaderLayout.vue';
import Create from '@/pages/Posts/Create.vue';
import { Head, Link, usePage } from '@inertiajs/vue3';
import { ref, watch } from 'vue';


const page = usePage()

watch(
    () => page.props.errors.limit,
    (error) => {
        if (error) {
            openModal.value = true
        }
    },
    { immediate: true }
)

defineProps({
    posts: {
        type: Array,
        required: true,
    },

    categories: {
        type: Array,
        required: true,
    },
    states: {
        type: Array,
        required: true,
    },
    municipios: {
        type: Array,
        required: true,
    },
    plans: {
        type: Array,
        required: true,
    },
    phone: {
        type: String,
        required: true,
    },
});

const openModal = ref(false);

const breadcrumbs = [
    {
        title: 'Anuncios',
        href: '/#',
    },
];
</script>

<template>

    <Head title=" Mis Anuncios" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
            <div class="mt-3">
                <Button variant="outline" @click="openModal = true">
                    Agregar Anuncio
                </Button>

                <Create :open="openModal" @close="openModal = false" :categories="categories" :states="states"
                    :plans="plans" :municipios="municipios" :phone="phone" :limit-error="$page.props.errors.limit">
                </Create>
            </div>

            <div v-if="$page.props.errors.limit"
                class="mb-4 rounded-lg bg-red-50 border border-red-200 p-3 text-sm text-red-700">
                {{ $page.props.errors.limit }}
            </div>

            <div class="relative -mx-4 sm:mx-0 overflow-x-auto hidden sm:block">
                <div class="min-w-[900px] sm:min-w-0">

                    <Table>
                        <TableHeader>
                            <TableRow>
                                <TableHead>#</TableHead>
                                <TableHead>Titulo</TableHead>
                                <TableHead>Inicio</TableHead>
                                <TableHead>Fin</TableHead>
                                <TableHead>Vistas</TableHead>
                                <!-- <TableHead>Activo</TableHead>-->
                                <TableHead>Premium</TableHead>
                                <!--  <TableHead>Status</TableHead> -->
                                <TableHead class="w-120px">Opciones</TableHead>
                            </TableRow>
                        </TableHeader>

                        <TableBody>
                            <TableRow v-for="post in posts" :key="post.id">
                                <TableCell>{{ post.id }}</TableCell>
                                <TableCell>{{ post.title }}</TableCell>
                                <TableCell>{{ post.start_label ?? '-' }}</TableCell>
                                <TableCell>{{ post.end_label ?? '-' }}</TableCell>
                                <TableCell>{{ post.views }}</TableCell>
                                <!--  <TableCell>{{ post.active ? 'Si' : 'No' }}</TableCell> -->
                                <TableCell>{{
                                    post.is_premium ? 'Si' : 'No'
                                    }}</TableCell>
                                <!--  <TableCell>{{ post.status_label }}</TableCell> -->
                                <TableCell class="space-x-2">
                                    <Link :href="`/anuncios/${post.slug}`" :class="buttonVariants({ variant: 'secondary' })
                                        ">Ver</Link>

                                    <Link :href="`/anuncios/${post.slug}/edit`"
                                        :class="buttonVariants({ variant: 'default' })">
                                        Editar</Link>

                                    <Link
                                        v-if="!post.is_premium || post.status === 'pending' || post.status === 'expired' || (post.end && new Date(post.end) < new Date())"
                                        :href="`/anuncios/${post.slug}/premium`"
                                        :class="buttonVariants({ variant: 'default' })">
                                        ⭐ Hacer Premium
                                    </Link>
                                </TableCell>
                            </TableRow>
                        </TableBody>
                    </Table>
                </div>
            </div>
        </div>


        <div class="hidden md:block lg:hidden">
            <Table>
                <TableHeader>
                    <TableRow>
                        <TableHead>#</TableHead>
                        <TableHead>Titulo</TableHead>
                        <TableHead>Inicio</TableHead>
                        <TableHead>Fin</TableHead>
                        <TableHead>Vistas</TableHead>
                        <TableHead>Premium</TableHead>
                        <TableHead class="w-120px text-right">Opciones</TableHead>
                    </TableRow>
                </TableHeader>
                <TableBody>
                    <TableRow v-for="post in posts" :key="post.id">
                    </TableRow>
                </TableBody>
            </Table>
        </div>

        <div class="grid grid-cols-1 gap-4 md:hidden">
            <div v-for="post in posts" :key="post.id"
                class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-zinc-800 dark:bg-zinc-950">

                <div class="flex items-center justify-between mb-2">
                    <span class="text-xs font-mono text-slate-400">#{{ post.id }}</span>
                    <Badge :variant="post.is_premium ? 'default' : 'secondary'">
                        {{ post.is_premium ? '⭐ Premium' : 'Estándar' }}
                    </Badge>
                </div>

                <h3 class="font-bold text-lg mb-2 line-clamp-1">{{ post.title }}</h3>

                <div class="grid grid-cols-2 gap-2 text-sm mb-4">
                    <div>
                        <p class="text-slate-500">Inicio</p>
                        <p>{{ post.start_label ?? '-' }}</p>
                    </div>
                    <div>
                        <p class="text-slate-500">Fin</p>
                        <p>{{ post.end_label ?? '-' }}</p>
                    </div>
                    <div>
                        <p class="text-slate-500">Vistas</p>
                        <p class="font-medium">{{ post.views }}</p>
                    </div>
                </div>

                <div class="flex flex-wrap gap-2 pt-2 border-t border-slate-100 dark:border-zinc-800">
                    <Link :href="`/anuncios/${post.slug}`" :class="buttonVariants({ variant: 'secondary', size: 'sm' })"
                        class="flex-1">Ver</Link>
                    <Link :href="`/anuncios/${post.slug}/edit`"
                        :class="buttonVariants({ variant: 'default', size: 'sm' })" class="flex-1">Editar</Link>

                    <Link
                        v-if="!post.is_premium || post.status === 'pending' || post.status === 'expired' || (post.end && new Date(post.end) < new Date())"
                        :href="`/anuncios/${post.slug}/premium`"
                        :class="buttonVariants({ variant: 'default', size: 'sm' })"
                        class="w-full mt-1 bg-yellow-500 hover:bg-yellow-600 text-black">
                        ⭐ Hacer Premium
                    </Link>
                </div>
            </div>
        </div>

    </AppLayout>
</template>