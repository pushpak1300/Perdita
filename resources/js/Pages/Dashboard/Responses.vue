<template>
    <div>
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            Responses
        </h3>
    </div>
    <div class="bg-white shadow overflow-hidden sm:rounded-md mt-4">
        <ul class="divide-y divide-gray-200">
            <li v-for="response in responses" :key="response.id">
                <inertia-link :href="route('response', response.id)" class="block hover:bg-gray-50">
                    <div class="flex items-center px-4 py-4 sm:px-6">
                        <div class="min-w-0 flex-1 flex items-center">
                            <div class="flex-shrink-0">
                                <img
                                    class="h-12 w-12 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                    alt=""
                                />
                            </div>
                            <div
                                class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4"
                            >
                                <div>
                                    <p
                                        class="text-sm font-medium text-indigo-600 truncate"
                                    >
                                        {{ response.name }}
                                    </p>
                                    <p
                                        class="mt-2 flex items-center text-sm text-gray-500"
                                    >
                                        <svg
                                            class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                            x-description="Heroicon name: solid/mail"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                            aria-hidden="true"
                                        >
                                            <path
                                                d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"
                                            ></path>
                                            <path
                                                d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"
                                            ></path>
                                        </svg>
                                        <span class="truncate"
                                            >{{ response.email }}</span
                                        >
                                    </p>
                                </div>
                                <div class="hidden md:block">
                                    <div>
                                        <p class="text-sm text-gray-900">
                                            Claimed on
                                            <!-- space -->
                                            <time datetime="2020-01-07"
                                                >{{ response.claimed }}</time
                                            >
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <svg
                                class="h-5 w-5 text-gray-400"
                                x-description="Heroicon name: solid/chevron-right"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </div>
                    </div>
                </inertia-link>
            </li>
        </ul>
    </div>
</template>

<script>
import HomeLayout from "../../Shared/HomeLayout";

export default {
    name: "Responses",
    layout: HomeLayout,
    data: () => ({
        responses: [
            {
                id: "da122ss",
                name: "Ethan Palani",
                email: "ethanpalani@gmail.com",
                claimed: "January 7, 2020"
            },
            {
                id: "da122s2",
                name: "Pushpak Chajed",
                email: "pushpopcj@gmail.com",
                claimed: "February 17, 2020"
            },
            {
                id: "da122s3",
                name: "Chinmay Gawde",
                email: "cgawde@gmail.com",
                claimed: "March 12, 2020"
            },
            {
                id: "da122s4",
                name: "Jeswin Thomas",
                email: "jt99eswin@gmail.com",
                claimed: "January 29, 2020"
            },
        ]
    })
};
</script>

<style scoped></style>
