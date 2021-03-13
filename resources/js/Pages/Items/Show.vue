<template>
    <div
        v-if="open"
        class="fixed z-10 inset-0 overflow-y-auto"
    >
        <div
            class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"
        >
            <transition
                enter-active-class="ease-out duration-300"
                enter-class="opacity-0"
                enter-to-class="opacity-100"
                leave-active-class="ease-in duration-200"
                leave-class="opacity-100"
                leave-to-class="opacity-0"
            >
                <div
                    v-if="open"
                    class="fixed inset-0 transition-opacity"
                    aria-hidden="true"
                >
                    <div
                        class="absolute inset-0 bg-gray-500 opacity-75"
                    ></div>
                </div
                >
            </transition>

            <!-- This element is to trick the browser into centering the modal contents. -->
            <span
                class="hidden sm:inline-block sm:align-middle sm:h-screen"
                aria-hidden="true"
            >​</span
            >
            <transition
                enter-active-class="ease-out duration-300"
                enter-class="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                enter-to-class="opacity-100 translate-y-0 sm:scale-100"
                leave-active-class="ease-in duration-200"
                leave-class="opacity-100 translate-y-0 sm:scale-100"
                leave-to-class="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            >
                <div
                    v-if="open"
                    class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"
                    role="dialog"
                    aria-modal="true"
                    aria-labelledby="modal-headline"
                >
                    <div>
                        <div class="text-center sm:mt-5">
                            <h3
                                class="text-lg leading-6 font-medium text-gray-900"
                                id="modal-headline"
                            >
                                Request to contact
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">
                                    Lorem ipsum, dolor sit amet consectetur
                                    adipisicing elit. Eius aliquam laudantium
                                    explicabo pariatur iste dolorem animi vitae
                                    error totam. At sapiente aliquam accusamus
                                    facere veritatis.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense"
                    >
                        <button
                            @click="open=false"
                            type="button"
                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:col-start-2 sm:text-sm"
                        >
                            Request
                        </button>
                        <button
                            @click="open=false"
                            type="button"
                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:col-start-1 sm:text-sm"
                        >
                            Cancel
                        </button>
                    </div>
                </div>
            </transition
            >
        </div>
    </div>

    <div class="flex-row sm:flex">
        <div class="max-w-7xl mx-auto py-3 sm:px-3 lg:px-6">
            <div class="max-w-3xl mx-auto">
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="flex justify-between px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Item Details
                        </h3>
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium bg-green-100 text-green-800">
                            Found
                        </span>
                    </div>
                    <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                        <div class="container">
                            <div class="lg:w-4/5 flex flex-wrap">
                                <img
                                    alt="ecommerce"
                                    class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded"
                                    src="https://dummyimage.com/400x400"
                                />
                                <div
                                    class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0"
                                >
                                    <h2
                                        class="text-sm title-font text-gray-500 tracking-widest"
                                    >
                                        Wallet
                                    </h2>
                                    <h1
                                        class="text-gray-900 text-3xl title-font font-medium mb-1"
                                    >
                                        Red Wallet
                                    </h1>
                                    <p class="leading-relaxed py-5">
                                        It is a red leather wallet, with black
                                        accents at the edges.
                                    </p>

                                    <div
                                        class="py-3 sm:py-2 sm:grid sm:gap-4 sm:grid-cols-3"
                                    >
                                        <dt
                                            class="text-sm font-medium text-gray-500"
                                        >
                                            Location
                                        </dt>
                                        <dd
                                            class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"
                                        >
                                            Andheri
                                        </dd>
                                    </div>

                                    <div
                                        class="py-1 sm:py-2 sm:grid  sm:gap-4 sm:grid-cols-3"
                                    >
                                        <dt
                                            class="text-sm font-medium text-gray-500"
                                        >
                                            Found
                                        </dt>
                                        <dd
                                            class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"
                                        >
                                            31st March, 2020
                                        </dd>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200"
        >
            <div class="flex-1 flex-col p-8">
                <img
                    class="w-64 h-48 flex-shrink-0 mx-auto bg-black rounded-full"
                    src=""
                    alt=""
                />
                <h3 class="mt-6 text-gray-900 text-sm font-medium">
                    Jane Cooper
                </h3>
                <dl class="mt-1 flex flex-col">
                    <dd class="text-gray-500 text-sm">Location</dd>
                </dl>
            </div>
            <div>
                <div class="-mt-px flex divide-x divide-gray-200">
                    <div class="-ml-px w-0 flex-1 flex">
                        <a
                            @click="open = true"
                            style="cursor: pointer"
                            class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500"
                        >
                            <svg
                                class="w-5 h-5 text-indigo-500"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="indigo"
                            >
                                <path
                                    d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"
                                ></path>
                            </svg>
                            <span class="ml-3">Request Contact</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import HomeLayout from "../../Shared/HomeLayout";

export default {
    name: "Index",
    layout: HomeLayout,
    props: {
        item: {
            type: Object,
            required: true
        }
    },
    data: () => ({
        open: false
    })
};
</script>

<style scoped></style>
