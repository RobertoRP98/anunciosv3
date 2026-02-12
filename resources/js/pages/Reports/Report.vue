<script setup>
import InputError from '@/components/InputError.vue';
import { Button } from '@/components/ui/button';
import {
    Dialog,
    DialogContent,
    DialogDescription,
    DialogFooter,
    DialogHeader,
    DialogTitle,
} from '@/components/ui/dialog';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import {
    Select,
    SelectContent,
    SelectItem,
    SelectTrigger,
} from '@/components/ui/select';
import SelectValue from '@/components/ui/select/SelectValue.vue';

import { Textarea } from '@/components/ui/textarea';
import { useForm } from '@inertiajs/vue3';
import { ref, computed } from 'vue';

const props = defineProps({
    open: Boolean,
    post: String,
});

const emit = defineEmits(['close']);

const form = useForm({
    post_id: props.post,
    reason: '',
    description: '',
    description: '',
    terms_accepte: false,
});

const submitForm = () => {
    form.post(`/solicitante/{post}/reportar`, {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
            emit('close');
        },
    });
};


</script>

<template>
    <Dialog :open="open" @update:open="(val) => val || emit('close')">
        <DialogContent class="max-h-[80vh]  overflow-y-auto">
            <DialogHeader>
                <DialogTitle>Reportar anuncio</DialogTitle>
                <DialogDescription>
                    Completa los siguientes campos para reportar el anuncio.
                </DialogDescription>
            </DialogHeader>

            <!-- campos del formulario -->
            <div class="grid gap-4">



                <div class="grid w-full gap-2">
                    <Label for="description">Motivo del reporte</Label>
                    <Textarea v-model="form.description" placeholder="Este anuncio esta mal porque..."></Textarea>
                    <InputError :message="form.errors.description"></InputError>
                </div>


            </div>
            <DialogFooter>
                <Button variant="outline" @click="emit('close')">Cancelar</Button>
                <Button @click="submitForm" :disabled="form.processing">
                    <span v-if="form.processing">Guardando…</span>
                    <span v-else>Guardar</span>
                </Button>
            </DialogFooter>


        </DialogContent>
    </Dialog>
</template>
