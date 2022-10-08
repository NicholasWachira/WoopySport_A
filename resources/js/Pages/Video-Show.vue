<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Homepage"/>
    <AuthenticatedLayout>
    	<div class="bg-white flex justify-around rounded-lg">
    		<div class="p-5 w-52">
    			<div class="flex">
    				<p>Umoja Lakers</p>
    				<p class="ml-3">110</p>
    			</div>
    			<div class="flex">
    				<p>Clique Mambas</p>
    				<p class="ml-3">56</p>
    			</div>
    		</div>
    		<div class="border border-2 border-yellow-400"/>
    		<div class="p-5 w-52">
    			<div class="flex">
    				<p>Umoja Lakers</p>
    				<p class="ml-3">110</p>
    			</div>
    			<div class="flex">
    				<p>Clique Mambas</p>
    				<p class="ml-3">56</p>
    			</div>
    		</div>
    		<div class="border border-2 border-yellow-400"/>
    		<div class="p-5 w-52">
    			<div class="flex">
    				<p>Umoja Lakers</p>
    				<p class="ml-3">110</p>
    			</div>
    			<div class="flex">
    				<p>Clique Mambas</p>
    				<p class="ml-3">56</p>
    			</div>
    		</div>
    		<div class="border border-2 border-yellow-400"/>
    		<div class="p-5 w-52">
    			<div class="flex">
    				<p>Umoja Lakers</p>
    				<p class="ml-3">110</p>
    			</div>
    			<div class="flex">
    				<p>Clique Mambas</p>
    				<p class="ml-3">56</p>
    			</div>
    		</div>
    		<div class="border border-2 border-yellow-400"/>
    		<div class="p-5 w-52">
    			<div class="flex">
    				<p>Umoja Lakers</p>
    				<p class="ml-3">110</p>
    			</div>
    			<div class="flex">
    				<p>Clique Mambas</p>
    				<p class="ml-3">56</p>
    			</div>
    		</div>
    		<div class="border border-2 border-yellow-400"/>
    		<div class="p-5 w-52">
    			<div class="flex">
    				<p>Umoja Lakers</p>
    				<p class="ml-3">110</p>
    			</div>
    			<div class="flex">
    				<p>Clique Mambas</p>
    				<p class="ml-3">56</p>
    			</div>
    		</div>
    	</div>
    	<div class="flex justify-around p-5">
    		<div>
    			<div class="bg-white p-5 max-w-4xl rounded-lg">
    				<p class="text-center font-bold mb-3">Woopy Sport 1v1 King Of The Court Episode 2 Komarock Edition</p>
	    			<div class="bg-white shadow-lg p-3 rounded-lg">
	    				<video class="rounded-lg" width="1920" height="1080" controls autoplay muted>
                            <source src="/videos/rugby.mp4" type="video/mp4">               
                        </video>
	    				<p class="mt-4 font-bold text-gray-900 text-xl">Woopy Sport 1v1 King Of The Court Episode 2 Komarock Edition</p>
                        <p class="mb-3 mt-3">Woopy Sport 1v1 King Of The Court Episode 2 Komarock Edition
                            Hamza Hassan, Liban Hussein, Oscar Otieno and Spencer Kweyu went at it in the newly built Komarock Basketball Court in partnership built by JJF Foundation in partnership with  KFC and DIWOPA.</p>
	    				<p class="mt-4 text-xs text-gray-700">1 min ago</p>
	    			</div>
                    <p class="mt-10 font-semibold">More Videos</p>
                    <div class="flex p-3">
                        <div>
                            <img src="https://via.placeholder.com/1920x1080" class="w-full rounded-lg">
                            <p class="mt-2 mb-2 bg-yellow-400 w-20 rounded text-sm text-center font-semibold">PREMIUM</p>
                            <div class="mb-3">
                                <Link class="font-bold text-gray-700 hover:text-blue-900 hover:underline" :href="route('news')">Woopy Sport 1v1 King Of The Court Episode 2 Langata Edition</Link>             
                            </div>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            </p>
                        </div>
                        <div class="ml-5">
                            <img src="https://via.placeholder.com/1920x1080" class="w-full rounded-lg">
                            <p class="mt-2 mb-2 bg-yellow-400 w-20 rounded text-sm text-center font-semibold">PREMIUM</p>
                            <div class="mb-3">
                                <Link class="font-bold text-gray-700 hover:text-blue-900 hover:underline" :href="route('news')">Moischers: What it takes to be a champion</Link>               
                            </div>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            </p>
                        </div>
                        <div class="ml-5">
                            <img src="https://via.placeholder.com/1920x1080" class="w-full rounded-lg">
                            <p class="mt-2 mb-2 bg-yellow-400 w-20 rounded text-sm text-center font-semibold">PREMIUM</p>
                            <div class="mb-3">
                                <Link class="font-bold text-gray-700 hover:text-blue-900 hover:underline" :href="route('news')">Multimedia Wilders WE BELIEVE</Link>               
                            </div>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            </p>
                        </div>
                    </div>
    			</div>
    		</div>
    		<div>
    			<div class="w-80 bg-white p-5 rounded-lg">
    				<div class="mb-2">
	    				<p class="font-bold">News Stories</p>
	    			</div>
	    			<div>
	    				<img src="https://via.placeholder.com/1920x1080" class="w-full rounded-lg">
	    				<div class="mt-3 mb-5">
                            <Link class="font-bold text-gray-700 hover:text-blue-900 hover:underline" :href="route('news')">Lorem ipsum dolor sit amet, consectetur adipisicing elit</Link>               
                        </div>
                        <p class="text-sm mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
	    				<hr>
	    			</div>
                    <div class="mt-3">
                        <img src="https://via.placeholder.com/1920x1080" class="w-full rounded-lg">
                        <div class="mt-3 mb-5">
                            <Link class="font-bold text-gray-700 hover:text-blue-900 hover:underline" :href="route('news')">Lorem ipsum dolor sit amet, consectetur adipisicing elit</Link>               
                        </div>
                        <p class="text-sm mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                        <hr>
                    </div>
                    <div class="mt-3">
                        <img src="https://via.placeholder.com/1920x1080" class="w-full rounded-lg">
                        <div class="mt-3 mb-5">
                            <Link class="font-bold text-gray-700 hover:text-blue-900 hover:underline" :href="route('news')">Lorem ipsum dolor sit amet, consectetur adipisicing elit</Link>               
                        </div>
                        <p class="text-sm mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                        <hr>
                    </div>
    			</div>
    		</div>
    	</div>
    </AuthenticatedLayout>
</template>
