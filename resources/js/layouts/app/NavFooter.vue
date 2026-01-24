<script setup lang="ts">
</script>

<template>
<footer class="w-full bg-[#fca5a5] text-[#4a1f1f] py-10 mt-10">
  <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-10">

    <!-- Columna 1: Marca + propósito -->
    <div class="space-y-4">
        <h2 class="text-2xl font-semibold text-red-900">
            DonadorRapido
        </h2>

        <p class="text-white dark:text-white leading-relaxed text-sm">
            Plataforma digital de hospedaje de páginas informativas para
            facilitar la visibilidad de solicitudes personales.
        </p>

        <p class="text-xs text-white dark:text-white">
            DonadorRapido no intermedia ni participa en acuerdos entre usuarios.
        </p>
    </div>

    <!-- Columna 2: Navegación -->
    <div>
        <h3 class="text-sm font-semibold text-red-900 uppercase tracking-wide mb-4">
            Navegación
        </h3>

        <ul class="space-y-2 text-sm text-white dark:text-white">
            <li>
                <a href="/" class="hover:text-red-900 transition">
                    Solicitantes
                </a>
            </li>
            <li>
                <a href="/publicar" class="hover:text-red-900 transition">
                    Publicar perfil
                </a>
            </li>
            <li>
                <a href="/ayuda" class="hover:text-red-900 transition">
                    Ayuda
                </a>
            </li>
            <li>
                <a href="/contacto" class="hover:text-red-900 transition">
                    Contacto
                </a>
            </li>
        </ul>
    </div>

    <!-- Columna 3: Legal -->
    <div>
        <h3 class="text-sm font-semibold text-red-900 uppercase tracking-wide mb-4 ">
            Información legal
        </h3>

        <ul class="space-y-2 text-sm text-white dark:text-white">
              <li>
                <a href="/perfiles-personales" class="hover:text-red-900 transition">
                    Perfiles Personales
                </a>
            </li>
            <li>
                <a href="/condiciones-de-uso" class="hover:text-red-900 transition">
                    Condiciones de uso
                </a>
            </li>
            <li>
                <a href="/politica-de-privacidad" class="hover:text-red-900 transition">
                    Política de privacidad
                </a>
            </li>
            <li>
                <a href="/politica-de-pago" class="hover:text-red-900 transition">
                    Política de pagos
                </a>
            </li>
          
        </ul>
    </div>

</div>


    <div class="border-t border-[#7f1d1d] mt-10 pt-5 text-center text-[#4a1f1f] text-sm">
        © {{ new Date().getFullYear() }} MiSitio — Todos los derechos reservados.
    </div>
</footer>

</template>
