<script setup>
import {Head, Link} from '@inertiajs/vue3';
import TextLink from "@/Components/TextLink.vue";
import LinkCard from "@/Components/LinkCard.vue";

defineProps({
    canRegister: {
        type: Boolean,
        default: false,
    },
});
</script>

<template>
    <Head title="Welcome"/>

    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"
    >
        <div v-if="canRegister" class="sm:fixed sm:top-0 sm:right-0 p-6 text-end">
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
            >Dashboard
            </Link
            >

            <template v-else>
                <Link
                    :href="route('login')"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                >Log in
                </Link
                >

                <Link
                    :href="route('register')"
                    class="ms-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                >Register
                </Link
                >
            </template>
        </div>

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <h1 class="font-header font-bold text-4xl md:text-8xl dark:text-white">Chinuk-Wawa</h1>
            </div>
            <div class="mt-8 md:mt-16 md:text-xl dark:text-gray-200">
                <p>
                    Chinook Wawa is a hybrid language consisting of simplified Chinookan, combined with contributions
                    from
                    Nuuchahnulth (Nootkan), Canadian French, English, and other languages. It originated on the lower
                    Columbia
                    River, where it once was the predominant medium of intertribal and interethnic communication.
                    Even after English came into general use on the lower Columbia, Chinuk Wawa survived for generations
                    in
                    families and communities shaped by the meeting of the region’s historically diverse tribes and
                    races.
                </p>

                <p class="mt-2 md:mt-8">
                    Chinuk Wawa was the language spoken for trade with the Chinookan people by
                    <TextLink url="https://lewis-clark.org/native-nations/chinuk-wawa/" title="Lewis and Clark">Lewis
                        and Clark
                    </TextLink>
                    ,
                    <TextLink url="https://www.nps.gov/articles/languagesatfova.htm"
                              title="Hudson's Bay / Fort Vancouver">Hudson's Bay / Fort Vancouver
                    </TextLink>
                    , and other early settlers to the Pacific Northwest.
                </p>
            </div>

            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <LinkCard url="https://chinooknation.org/language/" title="The Chinook Indian Nation">
                        "Chinook Talk" or Chinook Jargon
                    </LinkCard>

                    <LinkCard url="https://chinookjargon.com/" title="Chinook Jargon">
                        Linguistic Archeology of the Pacific NW with David Douglas "Chinook Man" Robertson, PHD
                    </LinkCard>

                    <LinkCard url="https://kaltashwawa.ca/" title="The Kaltash Wawa">
                        Chinook Jargon news, lessons, and stories
                    </LinkCard>

                    <LinkCard
                        url="https://www.lanecc.edu/programs-academics/academic-departments/humanities-division/language-studies-department/chinuk-wawa"
                        title="LCC Chinuk Wawa Language Program">
                        The Chinuk Wawa Program at Lane Community College began in 2006, in collaboration with the
                        Confederated Tribes of the
                        Grand Ronde Community.
                    </LinkCard>
                </div>
            </div>
            <div class="flex justify-center mt-48 px-0 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                    <div class="flex items-center gap-2">
                        <a href="https://adambailey.io"
                           class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 class="-mt-px mr-1 w-5 h-5 fill-red-600 group-hover:stroke-red-400 motion-safe:animate-bounce">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                            </svg>
                            A.B.
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}

@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
