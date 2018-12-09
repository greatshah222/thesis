<template>
<v-toolbar>
    <!-- <v-toolbar-side-icon></v-toolbar-side-icon> -->
    <v-toolbar-title>Village Dev</v-toolbar-title>
    <v-spacer></v-spacer>
        <div class="hidden-sm-and-down">
            <router-link
                    v-for="item in items"
                    :key="item.title"
                    :to="item.to"
                    v-if="item.show">
                <v-btn flat>{{item.title}}</v-btn>
            </router-link>
        </div>
</v-toolbar>
</template>

<script>
    export default {
        data(){
            return {
                items: [
                    {title : 'Forum', to:'/thesis_new/public/try/forum',show:true},
                    {title : 'Ask Question', to:'/thesis_new/public/try/ask',show: User.loggedIn()},
                    {title : 'Category', to:'/thesis_new/public/try/fcategory',show: User.admin()},
                    {title : 'Login', to:'/thesis_new/public/try/flogin',show: !User.loggedIn()},
                    {title : 'Logout', to:'/thesis_new/public/try/flogout',show: User.loggedIn()},
                ]
            }
        },
        created(){
            EventBus.$on('logout', () => {
                User.logout()
        })
        }
    }
</script>
<style>
</style>