<template>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2
                class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white"
            >
                Contact Us
            </h2>
            <p
                class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl"
            >
                Got a technical issue? Want to send feedback about a beta
                feature? Need details about our Business plan? Let us know.
            </p>
            <form class="space-y-8" @submit.prevent="submit">
                <div>
                    <label
                        for="name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                        >Your Name</label
                    >
                    <input
                        v-model="form.name"
                        type="text"
                        id="name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="Enter you name"
                    />
                    <div
                        v-if="form.errors.name"
                        class="input-error text-xs text-red-500 mt-2"
                    >
                        {{ form.errors.name }}
                    </div>
                </div>
                <div>
                    <label
                        for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                        >Your email</label
                    >
                    <input
                        v-model="form.email"
                        type="email"
                        id="email"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="name@flowbite.com"
                    />
                </div>
                <div>
                    <label
                        for="phone"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                        >Your Phone</label
                    >
                    <input
                        v-model="form.phone"
                        type="tel"
                        id="phone"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="Enter you phone"
                    />
                </div>
                <div>
                    <label
                        for="subject"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                        >Subject</label
                    >
                    <input
                        v-model="form.subject"
                        type="text"
                        id="subject"
                        class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="Let us know how we can help you"
                    />
                </div>
                <div class="sm:col-span-2">
                    <label
                        for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400"
                        >Your message</label
                    >
                    <textarea
                        v-model="form.message"
                        id="message"
                        rows="6"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Leave a comment..."
                    ></textarea>
                </div>
                <div class="sm:col-span-2">
                    <label
                        for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400"
                        >Allow to all teams & condition</label
                    >
                    <input
                        v-model="form.terms"
                        class="m-check-input"
                        type="checkbox"
                        id="m-lock"
                    />
                </div>
                <button
                    type="submit"
                    class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-slate-500 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                >
                    Send message
                </button>
            </form>
        </div>
    </section>
</template>
<script setup>
import { useForm } from "@inertiajs/vue3";
import FrontLayout from "@/Pages/Frontend/Layout/FrontLayout.vue";
defineOptions({
    layout: FrontLayout,
});

const form = useForm({
    name: "",
    email: "",
    phone: "",
    subject: "",
    message: "",
    terms: false,
});

const submit = () => {
    form.post(route("contact.store"));
};
</script>
