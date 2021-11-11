<template>
    <app-layout title="User">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Users List
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-10">
                <table class="table-auto border-collapse border border-green-800 w-full">
                    <thead>
                        <tr>
                        <th class="border border-green-600 p-3" >id</th>
                        <th class="border border-green-600 p-3" >Name</th>
                        <th class="border border-green-600 p-3" >Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="user in users" :key="user.id">
                            <td class="border border-green-600 p-3">{{user.id}}</td>
                            <td class="border border-green-600 p-3">{{user.name}}</td>
                            <td class="border border-green-600 p-3">{{user.email}}</td>
                        </tr>
                    </tbody>
                </table>

                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'


    export default defineComponent({
        components: {
            AppLayout,
        },
        props:[
            "users"
        ]
    })
</script>
