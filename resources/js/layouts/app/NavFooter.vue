<script setup lang="ts">
</script>

<template>
    <footer class="w-full bg-slate-50 text-slate-500 py-10 mt-10 border-t border-slate-100 dark:bg-zinc-950 dark:text-slate-400 dark:border-zinc-900">
        <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-10">

            <div class="space-y-4">
                <h2 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white">
                    DonadorRapido
                </h2>

                <p class="leading-relaxed text-sm">
                    Plataforma digital de hospedaje de páginas informativas para
                    facilitar la visibilidad de solicitudes personales.
                </p>

                <p class="text-xs opacity-80">
                    DonadorRapido no intermedia ni participa en acuerdos entre usuarios.
                </p>
            </div>

            <div>
                <h3 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-4 dark:text-white">
                    Navegación
                </h3>

               <ul class="space-y-3 text-sm">
                    <li>
                        <a href="/Solicitantes" class="hover:text-rose-600 transition-colors duration-200">
                            Solicitantes
                        </a>
                    </li>
                    <li>
                        <a href="/mis-anuncios" class="hover:text-rose-600 transition-colors duration-200">
                            Publicar anuncio
                        </a>
                    </li>

                </ul> 
            </div>

            <div>
                <h3 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-4 dark:text-white">
                    Información legal
                </h3>

                <ul class="space-y-3 text-sm">
                    <li>
                        <a href="/perfiles-personales" class="hover:text-rose-600 transition-colors duration-200">
                            Perfiles Personales
                        </a>
                    </li>
                    <li>
                        <a href="/condiciones-de-uso" class="hover:text-rose-600 transition-colors duration-200">
                            Condiciones de uso
                        </a>
                    </li>
                    <li>
                        <a href="/politica-de-privacidad" class="hover:text-rose-600 transition-colors duration-200">
                            Política de privacidad
                        </a>
                    </li>
                    <li>
                        <a href="/politica-de-pago" class="hover:text-rose-600 transition-colors duration-200">
                            Política de pagos
                        </a>
                    </li>
                </ul>
            </div>

        </div>


        <div class="border-t border-slate-200 mt-10 pt-8 text-center text-sm text-slate-400 dark:border-zinc-800 dark:text-slate-500">
            © {{ new Date().getFullYear() }} MiSitio — Todos los derechos reservados.
        </div>
    </footer>
</template>