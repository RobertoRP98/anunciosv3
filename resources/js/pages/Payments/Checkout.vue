<script setup>
import AppLayout from '@/layouts/app/AppHeaderLayout.vue';
import { Head, usePage } from '@inertiajs/vue3';
import { onMounted } from 'vue';
import { toast } from 'vue-sonner';

const { props } = usePage();
const plan = props.plan;
const post = props.post;
const publicKey = props.mpKey;
const preferenceId = props.preferenceId;
const csrf_token = props.csrf_token;

console.log('PUBLIC KEY:', publicKey, typeof publicKey);
console.log(props);
console.log('CSRF:', props.csrf_token);

function initBrick() {
    const mp = new MercadoPago(publicKey, { locale: 'es-MX' });
    const bricksBuilder = mp.bricks();

    bricksBuilder.create('payment', 'paymentBrick_container', {
        initialization: {
            amount: plan.price,
            preferenceId: props.preferenceId,
            payer: {
                email: props.auth?.user?.email ?? '',
                firstName: props.auth?.user?.name ?? '',
                entityType: 'individual',
            },
        },

        mercadoPago: {
            preferenceId: preferenceId,
        },

        customization: {
            visual: {
                style: {
                    theme: 'default',
                },
            },
            paymentMethods: {
                creditCard: 'all',
                debitCard: 'all',
                // onboarding_credits: 'all',
                // wallet_purchase: 'all',
                maxInstallments: 3,
            },
        },

        callbacks: {
            onReady: () => {
                console.log('Payment Brick listo');
            },

            onSubmit: (formData) => {
                return new Promise((resolve, reject) => {
                    fetch('/process-payment', {
                        method: 'POST',
                        credentials: 'same-origin',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': props.csrf_token,
                        },
                        body: JSON.stringify({
                            ...formData,
                            post_id: post.id,
                            plan_id: plan.id,
                            transaction_amount: Number(plan.price),
                        }),
                    })
                        .then((res) => res.json())
                        .then((res) => {
                            if (res.status === 'success') {
                                window.location.href = res.redirect;
                                return;
                            } else {
                                toast.error(res.message || 'Error en el pago');
                                reject();
                            }
                        })
                        .catch(reject);
                });
            },

            onError: (error) => {
                console.error('Error en MEPA Brick:', error);
            },
        },
    });
}

onMounted(() => {
    const script = document.createElement('script');
    script.src = 'https://sdk.mercadopago.com/js/v2';
    script.onload = () => initBrick();
    document.body.appendChild(script);
});
</script>

<template>

    <Head title="Pagar Anuncio" />

    <AppLayout>
        <div class="mx-auto max-w-[500px] py-12 px-4">
            <div
                class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm dark:border-zinc-800 dark:bg-zinc-950">
                <div class="border-b border-slate-100 bg-slate-50/50 p-6 dark:border-zinc-800 dark:bg-zinc-900/50">
                    <h1 class="text-xl font-semibold tracking-tight">Resumen de la orden</h1>
                    <p class="text-sm text-slate-500 dark:text-zinc-400">Estás a un paso de destacar tu anuncio</p>
                </div>

                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="space-y-1">
                            <p class="text-sm font-medium leading-none text-slate-500 dark:text-zinc-400">Plan
                                seleccionado</p>
                            <p class="text-lg font-bold">{{ plan.name }}</p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium leading-none text-slate-500 dark:text-zinc-400">Total a pagar
                            </p>
                            <p class="text-2xl font-black text-blue-600 dark:text-blue-400">${{ plan.price }}</p>
                        </div>
                    </div>

                    <div class="h-px w-full bg-slate-100 dark:bg-zinc-800 mb-6"></div>

                    <div id="paymentBrick_container"></div>

                    <div class="mt-6 rounded-lg bg-slate-50 p-4 dark:bg-zinc-900">
                        <p class="text-[11px] leading-relaxed text-slate-500 dark:text-zinc-400">
                            Al completar el pago, confirmas que has leído y aceptas nuestras
                            <a href="/politica-de-pago" target="_blank"
                                class="font-semibold text-blue-600 hover:underline dark:text-blue-400">Politicas de
                                pago</a>.
                            Tu pago será procesado de forma segura a través de Mercado Pago.
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-4 text-center">
                <a href="/mis-anuncios">
                    <button @click="window.history.back()"
                        class="text-sm text-slate-400 hover:text-slate-600 transition-colors">
                        ← Cancelar y volver
                    </button>
                </a>
            </div>
        </div>
    </AppLayout>
</template>
