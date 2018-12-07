<template>
    <v-container>
        <v-form @submit.prevent="flogin">
            <v-text-field
                    label="E-mail"
                    v-model="form.email"
                    type="email"
                    required
            ></v-text-field>
            <v-text-field
                    label="Password"
                    v-model="form.password"
                    type="password"
                    required
            ></v-text-field>
            <v-btn
                    color="green"
                    type="submit"
            >Login</v-btn>
            <router-link to="/thesis_new/public/try/fsignup">
                <v-btn color="blue">Sign Up</v-btn>
            </router-link>
        </v-form>
    </v-container>
</template>
<script>
    export default {
        data(){
            return {
                form :{
                    email:null,
                    password:null
                }
            }
        },
        created(){
            if(User.floggedIn()){
                this.$router.push({name:'forum'})
            }
        },
        methods:{
            flogin(){
                User.flogin(this.form)

            }
        }
    }
</script>
<style>
</style>