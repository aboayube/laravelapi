<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
<div class="container">
    <div class="navbar-header">
<router-link class="navbar-brand" :to="{name:'home'}">SPA</router-link>
    </div>
    <div class="nav navbar-nav">
        <router-link class="nav-item nav-link"  :to="{name: 'login' }" v-if="!currentUser">Login</router-link>
        <router-link class="nav-item nav-link" :to="{name:'dashboard'}" v-if="currentUser">dashboard</router-link>

    <a  v-if="currentUser" @click.prevent="logout" class="nav-item nav-link">Logout</a>    </div>
</div>
    </nav>
</template>
<script>
export default {
    methods:{
        logout(){
            this.$store.commit('logout');

            this.$router.push('/login');
        }
    },
    computed:{
        currentUser(){
            return this.$store.getters.currentUser
        }
    }
}
</script>