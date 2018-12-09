<template>
    <v-card>
        <v-toolbar color="cyan" dark dense class="mt-4">
            <v-toolbar-title>Categories</v-toolbar-title>
        </v-toolbar>
        <v-list>
            <v-list-tile v-for="fcategory in fcategories" :key="fcategory.id">
                <v-list-tile-content>
                    <v-list-tile-title>{{fcategory.name}}</v-list-tile-title>
                </v-list-tile-content>
            </v-list-tile>
        </v-list>
    </v-card>
</template>
<script>
    export default {
        data(){
            return {
                fcategories:{}
            }
        },
        created(){
            axios.get('/thesis_new/public/api/fcategory')
                .then(res => this.fcategories = res.data.data)
        }
    }
</script>
<style>
</style>