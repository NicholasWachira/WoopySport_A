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
    			<div class="w-60 bg-white rounded-lg p-5">
    				<p class="mb-4 font-bold">Sports and Categories</p>
    				<ul>
    					<li class="mb-2">Nairobi Basketball Association</li>
    					<li class="mb-2">KRU Nationwide</li>
    					<li class="mb-2">KNBL Premier League</li>
    				</ul>
    			</div>
    			<div class="w-60 bg-white rounded-lg p-5 mt-5">
    				<p class="mb-4 font-bold">Sports and Categories</p>
    				<ul>
    					<li class="mb-2">Nairobi Basketball Association</li>
    					<li class="mb-2">KRU Nationwide</li>
    					<li class="mb-2">KNBL Premier League</li>
    				</ul>
    			</div>
    		</div>
    		<div>
    			<div class="bg-white p-5 max-w-2xl rounded-lg">
    				<p class="text-center font-bold mb-3">Recent Updates</p>
	    			<div class="bg-white shadow-lg p-3 rounded-lg">
	    				<img src="https://via.placeholder.com/1920x1080" class="w-full rounded-lg">
	    				<Link :href="route('news')">
                            <p class="mt-2 font-bold text-gray-900 hover:text-blue-900 hover:underline text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>               
                        </Link>
	    				<p class="mt-1 text-xs text-gray-700">1 min ago</p>
	    			</div>
	    			<div class="bg-white shadow-lg p-3 rounded-lg mt-5">
	    				<img src="https://via.placeholder.com/1920x1080" class="w-full rounded-lg">
	    				<Link :href="route('news')">
                            <p class="mt-2 font-bold text-gray-900 hover:text-blue-900 hover:underline text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>               
                        </Link>
	    				<p class="mt-1 text-xs text-gray-700">56min ago</p>
	    			</div>
	    			<div class="bg-white shadow-lg p-3 rounded-lg mt-5">
	    				<img src="https://via.placeholder.com/1920x1080" class="w-full rounded-lg">
	    				<Link :href="route('news')">
                            <p class="mt-2 font-bold text-gray-900 hover:text-blue-900 hover:underline text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>               
                        </Link>
	    				<p class="mt-1 text-xs text-gray-700">1hr ago</p>
	    			</div>
    			</div>
    		</div>
    		<div>
    			<div class="w-80 bg-white p-5 rounded-lg">
    				<div class="mb-2">
	    				<p class="font-bold">Recent Uploads</p>
	    			</div>
	    			<div>
	    				<img src="https://via.placeholder.com/1920x1080" class="w-full rounded-lg">
	    				<div class="mt-3 mb-5">
                            <Link class="font-bold text-gray-700 hover:text-blue-900 hover:underline" :href="route('video')">Woopy Sport 1v1 King Of The Court Episode 2 Komarock Edition</Link>               
                        </div>
	    				<hr>
	    			</div>
	    			<div class="mt-3">
	    				<img src="https://via.placeholder.com/1920x1080" class="w-full rounded-lg">
	    				<div class="mt-3 mb-5">
                            <Link class="font-bold text-gray-700 hover:text-blue-900 hover:underline" :href="route('video')">Moischers: What it takes to be a champion</Link>               
                        </div>
	    				<hr>
	    			</div>
	    			<div class="mt-3">
	    				<img src="https://via.placeholder.com/1920x1080" class="w-full rounded-lg">
	    				<div class="mt-3 mb-5">
                            <Link class="font-bold text-gray-700 hover:text-blue-900 hover:underline" :href="route('video')">Multimedia Wilders WE BELIEVE</Link>               
                        </div>
	    				<hr>
	    			</div>
    			</div>
    		</div>
    	</div>
    	<div class="p-5">
    		<p class="text-center text-xl font-bold text-gray-700 mb-5">Our Partners</p>
    		<div class="text-center flex justify-around items-center">
    			<p class="text-xl">
	    			<img src="/images/shujero1.png" class="w-32">
	    		</p>
	    		<p class="text-xl">
	    			<img src="/images/zuizi.png" class="w-24">
	    		</p>
	    		<p class="text-xl text-2xl font-bold">BuildSports Africa</p>
	    		<p class="text-xl">
	    			<img src="/images/nationwide1.png" class="w-64">
	    		</p>
    		</div>
    	</div>

    </AuthenticatedLayout>
</template>
