<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    categories: {
        type: Array,
        required: true,
    },
});
</script>

<template>
    <div
        class="min-h-screen flex flex-col items-center bg-gradient-to-r from-blue-50 to-gray-100 font-inter py-10"
    >
        <h1
            class="text-5xl font-extrabold text-center text-blue-700 mb-8 uppercase"
        >
            Categories
        </h1>

        <div
            v-if="categories.length > 0"
            class="bg-white shadow-lg rounded-lg p-6 w-full max-w-4xl"
        >
            <table
                class="w-full border border-gray-300 rounded-lg overflow-hidden"
            >
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">Name</th>
                        <th class="py-3 px-4 text-left">Description</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-300">
                    <tr
                        v-for="category in categories"
                        :key="category.id"
                        class="hover:bg-gray-100 transition"
                    >
                        <td class="py-3 px-4">{{ category.name }}</td>
                        <td class="py-3 px-4">{{ category.description }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p v-else class="text-center text-gray-600 text-xl mt-6">
            No categories found.
        </p>

        <div class="flex justify-center mt-6">
            <Link
                href="/products"
                class="px-4 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-lg transition"
            >
                Go to Products
            </Link>
        </div>
    </div>
</template>

<style>
@import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap");
</style>
