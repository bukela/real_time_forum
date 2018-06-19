<template>
    <v-card>
        <v-card-title primary-title>
          <div>
            <h3 class="title mb-0">
                <router-link :to="data.path">
                {{ data.title }}
                </router-link>
            </h3>
            <div class="grey--text">Asked by {{ data.user }} {{ data.created_at }}</div>
          </div>
        </v-card-title>
        <v-card-text>
            <p class="body-1">{{ data.body }}</p>
        </v-card-text>
    </v-card>
</template>

<script>
export default {
    props: ['data']
}
</script>

<style>

</style>
