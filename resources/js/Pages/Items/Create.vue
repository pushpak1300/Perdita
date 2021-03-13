<template>
    <div class="bg-white ml-5">
        <div class="max-w-full mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-full mx-auto">
                <form class="space-y-8 divide-y divide-gray-200" @submit.prevent="form.post('/items ')">
                    <div class="space-y-8 divide-y divide-gray-200">
                        <div>
                            <div>
                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    Post a lost and found item
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">
                                    This information will be displayed publicly so be careful what you share.
                                </p>
                            </div>

                            <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                                <div class="sm:col-span-4">
                                    <label for="username" class="block text-sm font-medium text-gray-700">
                                        Short description of item lost
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="username" id="username" autocomplete="username"
                                               class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-md sm:text-sm border-gray-300">
                                    </div>
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="about" class="block text-sm font-medium text-gray-700">
                                        Full description
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="about" name="about" rows="3"
                                                  class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500">This information will be displayed publicly so
                                        be careful what you
                                        <share class=""></share>
                                    </p>
                                </div>
                                <fieldset class="sm:col-span-6 ">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">
                                            Item State
                                        </label>
                                    </div>
                                    <div class="mt-4 space-y-4">
                                        <div class="flex items-center mr-4">
                                            <input id="push_everything" name="item_state" type="radio"
                                                   class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                            <label for="push_everything"
                                                   class="mx-3 block text-sm font-medium text-gray-700">
                                                Lost
                                            </label>
                                            <input id="push_email" name="item_state" type="radio"
                                                   class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                            <label for="push_email"
                                                   class="mx-3 block text-sm font-medium text-gray-700">
                                                Found
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="sm:col-span-3">
                                    <label for="city" class="block text-sm font-medium text-gray-700">
                                        City / Region
                                    </label>
                                    <div class="mt-1">
                                        <input type="text" name="city" id="city"
                                               class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="date" class="block text-sm font-medium text-gray-700">
                                        Date of Found/Lost Item
                                    </label>
                                    <div class="mt-1">
                                        <input type="date" :max="new Date()" name="date" id="date"
                                               autocomplete="family-name"
                                               class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <div class="sm:col-span-6">
                                    <label class="block text-sm font-medium text-gray-700">
                                        Item Pictures
                                    </label>
                                    <div
                                        class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                        <div class="space-y-1 text-center">
                                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor"
                                                 fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                <path
                                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                    stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                            <div class="flex text-sm text-gray-600">
                                                <label for="file-upload"
                                                       class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                    <span>Upload a file</span>
                                                    <input id="file-upload" name="file-upload" type="file"
                                                           class="sr-only">
                                                </label>
                                                <p class="pl-1">or drag and drop</p>
                                            </div>
                                            <p class="text-xs text-gray-500">
                                                PNG, JPG, GIF up to 10MB
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-5">
                        <div class="flex justify-end">
                            <inertia-link :href="route('home')"
                                    class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Cancel
                            </inertia-link>
                            <button type="submit"
                                    class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</template>

<script>
import HomeLayout from "../../Shared/HomeLayout";
import {useForm} from "@inertiajs/inertia-vue3";

export default {
    name: "Create",
    layout: HomeLayout,
    setup() {
        const form = useForm({
            title: null,
            description: null,
            date: null,
            type: null,
            reward: null,
            location: null,
            category_id: null,
        })

        return {form}
    },
}
</script>

<style scoped>

</style>
