<template>
    <v-container>
        <v-form @submit.prevent="submit">
            <v-text-field
                    label="Category Name"
                    v-model="form.name"
                    required
            ></v-text-field>
            <v-btn type="submit" color="pink" v-if="editSlug">Update</v-btn>
            <v-btn round type="submit" color="teal" v-else>Create</v-btn>
        </v-form>
        <v-card>
            <v-toolbar color="indigo" dark dense>
                <v-toolbar-title>Categories</v-toolbar-title>
            </v-toolbar>
            <v-list>
                <div v-for="(fcategory,index) in fcategories" :key="fcategory.id">
                    <v-list-tile>
                        <v-list-tile-action>
                            <v-btn icon small @click="edit(index)">
                                <v-icon color="orange">edit</v-icon>
                            </v-btn>
                        </v-list-tile-action>
                        <v-list-tile-content>
                            <v-list-tile-title>
                                {{fcategory.name}}
                            </v-list-tile-title>
                        </v-list-tile-content>
                        <v-list-tile-action>
                            <v-btn icon small @click="destroy(fcategory.slug,index)">
                                <v-icon color="red">delete</v-icon>
                            </v-btn>
                        </v-list-tile-action>
                    </v-list-tile>
                    <v-divider></v-divider>
                </div>
            </v-list>
        </v-card>
    </v-container>
</template>
<script>
    export default {
        data(){
            return {
                form :{
                    name:null
                },
                fcategories:{},
                editSlug:null
            }
        },
        created(){
            if(!User.admin()){
                this.$router.push('/thesis_new/public/try/forum')
            }
            axios.get('/thesis_new/public/api/fcategory')
                .then(res => this.fcategories = res.data.data)
        },
        methods:{
            submit(){
                this.editSlug ? this.update() : this.create()
            },
            update(){
                axios.patch(`/thesis_new/public/api/fcategory/${this.editSlug}`,this.form)
                    .then(res => {
                    this.fcategories.unshift(res.data)
                this.form.name = null
            })
            },
            create(){
                axios.post('/thesis_new/public/api/fcategory',this.form)
                    .then(res => {
                    this.fcategories.unshift(res.data)
                this.form.name = null
            })
            },
            destroy(slug,index){
                axios.delete(`/thesis_new/public/api/fcategory/${slug}`)
                    .then(res => this.fcategories.splice(index,1))
            },
            edit(index){
                this.form.name = this.fcategories[index].name
                this.editSlug = this.fcategories[index].slug
                this.fcategories.splice(index,1)
            }
        }
    }
</script>
<style>
</style>