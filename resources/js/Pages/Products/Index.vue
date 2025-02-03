<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    products: {
        type: Array,
        required: true,
    },
    categories: {
        type: Array,
        required: true,
    },
    selectedCategory: {
        type: Object,
        required: false,
    },
});
</script>

<template>
    <div
        class="flex min-h-screen bg-gradient-to-r from-blue-50 to-gray-100 font-inter"
    >
        <!-- Sidebar -->
        <aside class="w-1/5 bg-white shadow-lg px-6 py-8 rounded-r-lg">
            <h2 class="text-center text-3xl font-extrabold text-gray-800 mb-6">
                Categories
            </h2>
            <nav class="space-y-3">
                <ul>
                    <li v-for="category in categories" :key="category.id">
                        <Link
                            :href="'/products/' + category.id"
                            class="block px-5 py-3 rounded-lg font-medium text-lg transition duration-200 ease-in-out"
                            :class="{
                                'bg-blue-600 text-white shadow-md':
                                    selectedCategory &&
                                    selectedCategory.id === category.id,
                                'hover:bg-gray-200':
                                    !selectedCategory ||
                                    selectedCategory.id !== category.id,
                            }"
                        >
                            {{ category.name }}
                        </Link>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="w-4/5 p-8">
            <h1
                class="text-5xl font-extrabold text-center text-blue-700 mb-8 uppercase"
            >
                {{ selectedCategory ? selectedCategory.name : "All Products" }}
            </h1>

            <div
                v-if="products.length > 0"
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8"
            >
                <div
                    v-for="product in products"
                    :key="product.id"
                    class="bg-white shadow-lg p-6 rounded-lg hover:shadow-xl transition transform hover:scale-105"
                >
                    <h2 class="text-2xl font-semibold text-gray-800">
                        {{ product.name }}
                    </h2>
                    <p class="text-gray-600 text-lg mt-2">
                        Price: ${{ product.whole_sale_price }}
                    </p>
                </div>
            </div>

            <p v-else class="text-center text-gray-600 text-xl mt-6">
                No products found.
            </p>
        </main>
    </div>
</template>

<style>
@import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap");
</style>
