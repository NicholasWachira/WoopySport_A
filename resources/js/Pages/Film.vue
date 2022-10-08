<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Homepage"/>
    <AuthenticatedLayout>
    	<div class="pl-10 pr-10 pt-10 mb-3">
    		<p class="mb-3 font-bold">Recently Added</p>

    		<div class="flex">
    			<div>
	    			<img src="https://via.placeholder.com/1920x1080" class="w-80 rounded-lg">
	    			<p class="mt-2 font-bold text-gray-700">King Of The Court</p>
	    		</div>
	    		<div class="ml-5">
	    			<img src="https://via.placeholder.com/1920x1080" class="w-80 rounded-lg">
	    			<p class="mt-2 font-bold text-gray-700">King Of The Court</p>
	    		</div>
	    		<div class="ml-5">
	    			<img src="https://via.placeholder.com/1920x1080" class="w-80 rounded-lg">
	    			<p class="mt-2 font-bold text-gray-700">King Of The Court</p>
	    		</div>
	    		<div class="ml-5">
	    			<img src="https://via.placeholder.com/1920x1080" class="w-80 rounded-lg">
	    			<p class="mt-2 font-bold text-gray-700">King Of The Court</p>
	    		</div>
    		</div>
    	</div>

    	<div class="pt-5 pl-10 pr-10 mb-10">
    		<p class="mb-3 font-bold">Top Picks for you</p>

    		<div class="flex">
    			<div>
	    			<img src="https://via.placeholder.com/1920x1080" class="w-80 rounded-lg">
	    			<p class="mt-2 font-bold text-gray-700">We Believe</p>
	    		</div>
	    		<div class="ml-5">
	    			<img src="https://via.placeholder.com/1920x1080" class="w-80 rounded-lg">
	    			<p class="mt-2 font-bold text-gray-700">Jkuat to the World</p>
	    		</div>
	    		<div class="ml-5">
	    			<img src="https://via.placeholder.com/1920x1080" class="w-80 rounded-lg">
	    			<p class="mt-2 font-bold text-gray-700">King Of The Court</p>
	    		</div>
	    		<div class="ml-5">
	    			<img src="https://via.placeholder.com/1920x1080" class="w-80 rounded-lg">
	    			<p class="mt-2 font-bold text-gray-700">King Of The Court</p>
	    		</div>
    		</div>
    	</div>
    </AuthenticatedLayout>
</template>
