<template>
    <div>
    <div class="sm:hidden">
        <label for="question-tabs" class="sr-only">Select a tab</label>
        <select id="question-tabs" class="block w-full rounded-md border-gray-300 text-base font-medium text-gray-900 shadow-sm focus:border-rose-500 focus:ring-rose-500">
            <option value="#/all">All</option>
            <option value="#/lost">Lost</option>
            <option value="#/found">Found</option>
        </select>
    </div>
    <div class="hidden sm:block">
        <nav class="relative z-0 rounded-lg shadow flex divide-x divide-gray-200" aria-label="Tabs">
        
            <a href="#" aria-current="page" class="text-gray-900 rounded-l-lg  group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                <span>All</span>
                <span aria-hidden="true" class="bg-rose-500 absolute inset-x-0 bottom-0 h-0.5"></span>
            </a>
        
            <a href="#" aria-current="false" class="text-gray-500 hover:text-gray-700   group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                <span>Lost</span>
                <span aria-hidden="true" class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
            </a>
        
            <a href="#" aria-current="false" class="text-gray-500 hover:text-gray-700  rounded-r-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                <span>Found</span>
                <span aria-hidden="true" class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
            </a>
        </nav>
    </div>
    <div class="text-gray-600 body-font">
        <div class="container px-4 py-10 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div v-for="item in items" :key="item.id"  class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img
                            alt="ecommerce"
                            class="object-cover object-center w-full h-full block"
                            src="https://dummyimage.com/420x260"
                        />
                    </a>
                    <div class="mt-4">
                        <h3
                            class="text-gray-500 text-xs tracking-widest title-font mb-1"
                        >
                            {{ item.category }}
                        </h3>
                        <h2
                            class="text-gray-900 title-font text-lg font-medium"
                        >
                            {{ item.title }}
                        </h2>
                        <p class="mt-1">{{ item.location }}</p>
                    </div>
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
    data() {
        return {
                items: [
                {
                    id: "sda1osad",
                    category: "Electronics",
                    title: "iPhone",
                    location: "Andheri"
                },
                {
                    id: "sda1osae",
                    category: "Jewelry & Accessories",
                    title: "Diamond Necklace",
                    location: "Borivali"
                },
                {
                    id: "sda1osa23",
                    category: "Luggage",
                    title: "Black bag",
                    location: "Dadar"
                },
                {
                    id: "sda1osa564",
                    category: "Electronics",
                    title: "Moto G9",
                    location: "Andheri"
                },
                {
                    id: "sda1osa3",
                    category: "Wallet",
                    title: "Red wallet",
                    location: "Vile-Parle"
                }
            ]
        }
    }
};
</script>

