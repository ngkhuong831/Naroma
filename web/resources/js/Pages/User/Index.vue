<script setup>
import { onMounted } from 'vue';
import { initFlowbite } from 'flowbite';

import { FwbCarousel } from 'flowbite-vue';
import {
  FwbFooter,
  FwbFooterCopyright,
  FwbFooterLink,
  FwbFooterLinkGroup,
} from 'flowbite-vue'

const pictures = [
  {src: '/assets/carousel/carousel1.png', alt: 'Image 1'},
  {src: '/assets/carousel/carousel2.png', alt: 'Image 2'},
  {src: '/assets/carousel/carousel3.png', alt: 'Image 3'},
]

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})

// Seeding Data
const products = [
    {
        id: 1,
        name: 'Dalat City',
        href: '#',
        imageSrc: 'https://static.vecteezy.com/system/resources/thumbnails/027/394/671/small_2x/perfume-or-oil-bottle-with-flowers-on-color-background-copy-space-ai-generative-photo.jpeg',
        imageAlt: 'Dalat City',
        price: '$199',
        collection: 'Summer2023',
    },
    {
        id: 2,
        name: 'Dalat City',
        href: '#',
        imageSrc: 'https://img.freepik.com/premium-photo/perfume-bottle-table-perfume-widely-used-ensure-pleasant-lasting-smell-is-mixture-substances-such-as-aromatic-essential-oils-alcohol-water-mls_695181-1721.jpg',
        imageAlt: 'Dalat City',
        price: '$199',
        collection: 'Summer2023',
    },
    {
        id: 3,
        name: 'Dalat City',
        href: '#',
        imageSrc: 'https://images.pexels.com/photos/1961789/pexels-photo-1961789.jpeg',
        imageAlt: 'Dalat City',
        price: '$199',
        collection: 'Summer2023',
    },
    {
        id: 4,
        name: 'Dalat City',
        href: '#',
        imageSrc: 'https://static.vecteezy.com/system/resources/thumbnails/027/394/671/small_2x/perfume-or-oil-bottle-with-flowers-on-color-background-copy-space-ai-generative-photo.jpeg',
        imageAlt: 'Dalat City',
        price: '$199',
        collection: 'Summer2023',
    },
    {
        id: 5,
        name: 'Dalat City',
        href: '#',
        imageSrc: 'https://img.freepik.com/premium-photo/perfume-bottle-table-perfume-widely-used-ensure-pleasant-lasting-smell-is-mixture-substances-such-as-aromatic-essential-oils-alcohol-water-mls_695181-1721.jpg',
        imageAlt: 'Dalat City',
        price: '$199',
        collection: 'Summer2023',
    },
    {
        id: 6,
        name: 'Dalat City',
        href: '#',
        imageSrc: 'https://images.pexels.com/photos/1961789/pexels-photo-1961789.jpeg',
        imageAlt: 'Dalat City',
        price: '$199',
        collection: 'Summer2023',
    },
]
</script>
<style>
@font-face {
    font-family: LogoFont;
    src: url('/assets/fonts/FzQuagera.ttf');
}
#brandname {
    font-family: LogoFont;
}
h2 {
    font-family: LogoFont;
}
</style>
<template>
    <!-- HEADER -->
    <div>
        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://naroma.ltd/wp-content/uploads/2023/03/naroma-logo-1.png" class="w-8 h-8 rounded-full"
                        alt="Naroma Logo" />
                    <span id="brandname"
                        class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Naroma</span>
                </a>

                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                    <ul
                        class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pricing</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <button type="button"
                        class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                        data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-10 h-10 rounded-full" src="https://t4.ftcdn.net/jpg/05/51/34/51/360_F_551345154_YiMKHXcKEOineXBmkmMMRktVRfyPba6T.jpg" alt="user photo">
                    </button>
                    <!-- Dropdown menu -->
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="user-dropdown">
                        <div class="px-4 py-3">
                            <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                            <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                        </div>
                        <ul class="py-2" aria-labelledby="user-menu-button">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                    out</a>
                            </li>
                        </ul>
                    </div>
                    <button data-collapse-toggle="navbar-user" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-user" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </div>
    <!-- HEADER END -->
    <!-- MAIN CONTENT -->
    <!-- CAROUSEL -->
    <div class="mx-auto px-4 max-w-7xl sm:px-6 lg:max-w-7xl" >
        <fwb-carousel class="overflow-hidden" :pictures="pictures" slide :slide-interval="3000"/>
    </div>
    <!-- CAROUSEL END -->
    <div class="bg-white">
        <div class=" mx-auto max-w-2xl px-4 py-10 sm:px-6 sm:py-16 lg:max-w-7xl lg:px-8">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Best Sellers</h2>

            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                <div v-for="product in products" :key="product.id" class="group relative">
                    <div
                        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img :src="product.imageSrc" alt="Front of men&#039;s Basic Tee in black."
                            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a :href="product.href">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    {{ product.name }}
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">{{ product.collection }}</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">{{ product.price }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MAIN CONTENT END -->
    <!-- FOOTER -->
    <fwb-footer>
    <fwb-footer-copyright
      by="Naroma™"
      href="#"
      copyright-message="All Rights Reserved."
    />
    <fwb-footer-link-group>
      <fwb-footer-link href="#">
        About
      </fwb-footer-link>
      <fwb-footer-link href="#">
        Contact
      </fwb-footer-link>
    </fwb-footer-link-group>
  </fwb-footer>
    <!-- FOOTER END -->
</template>
