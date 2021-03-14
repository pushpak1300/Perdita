<template>
    <div class="bg-gray-100">
        <div class="mx-auto px-4 sm:px-6 lg:px-8">
            <div>
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Your Activity
                </h3>
                <dl
                    class="mt-5 grid grid-cols-1 rounded-lg bg-white overflow-hidden shadow divide-y divide-gray-200 md:grid-cols-3 md:divide-y-0 md:divide-x"
                >
                    <div>
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-base font-normal text-gray-900">
                                Items Posted
                            </dt>
                            <dd
                                class="mt-1 flex justify-between items-baseline md:block lg:flex"
                            >
                                <div
                                    class="flex items-baseline text-2xl font-semibold text-indigo-600"
                                >
                                    {{ itemPosted.length }}
                                </div>
                            </dd>
                        </div>
                    </div>

                    <div>
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-base font-normal text-gray-900">
                                Items Returned
                            </dt>
                            <dd
                                class="mt-1 flex justify-between items-baseline md:block lg:flex"
                            >
                                <div
                                    class="flex items-baseline text-2xl font-semibold text-indigo-600"
                                >
                                    0
                                </div>
                            </dd>
                        </div>
                    </div>

                    <div>
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-base font-normal text-gray-900">
                                Total Claims
                            </dt>
                            <dd
                                class="mt-1 flex justify-between items-baseline md:block lg:flex"
                            >
                                <div
                                    class="flex items-baseline text-2xl font-semibold text-indigo-600"
                                >
                                    {{ itemClaims.length }}
                                </div>
                            </dd>
                        </div>
                    </div>
                </dl>
            </div>

            <div class="container py-10 mx-auto">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Claims
                    </h3>
                    <div v-if="itemClaims.length > 0" class="flex flex-wrap -m-4 mt-3">
                        <div v-for="item in claims" :key="item.id" class="lg:w-1/4 md:w-1/2 p-4 w-full">
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
                                class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full"
                                v-if="item.type === 'found'">Found</span>
                                            <span
                                                class="px-2 py-1 text-green-800 text-xs font-medium bg-red-100 rounded-full"
                                                v-else>Lost</span>
                                        </dd>
                                    </dl>
                                </div>
                                <div>
                                    <div class="-mt-px flex divide-x divide-gray-400 bg-white">
                                        <div class="w-0 flex-1 flex">
                                            <inertia-link :href="route('items.show',item.id)"
                                                          class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-gray-200 mt-2 rounded-bl-lg hover:text-gray-500">
                                                <span class="ml-3">View Status </span>
                                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 20 20"
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
                        <h4 class="text-lg leading-6 font-medium text-gray-500 mt-3 pl-2">
                            No items claimed yet.
                        </h4>
                    </div>
                </div>
            </div>

            <div class="container py-10 mx-auto">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Items Posted
                    </h3>
                    <div v-if="itemPosted.length > 0" class="flex flex-wrap -m-4 mt-3">
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
                                class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full"
                                v-if="item.type === 'found'">Found</span>
                                            <span
                                                class="px-2 py-1 text-green-800 text-xs font-medium bg-red-100 rounded-full"
                                                v-else>Lost</span>
                                        </dd>
                                    </dl>
                                </div>
                                <div>
                                    <div class="-mt-px flex divide-x divide-gray-400 bg-white">
                                        <div class="w-0 flex-1 flex">
                                            <inertia-link :href="route('communication.index',item.id)"
                                                          class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-gray-200 mt-2 rounded-bl-lg hover:text-gray-500">
                                                <span class="ml-3">View Responses </span>
                                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 20 20"
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
                        <h4 class="text-lg leading-6 font-medium text-gray-500 mt-3 pl-2">
                            No items posted yet.
                        </h4>
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
        itemClaims: {
            type: Object
        },
        itemPosted: {
            type: Object
        }
    },
    data() {
        return {
            claims: this.itemClaims,
            items: this.itemPosted
        }
    }
}
</script>

<style scoped></style>
