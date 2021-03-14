<template>
    <div>
        <div class="sm:hidden">
            <label for="question-tabs" class="sr-only">Select a tab</label>
            <select id="question-tabs"
                    class="block w-full rounded-md border-gray-300 text-base font-medium text-gray-900 shadow-sm focus:border-rose-500 focus:ring-rose-500">
                <option value="#/all">All</option>
                <option value="#/lost">Lost</option>
                <option value="#/found">Found</option>
            </select>
        </div>
        <div class="hidden sm:block">
            <nav class="relative z-0 rounded-lg shadow flex divide-x divide-gray-200" aria-label="Tabs">

                <a href="#" aria-current="page"
                   class="text-gray-900 rounded-l-lg  group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                    <span>All</span>
                    <span aria-hidden="true" class="bg-rose-500 absolute inset-x-0 bottom-0 h-0.5"></span>
                </a>

                <a href="#" aria-current="false"
                   class="text-gray-500 hover:text-gray-700   group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                    <span>Lost</span>
                    <span aria-hidden="true" class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
                </a>

                <a href="#" aria-current="false"
                   class="text-gray-500 hover:text-gray-700  rounded-r-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                    <span>Found</span>
                    <span aria-hidden="true" class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
                </a>
            </nav>
        </div>
        <div class="text-gray-600 body-font">
            <div class="container px-4 py-10 mx-auto">
                <div v-if="items.length > 0" class="flex flex-wrap -m-4">
                    <div v-for="item in items" :key="item.id" class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <div
                            class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
                            <div class="flex-1 flex flex-col p-0 bg-white">
                                <img
                                    alt="item"
                                    class="object-cover object-center p-0 w-full h-full block"
                                    src="https://cdn2.thecatapi.com/images/1gd.png"
                                />
                                <h3 class="mt-6 text-gray-900 text-sm font-medium">{{ item.title }}</h3>
                                <dl class="mt-1 flex-grow flex flex-col justify-between">
                                    <dd class="text-gray-500 text-sm">{{ item.location }}</dd>
                                    <dt class="sr-only">{{ item.location }}</dt>
                                    <dt class="sr-only">Role</dt>
                                    <dd class="mt-3">
                        <span
                            class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full" v-if="item.type === 'found'">Found</span>
                                         <span
                            class="px-2 py-1 text-green-800 text-xs font-medium bg-red-100 rounded-full" v-else>Lost</span>
                                    </dd>
                                </dl>
                            </div>
                            <div>
                                <div class="-mt-px flex divide-x divide-gray-400 bg-white">
                                    <div class="w-0 flex-1 flex">
                                        <inertia-link :href="route('items.show',item.id)"
                                           class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-gray-200 mt-2 rounded-bl-lg hover:text-gray-500">
                                            <span class="ml-3">View</span>
                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor">
                                                <path fill-rule="evenodd"
                                                      d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                        </inertia-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div v-else>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        No items found.
                    </h3>
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
        items: {
            type: Object,
            required: true
        }
    }
};
</script>

