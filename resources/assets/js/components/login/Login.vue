<template>
<v-container>
      <v-form @submit.prevent="login">
        <v-text-field
          v-model="form.email"
          type="email"
          label="E-mail"
          required
        ></v-text-field>
         <v-text-field
          v-model="form.password"
          type="password"
          label="Password"
          required
        ></v-text-field>
        <v-spacer></v-spacer>
        <v-btn
        color="green"
        type="submit"
        >Login
        </v-btn>

        <router-link to="/signup">
            <v-btn
            flat
            color="orange"
            >Sign up
            </v-btn>
        </router-link>
      </v-form>
</v-container>
</template>

<script>
export default {
    data() {
        return {
            form :{
                email: null,
                password: null
            }
        }
    },
    created() {
        if(User.loggedIn()) {
            this.$router.push({ name:'forum' }) //ako je user logovan ne moze da ide na login i signup preko url nego ga redirect na forum
        }
    },
    methods: {
        login() {
            User.login(this.form)
            // axios.post('/api/auth/login', this.form)
            // .then(res => console.log(res.data))
            // .catch(error => console.log(error.response.data))
        }
    }
}
</script>

<style>

</style>
