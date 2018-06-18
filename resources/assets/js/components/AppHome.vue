<template>
<div>
    <toolbar></toolbar>
    <router-view></router-view>
    <app-footer></app-footer>
</div>
</template>

<script>
import Toolbar from './Toolbar'
import AppFooter from './AppFooter'
import Login from './login/Login'
import Signup from './login/Signup'

export default {
    components: {Toolbar,AppFooter,Login,Signup}
}
</script>

<style>

</style>
