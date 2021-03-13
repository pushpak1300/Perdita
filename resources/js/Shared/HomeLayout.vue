<template>
    <div class="overflow-y-auto">
        <div class="min-h-screen bg-gray-100">
            <header :class="{'fixed inset-0 z-40 overflow-y-auto': open, '': !open}"
                    class="bg-white shadow-sm lg:static lg:overflow-y-visible">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="relative flex justify-between xl:grid xl:grid-cols-12 lg:gap-8">
                        <div class="flex md:absolute md:left-0 md:inset-y-0 lg:static xl:col-span-2">
                            <div class="flex-shrink-0 flex items-center">
                                <a href="#">
                                    <Logo class="block h-8 font-bold w-auto text-indigo-500"/>
                                </a>
                            </div>
                        </div>
                        <div class="min-w-0 flex-1 md:px-8 lg:px-0 xl:col-span-6">
                            <div
                                class="flex items-center px-6 py-4 md:max-w-3xl md:mx-auto lg:max-w-none lg:mx-0 xl:px-0">
                                <div class="w-full">
                                    <label for="search" class="sr-only">Search</label>
                                    <div class="relative">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                                            <svg class="h-5 w-5 text-gray-400"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor">
                                                <path fill-rule="evenodd"
                                                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input id="search" name="search"
                                               class="block w-full bg-white border border-gray-300 rounded-md py-2 pl-10 pr-3 text-sm placeholder-gray-500 focus:outline-none focus:text-gray-900 focus:placeholder-gray-400 focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                               placeholder="Search" type="search">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center md:absolute md:right-0 md:inset-y-0 lg:hidden">
                            <!-- Mobile menu button -->
                            <button type="button" @click="open = !open"
                                    class="-mx-2 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                                    aria-expanded="false">
                                <span class="sr-only">Open menu</span>
                                <!-- Icon when menu is closed. -->
                                <svg
                                    :class="{ 'hidden': open, 'block': !open }" class="block h-6 w-6"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                                <!-- Icon when menu is open. -->
                                <svg :class="{ 'hidden': !open, 'block': open }" class="hidden h-6 w-6"
                                     xmlns="http://www.w3.org/2000/svg"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="hidden lg:flex lg:items-center lg:justify-end xl:col-span-4">
                            <!-- Profile dropdown -->
                            <div class="flex-shrink-0 relative ml-5">
                                <div>
                                    <button type="button" @click="toggle"
                                            class="bg-white rounded-full flex focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            id="user-menu" aria-haspopup="true">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full"
                                             src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                             alt="">
                                    </button>
                                </div>
                                <transition enter-active-class="transition ease-out duration-100"
                                            enter-class="transform opacity-0 scale-95"
                                            enter-to-class="transform opacity-100 scale-100"
                                            leave-active-class="transition ease-in duration-75"
                                            leave-class="transform opacity-100 scale-100"
                                            leave-to-class="transform opacity-0 scale-95">
                                    <div v-if="open"
                                         class="origin-top-right absolute z-10 right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 py-1"
                                         role="menu" aria-orientation="vertical" aria-labelledby="user-menu">

                                        <a :href="route('profile')"
                                           class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100"
                                           role="menuitem">Your Profile</a>

                                        <a :href="route('logout')"
                                           class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100"
                                           role="menuitem">Logout</a>

                                    </div>
                                </transition>
                            </div>

                            <inertia-link :href="route('items.create')"
                                          class="ml-6 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Add Item
                            </inertia-link>
                        </div>
                    </div>
                </div>

                <nav :class="{ 'block': open, 'hidden': !open }" class="hidden lg:hidden"
                     aria-label="Global">
                    <div class="max-w-3xl mx-auto px-2 pt-2 pb-3 space-y-1 sm:px-4">

                        <inertia-link :href="route('home')" aria-current="page"
                           class="bg-gray-100 text-gray-900 block rounded-md py-2 px-3 text-base font-medium text-gray-900">Home</inertia-link>

                        <inertia-link :href="route('dashboard')" aria-current="false"
                           class="hover:bg-gray-50 block rounded-md py-2 px-3 text-base font-medium text-gray-900">Dashboard</inertia-link>

                        <inertia-link :href="route('profile')" aria-current="false"
                           class="hover:bg-gray-50 block rounded-md py-2 px-3 text-base font-medium text-gray-900">Profile</inertia-link>

                    </div>
                    <div class="border-t border-gray-200 pt-4 pb-3">
                        <div class="max-w-3xl mx-auto px-4 flex items-center sm:px-6">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full"
                                     src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">
                            </div>
                            <div class="ml-3">
                                <div class="text-base font-medium text-gray-800">Chelsea Hagon</div>
                                <div class="text-sm font-medium text-gray-500">chelseahagon@example.com</div>
                            </div>
                            <button type="button"
                                    class="ml-auto flex-shrink-0 bg-white rounded-full p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <span class="sr-only">View notifications</span>
                                <svg class="h-6 w-6"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="mt-3 max-w-3xl mx-auto px-2 space-y-1 sm:px-4">

                            <a href="#"
                               class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Your
                                Profile</a>

                            <a :href="route('logout')"
                               class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Logout</a>

                        </div>
                    </div>
                </nav>
            </header>

            <div class="py-10">
                <div class="max-w-3xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-12 lg:gap-8">
                    <div class="hidden lg:block lg:col-span-3 xl:col-span-2">
                        <nav aria-label="Sidebar" class="sticky top-4 divide-y divide-gray-300">
                            <div class="pb-8 space-y-1">

                                <inertia-link :href="route('home')"
                                   class="bg-gray-200 text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-md"
                                   aria-current="page">
                                    <svg class="text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                                         xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                    </svg>
                                    <span class="truncate">
                      Home
                    </span>
                                </inertia-link>

                                <inertia-link :href="route('dashboard')"
                                   class="text-gray-600 hover:bg-gray-50 group flex items-center px-3 py-2 text-sm font-medium rounded-md"
                                   aria-current="false">
                                    <svg
                                        class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"></path>
                                    </svg>
                                    <span class="truncate">
                      Dashboard
                    </span>
                                </inertia-link>

                                <inertia-link :href="route('profile')"
                                   class="text-gray-600 hover:bg-gray-50 group flex items-center px-3 py-2 text-sm font-medium rounded-md"
                                   aria-current="false">
                                    <svg
                                        class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    <span class="truncate">
                      Profile
                    </span>
                                </inertia-link>


                            </div>
                            <div class="pt-10">
                                <p class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider"
                                   id="communities-headline">
                                    Search by category
                                </p>
                                <div class="mt-3 space-y-2" aria-labelledby="communities-headline">

                                    <a href="#"
                                       class="group flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                      <span class="truncate">
                        Electronics
                      </span>
                                    </a>

                                    <a href="#"
                                       class="group flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                      <span class="truncate">
                        Wallet
                      </span>
                                    </a>

                                    <a href="#"
                                       class="group flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                      <span class="truncate">
                        Documents
                      </span>
                                    </a>

                                    <a href="#"
                                       class="group flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                      <span class="truncate">
                        Pets
                      </span>
                                    </a>

                                    <a href="#"
                                       class="group flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                      <span class="truncate">
                        Jewelry & Accessories
                      </span>
                                    </a>

                                    <a href="#"
                                       class="group flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                      <span class="truncate">
                        Talents
                      </span>
                                    </a>

                                    <a href="#"
                                       class="group flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                      <span class="truncate">
                        Gaming
                      </span>
                                    </a>

                                </div>
                            </div>
                        </nav>
                    </div>
                    <main class="sm:col-span-10 lg:col-span-9">
                        <slot/>
                    </main>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Logo from "./Logo";

export default {
    name: "HomeLayout",
    components: {Logo},
    data() {
        return {
            open: false
        }
    },
    methods: {
        toggle() {
            this.open = !this.open;
        }
    }
}
</script>

