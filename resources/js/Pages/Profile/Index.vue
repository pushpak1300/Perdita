<template>
    <div>
        <form class="divide-y divide-gray-200 lg:col-span-6" action="#" method="POST">
                <!-- Profile section -->
                <div class="py-6 px-4 sm:p-6 lg:pb-8">
                  <div>
                    <h2 class="text-lg leading-6 font-medium text-gray-900">Profile</h2>
                  </div>

                  <div class="mt-6 flex flex-col lg:flex-row">
                    <div class="flex-grow space-y-6">
                      <div class="col-span-12 sm:col-span-6">
                        <label for="first_name" class="block text-sm font-medium text-gray-700">Full name</label>
                        <input disabled type="text" name="name" id="name" :value="$page.props.auth.user.name" autocomplete="given-name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                        </div>

                        <div class="col-span-12 sm:col-span-6">
                      <label for="company" class="block text-sm font-medium text-gray-700">Email</label>
                      <input disabled type="text" name="email" id="email" :value="$page.props.auth.user.email" autocomplete="organization" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                    </div>

                        <div class="col-span-12 sm:col-span-6">
                      <label for="company" class="block text-sm font-medium text-gray-700">Mobile</label>
                      <input type="text" name="mobile" id="mobile" :value="$page.props.auth.user.mobile" autocomplete="organization" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                    </div>

                        <div class="col-span-12 sm:col-span-6">
                      <label for="company" class="block text-sm font-medium text-gray-700">Linked Account</label>
                      <input disabled type="text" name="linked_account" id="linked_account" :value="$page.props.auth.user.oauth_provider" autocomplete="organization" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                    </div>

                        <div class="col-span-12 sm:col-span-6">
                      <label for="company" class="block text-sm font-medium text-gray-700">Location</label>
                      <input type="text" name="location" id="location" :value="$page.props.auth.user.location" autocomplete="organization" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                    </div>
                    </div>

                    <div class="mt-6 flex-grow lg:mt-0 lg:ml-6 lg:flex-grow-0 lg:flex-shrink-0">
                      <p class="text-sm font-medium text-gray-700" aria-hidden="true">
                        Photo
                      </p>
                      <div class="mt-1 lg:hidden">
                        <div class="flex items-center">
                          <div class="flex-shrink-0 inline-block rounded-full overflow-hidden h-12 w-12" aria-hidden="true">
                            <img class="rounded-full h-full w-full" :src="$page.props.auth.user.avatar" alt="">
                          </div>
                        </div>
                      </div>

                      <div class="hidden relative rounded-full overflow-hidden lg:block">
                        <img class="relative rounded-full w-40 h-40" :src="$page.props.auth.user.avatar" alt="">
                      </div>
                    </div>
                  </div>
                </div>
            
                <div class="mt-4 py-4 px-4 flex justify-end sm:px-6">
                    <button type="submit" class="ml-5 bg-blue-700 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-light-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-light-blue-500">
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
    layout: HomeLayout
}
</script>

<style scoped>

</style>
