<template>
    <div>
        <form class="divide-y divide-gray-200 lg:col-span-6" action="#" method="POST">
                <!-- Profile section -->
                <div class="py-6 px-4 sm:p-6 lg:pb-8">
                  <div>
                    <h2 class="text-lg leading-6 font-medium text-gray-900">Profile</h2>
                    <p class="mt-1 text-sm text-gray-500">
                      This information will be displayed publicly so be careful what you share.
                    </p>
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
                            <img class="rounded-full h-full w-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80h" alt="">
                          </div>
                          <div class="ml-5 rounded-md shadow-sm">
                            <div class="group relative border border-gray-300 rounded-md py-2 px-3 flex items-center justify-center hover:bg-gray-50 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-light-blue-500">
                              <label for="user_photo" class="relative text-sm leading-4 font-medium text-gray-700 pointer-events-none">
                                <span>Change</span>
                                <span class="sr-only"> user photo</span>
                              </label>
                              <input id="user_photo" name="user_photo" type="file" class="absolute w-full h-full opacity-0 cursor-pointer border-gray-300 rounded-md">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="hidden relative rounded-full overflow-hidden lg:block">
                        <img class="relative rounded-full w-40 h-40" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=320&amp;h=320&amp;q=80" alt="">
                        <label for="user-photo" class="absolute inset-0 w-full h-full bg-black bg-opacity-75 flex items-center justify-center text-sm font-medium text-white opacity-0 hover:opacity-100 focus-within:opacity-100">
                          <span>Change</span>
                          <span class="sr-only"> user photo</span>
                          <input type="file" id="user-photo" name="user-photo" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer border-gray-300 rounded-md">
                        </label>
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
