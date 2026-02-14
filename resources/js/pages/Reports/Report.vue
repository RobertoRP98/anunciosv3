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
import { toast } from 'vue-sonner';
import { Textarea } from '@/components/ui/textarea';
import { useForm } from '@inertiajs/vue3';
import { ref, computed } from 'vue';

const props = defineProps({
    open: Boolean,
    postId: {
        type: Number,
        required: true
    }
});

const emit = defineEmits(['close']);

const form = useForm({
    post_id: props.postId,
    reason: '',
    description: '',
    contact: '',
    terms_accepted: false,
});

const submitForm = () => {
    // Si el campo contacto está vacío, reseteamos los términos por seguridad
    if (!form.contact) {
        form.terms_accepted = false;
    }

    form.post(`/solicitante/${props.postId}/reportar`, {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
            toast.success('Muchas gracias por tu reporte. Lo revisaremos lo antes posible.');
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

                <!-- Motivo -->
                <div class="grid gap-2">
                    <Label>Motivo</Label>
                    <Select v-model="form.reason">
                        <SelectTrigger>
                            <SelectValue placeholder="Selecciona un motivo" />
                        </SelectTrigger>
                        <SelectContent>
                            <SelectItem value="Incumple politicas">Incumple políticas</SelectItem>
                            <SelectItem value="Trafico">Tráfico</SelectItem>
                            <SelectItem value="Datos falsos">Datos falsos</SelectItem>
                            <SelectItem value="Contenido ofensivo">Contenido ofensivo</SelectItem>
                            <SelectItem value="Estafa o fraude">Estafa o fraude</SelectItem>
                            <SelectItem value="Otro">Otro</SelectItem>
                        </SelectContent>
                    </Select>
                    <InputError :message="form.errors.reason" />
                </div>

                <!-- Contacto -->
                <div class="grid gap-2">
                    <Label>Email (opcional)</Label>
                    <Input v-model="form.contact" placeholder="correo@ejemplo.com" />
                    <InputError :message="form.errors.contact" />
                </div>

                <div class="grid w-full gap-2">
                    <Label for="description">Motivo del reporte</Label>
                    <Textarea v-model="form.description" placeholder="Describe el problema (opcional)"></Textarea>
                    <InputError :message="form.errors.description"></InputError>
                </div>

                <!-- Términos -->
                <div v-if="form.contact" class="flex items-start gap-2">
                    <input type="checkbox" v-model="form.terms_accepted" />
                    <span class="text-xs text-slate-600">
                        Acepto que me contacten sobre este reporte
                    </span>
                    <InputError :message="form.errors.terms_accepted" />
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
