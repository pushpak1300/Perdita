<template>
    <div>
        <form class="divide-y divide-gray-200 lg:col-span-6"
              @submit.prevent="handleForm" method="POST">
            <div class="py-4 px-4 sm:p-4 lg:pb-6">
                <div>
                    <h2 class="text-2xl leading-6 font-medium text-gray-900">Profile Settings</h2>
                </div>

                <div class="mt-6 flex flex-col lg:flex-row">
                    <div class="flex-grow space-y-6">
                        <div class="col-span-12 sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700">Full name</label>
                            <input type="text" name="name" id="name"
                                   v-model="form.name" disabled autocomplete="given-name"
                                   class="mt-1 block disabled:opacity-40 w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                        </div>

                        <div class="col-span-12 sm:col-span-6">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="text" name="email" disabled id="email" v-model="form.email"
                                   autocomplete="organization"
                                   class="mt-1 block w-full disabled:opacity-40 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                        </div>

                        <div class="col-span-12 sm:col-span-6">
                            <label for="linked_account" class="block text-sm font-medium text-gray-700">Linked
                                Accounts</label>
                            <button type="submit" id="linked_account"
                                    class="bg-blue-700 mt-2 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-light-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-light-blue-500">
                                {{ form.oauth_provider.toUpperCase() }}
                            </button>
                        </div>

                        <div class="col-span-12 sm:col-span-6">
                            <label for="mobile" class="block text-sm font-medium text-gray-700">
                                Mobile
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                            <span
                                class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                              +91
                            </span>
                                <input required type="tel" v-model="form.mobile" name="mobile" id="mobile"
                                       class="flex-1 min-w-0 block w-full px-3 py-2 rounded-none rounded-r-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300"
                                       placeholder="10 Digit Number">
                            </div>
                        </div>


                        <div class="col-span-12 sm:col-span-6">
                            <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                            <input type="text" required name="location" v-model="form.location" id="location"
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                        </div>
                    </div>

                    <div class="mt-6 flex-grow lg:mt-0 lg:ml-6 lg:flex-grow-0 lg:flex-shrink-0">
                        <p class="text-sm font-medium text-gray-700" aria-hidden="true">
                            Photo
                        </p>
                        <div class="mt-1 lg:hidden">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 inline-block rounded-full overflow-hidden h-12 w-12"
                                     aria-hidden="true">
                                    <img class="rounded-full h-full w-full" :src="form.avatar" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="hidden relative rounded-full overflow-hidden lg:block">
                            <img class="relative rounded-full w-40 h-40" :src="form.avatar" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4 py-4 px-4 flex justify-end sm:px-6">
                <button type="submit"
                        :disabled="form.processing"
                        class="ml-5 bg-blue-700 disabled:opacity-40 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-light-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-light-blue-500">
                    Update
                </button>
            </div>
        </form>
    </div>
</template>

<script>
import HomeLayout from "../../Shared/HomeLayout";

export default {
    name: "Index",
    layout: HomeLayout,
    data() {
        return {
            form: this.$inertia.form({
                ...this.$page.props.auth.user
            }),
        }
    },
    methods: {
        handleForm() {
            this.form.put(route('user-profile-information.update'), {
                onSuccess: () => {
                    alert('user updated sucessfully');
                }
            })
        }
    }
}
</script>

<style scoped>

</style>
