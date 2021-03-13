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
                                    <label for="title" class="block text-sm font-medium text-gray-700">
                                        Short description of item lost
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input v-model="form.title" type="text" name="title" id="title"
                                               autocomplete="username"
                                               class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-md sm:text-sm border-gray-300">
                                    </div>
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="description" class="block text-sm font-medium text-gray-700">
                                        Full description
                                    </label>
                                    <div class="mt-1">
                                        <textarea v-model="form.description" id="description" name="description"
                                                  rows="3"
                                                  class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500">This information will be displayed publicly so
                                        be careful what you
                                        <share class=""></share>
                                    </p>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="city" class="block text-sm font-medium text-gray-700">
                                        City / Region
                                    </label>
                                    <div class="mt-1">
                                        <input type="text" name="city" id="city" v-model="form.location"
                                               class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="date" class="block text-sm font-medium text-gray-700">
                                        Date of Found/Lost Item
                                    </label>
                                    <div class="mt-1">
                                        <input type="date" :max="new Date()" name="date" id="date"
                                               v-model="form.date"
                                               autocomplete="family-name"
                                               class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="category" class="block text-sm font-medium text-gray-700">
                                        Category of Item
                                    </label>
                                    <div class="mt-1">
                                        <select id="category" name="category" v-model="form.category_id"
                                                autocomplete="country"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            <option v-for="category in $page.props.categories" :key="category.id"
                                                    :value="category.id">
                                                {{ category.text }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <fieldset class="sm:col-span-3">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">
                                            Item State
                                        </label>
                                    </div>
                                    <div class="mt-4  space-y-4">
                                        <div class="flex items-center mr-4">
                                            <input id="push_everything" name="item_state" type="radio"
                                                   v-model="form.type"
                                                   value="lost"
                                                   class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                            <label for="push_everything"
                                                   class="mx-3 block text-sm font-medium text-gray-700">
                                                Lost
                                            </label>
                                            <input id="push_email" name="item_state" type="radio"
                                                   value="found"
                                                   v-model="form.type"
                                                   class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                            <label for="push_email"
                                                   class="mx-3 block text-sm font-medium text-gray-700">
                                                Found
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="sm:col-span-6">
                                    <label class="block text-sm font-medium text-gray-700">
                                        Item Pictures
                                    </label>
                                    <FileInput @input="fileHandle" :error="form.errors.inputImage" class="pr-6 pb-8 w-full lg:w-1/2" type="file" accept="image/*" />
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
import HomeLayout from "../../Shared/HomeLayout.vue";
import FileInput from "../../Shared/FileInput.vue";

export default {
    name: "Create",
    layout: HomeLayout,
    components: {
        FileInput
    },
    methods:{
      fileHandle(event){
          this.form.inputImage = event;
      }
    },
    data() {
        return {
            form: this.$inertia.form({
                title: null,
                description: null,
                date: null,
                type: 'lost',
                reward: null,
                location: null,
                category_id: null,
                inputImage: null
            })
        }
    },
}
</script>
