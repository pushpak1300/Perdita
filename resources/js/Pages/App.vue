<template>
    <div class="h-full bg-gray-800 overflow-hidden">
        <div class="hidden sm:block sm:absolute sm:inset-0" aria-hidden="true">
            <svg
                class="absolute bottom-0 right-0 transform translate-x-1/2 mb-4 text-gray-700 lg:top-0 lg:mt-28 lg:mb-0 xl:transform-none xl:translate-x-0"
                width="364" height="384" viewBox="0 0 364 384" fill="none">
                <defs>
                    <pattern id="eab71dd9-9d7a-47bd-8044-256344ee00d0" x="0" y="0" width="20" height="20"
                             patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" fill="currentColor"></rect>
                    </pattern>
                </defs>
                <rect width="364" height="384" fill="url(#eab71dd9-9d7a-47bd-8044-256344ee00d0)"></rect>
            </svg>
        </div>
        <div class="h-full relative pt-6 pb-8 sm:pb-12">
            <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
                <div class="flex items-center">
                    <div class="flex items-center justify-between w-full md:w-auto">
                        <a href="#">
                            <span class="sr-only">Logo</span>
                            <logo class="h-6 w-auto sm:h-10 text-indigo-500"/>
                        </a>
                    </div>
                </div>
            </nav>

            <transition enter-active-class="duration-150 ease-out" enter-class="opacity-0 scale-95"
                        enter-to-class="opacity-100 scale-100" leave-active-class="duration-100 ease-in"
                        leave-class="opacity-100 scale-100" leave-to-class="opacity-0 scale-95">
                <div v-if="open"
                     class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
                    <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                        <div class="px-5 pt-4 flex items-center justify-between">
                            <div>
                                <img class="h-8 w-auto"
                                     src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
                            </div>
                            <div class="-mr-2">
                                <button @click="open = false" type="button"
                                        class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                    <span class="sr-only">Close menu</span>
                                    <svg class="h-6 w-6"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" :aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </transition>

            <main class="mt-24 sm:mt-12 ">
                <div class="mx-auto max-w-7xl">
                    <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                        <div
                            class="px-4 sm:px-6 sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left lg:flex lg:items-center">
                            <div>

                                <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:leading-none lg:mt-6 lg:text-5xl xl:text-6xl">
                                    <span class="md:block">What you've lost</span>
                                    <br class="sm:hidden">
                                    <span class="text-indigo-400 md:block">will be given a chance to be found</span>
                                </h1>
                                <p class="mt-3 text-base text-gray-400 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                                    Have you <span class="text-white">lost</span> or <span
                                    class="text-white">found</span> something valuable and are clueless as to, what you
                                    could do to about it?
                                </p>
                                <p class="mt-3 text-base text-gray-400 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                                    Firstly, take a deep breath. Because we've got you covered.
                                </p>
                                <p class="mt-8 text-sm text-white uppercase tracking-wide font-semibold sm:mt-10">Simple
                                    as ever</p>
                                <div class="mt-5 w-full sm:mx-auto sm:max-w-lg lg:ml-0">
                                    <div class="flex flex-wrap items-start justify-between">
                                        <div class="flex justify-flex-start px-1 align-items-center">
                                            <svg class="w-12 h-12" fill="none" stroke="white" viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                            </svg>
                                            <h3 class="tracking-light text-white  sm:mt-5 sm:leading-none lg:mt-4 lg:text-xl xl:text-xl">
                                                Log in</h3>
                                        </div>
                                        <div class="flex justify-flex-start px-1">
                                            <svg class="w-12 h-12" fill="none" stroke="white" viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                            </svg>
                                            <h3 class="tracking-light text-white  sm:mt-5 sm:leading-none lg:mt-4 lg:text-xl xl:text-xl">
                                                Upload details</h3>
                                        </div>
                                        <div class="flex justify-flex-start px-1">
                                            <svg class="w-12 h-12" fill="none" stroke="white" viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z"></path>
                                            </svg>
                                            <h3 class="tracking-light text-white  sm:mt-5 sm:leading-none lg:mt-4 lg:text-xl xl:text-xl">
                                                Look for it</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mx-4 sm:mx-0 mt-16 sm:mt-24 lg:col-span-6">
                            <div v-if="$page.props.auth.user === null "
                                 class="bg-white sm:max-w-md sm:w-full sm:mx-auto sm:rounded-lg sm:overflow-hidden">
                                <div class="px-4 py-8 sm:px-10">
                                    <div class="mt-6">
                                        <div>
                                            <h4 class="text-base mb-4 text-gray-600 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                                                Log in, to gain quick access to our portal
                                            </h4>
                                            <a type="submit"
                                               :href="route('google.redirect')"
                                               class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Sign in with Google
                                                <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                     aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-6 bg-gray-50 border-t-2 border-gray-200 sm:px-10">
                                    <p class="text-xs leading-5 text-gray-500">By signing up, you agree to our <a
                                        href="#" class="font-medium text-gray-900 hover:underline">Terms</a>, <a
                                        href="#" class="font-medium text-gray-900 hover:underline">Data Policy</a> and
                                        <a href="#" class="font-medium text-gray-900 hover:underline">Cookies Policy</a>.
                                    </p>
                                </div>
                            </div>
                            <div v-else
                                 class="bg-white sm:max-w-md sm:w-full sm:mx-auto sm:rounded-lg sm:overflow-hidden">
                                <div class="px-4 py-8 sm:px-10">
                                    <div class="mt-6">
                                        <div>
                                            <h4 class="text-base mb-4 text-gray-600 sm:mt-5 sm:text-2xl font-semibold">
                                                Hello, {{ $page.props.auth.user.name }}
                                            </h4>
                                            <h5 class="text-base mb-4 text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                                                We are happy to see you again, want to help someone out?
                                            </h5>
                                            <inertia-link
                                                :href="route('home')"
                                                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Go to Home
                                            </inertia-link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</template>

<script>
import Logo from "@/Shared/Logo";

export default {
    name: "App",
    components: {Logo},
    data() {
        return {
            open: false
        }
    }
}
</script>
