<template>
    <div class="text-gray-600 body-font">
        <h2 class="px-4">Home</h2>
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

