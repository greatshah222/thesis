<template>
    <v-container>
        <v-form @submit.prevent="create">
            <v-text-field
                    label="Title"
                    v-model="form.title"
                    type="text"
                    required
            ></v-text-field>
            <v-select
                    :items="fcategories"
                    item-text="name"
                    item-value="id"
                    v-model="form.fcategory_id"
                    label="Category"
            ></v-select>

            <markdown-editor v-model="form.body"></markdown-editor>
            <v-btn
                    color="green"
                    type="submit"
            >Create</v-btn>
        </v-form>
    </v-container>
</template>
<script>
    export default {
        data(){
            return {
                form :{
                    title:null,
                    fcategory_id:null,
                    body:null
                },
                fcategories:{},
                errors:{}
            }
        },
        created(){
            axios.get('/thesis_new/public/api/fcategory')
                .then(res => this.fcategories = res.data.data)
        },
        methods:{
            create(){
                axios.post('/thesis_new/public/api/question',this.form)
                    .then(res => this.$router.push(res.data.path))
            .catch(error => this.errors = error.response.data.error)
            }
        }
    }
</script>
<style>

</style>